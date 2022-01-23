
<?php
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
// print_r($eleve["notes"]);

// echo $eleve["prenom"] . " " . $eleve["nom"];
$classe = [
  [
    "nom" => "Ouédraogo",
    "prenom" => "Mariam",
    "notes" => [18, 13.65, 17.50, 16.50]
  ],
  [
    "nom" => "Darivon",
    "prenom" => "Dominique",
    "notes" => [19, 17, 17.50, 19.50]
  ]
];
  
echo $classe[1]["notes"][3];

