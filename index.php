<?php
require_once('dbconfig.php'); 

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	 
	//$sql = 'SELECT * FROM rss_posts';
	
	// get data from LAST 24 hours, latest 8 posts
	//$sql = 'SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY LIMIT 8'; 

	//$q = $conn->prepare($sql);
	//$q->execute();
	//$q->setFetchMode(PDO::FETCH_ASSOC);
 
	$first = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 0,1");
	$second = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 1,1");
	$third = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 2,1");
	$fourth = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 3,1");
	$fifth = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 4,1");
	$sixth = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 5,1");
	$seventh = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 6,1");
	$eighth = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 7,1");

	$ninth = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 8,1");
	$tenth = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 9,1");
	$eleventh = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 10,1");
	$twelfth = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 11,1");
	$thirteen = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 12,1");
	$fourteen = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 13,1");
	$fifteen = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 14,1");
	$sixteen = $conn->prepare("SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY ORDER BY DATE DESC LIMIT 15,1");

	$first->execute();
	$second->execute();
	$third->execute();
	$fourth->execute();
	$fifth->execute();
	$sixth->execute();
	$seventh->execute();
	$eighth->execute();

	$ninth->execute();
	$tenth->execute();
	$eleventh->execute();
	$twelfth->execute();
	$thirteen->execute();
	$fourteen->execute();
	$fifteen->execute();
	$sixteen->execute();


	$row1 = $first->fetch();
	$title_box1 = html_entity_decode($row1['title']); // saved as var to call multiple times
	$source_box1 = html_entity_decode($row1['source']);
	$content_box1 = html_entity_decode($row1['content']);

	$row2 = $second->fetch();
	$title_box2 = html_entity_decode($row2['title']);
	$source_box2 = html_entity_decode($row2['source']);

	$row3 = $third->fetch();
	$title_box3 = html_entity_decode($row3['title']);
	$source_box3 = html_entity_decode($row3['source']);

	$row4 = $fourth->fetch();
	$title_box4 = html_entity_decode($row4['title']);
	$source_box4 = html_entity_decode($row4['source']);

	$row5 = $fifth->fetch();
	$title_box5 = html_entity_decode($row5['title']);
	$source_box5 = html_entity_decode($row5['source']);

	$row6 = $sixth->fetch();
	$title_box6 = html_entity_decode($row6['title']);
	$source_box6 = html_entity_decode($row6['source']);

	$row7 = $seventh->fetch();
	$title_box7 = html_entity_decode($row7['title']);
	$source_box7 = html_entity_decode($row7['source']);

	$row8 = $eighth->fetch();
	$title_box8 = html_entity_decode($row8['title']);
	$source_box8 = html_entity_decode($row8['source']);


	$row9 = $ninth->fetch();
	$title_box9 = html_entity_decode($row9['title']);
	$source_box9 = html_entity_decode($row9['source']);

	$row10 = $tenth->fetch();
	$title_box10 = html_entity_decode($row10['title']);
	$source_box10 = html_entity_decode($row10['source']);	

	$row11 = $eleventh->fetch();
	$title_box11 = html_entity_decode($row11['title']);
	$source_box11 = html_entity_decode($row11['source']);	

	$row12 = $twelfth->fetch();
	$title_box12 = html_entity_decode($row12['title']);
	$source_box12 = html_entity_decode($row12['source']);	

	$row13 = $thirteen->fetch();
	$title_box13 = html_entity_decode($row13['title']);
	$source_box13 = html_entity_decode($row13['source']);	

	$row14 = $fourteen->fetch();
	$title_box14 = html_entity_decode($row14['title']);
	$source_box14 = html_entity_decode($row14['source']);	

	$row15 = $fifteen->fetch();
	$title_box15 = html_entity_decode($row15['title']);
	$source_box15 = html_entity_decode($row15['source']);	

	$row16 = $sixteen->fetch();
	$title_box16 = html_entity_decode($row16['title']);
	$source_box16 = html_entity_decode($row16['source']);	

} catch (PDOException $pe) {
	die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta http-equiv="refresh" content="3600"> <!-- set refresh rate -->
<title>PHP MySQL Query Data Demo</title>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<style type="text/css">
body {
	background: yellow;
	font-family: 'dinregular','Montserrat', sans-serif;
}

@font-face {
    font-family: 'dinregular';
    src: url('fonts/din-alternate-webfont.eot');
    src: url('fonts/din-alternate-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/din-alternate-webfont.woff2') format('woff2'),
         url('fonts/din-alternate-webfont.woff') format('woff'),
         url('fonts/din-alternate-webfont.ttf') format('truetype'),
         url('fonts/din-alternate-webfont.svg#dinregular') format('svg');
    font-weight: normal;
    font-style: normal;

}

.container {
	width: 1400px;
}

.overlay1 {
	display: none;
    background: white;
    width: 1000px;
    height: 600px;
    position: fixed;
    top: 30%;
    left: 15%;
    margin-top: -150px;
}

.overlay2 {
	display: none;
    background: black;
    width: 1000px;
    height: 600px;
    position: fixed;
    top: 30%;
    left: 15%;
    margin-top: -150px;
}



</style>

</head>

<body>


<div class="overlay1">
	<div style="width:995px; height:570px; border: 15px solid yellow; color:black;">
		<div style="height: 97%; border: 10px solid black; padding-left: 35px; padding-right: 35px; padding-top: 10px;">
			<br>
			<span style="font-size: 55px; text-transform: uppercase; ">
			<?php echo $title_box1; ?>
			</span>
			<br/><br/>
			<span style="font-size: 35px; ">
			<?php echo $source_box1; ?>
			<br/><br/>
			<?php echo $content_box1; ?>
			</span>
		</div>
	</div>
</div>

<div class="overlay2">
	<div style="width:995px; height:570px; border: 15px solid black; color:yellow;">
		<div style="height: 97%; border: 10px solid yellow; padding-left: 35px; padding-right: 35px; padding-top: 10px;">
			<br>
			<span style="font-size: 55px; text-transform: uppercase; ">
			<?php echo $title_box1; ?>
			</span>
			<br/><br/>
			<span style="font-size: 25px; ">
			<?php echo $source_box1; ?>
			<br/><br/>
			<?php echo $content_box1; ?>
			</span>
		</div>
	</div>
</div>








<div class="container" style="margin-left:auto; margin-right:auto;">

<div class="slide">
<div class="screen1"> <!-- start screen1 -->

<div style="width:48.15%; float:left;background:white; height:340px; border: 10px solid yellow; color:black;">
	<div style="height: 94%; border: 10px solid black; padding-left: 15px; padding-right: 15px;">
		<br>
		<span style="font-size: 35px; text-transform: uppercase; ">
		<?php echo $title_box1; ?>
		</span>
		<br/><br/>
		<?php echo $source_box1; ?>
		<br/><br/>
		<?php echo $content_box1; ?>
	</div>
</div>

<div style="width:25%; float:right;">
    <div style="width:97%; height: 330px; border: 10px solid black;">
    	<div style="height: 94%; border: 10px solid yellow; background: black; color: yellow; padding-left: 15px; padding-right: 15px;">
    		<br/>
			<span style="font-size: 25px; text-transform: uppercase; ">
			<?php echo $title_box4; ?>
			</span>
			<br/><br/>
			<?php echo $source_box4; ?>
		</div>
    </div>
</div>

<div style="width:25%;float:right;">
    <div style="width:93%; background:white; height:160px; border: 10px solid yellow; color: black;">
    	<div style="height: 88%; border: 10px solid black; padding-left: 15px; padding-right: 15px;">
    		<br/>
    		<span style="text-transform: uppercase; ">
			<?php echo $title_box2; ?>
			</span>
			<br/><br/>
			<?php echo $source_box2; ?>
		</div>
    </div>
    <div style="width:92%;  background:black; height:160px; border: 10px solid black; color:yellow;">
    	<div style="height: 88%; border: 10px solid yellow; padding-left: 15px; padding-right: 15px;">
    		<br/>
    		<span style="text-transform: uppercase; ">
			<?php echo $title_box3; ?>
			</span>
			<br/><br/>
			<?php echo $source_box3; ?>
		</div>
    </div>
</div>




<div style="width:25%;float:left; background-color: yellow;">
    <div style="width:93%; background:white; height:160px; border: 10px solid yellow; color: black;">
    	<div style="height: 88%; border: 10px solid black; padding-left: 15px; padding-right: 15px;">
    		<br />
    		<span style="text-transform: uppercase; ">
			<?php echo $title_box5; ?>
			</span>
			<br/><br/>
			<?php echo $source_box5; ?>
		</div>
    </div>
    <div style="width:92%;  background:black; height:160px; border: 10px solid black; color:yellow;">
    	<div style="height: 88%; border: 10px solid yellow; padding-left: 15px; padding-right: 15px;">
    		<br />
    		<span style="text-transform: uppercase; ">
			<?php echo $title_box6; ?>
			</span>
			<br/><br/>
			<?php echo $source_box6; ?>
		</div>
    </div>
</div>

<div style="width:25%; float:left">
    <div style="width:92.6%; height: 340px; border: 10px solid yellow;">
    	<div style="height: 94%; border: 10px solid black; background: white; color: black; padding-left: 15px; padding-right: 15px;">
    		<br />
    		<span style="font-size: 25px; text-transform: uppercase; ">
			<?php echo $title_box7; ?>
			</span>
			<br/><br/>
			<?php echo $source_box7; ?>
		</div>
    </div>
</div>


<div style="width:48.15%; float:right;background:white; height:340px; border: 10px solid yellow; color:black;">
	<div style="height: 94%; border: 10px solid black; background-color: black; color: yellow; padding-left: 15px; padding-right: 15px;">
		<br />
		<span style="font-size: 35px; text-transform: uppercase; ">
		<?php echo $title_box8; ?>
		</span>
		<br/><br/>
		<?php echo $source_box8; ?>
	</div>
</div>

</div><!-- end screen1 -->
</div><!-- end slide -->


<div class="slide" style="display: block;">
<div class="screen2"> <!-- Start of screen2 -->

<div style="width:25%; float:left; padding-bottom: 10px;">
    <div style="width:97%; height: 330px; border: 10px solid yellow;">
    	<div style="height: 94%; border: 10px solid black; background: white; color: black; padding-left: 15px; padding-right: 15px;">
    		<br/>
			<span style="font-size: 25px; text-transform: uppercase; ">
			<?php echo $title_box9; ?>
			</span>
			<br/><br/>
			<?php echo $source_box9; ?>
		</div>
    </div>
</div>

<div style="width:25%; float:right;">
    <div style="width:97%; height: 330px; border: 10px solid black;">
    	<div style="height: 94%; border: 10px solid yellow; background: black; color: yellow; padding-left: 15px; padding-right: 15px;">
    		<br/>
			<span style="font-size: 25px; text-transform: uppercase; ">
			<?php echo $title_box11; ?>
			</span>
			<br/><br/>
			<?php echo $source_box11; ?>
		</div>
    </div>
</div>

<div style="width:48.5%; float:right; padding-bottom: 10px;">
    <div style="width:94%; height: 330px; border: 10px solid black;">
    	<div style="height: 94%; border: 10px solid yellow; background: black; color: yellow; padding-left: 15px; padding-right: 15px;">
    		<br/>
			<span style="font-size: 35px; text-transform: uppercase; ">
			<?php echo $title_box10; ?>
			</span>
			<br/><br/>
			<?php echo $source_box10; ?>
		</div>
    </div>
</div>


<div style="width:25%;float:left; background-color: yellow;">
    <div style="width:93%; background:white; height:160px; border: 10px solid yellow; color: black;">
    	<div style="height: 88%; border: 10px solid black; padding-left: 15px; padding-right: 15px;">
    		<br />
    		<span style="text-transform: uppercase; ">
			<?php echo $title_box12; ?>
			</span>
			<br/><br/>
			<?php echo $source_box12; ?>
		</div>
    </div>
    <div style="width:92%;  background:black; height:160px; border: 10px solid black; color:yellow;">
    	<div style="height: 88%; border: 10px solid yellow; padding-left: 15px; padding-right: 15px;">
    		<br />
    		<span style="text-transform: uppercase; ">
			<?php echo $title_box13; ?>
			</span>
			<br/><br/>
			<?php echo $source_box13; ?>
		</div>
    </div>
</div>


<div style="width:25%;float:left; background-color: yellow;">
    <div style="width:92%;  background:black; height:160px; border: 10px solid black; color:yellow;">
    	<div style="height: 88%; border: 10px solid yellow; padding-left: 15px; padding-right: 15px;">
    		<br />
    		<span style="text-transform: uppercase; ">
			<?php echo $title_box14; ?>
			</span>
			<br/><br/>
			<?php echo $source_box14; ?>
		</div>
    </div>
    <div style="width:93%; background:white; height:160px; border: 10px solid yellow; color: black;">
    	<div style="height: 88%; border: 10px solid black; padding-left: 15px; padding-right: 15px;">
    		<br />
    		<span style="text-transform: uppercase; ">
			<?php echo $title_box15; ?>
			</span>
			<br/><br/>
			<?php echo $source_box15; ?>
		</div>
    </div>
</div>

<div style="width:48.15%; float:right;background:white; height:340px; border: 10px solid yellow; color:black;">
	<div style="height: 94%; border: 10px solid black; padding-left: 15px; padding-right: 15px;">
		<br />
		<span style="font-size: 35px; text-transform: uppercase; ">
		<?php echo $title_box16; ?>
		</span>
		<br/><br/>
		<?php echo $source_box16; ?>
	</div>
</div>


</div><!-- end screen2 -->
</div><!-- end slide -->


</div> <!-- end container -->
</body>



<!-- handling screen transitions -->
<style type="text/css">
.show{
display: block;
}
.hide{
display:none;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript">
	
function next() {
    var current = $(".slide:visible");
    current.hide();
    var next = current.next(".slide");
    if(next.length == 0)
        next = current.siblings().filter(":first")
    console.log(next);
    next.show();
}

setInterval(next, 25000); // set change of screen interval
</script>


</html>