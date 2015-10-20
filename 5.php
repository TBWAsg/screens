<?php
require_once('dbconfig.php'); 

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

	$rss33 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 32,1");
	$rss34 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 33,1");
	$rss35 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 34,1");
	$rss36 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 35,1");
	$rss37 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 36,1");
	$rss38 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 37,1");
	$rss39 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 38,1");
	$rss40 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 39,1");

	$rss33->execute();
	$rss34->execute();
	$rss35->execute();
	$rss36->execute();
	$rss37->execute();
	$rss38->execute();
	$rss39->execute();
	$rss40->execute();

	$row33 = $rss33->fetch();
	$title_box1 = html_entity_decode($row33['title']); // saved as var to call multiple times
	$source_box1 = html_entity_decode($row33['source']);
	$content_box1 = html_entity_decode($row33['content']);

	$row34 = $rss34->fetch();
	$title_box2 = html_entity_decode($row34['title']);
	$source_box2 = html_entity_decode($row34['source']);
	$content_box2 = html_entity_decode($row34['content']);

	$row35 = $rss35->fetch();
	$title_box3 = html_entity_decode($row35['title']);
	$source_box3 = html_entity_decode($row35['source']);
	$content_box3 = html_entity_decode($row35['content']);

	$row36 = $rss36->fetch();
	$title_box4 = html_entity_decode($row36['title']);
	$source_box4 = html_entity_decode($row36['source']);
	$content_box4 = html_entity_decode($row36['content']);

	$row37 = $rss37->fetch();
	$title_box5 = html_entity_decode($row37['title']);
	$source_box5 = html_entity_decode($row37['source']);
	$content_box5 = html_entity_decode($row37['content']);

	$row38 = $rss38->fetch();
	$title_box6 = html_entity_decode($row38['title']);
	$source_box6 = html_entity_decode($row38['source']);
	$content_box6 = html_entity_decode($row38['content']);

	$row39 = $rss39->fetch();
	$title_box7 = html_entity_decode($row39['title']);
	$source_box7 = html_entity_decode($row39['source']);
	$content_box7 = html_entity_decode($row39['content']);

	$row40 = $rss40->fetch();
	$title_box8 = html_entity_decode($row40['title']);
	$source_box8 = html_entity_decode($row40['source']);
	$content_box8 = html_entity_decode($row40['content']);

  $all = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 32,8");
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
<title>Screen 3</title>
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