<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>les responses</title>
	</head>
	<body>
		<h2>Résultat</h2>
<?php
$reponse1 = "ophiocordyceps";
$gudCounter = 0;
// on vérifie que la variable existe
	//QUESTION 1
if ( isset($_POST["ans1"]) && strcasecmp($_POST["ans1"], $reponse1) == 0) {
	$gudCounter++;
	print "<p><strong>GUD ANSWER 1! GGWP</strong></p>";
}
	else { print "<p>Question 1: Faux! La réponse était ophiocordyceps </p> <a href='https://fr.wikipedia.org/wiki/Ophiocordyceps'> <i>plus de détails sur l'Ophiocordyceps</i> </a>";}

	//QUESTION 2
if (isset($_POST["ans2_1"]) && isset($_POST["ans2_2"]) && isset($_POST["ans2_3"]) && $_POST["ans2_1"]=="on" && $_POST["ans2_2"]=="on" && $_POST["ans2_3"]=="on"){
	$gudCounter++;
	print "<p><strong>GUD ANSWER 2! GGWP</strong></p>";
}
	else { print "<p>Question 2: Faux! Pokemon Arceus est Terrible, Honteux et Mauvais à la fois! </p>";}

	//QUESTION 3
if (isset($_POST["ans3"]) && $_POST["ans3"] == "a") {
	$gudCounter++;
	print "<p><strong>GUD ANSWER 3! GGWP</strong></p>";
}
	else { print "<p>Question 3: Faux! La réponse était Blender ÉVIDEMMENT </p> <a href='https://www.blender.org/'> <i>Site officiel de Blender</i> </a>";}

	//QUESTION 4
if (isset($_POST["ans4"]) && $_POST["ans4"] == "c") {
	$gudCounter++;
	print "<p><strong>GUD ANSWER 4! GGWP</strong></p>";
}
	else { print "<p>Question 4: Faux! Blender est open source donc il est mis à jours plus rapidement que tous les autres réunis! </p> <a href='https://www.blender.org/'> <i>Site officiel de Blender</i> </a>";}

	//QUESTION 5
if (isset($_POST["ans5"])) {
	$gudCounter++;
	print "<p><strong>GUD ANSWER 5! GGWP</strong> (les goûts et les moteurs graphiques ça ne se discute pas) </p>";
}
	else { print "<p>Question 5: Faux! Il fallait CHOISIR";}
	
	//QUESTION 6
if (isset($_POST["ans6_1"]) && isset($_POST["ans6_2"]) && isset($_POST["ans6_3"]) && isset($_POST["ans6_4"]) && $_POST["ans6_1"]==1 && $_POST["ans6_2"]==3 && $_POST["ans6_3"]==4 && $_POST["ans6_4"]==2 ) {
	$gudCounter++;
	print "<p><strong>GUD ANSWER 6! GGWP</strong> (C'est cher les ophiocordyceps, jusqu'à 135000$/kg, contre 10$ la paire de chaussete, 0.01$ le v-buck (monnaie virtuelle de fortnite) et 0.0085$ pour un rouble) </p>";
}
	else { print "<p>Question 6: Faux! L'ordre à respecter était 1-3-4-2";}

	//QUESTION 7
if (isset($_POST["ans7"]) && $_POST["ans7"]=="c") {
	$gudCounter++;
	print "<p><strong>GUD ANSWER 7! GGWP</strong> (C'est toutes de mauvaises entreprises mais en ce moment nintendo est la pire) </p>";
}
	else { print "<p>Question 7: Faux! Nintendo est la pire des 4!";}

	//QUESTION 8
if (isset($_POST["ans8"]) && $_POST["ans8"]=="la réponse à cette question:") {
	$gudCounter++;
	print "<p><strong>GUD ANSWER 8! GGWP</strong> (malinx le lynx) </p>";
}
	else { print "<p>Question 8: Faux! Échec!";}
		

if ($gudCounter==(0)) print"<h1> <b>LMAO BIG NUB</b></h1>";
print "<p> Vous avez $gudCounter/10 bonnes réponses !</p>";
?>
	</body>
</html>
