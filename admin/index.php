
<?php 
 session_start();

$user = 'Dabo';
$Password_difinit= '12342';

  if (isset($_POST ['submit'])) {

	$username = $_POST['username'];
   $Password = $_POST['Password'];

	if ($username&&$Password){
	
     if ($username==$user&&$Password==$Password_difinit){
     	 
     	 $_SESSION['username']=$username;
     	 header('location: ../admin/admin.php');
     	
     }else{
    	echo "identifiant erronés";
 }

    }else {
		echo "Veuillez remplir les champs";
	}
    
       }
  ?>

<h3>Administration Connexion</h3>
<form action=""method="POST">
<h3>Pseudo :</h3><input type="text" name="username"></br></br>
<h3>Mot de pass :</h3><input type="Password" name="Password"></br></br>
<input type="submit" name="submit"></br></br>


</form>