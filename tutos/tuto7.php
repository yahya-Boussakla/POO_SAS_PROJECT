<?php

class Livre {
    // ...
}

class Auteur {
    // ...
}

// Fonction pour enregistrer un objet Livre dans un fichier JSON
function enregistrerLivreDansFichier(Livre $livre, string $fichier) {
    $json = json_encode($livre, JSON_PRETTY_PRINT);
    file_put_contents($fichier, $json);
}

// Fonction pour lire un objet Livre depuis un fichier JSON
function lireLivreDepuisFichier(string $fichier) : Livre {
    $json = file_get_contents($fichier);
    return json_decode($json);
}
    

?>