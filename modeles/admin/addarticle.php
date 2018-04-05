<?php

if(!empty($_POST)){
    //le formulaire été envoyé:

    //première chose: on "nettoie" ce que nous a envoyé l'utilisateur (faille XSS)
    // je crée un tableau $post qui va contenir les données nettoyée
    $post = [];
    // trim() => supprime les espaces vides en début et fin de chaine
    // strip_tags() => supprime les balises HTML & PHP
    // le tableau $post contiendra les valeurs saisies dans le formulaire mais nettoyées
    foreach($_POST as $key => $value){
        $post[$key] = trim(strip_tags($value));
    }

    //on crée la variable qui va contenir les éventuelles erreurs
    $errors = [];

    //Vérification des paramètres
    if(!isset($post['nom']) && ($post['nom'] === '')){
        $errors['nom'] = 'Vous devez entrer le nom';
    }

    if(!isset($post['categorie']) && ($post['categorie'] === '')){
        $errors['categorie'] = 'Vous devez selectionner une categorie';
    }

    if(!isset($post['prix']) && ($post['prix'] === '' )){
        $errors['prix'] = 'veuillez entrer un prix';
    }

    if(!isset($post['disponibilite']) && ($post['disponibilite'] === '' )){
        $errors['disponibilite'] = 'veuillez entrer un prix';
    }


    if(isset($post['solde']) && ($post['solde'] ==='')){
        $errors['solde'] = 'veuillez selectionner';

        if(!isset($post['pourcent']) && ($post['pourcent'] ==='')){
            $errors['pourcent'] = 'veuillez entrer un nombre en pourcentage';
        }
    }






    if(empty($errors)){
        //si le tableau $errors est vide, on peut enregistrer dans la bdd

        $resultat = $pdo->prepare('INSERT INTO articles (nom, prix, categorie, disponibilite,date_creation, photo, solde) VALUES (:nom, :prix, :categorie, :disponibilite, :photo, :solde, "'. date('Y-m-d H:i:s') .  '")');
        $resultat->bindValue(':nom', $post['nom']);
        $resultat->bindValue(':prix', $post['prix']);
        $resultat->bindValue(':categorie', $post['categorie']);
        $resultat->bindValue(':disponibilite', $post['disponibilite']);
        $resultat->bindValue(':photo', $post['photo']);
        $resultat->bindValue(':solde', $post['solde']);
        if($resultat->execute()){
            echo '<p class="alert alert-success">Article enregistré</p>';

        }
        else{
            echo '<p class="alert alert-danger">problème lors de l\'enregistremen</p>';
        }

    }
    else{//si le tableau $error n'est pas vide, on affiche les erreurs
        foreach($errors as $error){
            echo '<p class="alert alert-danger">' . $error . '</p>';
        }
    }


}


?>