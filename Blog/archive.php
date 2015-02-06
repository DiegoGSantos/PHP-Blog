<!-- Diego - This page is responsible to show a list with all posts. -->

<?php 
	
	$g_title = 'Blog RRC - Archive';
    $g_page = 'archive';
    require("header.php");
	require("selectPosts.php");
	
?>
	<div class="cont_tab" id="Archive">
		<h2>Archive</h2>
			<ul>
		     	<?php if($num_of_nows != 0): ?>

		          <?php while ($row = $posts->fetch_assoc()): ?>

		          	   <?php $date=strtotime($row['postDate'])?>

		               <li>
		               		<h3><a href="fullpost.php?id=<?=$row['id']?>"><?=$row['title']?></a></h3>
		           		    <p><small>
		           		    	<?=date('F d, Y, H:i:s', $date)?> <a href="fullpost.php?id=<?=$row['id']?>">view</a> - 
		           		    	<a href="editpost.php?id=<?=$row['id']?>">edit</a>
		           		    </small></p>
	           		   </li>

		          <?php endwhile ?>

		     	<?php else: ?>

		          <li>No rows!</li>

		     	<?php endif; ?>

			</ul>
		</fieldset>
	</div>


<?php

	require("footer.php");

?>	