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

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
    
    
        $firstname=$row['full_name'];
        $managercinimg=$row['manager_cin_image'];
        $data = array(
            'full-name' => $firstname,
            'manager-cin-image' => $managercinimg
        );
        $jsonData = json_encode($data);
        setcookie('companyData', $jsonData, time() + (86400 * 30), "/");
      
        header('Location: /tpweb/dashboard1/index-worker-seeker.html');
      
        exit();
    } else {
        // Échec de l'authentification
        header('Location: 404.html');
        exit();
    }

    $conn->close();
}
?>
