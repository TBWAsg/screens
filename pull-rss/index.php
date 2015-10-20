<?php
// Get server login credentials
require_once $_SERVER['DOCUMENT_ROOT'] . '/screens/dbconfig.php'; 

// Server settings
$con = mysql_connect($host, $username, $password);
// Select the database you want to use.
mysql_select_db($dbname, $con);

// Then check if the connection failed. If it did, die with the error message.
if (!$con)
{ die('Could not connect: ' . mysql_error()); }


// load SimplePie script
require_once('autoloader.php'); 

// Create a new instance of SimplePie.
$feed = new SimplePie();

// Setting mutiple RSS feeds to parse:
$feed->set_feed_url(array(
 'http://feeds.feedburner.com/MumbrellaAsia',
 'http://feeds.feedburner.com/campaignasia',
 'http://www.marketing-interactive.com/feed',
 'http://rightintel.com/posts/rss/a3835188ea9b3034b43448c220973106d71b2aa5/intel.rss'
));

// If want single URL:
//$feed->set_feed_url('https://rightintel.com/posts/rss/a3835188ea9b3034b43448c220973106d71b2aa5/intel.rss');

// Naming sources here
// NOTE that this is for matching with permalink url. Every feed has a unique feed URL, so double check first
$mumbrella = 'r/MumbrellaAsia/';
$campaignasia = 'campaignasia.feedsportal.com';
$marketingInteractive = 'marketing-interactive.com';
$rightIntel = '<img src="https://rightintel.com/';


// Set a folder where the cache can reside.
// $feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/CodeIgniter/application/cache');
$feed->set_cache_location('/home/weiwenng/public_html/tbwa/cache');

// Ensure the output from the RSS feed matches the MySQL encoding, otherwise you end up with characters like this: â€
$feed->set_output_encoding('UTF-8');

// Initialize SimplePie.
$feed->init();

// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();

// Loop through the parsed items and load them to the database.
foreach ($feed->get_items() as $item)
{
  // fresh out the source for matching
  $source = '';

  // Items pulled from RSS feed:
  $title = $item->get_title();
  $content = $item->get_description();
  $date = $item->get_date('Y-m-j g:i:s');  //format date here
  $permalink = $item->get_permalink();

  // Adding source
  // check if permalink contains mumbrella
  if (strpos($permalink, $mumbrella) !== false) {
    $source = "Mumbrella Asia";
  }
  // check if permalink contains Campaign Asia
  elseif (strpos($permalink, $campaignasia) !== false) {
    $source = "Campaign Asia";
  }
  // check if permalink contains Marketing Interactive
  elseif (strpos($permalink, $marketingInteractive) !== false) {
    $source = "Marketing Interactive";
  }

  // check if permalink contains Marketing Interactive
  elseif (strpos($content, $rightIntel) !== false) {
    $source = "Right Intel";
  }

  // Check for duplicated items by hashing the content and comparing it to the hashes in the database.
  $content_hash = md5($content);
  $result = mysql_query("SELECT * FROM rss_posts WHERE content_hash = '" . $content_hash . "'");
  $num_rows = mysql_num_rows($result);
 
  if ($num_rows > 0) { }
  // If this item's hash doesn't match any in the database
  else
  {
  // This part will check if the date has been set. Sometimes feeds don't post the date so I found this to be necessary. If it has a date, then INSERT everything, if not, set a default date in MySQL and don't INSERT the date.
  if (isset($date))
  {
   mysql_query("INSERT INTO rss_posts (date, content, content_hash, url, title, source) VALUES ('" . $date . "', '" . $content . "', '" . $content_hash . "', '" . $permalink . "', '" . $title . "', '" . $source . "')");
  }
  else
  {
   mysql_query("INSERT INTO rss_posts (content, content_hash, url, title, source) VALUES ('" . $content . "', '" . $content_hash . "', '" . $permalink . "', '" . $title . "', '" . $source . "')");
  }
 }
}

echo "SCRIPT COMPLETE.";

// Closing the connection.
mysql_close($con);

?>