<?php

echo 'Avant la boucle for<br>';
$tabNb = array(10,25,358,48,2);
// parcourir un tableau avec un nombre connu d'éléments ici 5
// la fonction count() retourne le nombre d'éléments de notre tableau
// count() est similaire à .length en JS
for($i = 0;$i < count($tabNb);$i++){
    echo 'Nombre '.$tabNb[$i].'<br>';
}
echo 'Après la boucle for';

// cas des boucles infinis

// cas N° 1
// for($i = 0;;$i++){
//     echo 'Nombre '.$tabNb[$i].'<br>';
// }
// cas N° 2
// for($i = 0;$i < count($tabNb);){
//     echo 'Nombre '.$tabNb[$i].'<br>';
// }



echo 'Avant la boucle for en décrémentation<br>';
// Décrémentation et donc parcours de la fin vers le début 
for ($i = count($tabNb) - 1; $i >= 0; $i--){
    echo 'Nombre '.$tabNb[$i].'<br>';
}
echo 'Après la boucle for en décrémentation';

?>