<?php
require_once('dbconfig.php'); 

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	 
	$sql = 'SELECT * FROM rss_posts ORDER BY DATE DESC';
	
	// get data from 
	//$sql = 'SELECT * FROM rss_posts WHERE date >= now() - INTERVAL 1 DAY'; 

	$q = $conn->prepare($sql);
	$q->execute();
	$q->setFetchMode(PDO::FETCH_ASSOC);
 
} catch (PDOException $pe) {
 die("Could not connect to the database $dbname :" . $pe->getMessage());
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>PHP MySQL Query Data Demo</title>
</head>

<body>
 <h1>Pulled from rss_posts table</h1>
 <table class="table table-bordered table-condensed">
 <thead>
 <tr>
 <th>id</th>
 <th>Source</th>
 <th>Title</th>
 <th>Content</th> 
 <th>Date</th>
 </tr>
 </thead>
 <tbody>
 <?php while ($r = $q->fetch()): ?>
 <tr>
 <td><?php echo html_entity_decode($r['id'])?></td>
 <td><?php echo html_entity_decode($r['source'])?></td>
 <td><?php echo html_entity_decode($r['title'])?></td>
 <td><?php echo html_entity_decode($r['content'])?></td>
 <td><?php echo html_entity_decode($r['date']);?></td>
 </tr>
 <?php endwhile; ?>
 </tbody>
 </table>
</body>

</html>