<?php
require_once('dbconfig.php'); 

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

	$rss1 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 0,1");
	$rss2 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 1,1");
	$rss3 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 2,1");
	$rss4 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 3,1");
	$rss5 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 4,1");
	$rss6 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 5,1");
	$rss7 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 6,1");
	$rss8 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 7,1");

	$rss1->execute();
	$rss2->execute();
	$rss3->execute();
	$rss4->execute();
	$rss5->execute();
	$rss6->execute();
	$rss7->execute();
	$rss8->execute();

	$row1 = $rss1->fetch();
	$title_box1 = html_entity_decode($row1['title']); // saved as var to call multiple times
	$source_box1 = html_entity_decode($row1['source']);
	$content_box1 = html_entity_decode($row1['content']);

	$row2 = $rss2->fetch();
	$title_box2 = html_entity_decode($row2['title']);
	$source_box2 = html_entity_decode($row2['source']);
	$content_box2 = html_entity_decode($row2['content']);

	$row3 = $rss3->fetch();
	$title_box3 = html_entity_decode($row3['title']);
	$source_box3 = html_entity_decode($row3['source']);
	$content_box3 = html_entity_decode($row3['content']);

	$row4 = $rss4->fetch();
	$title_box4 = html_entity_decode($row4['title']);
	$source_box4 = html_entity_decode($row4['source']);
	$content_box4 = html_entity_decode($row4['content']);

	$row5 = $rss5->fetch();
	$title_box5 = html_entity_decode($row5['title']);
	$source_box5 = html_entity_decode($row5['source']);
	$content_box5 = html_entity_decode($row5['content']);

	$row6 = $rss6->fetch();
	$title_box6 = html_entity_decode($row6['title']);
	$source_box6 = html_entity_decode($row6['source']);
	$content_box6 = html_entity_decode($row6['content']);

	$row7 = $rss7->fetch();
	$title_box7 = html_entity_decode($row7['title']);
	$source_box7 = html_entity_decode($row7['source']);
	$content_box7 = html_entity_decode($row7['content']);

	$row8 = $rss8->fetch();
	$title_box8 = html_entity_decode($row8['title']);
	$source_box8 = html_entity_decode($row8['source']);
	$content_box8 = html_entity_decode($row8['content']);

  $all = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 0,8");
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
<title>Screen 1</title>
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
                    <?php echo $title_box1; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box1; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box1; ?>
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
                    <?php echo $title_box2; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box2; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box2; ?>
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
                    <?php echo $title_box3; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box3; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box3; ?>
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
                    <?php echo $title_box4; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box4; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box4; ?>
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
                    <?php echo $title_box5; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box5; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box5; ?>
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
                    <?php echo $title_box6; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box6; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box6; ?>
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
                    <?php echo $title_box7; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box7; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box7; ?>
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
                    <?php echo $title_box8; ?>
                </div>
                <br/>
                <br/>
                <div class="overlayDescription">
                    <?php echo $source_box8; ?>
                    <br/>
                    <br/>
                    <?php echo $content_box8; ?>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">


    <div class="box1_outer">
        <div class="box1_inner">
            <br>
            <span style="font-size: 35px; text-transform: uppercase;">
    <?php echo $title_box1; ?>
    </span>
            <br/>
            <br/>
            <?php echo $source_box1; ?>
        </div>
    </div>

    <div style="height:100%; width:25%; float:right;">
        <div class="box4_outer">
            <div class="box4_inner">
                <br/>
                <span style="font-size: 25px; text-transform: uppercase;">
      <?php echo $title_box4; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box4; ?>
            </div>
        </div>
    </div>

    <div style="height:100%; width:25%; float:right;">
        <div class="box2_outer">
            <div class="box2_inner">
                <br/>
                <span style="text-transform: uppercase;">
      <?php echo $title_box2; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box2; ?>
            </div>
        </div>
        <div class="box3_outer">
            <div class="box3_inner">
                <br/>
                <span style="text-transform: uppercase;">
      <?php echo $title_box3; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box3; ?>
            </div>
        </div>
    </div>

</div> <!-- end container 1-->


<div class="container">

    <div style="height:100%; width:25%;float:left; background-color: yellow;">
        <div class="box5_outer">
            <div class="box5_inner">
                <br />
                <span style="text-transform: uppercase;">
      <?php echo $title_box5; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box5; ?>
            </div>
        </div>
        <div class="box6_outer">
            <div class="box6_inner">
                <br />
                <span style="text-transform: uppercase;">
      <?php echo $title_box6; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box6; ?>
            </div>
        </div>
    </div>

    <div style="height:100%; width:25%; float:left">
        <div class="box7_outer">
            <div class="box7_inner">
                <br />
                <span style="font-size: 25px; text-transform: uppercase;">
      <?php echo $title_box7; ?>
      </span>
                <br/>
                <br/>
                <?php echo $source_box7; ?>
            </div>
        </div>
    </div>

    <div class="box8_outer">
        <div class="box8_inner">
            <br />
            <span style="font-size: 35px; text-transform: uppercase;">
    <?php echo $title_box8; ?>
    </span>
            <br/>
            <br/>
            <?php echo $source_box8; ?>
        </div>
    </div>

</div><!-- end container 2-->


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