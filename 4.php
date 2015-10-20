<?php
require_once('dbconfig.php'); 

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	 
	$rss25 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 24,1");
	$rss26 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 25,1");
	$rss27 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 26,1");
	$rss28 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 27,1");
	$rss29 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 28,1");
	$rss30 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 29,1");
	$rss31 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 30,1");
	$rss32 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 31,1");

	$rss25->execute();
	$rss26->execute();
	$rss27->execute();
	$rss28->execute();
	$rss29->execute();
	$rss30->execute();
	$rss31->execute();
	$rss32->execute();

	$row25 = $rss25->fetch();
	$title_box9 = html_entity_decode($row25['title']);
	$source_box9 = html_entity_decode($row25['source']);
	$content_box9 = html_entity_decode($row25['content']);

	$row26 = $rss26->fetch();
	$title_box10 = html_entity_decode($row26['title']);
	$source_box10 = html_entity_decode($row26['source']);	
	$content_box10 = html_entity_decode($row26['content']);

	$row27 = $rss27->fetch();
	$title_box11 = html_entity_decode($row27['title']);
	$source_box11 = html_entity_decode($row27['source']);	
	$content_box11 = html_entity_decode($row27['content']);

	$row28 = $rss28->fetch();
	$title_box12 = html_entity_decode($row28['title']);
	$source_box12 = html_entity_decode($row28['source']);	
	$content_box12 = html_entity_decode($row28['content']);

	$row29 = $rss29->fetch();
	$title_box13 = html_entity_decode($row29['title']);
	$source_box13 = html_entity_decode($row29['source']);	
	$content_box13 = html_entity_decode($row29['content']);

	$row30 = $rss30->fetch();
	$title_box14 = html_entity_decode($row30['title']);
	$source_box14 = html_entity_decode($row30['source']);	
	$content_box14 = html_entity_decode($row30['content']);

	$row31 = $rss31->fetch();
	$title_box15 = html_entity_decode($row31['title']);
	$source_box15 = html_entity_decode($row31['source']);	
	$content_box15 = html_entity_decode($row31['content']);

	$row32 = $rss32->fetch();
	$title_box16 = html_entity_decode($row32['title']);
	$source_box16 = html_entity_decode($row32['source']);	
	$content_box16 = html_entity_decode($row32['content']);

  $all = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 24,8");
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
<title>Screen 4</title>
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