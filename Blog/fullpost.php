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
			<fieldset><legend>Full Post</legend>
		     <li>
		     	<h2><?=$row['title']?></h2>
				   <p><small><?=$row['postDate']?> <a href="editpost.php?id=<?=$row['id']?>">edit</a></small></p>
				   <p><?=$row['posttext']?></li></p>  
		    	</li>
		    </fieldset>
	    </div>
<?php endwhile ?>

<?php

	require("footer.php");

?>	