<!-- Diego - Form avalaible to authenticated users to add a new Post. -->

<?php

  define('ADMIN_LOGIN','blogadmin');

  define('ADMIN_PASSWORD','admin');

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
		<h2>New Post</h2>

			<form action="insertPost.php" method="POST">
			  <input type="text" name="title" size="60" placeholder="Post Title" required></p>
			  <input type="text" name="author" size="30" placeholder="Author" required></p>
			  <textarea rows="4" cols="50" id="post" name="post" required placeholder="Type your Post here..."></textarea>
			  <button type="submit">Create</button>
			</form>

		</fieldset>
	</div>

<?php

	require("footer.php");

?>	