<?php session_start(); if(!isset($_SESSION["user"])){header("Location:login.php");}?>
<?php
$bdd = new PDO("mysql:host=localhost;dbname=smdmxjmg_mydrugs;charset=utf8;port=3306", "smdmxjmg_myuser", "3u(Me3:3bu%d!3d5Qu");

if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {

	$tailleMax = 2097152;
	$extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
	if($_FILES['avatar']['size'] <= $tailleMax) 
	{
		$extensionsUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
		if(in_array($extensionsUpload, $extensionsValides)) 
		{
			$chemin = "membres/avatars".$_SESSION['id'].".".$extensionsUpload;
			$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
			if ($resultat) 
			{
				$updateavatar = $bdd->prepare('UPDATE utilisateurs SET avatar = :avatar WHERE id = :id');
				$updateavatar->execute(array('avatar' => $_SESSION['id'].".".$extensionsUpload,'id' => $_SESSION['id']
				  ));
				header('Location: avatar.php?id='.$_SESSION['id']);
			}
			else
			{
               $msg = "Erreur durant l'importation de votre image";
			}
		}
		else
		{
            $msg = "Votre image doit être au format jpg, jpeg, gif ou png";
		}
	}
	else
	{
		$msg = "Votre photo de profil ne doit pas dépasser 2Mo";
	}	
	
}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>avatar test</title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="avatar">
		<input type="submit" value="mettre à jour mon profil">

	</form>
	<?php
	if(!empty($userinfo('avatar'))) 
	{
	?>
	<img src="membres/avatars/<?php echo $userinfo['avatar']; ?>" width="150">
	<?php	
	}
    ?>
</body>
</html>