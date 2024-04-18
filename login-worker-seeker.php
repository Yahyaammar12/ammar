<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $host = "localhost";
    $dbname = "khedma";
    $username = "root";
    $password = "";

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(mysqli_connect_errno()){
        die("Connection error: " . mysqli_connect_errno());
    }
    echo $email;
    echo $pass;
    $query = "SELECT * FROM reg_seeker WHERE email='$email' AND mot_de_passe='$pass'";

    $result = $conn->query($query);
    $row_count = mysqli_num_rows($result);
echo "Nombre de lignes trouvées : $row_count";
    if($result->num_rows == 1){
        // L'utilisateur est authentifié avec succès
        // Vous pouvez ajouter ici le code pour rediriger l'utilisateur vers une autre page, par exemple :
        header('Location: dashboard1.php');
        exit();
    } else {
        // Échec de l'authentification
        header('Location: 404.html');
        exit();
    }

    $conn->close();
}
?>
