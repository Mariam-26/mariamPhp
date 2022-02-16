
<?php
// LES TABLEAUX


// $eleve = ["Mariam", "Ouédraogo", [18, 13.65, 17.50, 16.50]];
// echo $eleve[2][3];


// $eleve = [
//   "nom" => "Ouédraogo",
//   "prenom" => "Mariam",
//   "notes" => [18, 13.65, 17.50, 16.50]
// ];
// echo $eleve["prenom"] . "\n";
// $eleve["prenom"] = "Olivia";
// $eleve["notes"][1] = 17;



// PRINT_R => (représention graphique)
// print_r($eleve["notes"]);



// echo $eleve["prenom"] . " " . $eleve["nom"];



// LES CONDITIONS


// IF - ELSE
// $note = 12;
// $note = readline('Entrez votre note :'); /* SANS CONVERSION EN ENTIER */
// IF - ELSE
// if($note >= 10){
//   echo 'Dit donc vous avez la moyenne !';
// }else {
//   echo "Domage vous n'avez pas la moyenne";
// }



// SOUS CONDITIONS
// if($note >= 10){
//   if($note == 10){
//     echo "Vous avez juste la moyenne";
//   }else {
//     echo 'Dit donc vous avez la moyenne !';
//   }
// }else {
//   echo "Domage vous n'avez pas la moyenne";
// }



// $note = (int)readline('Entrez votre note :'); /* CONVERSION EN ENTIER */
// IF - ELSE IF - ESLSE
// if($note > 10){
//   echo 'Bravo vous avez la moyenne';
// }elseif ($note === 10){
//   echo "vous avez juste la moyenne";
// }else {
//   echo "Dommage vous n'avez pas la moyenne";
// }



// SWITCH CASE
// $action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)'); /* CONVERSION EN ENTIER */
// switch ($action) {
//   case 1:
//     echo "j'attaque !";
//     break;
//   case 2:
//     echo "Je me défends";
//     break;
//   case 3:
//     echo "Je ne fais rien";
//     break;
//   default:
//     echo "Commande inconnue";
// }


// LES OPERATEURS LOGIQUES
/*
VRAI && VRAI = VRAI
VRAI && FAUX = FAUX
FAUX && FAUX = FAUX

VRAI || VRAI = VRAI
VRAI || FAUX = VRAI
FAUX || FAUX = FAUX
*/

// $heure = (int)readline('Entrez une heure : '); /* CONVERSION EN ENTIER */
// if((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
//   echo "Le magasin sera ouvert";
// }else {
//   echo "Le magasin sera fermé";
// }


// INVERSER UNE CONDITION AVEC OPERATEUR LOGIQUE
$heure = (int)readline('Entrez une heure : '); /* CONVERSION EN ENTIER */
if((9 > $heure || $heure > 12) && (14 > $heure || $heure > 17)) {
  echo "Le magasin sera fermé";
}else {
  echo "Le magasin sera ouvert";
}


// INVERSER UNE CONDITION AVEC !
$heure = (int)readline('Entrez une heure : '); /* CONVERSION EN ENTIER */
if(!((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17))) {
  echo "Le magasin sera fermé";
}else {
  echo "Le magasin sera ouvert"; 
}

