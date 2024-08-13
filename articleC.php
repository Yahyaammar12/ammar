<?php

require '../config.php';

class article
{

    public function listrearticle()
    {
        $sql = "SELECT * FROM article";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletearticle($ide)
    {
        $sql = "DELETE FROM article WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $ide);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addarticle($reclamation)
    {
        $sql = "INSERT INTO article  
        VALUES (NULL, :nom,:prix, :descriptione,:photo, :categorie)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $article->getNom(),
                'prix' => $article->getPrix(),
                'descriptione' => $article->getDescriptione(),
                'photo' => $article->getPhoto(),
                'categorie' => $article->getCategorie(),

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function showArticle($id) {
        $sql = "SELECT * FROM article WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
            $article = $req->fetch(PDO::FETCH_ASSOC);
            return $article;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

}
