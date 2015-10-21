<?php
require_once('dbconfig.php'); 

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$all = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY"); // pull posts from past 24 hours
	$all->execute();
	$row_count = $all->rowCount(); // count number of rows
//	echo $row_count;

} catch (PDOException $pe) {
	die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>


<script>

<?php
// if 32 rows or more
if ($row_count > "32") {
	echo "var frames = Array(";
	echo "'1.php', 80,";
	echo "'2.php', 80,";
	echo "'3.php', 80,";
	echo "'4.php', 80,";
	echo "'5.php', 80);";
	$refresh = 400;
}

// if 24 rows or more
elseif ($row_count > "24") {
	echo "var frames = Array(";
	echo "'1.php', 80,";
	echo "'2.php', 80,";
	echo "'3.php', 80,";
	echo "'4.php', 80);";
	$refresh = 320;
}

// if 16 rows or more
elseif ($row_count > "16") {
	echo "var frames = Array(";
	echo "'1.php', 80,";
	echo "'2.php', 80,";
	echo "'3.php', 80);";
	$refresh = 240;
}

// if 8 rows or more
elseif ($row_count > "8") {
	echo "var frames = Array(";
	echo "'1.php', 80,";
	echo "'2.php', 80);";
	$refresh = 160;
}

// if 8 rows or less
else {
	echo "var frames = Array(";
	echo "'1.php', 80);";
	$refresh = 80;
}

?>


//var frames = Array(
//	'1.php', 2,
//    '2.php', 2,
//    '3.php', 2,
//    '4.php', 2,
//    '5.php', 2);

var i = 0, len = frames.length;
function ChangeSrc()
{
  if (i >= len) { i = 0; } // start over
  document.getElementById('frame').src = frames[i++];
  setTimeout('ChangeSrc()', (frames[i++]*1000));
}
window.onload = ChangeSrc;
</script>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Screen 1</title>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='base.css' rel='stylesheet'> <!-- base CSS -->
<meta http-equiv="refresh" content="<?php echo $refresh; ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <!-- callout dependency -->
<style type="text/css">
body {
	margin: 0;
}
</style>

</head>

<body>
<iframe src="" name="frame" id="frame" width="100%" height="100%"></iframe>
</body>
</html>