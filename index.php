
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
// $heure = (int)readline('Entrez une heure : '); /* CONVERSION EN ENTIER */
// if((9 > $heure || $heure > 12) && (14 > $heure || $heure > 17)) {
//   echo "Le magasin sera fermé";
// }else {
//   echo "Le magasin sera ouvert";
// } 


// INVERSER UNE CONDITION AVEC !
// $heure = (int)readline('Entrez une heure : '); /* CONVERSION EN ENTIER */
// if(!((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17))) {
//   echo "Le magasin sera fermé";
// }else {
//   echo "Le magasin sera ouvert"; 
// }



// LES BOUCLES

// LA BOUCLE "while"
// $chiffre = null;

// while ($chiffre !== 10) {
//   $chiffre = (int)readline("Entrez une valeur :");
//   break;
// }

// echo "Bravo vous avez gagné !";


// LA BOUCLE "for
// for($i = 0; $i < 10; $i++) {
//   echo "- $i \n";
// }


// INCREMENTATION DE 2
// for($i = 0; $i < 10; $i += 2) {
//   echo "- $i \n";
// }
// DECREMENTATION DE 2
// for($i = 100; $i > 10; $i -= 2) {
//   echo "- $i \n";
// }



// LA BOUCLE "forEach"
// $notes = [13.50, 17.50, 18, 13.50];
// foreach ($notes as $note) {
//   echo "- $note \n";
// }


// RECUPERATION AVEC LA CLE
// $notes = [13.50, 17.50, 18, 13.50];
// $eleves = [
//   "cm2" => "Mamouss",
//   "cm1" => "Papou"
// ];
// foreach ($eleves as $classe => $eleve) {
//   echo "$eleve est dans la classe $classe \n";
// }



// $notes = [13.50, 17.50, 18, 13.50];
// $eleves = [
//   "cm2" => ["Mamouss", "Mimi", "Ami", "Nè", "Toumou"],
//   "cm1" => ["Papou", "tamba", "Ablo", "Sixo"]
// ];
// foreach ($eleves as $classe => $listeEleves) {
//   echo "La classe $classe : \n";
//   foreach ($listeEleves as $eleve) {
//     echo "- $eleve\n";
//   }
//   echo "\n";
// }

/*
Demande à l'utilisateur de renter une note ou de taper "fin"
chaque note es sauvegardée dans un tableau $note (pensez $notes[])
à la fin on affiche le tableau de note sous forme de liste

PSEUDOCODE
TANT QUE l'utilisateur ne tape "fin"
On ajoute la note tapée au tableau notes
POUR CHAQUE note note DANS notes
On affiche "- note"
*/
// $notes = [];
// $action = null;

// // TANT QUE l'utilisateur ne tape "fin"
// while ($action !== 'fin') {
//   $action = readline("Entrer une nouvelle note (ou 'fin' pour terminer la saisie) :");
//   // On ajoute la note tapée au tableau notes
//   if ($action !== 'fin') {
//     $notes[] = $action;
//   }
// }

// // POUR CHAQUE NOTE DANS notes
// foreach ($notes as $note) {
//   // on affiche "- note"
//   echo "- $note \n";
// }



/*
On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert.

PSEUDOCODE
On demande à l'utilisateur de rentrer un creneaux
on demande l'heure de début
On demande l'heure de fin
On vérifie que l'heure de début  < l'heure de fin
on demande si on veut rajouter un nouveau creneaux (o/n)
On demande à l'utilisateur de rentrer un heure
On affiche l'état d'ouverture du magasin
*/

$creneaux = [];

while (true) {
  $debut = (int)readline("Heure d'ouverture : ");
  $fin = (int)readline("Heure de fermeture : ");
  if($debut >= $fin) {
    echo "Le créneaux ne peut pas être enregistré car l'heure d'ouverture ($debut) est superieur à l'heure de fermeture ($fin)";
  }else {
    $creneaux[] = [$debut, $fin];
    $action = readline("Entrez un nouveau créneau ? (n) : ");
    if ($action === 'n') {
      break;
    }
  }
}

// Le magasin est ouvert de 14h à 18h et de 9h à 12h
echo "le magasin es ouvert de";
foreach($creneaux as $k => $creneau) {
  if ($k > 0) {
    echo 'et de';
  }
  echo "{$creneau[0]}h à {$creneau[1]}h";
}

// $heure = (int)readline("A qu'elle heure voulez vous visiter le magasin ?");
// $creneauTrouve = false;

// foreach($creneaux as $creneau) {
//   if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
//     $creneauTrouve = true;
//     break;
//   }
// }

// if($creneauTrouve){
//   echo "Le magasin sera ouvert";
// }else {
//   echo "Désolée, le magasin sera fermé :(";
// }

// print_r($creneaux);