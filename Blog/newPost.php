<!-- Diego - Form avalaible to authenticated users to add a new Post. -->

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

	$g_title = 'Blog RRC - New Post';
    $g_page = 'newPost';
    require("header.php");

?>	

<?php 
	if($_GET){

		$id = $_GET['id'];

		require("connect.php");

	    $select_query = "select * from Posts where id =" . $id;
	    $posts = $db->query($select_query);
	    $num_of_nows = $posts->num_rows;

	}

?>

	<div class="cont_tab" id="NewPost">
		<fieldset><legend>New Post</legend>

			<form action="insertPost.php" method="POST">
			  <p><label for="title">Post Title: </label>
			  <input type="text" name="title" size="60" required></p>
			  <p><label for="title">Author: </label>
			  <input type="text" name="author" size="30" required></p>
			  <p><textarea rows="4" cols="50" id="post" name="post" required placeholder="Type your Post here..."></textarea></p>
			  <input type="submit" value="Create">
			</form>

		</fieldset>
	</div>

<?php

	require("footer.php");

?>	