<?php

$host="localhost";
$dbname="khedma";
$username = "root";
$password  ="";

if (isset($_POST['registrer'])){
   
    $phone_number=$_POST["phone_number"];
    $target2="lesCINSworkers/".$phone_number.'-'.basename($_FILES['cin']['name']);
    $target="lesCVS/".$phone_number.'-'.basename($_FILES['cv']['name']);

// }
$conn=mysqli_connect( hostname: $host, 
                database: $dbname,
                password: $password, 
                username: $username );
 
if(mysqli_connect_errno()){
    die("Connection error: " .mysqli_connect_errno());
}

$pname=$phone_number."-".$_FILES["cin"]["name"];
$pname2=$phone_number."-".$_FILES["cv"]["name"];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$pass=$_POST["password"];
$city=$_POST["city"];

// $tname=$_FILES["file"]["name"];
// $uploads_dir='/CVS';

$sql= "INSERT INTO registration (first_name, last_name, phone_number, city, mot_de_passe, email,cin_image,CV)
        VALUES ('$first_name','$last_name','$phone_number','$city','$pass','$email','$pname','$pname2')";
        
$stmt = mysqli_stmt_init($conn);
// if (! mysqli_stmt_prepare($stmt, $sql)){
//     die(mysqli_error($conn));
// }
mysqli_query($conn,$sql);
// mysqli_stmt_bind_param($stmt,'sss',
//                        $first_name,
//                        $last_name,
//                        $phone_number,
//                        $university,
//                        $city,
//                        $email,
//                        $pname );                                        
// mysqli_stmt_execute($stmt);
move_uploaded_file($_FILES['cv']['tmp_name'],$target); 
move_uploaded_file($_FILES['cin']['tmp_name'],$target2);
}


require"vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail= new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->Host="smtp.gmail.com";
$mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port ="587";
$mail->Username="ttalo1097@gmail.com";
$mail->Password="xpmy yhui nmup cjpq";
$mail->Subject ="Verification d'inscription";
$mail->setFrom("ttalo1097@gmail.com",'KHEDMA');
$mail->addAddress($email);
$mail->Body='Salut,

Nous sommes ravis de vous accueillir sur la plateforme " KHEDMA " ! Merci davoir choisi de rejoindre notre communauté.

Votre inscription a bien été enregistrée et nous sommes impatients de vous offrir une expérience exceptionnelle. Que ce soit pour découvrir nos services, explorer nos fonctionnalités ou interagir avec notre équipe, nous sommes là pour vous accompagner à chaque étape.

N hésitez pas à explorer notre site et à découvrir tout ce que nous avons à offrir. Si vous avez des questions ou avez besoin d assistance, notre équipe de support est là pour vous aider. Vous pouvez nous contacter à tout moment à [ttalo1097@gmail.com].

Encore une fois, merci de nous avoir rejoints. Nous sommes honorés de vous avoir parmi nous et sommes impatients de vous aider à atteindre vos objectifs.

Bienvenue dans la famille khedma !

Cordialement,
Léquipe de support de la plateforme khedma';
$mail->Send();
header('location:index.html');
$mail->SmtpClose();