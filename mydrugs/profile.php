<?php session_start(); if(!isset($_SESSION["user"])){header("Location:login.php");}?>
<!DOCTYPE html>
<html>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <meta name="theme-color" content="#000000"/>
    <meta name="description" content="A Recreation of the MyDrugs website from the hit Netflix series 'How To Sell Drugs Online (Fast)">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="BlackLogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta charset="utf-8">
    <title>MyDrugs</title>
  
</head>
<style type="text/css">
  body{
    background-color: #0e0e0e;
    align-content: center;
    font-family: "Poppins", sans-serif;
  }
 .profile{
    font-family: 'Anton', sans-serif;
  margin: 0 auto;
  border-radius: 2vh;
  border: solid 2px purple;
  height: 650px;
    width: 400px;
  background-color: black;
 }
 .pfp{
     object-fit: cover;
  border-radius: 50%;
  max-width: 200px;
  border: solid 4px #7451eb;
  max-height: 500px;
  }
  .name{
    color: purple;
    font-family: 'Anton', sans-serif;
    font-size:;

  }
  .edit{
    border-radius: 4vh;
    background-color: #c900a9;
    color: white;
    text-decoration: none;
    outline: none;
    padding: 8px 30px;
  }
  .logout{
    border-radius: 4vh;
    background-color: red;
    color: white;
    text-decoration: none;
    outline: none;
    padding: 8px 30px;
  }
  .donation{
    border-radius: 4vh;
    background-color: #00ce0a;
    color: white;
    text-decoration: none;
    outline: none;
    padding: 8px 30px;
  }
  .return{
    border-radius: 4vh;
    background-color: #0059eb;
    color: white;
    text-decoration: none;
    outline: none;
    padding: 8px 30px;
  }
</style>
<body>
  <br><br>
   <div class="profile">
    <br>
    <div align="center">
     <img class="pfp" src="membres/avatars/<?php echo $_SESSION['avatar']; ?>">
    </div>
     
     <div align="center">
    <h2 class="name"><?php echo $_SESSION['pseudo']; ?></h2>
        <hr width="200" style="border: none; height: 2.5px; background-color: purple; color: purple;">
    </div>
    <br>
    <div align="center">
      
      <a class="edit" href="edit.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
      <br><br><br>
      <a class="return" href="/"><i class="fas fa-undo-alt"></i> Return</a>
      <br><br><br>
      <a class="donation" href="https://paypal.me/pools/c/8BETgHulY6"><i class="fas fa-hand-holding-usd"></i> Make a donation</a>
      <br><br><br>
      <a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a>
       </div>

   </div>

</body>
</html>