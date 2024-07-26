<?php

// <!-- Préparation des données : -->
    $_ingredients= [
                    "farine" => 800,
                    "lait" => 500,
                    "beurre" => 100,
                    "sucre" => 80,
                    ];
   
     $_actions= [
                    "Coupez" => 800,
                    "mélangez" => 500,
                    "faites revenir" => 100,
                    ];

 // Demander à l’utilisateur :
    $_demande = readline ("Donnez un ingrédient supplémentaire : ");

//  Génération de la recette :
    $recette = "";

    $title= "Recette de gâteau nature \n";

// Traitement des ingrédients :
    in_array("Coupez", $_actions);

    foreach ($_ingredients as $ingredient => $grammes) {
        echo "Votre gâteau contient $grammes grammes de $ingredient.\n";

        
        echo " $_actions[1] le $_ingredients[2]\n";
        echo " $_actions[2] le $_ingredients[3]\n";
        echo " $_actions[1] le $_ingredients[0] et le $_ingredients[1]\n";
        }
  

// Finalisation de la recette :
echo " Servir chaud et déguster !.\n"
?>