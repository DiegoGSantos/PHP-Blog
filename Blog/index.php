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
	<fieldset><legend>Newly Posts</legend>

		<ul id="main">
		<?php if ($num_of_nows != 0):?>

			<?php while ($row = $posts->fetch_assoc() and $i < 5):?>

			   <?php $i = $i + 1;?>

			   <?php $date=strtotime($row['postDate'])?>

			   <li>
		       		<h2><a href="fullpost.php?id=<?=$row['id']?>"><?=$row['title']?></a></h2>
		   		    <p>
			   		    <small>
							<?=date('F d, Y, H:i:s', $date)?> - <a href="fullpost.php?id=<?=$row['id']?>">view</a> -
			   		    	<a href="editpost.php?id=<?=$row['id']?>">edit</a>
			   		    </small>
		   		    </p>
		   		    <p hidden id="current"><?=$row['id']?></p>
		   		    <div class="comment more">
						<?=$row['posttext']?>
					</div>

			    </li>

			<?php endwhile?>

		<?php else:?>
		<li>No rows!</li>

		<?php endif;?>
		</ul>

			</fieldset>
		</div>

<?php

require ("footer.php");

?>
