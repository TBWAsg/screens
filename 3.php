<?php
require_once('dbconfig.php'); 

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  $rss17 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 16,1");
  $rss18 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 17,1");
  $rss19 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 18,1");
  $rss20 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 19,1");
  $rss21 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 20,1");
  $rss22 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 21,1");
  $rss23 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 22,1");
  $rss24 = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 23,1");

  $rss17->execute();
  $rss18->execute();
  $rss19->execute();
  $rss20->execute();
  $rss21->execute();
  $rss22->execute();
  $rss23->execute();
  $rss24->execute();

  $row17 = $rss17->fetch();
  $title_box1 = html_entity_decode($row17['title']); // saved as var to call multiple times
  $source_box1 = html_entity_decode($row17['source']);
  $content_box1 = html_entity_decode($row17['content']);

  $row18 = $rss18->fetch();
  $title_box2 = html_entity_decode($row18['title']);
  $source_box2 = html_entity_decode($row18['source']);
  $content_box2 = html_entity_decode($row18['content']);

  $row19 = $rss19->fetch();
  $title_box3 = html_entity_decode($row19['title']);
  $source_box3 = html_entity_decode($row19['source']);
  $content_box3 = html_entity_decode($row19['content']);

  $row20 = $rss20->fetch();
  $title_box4 = html_entity_decode($row20['title']);
  $source_box4 = html_entity_decode($row20['source']);
  $content_box4 = html_entity_decode($row20['content']);

  $row21 = $rss21->fetch();
  $title_box5 = html_entity_decode($row21['title']);
  $source_box5 = html_entity_decode($row21['source']);
  $content_box5 = html_entity_decode($row21['content']);

  $row22 = $rss22->fetch();
  $title_box6 = html_entity_decode($row22['title']);
  $source_box6 = html_entity_decode($row22['source']);
  $content_box6 = html_entity_decode($row22['content']);

  $row23 = $rss23->fetch();
  $title_box7 = html_entity_decode($row23['title']);
  $source_box7 = html_entity_decode($row23['source']);
  $content_box7 = html_entity_decode($row23['content']);

  $row24 = $rss24->fetch();
  $title_box8 = html_entity_decode($row24['title']);
  $source_box8 = html_entity_decode($row24['source']);
  $content_box8 = html_entity_decode($row24['content']);

  $all = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 16,8");
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