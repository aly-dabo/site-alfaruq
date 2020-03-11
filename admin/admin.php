<?php  
   session_start();

  if (isset($_SESSION['username'])) {
  if (isset($_GET['username'])){
  if (isset($_POST['submit'])){
  
  if ($_GET['action']=='add') {

  }else if($_GET['action']=='modify'){
    

  }else if($_GET['action']=='delete'){
    

  } else{

    die('Une erreur s\'est produite.');
    
  }
  header('location: ../index.php');
     
    }
  } 
}

 ?>

  <form action=""method="POST">
      <h3>Prenom:</h3><input type="text" name="prenom"></br></br>
      <h3> Nom:</h3><input type="text" name="nom"></br></br>
      <h3>Adresse email :</h3><input type="email" name="mail"></br></br>
      <h3>Numero de téléphone:</h3><input type="numer" name="numer"></br></br>
      <input type="submit" name="valider">

  </form>

 <h1>Bonjour, <?php echo $_SESSION['username']; ?></h1>
 <br>
 <a href="?action=add">Ajouter </a>
 <a href="?action=modify">Modifier </a>
 <a href="?action=delete">Supprimer</a>




