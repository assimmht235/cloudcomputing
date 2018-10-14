<?php 

$bdd= new PDO('mysql:host=127.0.0.1;dbname=clco;charset=utf8mb4','root','');   
       
  if(isset($_POST['envoyer']))
  {           
     $query_string="
      SELECT  *
      FROM resto
      where id_r = ?
     ";  
    $suggestion = $bdd-> prepare($query_string);  
    $suggestion->execute(array($_POST['id_r']));
    $a = $suggestion->fetch();

    $moyenne = ($_POST['qn'] + $_POST['qsalle'] + $_POST['qservice'])/3;

   $insertonlinembr =$bdd->prepare("INSERT INTO avisresto(id_r,nom_r,q_n,q_salle,q_service,moyenne) VALUES(?,?,?,?,?,?)");
   $insertonlinembr->execute(array($_POST['id_r'],$a['nom'],$_POST['qn'],$_POST['qsalle'],$_POST['qservice'],$moyenne));

   if($a['moy_g']==0){

     $moy_generale = $moyenne ;

   }else{
     
    $moy_generale = ($moyenne + $a['moy_g'])/2 ;

   }
   
   $update = $bdd->prepare("UPDATE resto SET moy_g = :moy_g WHERE id_r = :id_r ");
   $update->execute(array(
                  'moy_g' => $moy_generale,
                  'id_r' => $_POST['id_r'] 
   ));

  header("Location: index.php");  

  }else{

  header("Location: index.php");  

  }
  ?>    