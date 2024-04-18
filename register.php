<?php
// Connexion à la base de données (à adapter selon votre configuration)
$host = "localhost";
$dbname = "votre_base_de_donnees";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurer PDO pour lever des exceptions en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier que le mot de passe est supérieur à 8 caractères
    if (strlen($password) > 8) {
        // Le mot de passe est valide, insérer les données dans la base de données
        try {
            $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password_hash); // Vous devriez utiliser le hachage du mot de passe dans une vraie application
            $stmt->execute();
            echo "Inscription réussie!";
        } catch (PDOException $e) {
            echo "Erreur lors de l'inscription: " . $e->getMessage();
        }
    } else {
        echo "Le mot de passe doit avoir plus de 8 caractères.";
    }
}
?>
