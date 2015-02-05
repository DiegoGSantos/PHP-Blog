<!-- Diego - Header of all pages. -->

<?php 
	
  if (!isset($g_page)) {
      $g_page = 'index';
  }else if ($g_page=='fullpost'){
  	  $g_page = '';
  }

  if (!isset($g_page)) {
  	  $g_page = 'Blog RRC - Home page';
  }

?>

<!DOCTYPE html>
<html>
<head>
	<link href="style1.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script><!--Referencia ao Jquery-->
	<script type="text/javascript" src="script.js"></script>
	<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>Referencia ao Jquery
	<script type="text/javascript" src="script.js"></script>-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$g_title?></title>
	
</head>
<body>
	<div id="wrapper">
		<header>
			<nav>
				<ul class="tabs">
					<h1><a href="index.php"><img src="rrc_logo.png" width="215" height="60"></a></h1>
					<li <?= ($g_page == 'newPost') ? "class='active'" : '' ?>><a href="newPost.php" id="#NewPost">New Post</a></li>
					<li <?= ($g_page == 'archive') ? "class='active'" : '' ?>><a href="archive.php" id="#Arquive" >Archive</a></li>
					<li <?= ($g_page == 'index') ? "class='active'" : '' ?>><a href="index.php" id="#Home">Home</a></li>
					<!-- <li><a href="#Delete">Deletar</a></li> -->
				</ul>
			</nav>
		</header>
		<div class="tab_container">