<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    $arrivee = htmlspecialchars($_POST["arrivee"]);
    $depart = htmlspecialchars($_POST["depart"]);
    $chambre = htmlspecialchars($_POST["chambre"]);
    $preferences = htmlspecialchars(trim($_POST["preferences"]));

 
    $donnees = "Nom: $nom | Prénom: $prenom | Arrivée: $arrivee | Départ: $depart | Chambre: $chambre | Préférences: $preferences\n";


    $fichier = 'reservations.txt';
    if (file_put_contents($fichier, $donnees, FILE_APPEND | LOCK_EX)) {
        echo "Réservation enregistrée avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement.";
    }
} else {
    echo "Accès interdit.";
}
?>
