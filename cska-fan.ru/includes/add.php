<?php  
require "../includes/config.php";

	$article_name = filter_var(trim($_POST['article']));
	$categorie_add	 = filter_var(trim($_POST['categorie']));
	$text_add	 = filter_var(trim($_POST['text']));

	$result = mysqli_query ( $connection, "SELECT * FROM `categorie` WHERE `categorie_chat` = '$categorie_add' ");
	
	$categorie_q = mysqli_query($connection, "SELECT * FROM `categorie`");
  $categorie = array();
  while ( $cat = mysqli_fetch_assoc($categorie_q)) {
    $categorie[] = $cat;
  }
  foreach ($categorie as $cat)
  	{
    	if ($cat['categorie_chat'] == $categorie_add){
   	  break;
  	}
  } 

  if ($_GET['cat'] != ''){
		mysqli_query($connection, "INSERT INTO `chat` (`title`, `comment`, `categorie_id`) VALUES ('$article_name', '$text_add'," . $_GET['cat'] . " ) ");
	}else {
		mysqli_query($connection, "INSERT INTO `chat` (`title`, `comment`, `categorie_id`) VALUES ('$article_name', '$text_add'," . $cat['id'] . ")");
	}

	header('Location: /');


	?>