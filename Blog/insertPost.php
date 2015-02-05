<!-- Diego - Executes the query to add a post to the DataBase. -->

<?php

$success = false;
$insert_query = "";

if ($_POST) {
	$title = $_POST['title'];
	$author = $_POST['author'];
	$post = $_POST['post'];

	require ("connect.php");

	$title = $db->real_escape_string($title);
	$author = $db->real_escape_string($author);
	$post = $db->real_escape_string($post);

	

	echo $connection_error;

	$insert_query = "INSERT INTO Posts (title, author, posttext) VALUES ('{$title}','{$author}','{$post}');";

	$success = $db->query($insert_query);

	echo $insert_query . $success;

	header('Location:index.php');
	exit;

}

?>

