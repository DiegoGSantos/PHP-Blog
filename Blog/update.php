<!-- Diego - This files have the functions responsible to delete and update a selected post. -->

<?php
function get_post_action($name) {
	$params = func_get_args();

	foreach ($params as $name) {
		if (isset($_POST[$name])) {
			return $name;
		}
	}
}
?>

<?php
switch (get_post_action('update', 'delete')) {
	case 'update':
		update();

		break;

	case 'delete':
		deletePost();

		break;

	default:
		//no action sent
}
?>

<?php
function update() {
	$success = false;
	$insert_query = "";

	if ($_GET) {

		$id = $_GET['id'];

	}

	if ($_POST) {
		$title = $_POST['title'];
		$author = $_POST['author'];
		$post = $_POST['post'];

		require "connect.php";

		$title = $db->real_escape_string($title);
		$author = $db->real_escape_string($author);
		$post = $db->real_escape_string($post);

		echo $connection_error;

		$update_query = "UPDATE Posts SET title = '{$title}', author = '{$author}', posttext = '{$post}' WHERE ID = '{$id}';";

		// $insert_query = "INSERT INTO Posts (title, author, posttext) VALUES ('{$title}','{$author}','{$post}');";

		$success = $db->query($update_query);

		echo $update_query . $success;

		header('Location:index.php');
		exit;

	}
}

?>

<?php
function deletePost() {
	$success = false;
	$insert_query = "";

	if ($_GET) {

		$id = $_GET['id'];

	}

	if ($_POST) {
		$title = $_POST['title'];
		$author = $_POST['author'];
		$post = $_POST['post'];

		require "connect.php";

		echo $connection_error;

		$delete_query = "DELETE FROM Posts WHERE ID = '{$id}';";

		$success = $db->query($delete_query);

		echo $delete_query . $success;

		header('Location:index.php');
		exit;

	}
}
?>
