


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
<h3><a href = ""><?php echo "Groupre : " .$groupes;?></a><br /></h3>

<!-- TEAMS -->
<?php
for ($i2=0; $i2 < count($content->groups[$i]->teams) ; $i2++)
{
$teams = $content->groups[$i]->teams[$i2];
?>
<a href = ""><?php echo " $teams <br />"?></a>
<?php
}
}
?>

<br /><br />

<br />
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
</style>
</body>
</html>
