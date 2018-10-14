<?php $bdd= new PDO('mysql:host=127.0.0.1;dbname=clco;charset=utf8mb4','root',''); ?>
<html>
<head>
 <title>Restaurant</title>
<style type="text/css">
	table.ex3 {
    border-collapse: separate;
    border-spacing: 5px;
}
</style>
</head>

<body>

	<?php 
	   $query_string="
		    SELECT  *
			FROM resto
			where id_r = ?
		 ";	 
		$suggestion = $bdd-> prepare($query_string);	
		$suggestion->execute(array($_GET['id_r']));
	  $a = $suggestion->fetch();
  ?>
		<center><h1>Bienvenue chez <?php echo $a['nom']; ?></h1></center><hr/>
		 <p>
	<table class="ex3">
	  <tr>
	  <td style="text-align:left;vertical-align:top;">&nbsp;&nbsp;<img src="img/<?php echo $a['image']; ?>"  alt="photo de profil" width="500px"  class="img-rounded"/><p></p></td>
    <td style="width:100px;"></td>
	  <td style="text-align:left;vertical-align:top;">
	  	
	  	<font style="font-size:170%;"><b>Tout les avis</b></font><hr/>
	  <p></p>
        <?php 
     $query_stringr="
        SELECT  *
      FROM avisresto
      where id_r = ?
     ";  
    $suggestionr = $bdd-> prepare($query_stringr);  
    $suggestionr->execute(array($_GET['id_r']));
    while($ar = $suggestionr->fetch()){ 
  ?>
  Qualité de la nourriture : <?php echo $ar['q_n']; ?><p></p>
  Qualité de la salle : <?php echo $ar['q_salle']; ?><p></p>
  Qualité du service : <?php echo $ar['q_service']; ?><p></p>
  <hr/>
  <?php
    }
  ?>
   <font style="font-size:130%;color:red;">Note et avis : <?php echo round($a['moy_g'],2, PHP_ROUND_HALF_UP); ?>/20</font>
</td>
   <td style="width:100px;"></td>
<td style="text-align:left;vertical-align:top;">
    <font style="font-size:170%;"><b>Donner votre avis</b></font><hr/>
  <p></p>
 <form method="POST" action="traiteravis.php">
	  <input type="hidden" value="<?php echo $_GET['id_r']; ?>" name="id_r" />
	  <table>
	  	<tr>
	  	<td>
       <label for="qn">Qualité de la nourriture : </label>
   </td>
   <td>
     <select name="qn" id="qn">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>
</td>
</tr>
<tr>
<td>
    <label for="qsalle">Qualité de la salle : </label>
  </td>
  <td>
     <select name="qsalle" id="qsalle">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>
  </td>
  </tr>
<tr>
  <td>
    <label for="qservice">Qualité du service : </label>
  </td>
  <td>
   <select name="qservice" id="qservice">
   	  <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>
       </td></tr>
	  </table>
    <p></p>
    <input type="submit" name="envoyer">
	</form>
	  </td>
	  </tr>
	  </table>
	  </p>
</body>
</html>