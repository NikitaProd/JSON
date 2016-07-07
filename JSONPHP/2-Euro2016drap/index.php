


<!-- Exercice PHP Euro2016  PHP JSON -->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>


<?php


// ------------------------  json


$euro = file_get_contents("competition.json");
$content = json_decode($euro);
?>

<br />
<!-- EURO -->
<h1><?php echo "POE ".$content->name; ?></h1>
<hr>

<!-- GROUPS -->

<?php
for ($i=0; $i < count($content->groups); $i++)
{
$groupes = $content->groups[$i]->id;
?>
<h3><br /><br /><a href = ""><?php echo "Groupre : " .$groupes;?></a><br /></h3>


<!-- TEAMS -->
<?php
for ($i2=0; $i2 < count($content->groups[$i]->teams) ; $i2++)
{
$teams = $content->groups[$i]->teams[$i2];
?>

<!-- NOM -->
<?php
for ($i3=0; $i3 < count($content->groups[$i]->teams[$i2]->nom) ; $i3++)
{
$nom = $content->groups[$i]->teams[$i2]->nom;
?>

<!-- FLAG -->
<?php
for ($i4=0; $i4 < count($content->groups[$i]->teams[$i2]->flag) ; $i4++)
{
$flag = $content->groups[$i]->teams[$i2]->flag;
?>



<!-- AFFICH  -->
<div class="nom"><a href = ""><?php echo $nom ?></a> -
  <a href = ""><img src="<?php echo $flag ?>" border="1" /></a>
</div><br />

<?php
}
}
}
}
?>


<br />
<br />
<br />

<!-- #6 Les arrays  Profils-->


<br /><br />
<hr>
<br /><br />


<!-- STYLE ---------------------------------------->

<style>
body{
  background-color: #ccddff;
}

h1{
  color: #002266;
}

h3{
  color: #476b6b;
  font-family: sans-serif;
}

a:link {
    text-decoration: none;
    color: #476b6b;
}

a:visited {
    text-decoration: none;
    color: #476b6b;
}

a:hover{
  text-decoration: underline;
  color: red;
}

img {
    height: 25px;
    width: 25px;
    /*margin: 0,4%;*/
    border-radius: 50%;
    vertical-align: middle;
}

.nom{
  font-size: 15px;
}

</style>
</body>
</html>
