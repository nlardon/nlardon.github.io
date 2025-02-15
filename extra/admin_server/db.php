<html>
	<head>
			<title>Test Site SN</title>
	</head>
	<body>
		<?php echo '<p>Bonjour le monde</p>'; ?>
		
		
<?php
try
{
		$bdd = new PDO('mysql:host=localhost;dbname=europe;charset=utf8', 'root','edison');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<?php
$reponse = $bdd->query('SELECT * FROM capitales');

while ($donnees = $reponse->fetch())
{
echo $donnees['ville']; 
echo " - ";
echo $donnees['population'];
echo " - ";
echo $donnees['pays'];
?>
<br>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

	</body>
</html>
