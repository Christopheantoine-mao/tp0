# TP Consolidation des notions d'algorithmie

## Consignes

**Choix libre des exercices en fonction de vos besoins, difficultés ou obstacles**.
Si vous souhaitiez revoir les bases théoriques de PHP, allez directement sur la partie [coding game](tp0.md#coding-game)

---

## Conditions

### 1 évaluation vrai et faux

Donnez les résultats (vrai ou faux) de l'évaluation des conditions ci-dessous.

***Exemples***

- *1 == 1 est TRUE(vrai)*
- *2 != 3 est TRUE*
- *!true est FALSE(faux)*

1. true ET true ;
2. true ET false ;
3. false OU true ;
4. true OU false ;
5. (true ET false) OU true ;
6. (true OU false) ET true ;
7. !false ;
8. !true ;
9. !(true OU false) ;
10. !(true ET false) ;
11. (age < 25 ET nb >= 10), l'utilisateur saisit age = 15 et nb = 30 ;
12. (age == 18 OU nb != 10), l'utilisateur saisit age = 15 et nb = 30 ;
13. (age == 18 OU age == 30 OU age != 15), l'utilisateur saisit 15 ;
14. (age == 18 OU age == 30 OU age != 15), l'utilisateur saisit 25 ;
15. !(age == 18 OU age == 30 OU age != 15), l'utilisateur saisit 18 ;
16. !(age == 18 OU age == 30 OU age != 15), l'utilisateur saisit 30 ;
17. (annee == 2022 ET mois == "novembre" ET jour == "14"), donnez les valeurs d'année, mois et jour qui permettent d'évaluer la condition à vrai ;

### 2 Moment de la journée


Affichez en fonction d'une heure, le moment de la journée s'il s'agit :
- Du matin entre 6 et 12
- De l'après-midi entre 12h et 18h
- De la soirée entre 18h et 00h
- La nuit entre 00h et 6

---

## Boucles et tableaux

### 1 boucle classique

Écrivez un programme qui affiche 10 fois le message "Hello World".

### 2 suite numérique

Écrivez un programme qui affiche 100, 99, 98, 97, 96, 95, 94, 93, 92, 91, 90.

### 3 Paris

Écrivez un programme qui affiche tous les codes postaux du département 75.

### 4 code postaux

Écrivez un programme qui affiche tous les codes postaux possibles du département 69 en utilisant la boucle while.

---

## Fonctions

### 1 année bissextile

Ecrivez une fonction pour évaluer si une année est [bissextile](https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile).

### 2 contenu d'une phrase

1. Ecrivez uen fonction qui affiche le nombre de voyelles à partir d'une phase
2. Ecrivez uen fonction qui affiche le nombre de consonnes à partir d'une phase
3. Ecrivez uen fonction qui affiche le nombre des caractères spéciaux à partir d'une phase

### 3 palindrome

Ecrivez un programme qui vérifie qu'un mot est un [palindrome](https://www.larousse.fr/dictionnaires/francais/palindrome/57418). **Pour simplifier l'exercice, on se focalise uniquement sur un mot et pas une phrase.**

Exemples

*En entrée : `rats`*
*En sortie : `false`*

*En entrée : `elle`*
*En sortie : `true`*

*En entrée : `Laval`*
*En sortie : `true`*

*En entrée : `gag`*
*En sortie : `true`*


### 4 max d'un tableau

Ecrivez un programme qui retourne le nombre le plus élevé dans un tableau contenant N nombres entiers.

Exemple

*En entrée : `[10, 25, 6, 8, 9, 101 ,4]`*
*En sortie : `101`*

### 5 les mots

1.Ecrivez un programme qui retourne le mot le plus long d'une phrase.

Exemple

*En entrée : `Ceci est une belle phrase`*
*En sortie : `phrase`*

2. Ecrivez un programme qui retourne la taille du mot le plus petit d'une phrase.

Exemple

*En entrée : `elle est courte cette phrase`*
*En sortie : `3`*

3. Ecrivez un programme qui retourne la taille du mot le plus long d'une phrase.

Exemple

*En entrée : `elle est plus longue cette phrase`*
*En sortie : `6`*

### 6 nombre aléatoires

1. En utilisant la fonction *rand()*, remplissez un tableau avec 10 nombres aléatoires compris entre 0 et 100. Puis, testez si le chiffre donné en paramètre est présent dans le tableau en retournant true ou false. 

2. En utilisant la fonction *rand()*, remplissez un tableau avec 10 nombres aléatoires compris entre 0 et 100. Répartir ensuite les valeurs dans deux tableaux distincts. Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50.

### 7 transformation tableau 2 dimension à une

Ecrivez un programme qui retourne dans un tableau à une dimension, le maximum de chaque sous-tableau (initialement un tableau à 2 dimensions)

Exemple 

*En entrée : [ [10,7,6,8], [15,-1,56,7], [75,4,-5,-100] ]*

*En sortie : [10,56,75]*

### 8 transformation hexadécimale en décimal

Le système décimal est à base 10 (0, 1, 2, 3, 4, 5, 6, 7, 8, 9)
Le système hexadécimal est à base (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F)

1. Ecrivez un programme qui permet de transformer une donnée décimale en hexadécimal.
2. Ecrivez un autre programme qui permet de transformer une donnée hexadécimale en décimal

### 9 photocopie

[source cours.pise](http://cours.pise.info/algo/enonces4.htm)

Un magasin de reprographie facture 0,10 E les dix premières photocopies, 0,09 E les vingt suivantes et 0,08 E au-delà. 

Ecrivez un programme qui demande à l’utilisateur le nombre de photocopies effectuées et qui affiche la facture correspondante.

### 10 Température

Ecrivez un programme qui permet d'afficher la moyenne des températures relevées d'un patient et l'écart par rapport à la température corporelle normale de 37°C

### 11 Transformation degré Celsius en Fahrenheit

Pour convertir en degrés Celsius une température donnée en degrés Fahrenheit, il suffit de soustraire 32 et de diviser par 1,8 (9/5 = 1,8) le nombre ainsi obtenu. Pour 50 °F , on obtient : 50 - 32 = 18, puis 18/1,8 = 10 ; donc 50 °F = 10 °C .

1. Ecrivez un programme qui permet de transformer une température en degré Celsius en Fahrenheit.
2. Ecrivez un autre programme qui permet de transformer une température en Fahrenheit en degré Celsius.

---

## Jeux

### Coding game

- [Bases PHP](https://www.codingame.com/playgrounds/34845/le-php---les-bases-du-langage/introduction)
- [Exercices](https://www.codingame.com/playgrounds/41820/exercice-php---base/remarque)
- [Cours et exercices](https://www.codingame.com/playgrounds/98407/initiation-a-la-programmation-avec-php-script/hello-world)

### Blocky

1. Effectuez ce [jeu de labyrinthe](https://blockly.games/maze?lang=fr)
2. Effectuez ce [jeu de tortue](https://blockly.games/turtle?lang=fr)

### S'entrainez aux expressions régulières

Apprenez les [expressions régulières](https://regexlearn.com/fr/learn/regex101)

#### Niveau zéro

- [Tutoriel](https://regexcrossword.com/challenges/tutorial/puzzles/1)

#### Niveau débutant

- [Débutant](https://regexcrossword.com/challenges/beginner/puzzles/1)

#### Niveau Intermédiaire

- [Intermédiaire](https://regexcrossword.com/challenges/intermediate/puzzles/1)

## Bonus niveau expert

- [Expert](https://regexcrossword.com/challenges/experienced/puzzles/1)