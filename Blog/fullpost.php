<!-- Diego - This page show a full version of a selected post. -->

<?php 
	if($_GET){

		$id = $_GET['id'];

		require("connect.php");

	    $select_query = "select * from Posts where id =" . $id;
	    $posts = $db->query($select_query);
	    $num_of_nows = $posts->num_rows;

	}

?>

<?php while ($row = $posts->fetch_assoc()): ?>

	<?php $g_title = "Blog RRC - " . $row['title']; ?>
	<?php $g_page = 'fullpost'; ?>
	<?php require("header.php"); ?>

		<div class="cont_tab" id="Archive">
			<h2>Full Post</h2>
		     	<h3><?=$row['title']?></h3>
			    <p><small><?=$row['postDate']?> <a href="editpost.php?id=<?=$row['id']?>">edit</a></small></p>
			    <p class="text"><?=$row['posttext']?></li></p>  
	    </div>
<?php endwhile ?>

<?php

	require("footer.php");

?>	