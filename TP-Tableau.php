<?php 
//Etape 1 - Creer un tableau de 0 à 41
$tableau = range(0,41);

//Etape 2 - Melanger ce tableau
shuffle($tableau);

//Etape 3 - A partir du tableau mélangé créer un tableau de 16 entiers aléatoires 
$rand_tableau = array_rand($tableau,16);

//Etape 4 - 
$randTableau = array_merge($rand_tableau, $rand_tableau);

//Etape 5 
shuffle($randTableau);

//Etape 6 
print_r(array_values($randTableau));
