<!-- Diego - Page that gives access to authenticated users to edit or delete a post. -->

<?php

  define('ADMIN_LOGIN','blogadmin');

  define('ADMIN_PASSWORD','blogRRC!');

  if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])

      || ($_SERVER['PHP_AUTH_USER'] != ADMIN_LOGIN)

      || ($_SERVER['PHP_AUTH_PW'] != ADMIN_PASSWORD)) {

    header('HTTP/1.1 401 Unauthorized');

    header('WWW-Authenticate: Basic realm="Our Blog"');

    exit("Access Denied: Username and password required.");

  }
  
?>

<?php 
	if($_GET){

		$id = $_GET['id'];

		if (is_numeric($id)) {
			require("connect.php");

		    $select_query = "select * from Posts where id =" . $id;
		    $posts = $db->query($select_query);
		    $num_of_nows = $posts->num_rows;
		}

	}

?>

<?php while ($row = $posts->fetch_assoc()): ?>

	<?php $g_title = "Blog RRC - Editing " . $row['title']; ?>
	<?php $g_page = 'editPost'; ?>
	<?php require("header.php"); ?>

	<div class="cont_tab" id="EditPost">
		<fieldset><legend>Edit Post</legend>

			<form action="update.php?id=<?=$id?>" method="POST">
			  <p><label for="title">Post Title: </label>
			  <input type="text" name="title" value="<?=$row['title']?>" size="60" required></p>
			  <p><label for="title">Author: </label>
			  <input type="text" name="author" value="<?=$row['author']?>" size="30" required></p>
			  <p><textarea rows="4" cols="50" id="post" required name="post"><?=$row['posttext']?></textarea></p>
			  <input type="submit" value="Update" name="update">
			  <input type="submit" value="Delete" name="delete">
			</form>

		</fieldset>
	</div>
<?php endwhile ?>

<?php

	require("footer.php");

?>	