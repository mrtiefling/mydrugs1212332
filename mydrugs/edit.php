	<?php
session_start();
 
$bdd = new PDO("mysql:host=localhost;dbname=smdmxjmg_mydrugs;charset=utf8;port=3306", "smdmxjmg_myuser", "3u(Me3:3bu%d!3d5Qu");
 
if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE utilisateurs SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: logout.php');
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['email']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE utilisateurs SET email = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: logout.php');
   }
   if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "membres/avatars/".$_SESSION['id'].".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE utilisateurs SET avatar = :avatar WHERE id = :id');
            $updateavatar->execute(array(
               'avatar' => $_SESSION['id'].".".$extensionUpload,
               'id' => $_SESSION['id']
               ));
            header('Location: logout.php');
            
         } else {
            $msg = "Error importing your profile picture";
         }
      } else {
         $msg = "Your profile picture must be in jpg, jpeg, gif or png format";
      }
   } else {
      $msg = "Your profile picture must not exceed 2MB";
   }
}
?>
   

<html>
   <head>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
     <meta name="theme-color" content="purple"/>
     <meta name="description" content="A Recreation of the MyDrugs website from the hit Netflix series 'How To Sell Drugs Online (Fast)">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" type="image/x-icon" href="BlackLogo.png">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <meta charset="utf-8">
     <title>MyDrugs | Edit my profile</title>
   </head>
   <body>
      <br><br>
      <div align="center">
      <div class="edit">
         <div align="left">
            <br>
         <a class="return" href="profile.php"><i class="fas fa-arrow-left"></i></a>
         </div>
         <h2>Editing my profile</h2>
         <hr width="200" style="border: none; height: 2.5px; background-color: purple; color: purple;">
         <br>
         <div align="center">
            <form method="POST" action="" enctype="multipart/form-data">
               <label>Change your username</label><br><br>
               <input type="text" name="newpseudo" placeholder="Username" value="<?php echo $user['pseudo']; ?>" /><br /><br />
               <label>Change your e-mail</label><br><br>
               <input type="text" name="newmail" placeholder="E-mail" value="<?php echo $_SESSION['user']; ?>" /><br /><br />
               <label>Change your profile picture</label><br><br>
               <input type="file" name="avatar"><br><br>
               
               <input class="update" type="submit" value="Update my profile" />
            </form>
      </div>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php   
}
else {
   header("Location: login.php");
}
?>
<style type="text/css">
.edit{
   font-family: 'Anton', sans-serif;
  margin: 0 auto;
  border-radius: 2vh;
  border: solid 2px purple;
  height: 630px;
    width: 400px;
  background-color: black;
}
    body{
    background-color: #0e0e0e;
    align-content: center;
    font-family: "Poppins", sans-serif;
  }
  input{
   outline: green;
   border-radius: 3vh;
   border: solid 2px purple;
   color: white;
   background-color: #181818;
   padding: 15px 30px;
  }
  label{
   color: purple;
  }
  h2{
   color: purple;
  }
  .return{
   text-decoration: none;
   outline: none;
   color: purple;
   position: initial;
   margin-left: 30px;
   font-size: 28.7px;
    margin-top: 450px;
  }
  .update{
   color: white;
   border: solid 4px purple;
   background-color: black;
  }
  .update:hover{
   color: white;
   border: solid 6px purple;
   background-color: #00ff16;
   transition: border 0s ,background-color 5s;
  }
</style>