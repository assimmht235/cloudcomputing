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
	
	<center><h1>Les Restaurants de la ville de Constantine</h1></center><hr/>

	 <table>
	 	<tr>
	 		<td style="width:450px;"></td>
	 		<td>

	<?php 
	   $query_string="
		    SELECT  *
			FROM resto
			ORDER BY moy_g DESC
		 ";	 
		$suggestion = $bdd-> prepare($query_string);	
		$suggestion->execute();
	  while($a = $suggestion->fetch())
	  {
		 ?>
		 <p>
	<table class="ex3">
	  <tr>
	  <td style="text-align:left;vertical-align:top;" rowspan="3">&nbsp;&nbsp;<img src="img/<?php echo $a['image']; ?>"  alt="photo de profil" width="250px"  class="img-rounded"/></td>
	  </tr>
	  <tr>
	  <td style="text-align:left;vertical-align:top;">
	  	<font style="font-size:170%;"><a href="avis.php?id_r=<?php echo $a['id_r']; ?>"><?php echo $a['nom']; ?></a></font>
        <br/><p></p>
        <font style="font-size:130%;color:red;">Note et avis : <?php echo round($a['moy_g'],2, PHP_ROUND_HALF_UP); ?>/20</font>
        <!-- <br/><p></p>
	  	<font style="font-size:130%;"><a href="avis.php?id_r=<?php echo $a['id_r']; ?>">Donner votre avis</a></font> -->
	  </td>
	  </tr>
	  </table>
	  </p>
	<?php } ?>
	</td>
	 </tr>
	</table>
</body>
</html>