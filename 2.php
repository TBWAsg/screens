<?php
require_once('dbconfig.php'); 

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	 
	$rss9 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 8,1");
	$rss10 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 9,1");
	$rss11 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 10,1");
	$rss12 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 11,1");
	$rss13 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 12,1");
	$rss14 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 13,1");
	$rss15 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 14,1");
	$rss16 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 15,1");

	$rss9->execute();
	$rss10->execute();
	$rss11->execute();
	$rss12->execute();
	$rss13->execute();
	$rss14->execute();
	$rss15->execute();
	$rss16->execute();

	$row9 = $rss9->fetch();
	$title_box9 = html_entity_decode($row9['title']);
	$source_box9 = html_entity_decode($row9['source']);
	$content_box9 = html_entity_decode($row9['content']);

	$row10 = $rss10->fetch();
	$title_box10 = html_entity_decode($row10['title']);
	$source_box10 = html_entity_decode($row10['source']);	
	$content_box10 = html_entity_decode($row10['content']);

	$row11 = $rss11->fetch();
	$title_box11 = html_entity_decode($row11['title']);
	$source_box11 = html_entity_decode($row11['source']);	
	$content_box11 = html_entity_decode($row11['content']);

	$row12 = $rss12->fetch();
	$title_box12 = html_entity_decode($row12['title']);
	$source_box12 = html_entity_decode($row12['source']);	
	$content_box12 = html_entity_decode($row12['content']);

	$row13 = $rss13->fetch();
	$title_box13 = html_entity_decode($row13['title']);
	$source_box13 = html_entity_decode($row13['source']);	
	$content_box13 = html_entity_decode($row13['content']);

	$row14 = $rss14->fetch();
	$title_box14 = html_entity_decode($row14['title']);
	$source_box14 = html_entity_decode($row14['source']);	
	$content_box14 = html_entity_decode($row14['content']);

	$row15 = $rss15->fetch();
	$title_box15 = html_entity_decode($row15['title']);
	$source_box15 = html_entity_decode($row15['source']);	
	$content_box15 = html_entity_decode($row15['content']);

	$row16 = $rss16->fetch();
	$title_box16 = html_entity_decode($row16['title']);
	$source_box16 = html_entity_decode($row16['source']);	
	$content_box16 = html_entity_decode($row16['content']);

  $all = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 8,8");
  $all->execute();
  $row_count = $all->rowCount(); // count number of rows

} catch (PDOException $pe) {
	die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Screen 2</title>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='base.css' rel='stylesheet'> <!-- base CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <!-- callout dependency -->
</head>


<body>

<div id="emptydiv">
</div>

<div id='div1'>
    <div class="black_overlay">
    </div>
    <div class="display overlay1">
        <div class="overlay1outer">
            <div class="overlay1inner">
                <br>
                <div class="overlayTitle">
                    <?php echo $title_box9; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box9; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box9; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="emptydiv">
</div>

<div id='div2'>
    <div class="black_overlay">
    </div>
    <div class="display overlay2">
        <div class="overlay2outer">
            <div class="overlay2inner">
                <br>
                <div class="overlayTitle">
                    <?php echo $title_box10; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box10; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box10; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="emptydiv">
</div>

<div id='div3'>
    <div class="black_overlay">
    </div>
    <div class="display overlay1">
        <div class="overlay1outer">
            <div class="overlay1inner">
                <br>
                <div class="overlayTitle">
                    <?php echo $title_box11; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box11; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box11; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="emptydiv">
</div>

<div id='div4'>
    <div class="black_overlay">
    </div>
    <div class="display overlay2">
        <div class="overlay2outer">
            <div class="overlay2inner">
                <br>
                <div class="overlayTitle">
                    <?php echo $title_box12; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box12; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box12; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="emptydiv">
</div>

<div id='div5'>
    <div class="black_overlay">
    </div>
    <div class="display overlay1">
        <div class="overlay1outer">
            <div class="overlay1inner">
                <br>
                <div class="overlayTitle">
                    <?php echo $title_box13; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box13; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box13; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="emptydiv">
</div>

<div id='div6'>
    <div class="black_overlay">
    </div>
    <div class="display overlay2">
        <div class="overlay2outer">
            <div class="overlay2inner">
                <br>
                <div class="overlayTitle">
                    <?php echo $title_box14; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box14; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box14; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="emptydiv">
</div>

<div id='div7'>
    <div class="black_overlay">
    </div>
    <div class="display overlay1">
        <div class="overlay1outer">
            <div class="overlay1inner">
                <br>
                <div class="overlayTitle">
                    <?php echo $title_box15; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box15; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box15; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="emptydiv">
</div>

<div id='div8'>
    <div class="black_overlay">
    </div>
    <div class="display overlay2">
        <div class="overlay2outer">
            <div class="overlay2inner">
                <br>
                <div class="overlayTitle">
                    <?php echo $title_box16; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box16; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box16; ?>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">

    <div style="height:97%; width:25%; float:left; padding-bottom: 10px;">
        <div class="box9_outer">
            <div class="box9_inner">
                <br/>
                <span style="font-size: 25px; text-transform: uppercase; ">
      <?php echo $title_box9; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box9; ?>
            </div>
        </div>
    </div>

    <div style="height: 97%; width:25%; float:right;">
        <div class="box10_outer">
            <div class="box10_inner">
                <br/>
                <span style="font-size: 25px; text-transform: uppercase; ">
      <?php echo $title_box11; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box11; ?>
            </div>
        </div>
    </div>

    <div style="height:100%; width:48.5%; float:right; padding-bottom: 10px;">
        <div class="box11_outer">
            <div class="box11_inner">
                <br/>
                <span style="font-size: 35px; text-transform: uppercase; ">
      <?php echo $title_box10; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box10; ?>
            </div>
        </div>
    </div>


</div> <!-- end of container 1 -->

<div class="container">

    <div style="height:100%; width:25%;float:left; background-color: yellow;">
        <div class="box12_outer">
            <div class="box12_inner">
                <br />
                <span style="text-transform: uppercase; ">
      <?php echo $title_box12; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box12; ?>
            </div>
        </div>
        <div class="box13_outer">
            <div class="box13_inner">
                <br />
                <span style="text-transform: uppercase; ">
      <?php echo $title_box13; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box13; ?>
            </div>
        </div>
    </div>


    <div style="height:100%; width:25%;float:left; background-color: yellow;">
        <div class="box14_outer">
            <div class="box14_inner">
                <br />
                <span style="text-transform: uppercase; ">
      <?php echo $title_box14; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box14; ?>
            </div>
        </div>
        <div class="box15_outer">
            <div class="box15_inner">
                <br />
                <span style="text-transform: uppercase; ">
      <?php echo $title_box15; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box15; ?>
            </div>
        </div>
    </div>

    <div class="box16_outer">
        <div class="box16_inner">
            <br />
            <span style="font-size: 35px; text-transform: uppercase; ">
    <?php echo $title_box16; ?>
    </span>
            <br/>
            <br/>
            <?php echo $source_box16; ?>
        </div>
    </div>

</div> <!-- end container 2-->

<script type="text/javascript">
$(function() {
    var timebetweendivs = 5; // modify: 5 seconds between divs
    var counter = 0;
    <?php
    if($row_count == 1):
      echo "var numberofdivs = 2;";
      echo "var divs = $('#emptydiv, #div1');";

    elseif($row_count == 2):
      echo "var numberofdivs = 4;";
      echo "var divs = $('#emptydiv, #div1, #emptydiv, #div2');";

    elseif($row_count == 3):
      echo "var numberofdivs = 6;";
      echo "var divs = $('#emptydiv, #div1, #emptydiv, #div2, #emptydiv, #div3');";

    elseif($row_count == 4):
      echo "var numberofdivs = 8;";
      echo "var divs = $('#emptydiv, #div1, #emptydiv, #div2, #emptydiv, #div3, #emptydiv, #div4');";

    elseif($row_count == 5):
      echo "var numberofdivs = 10;";
      echo "var divs = $('#emptydiv, #div1, #emptydiv, #div2, #emptydiv, #div3, #emptydiv, #div4, #emptydiv, #div5');";

    elseif($row_count == 6):
      echo "var numberofdivs = 12;";
      echo "var divs = $('#emptydiv, #div1, #emptydiv, #div2, #emptydiv, #div3, #emptydiv, #div4, #emptydiv, #div5, #emptydiv, #div6');";

    elseif($row_count == 7):
      echo "var numberofdivs = 14;";
      echo "var divs = $('#emptydiv, #div1, #emptydiv, #div2, #emptydiv, #div3, #emptydiv, #div4, #emptydiv, #div5, #emptydiv, #div6, #emptydiv, #div7');";

    else:
      echo "var numberofdivs = 16;";
      echo "var divs = $('#emptydiv, #div1, #emptydiv, #div2, #emptydiv, #div3, #emptydiv, #div4, #emptydiv, #div5, #emptydiv, #div6, #emptydiv, #div7, #emptydiv, #div8');";

    endif;
    ?>
    function showDiv() {
        divs.hide() // hide all divs
            .filter(function(index) {
                return index == counter % numberofdivs;
            })
            .show('fast'); // and show it

        counter++;
    }; // function to loop through divs and show correct div

    showDiv(); // show first div    

    setInterval(function() {
        showDiv(); // show next div
    }, timebetweendivs * 1000);

});
</script>
</body>
</html>