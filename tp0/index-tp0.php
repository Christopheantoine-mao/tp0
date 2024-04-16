<?php
/*1 == 1 est TRUE(vrai) true
2 != 3 est TRUE         (false)
!true est FALSE(faux)  (true) 
true ET true ;          (true)
true ET false ;         (true)
false OU true ;         (true)
true OU false ;          (true) 
(true ET false) OU true ; (false)
(true OU false) ET true ; (false)
!false ;                   (true)
!true ;                   (false)
!(true OU false) ;        (false)
!(true ET false) ;       (true)
(age < 25 ET nb >= 10), l'utilisateur saisit age = 15 et nb = 30 ;(true)
(age == 18 OU nb != 10), l'utilisateur saisit age = 15 et nb = 30 ;(true)
(age == 18 OU age == 30 OU age != 15), l'utilisateur saisit 15 ;(false)
(age == 18 OU age == 30 OU age != 15), l'utilisateur saisit 25 ;(true)
!(age == 18 OU age == 30 OU age != 15), l'utilisateur saisit 18 ;(false)
!(age == 18 OU age == 30 OU age != 15), l'utilisateur saisit 30 ;(false)
(annee == 2022 ET mois == "novembre" ET jour == "14"), donnez les valeurs d'année, mois et jour qui permettent d'évaluer la condition à vrai ;*
mois=="novembre" et jour = "14"
2 Moment de la journée
Affichez en fonction d'une heure, le moment de la journée s'il s'agit :

Du matin entre 6 et 12
De l'après-midi entre 12h et 18h
De la soirée entre 18h et 00h
La nuit entre 00h et 6*/

function momentjournee ($heure){
    if ($heure >= 6 && $heure < 12) {
        return "Du matin";
    } elseif ($heure >= 12 && $heure < 18) {
        return "De l'après-midi";
    } elseif ($heure >= 18 || $heure == 0) {
        return "De la soirée";
    } else {
        return "La nuit";
    }

}
//Boucles et tableaux
//1 boucle classique
//Écrivez un programme qui affiche 10 fois le message "Hello World".
for ($i = 0; $i < 10; $i++) {
    echo "Hello World<br>";
}


//2 suite numérique
//Écrivez un programme qui affiche 100, 99, 98, 97, 96, 95, 94, 93, 92, 91, 90.

function genererSequence() {
    for ($i = 100; $i <= 0; $i--) {
        for ($j = 0; $j <= $i; $j--) {
            echo $i;
        }
    }
}



//3 Paris
//Écrivez un programme qui affiche tous les codes postaux du département 75.

function codepos() {
    for ($i = 75001; $i <= 75020; $i++) {
        echo $i . "<br>";
    }
}



//4 code postaux
//Écrivez un programme qui affiche tous les codes postaux possibles du département 69 en utilisant la boucle while.
function afficheCodesPostaux69() {
    $code = 69001; // Premier code postal du département 69
    while ($code <= 69999) { // Dernier code postal du département 69
        echo $code . "<br>";
        $code++;
    }
}
//## Fonctions

### 1 année bissextile

//Ecrivez une fonction pour évaluer si une année est [bissextile](https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile).

### 2 contenu d'une phrase

//1. Ecrivez uen fonction qui affiche le nombre de voyelles à partir d'une phase
//2. Ecrivez uen fonction qui affiche le nombre de consonnes à partir d'une phase
//3. Ecrivez uen fonction qui affiche le nombre des caractères spéciaux à partir d'une phase

function estBissextile($annee) {
    if (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0)) {
        return "L'année $annee est bissextile.";
    } else {
        return "L'année $annee n'est pas bissextile.";
    }
}
?>


<?php
function nombreVoyelles($phrase) {
    $voyelles = "aeiouyAEIOUY";
    $count = 0;
    for ($i = 0; $i < strlen($phrase); $i++) {
        if (strpos($voyelles, $phrase[$i]) !== false) {
            $count++;
        }
    }
    return "Nombre de voyelles: " . $count;
}
?>


<?php
function nombreConsonnes($phrase) {
    $consonnes = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
    $count = 0;
    for ($i = 0; $i < strlen($phrase); $i++) {
        if (strpos($consonnes, $phrase[$i]) !== false) {
            $count++;
        }
    }
    return "Nombre de consonnes: " . $count;
}
?>



<?php
function nombreCaracteresSpeciaux($phrase) {
    $alphanumerique = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $count = 0;
    for ($i = 0; $i < strlen($phrase); $i++) {
        if (strpos($alphanumerique, $phrase[$i]) === false) {
            $count++;
        }
    }
    return "Nombre de caractères spéciaux: " . $count;
}
?>


<?php
function estPalindrome($mot) {
    $motNormalise = strtolower(str_replace(' ', '', $mot)); // Normaliser en minuscule et sans espaces
    return $motNormalise === strrev($motNormalise) ? 'true' : 'false';
}
?>




<?php
### 4 max d'un tableau

//Ecrivez un programme qui retourne le nombre le plus élevé dans un tableau contenant N nombres entiers.

//Exemple

//*En entrée : `[10, 25, 6, 8, 9, 101 ,4]`*//
//-*En sortie : `101`*//
function maxTableau($tableau) {
    return max($tableau);
}

?>




<?php
//1.Ecrivez un programme qui retourne le mot le plus long d'une phrase.

//Exemple

//*En entrée : `Ceci est une belle phrase`*
//*En sortie : `phrase`*
function motLePlusLong($phrase) {
    $mots = explode(' ', $phrase);
    return array_reduce($mots, function($a, $b) {
        return strlen($a) > strlen($b) ? $a : $b;
    });
}
?>



<?php
//2. Ecrivez un programme qui retourne la taille du mot le plus petit d'une phrase.

//Exemple

//*En entrée : `elle est courte cette phrase`*
//*En sortie : `3`*
function tailleMotLePlusPetit($phrase) {
    $mots = explode(' ', $phrase);
    return array_reduce($mots, function($a, $b) {
        return strlen($a) < strlen($b) ? strlen($a) : strlen($b);
    }, strlen($phrase));
}
?>





<?php
//3. Ecrivez un programme qui retourne la taille du mot le plus long d'une phrase.

//Exemple

//*En entrée : `elle est plus longue cette phrase`*
//*En sortie : `6`*
function tailleMotLePlusLong($phrase) {
    $mots = explode(' ', $phrase);
    return array_reduce($mots, function($a, $b) {
        return strlen($a) > strlen($b) ? strlen($a) : strlen($b);
    }, 0);
}
?>
<?php
### 10 Température

//Ecrivez un programme qui permet d'afficher la moyenne des températures relevées d'un patient et l'écart par rapport à la température corporelle normale de 37°C

function moyenneEcartTemperature($temperatures) {
    $moyenne = array_sum($temperatures) / count($temperatures);
    $ecart = abs(37 - $moyenne);
    return ['moyenne' => $moyenne, 'ecart' => $ecart];
}

?>

<?php
### 11 Transformation degré Celsius en Fahrenheit

//Pour convertir en degrés Celsius une température donnée en degrés Fahrenheit, il suffit de soustraire 32 et de diviser par 1,8 (9/5 = 1,8) le nombre ainsi obtenu. Pour 50 °F , on obtient : 50 - 32 = 18, puis 18/1,8 = 10 ; donc 50 °F = 10 °C .

//1. Ecrivez un programme qui permet de transformer une température en degré Celsius en Fahrenheit.
function celsiusEnFahrenheit($celsius) {
    return $celsius * 1.8 + 32;
}

//2. Ecrivez un autre programme qui permet de transformer une température en Fahrenheit en degré Celsius.

function fahrenheitEnCelsius($fahrenheit) {
    return ($fahrenheit - 32) / 1.8;
}

?>