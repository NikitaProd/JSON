
<!-- Un fichier JSON dans PHP  TEST-->

<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
	</head>
	<body>
        <p>
          <?php

          echo "<br />";
          $Titre ="<H1>Un fichier JSON dans PHP</H1><br />";
          echo $Titre;

// json affich

          $json = '{"foo-bar": 12345}';

          $obj = json_decode($json);
          print $obj->{'foo-bar'}; // 12345

          ?>

<br />
<br />

<?php

$json = file_get_contents("cotation_bourse.json");
$parsed_json = json_decode($json);
$date_jour = $parsed_json->{'response'}->{'features'}->{'date'};
print $date_jour;

?>

<br />
<br />

<?php

// récupérer les variables et afficher une phrase qui apparaîtra dans le navigateur

// $json = file_get_contents("cotation_bourse.json");
// var_dump(json_decode($json));
// $parsed_json = json_decode($json);


$date_jour = $parsed_json->{'response'}->{'features'}->{'date'};
$heure_cac40 = $parsed_json->{'cotation_bourse'}[0]->{'bourse'}->{'heure'};
$minute_cac40 = $parsed_json->{'cotation_bourse'}[0]->{'bourse'}->{'minute'};
$nom_compagnie = $parsed_json->{'cotation_bourse'}[0]->{'total'}->{'compagnie'};
$cotation_total = $parsed_json->{'cotation_bourse'}[0]->{'total'}->{'cotation'};
$tendance_total = $parsed_json->{'cotation_bourse'}[0]->{'total'}->{'tendance'};

echo " INFO : Le ${date_jour} à ${heure_cac40} h ${minute_cac40}, la cotation de ${nom_compagnie}
 est de ${cotation_total} et sa tendance de ${tendance_total} % ";

?>


  </p>
	</body>
</html>
