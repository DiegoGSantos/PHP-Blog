<!-- Diego - Home page with a 5-post list showing title, date and an excerpt.
Users can view a full version or edit throught a link. -->

<?php

$g_title = 'Blog RRC - Home page';
$g_page = 'index';
require ("header.php");
require ("selectPosts.php");
$i = 0;

?>

<div class="cont_tab" id="Home">
	<h2>Newly Posts</h2>

		<ul id="main">
		<?php if ($num_of_nows != 0):?>

			<?php while ($row = $posts->fetch_assoc() and $i < 5):?>

			   <?php $i = $i + 1;?>

			   <?php $date=strtotime($row['postDate'])?>

			   <li>
		       		<h3><a href="fullpost.php?id=<?=$row['id']?>"><?=$row['title']?></a></h3>
		   		    <p>
			   		    <small>
							<?=date('F d, Y, H:i:s', $date)?> - <a href="fullpost.php?id=<?=$row['id']?>">view</a> -
			   		    	<a href="editpost.php?id=<?=$row['id']?>">edit</a>
			   		    </small>
		   		    </p>
		   		    <p hidden id="current"><?=$row['id']?></p>
		   		    <div class="comment more text">
						<?=$row['posttext']?>
					</div>

			    </li>

			<?php endwhile?>

		<?php else:?>
		<li>No rows!</li>

		<?php endif;?>
		</ul>

		</div>

<?php

require ("footer.php");

?>
