<?php  
require "../includes/config.php";
	$article_id = $_GET['article_id'];
	$comment_add = filter_var(trim($_POST['text']));
	$user = $_COOKIE['user'];
	mysqli_query($connection, "INSERT INTO `comment` (`nickname`, `text`, `article_id` ) VALUES ( '$user', '$comment_add', '$article_id' )");
	header('Location: /article.php?id=' . $article_id);

