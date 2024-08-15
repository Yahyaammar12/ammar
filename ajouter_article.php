<?php

$host="localhost";
$dbname="electroammar";
$username = "root";
$password  ="";

   
    $nom_article=$_POST["nom_article"];
    $target1="photoarticles/".$nom_article.'-'.basename($_FILES['image1']['name']);
    $target2="photoarticles/".$nom_article.'-'.basename($_FILES['image2']['name']);
    $target3="photoarticles/".$nom_article.'-'.basename($_FILES['image3']['name']);
    $target4="photoarticles/".$nom_article.'-'.basename($_FILES['image4']['name']);
    $target5="photoarticles/".$nom_article.'-'.basename($_FILES['image5']['name']);
    $target6="photoarticles/".$nom_article.'-'.basename($_FILES['image6']['name']);
// }
$conn=mysqli_connect( hostname: $host, 
                database: $dbname,
                password: $password, 
                username: $username );
 
if(mysqli_connect_errno()){
    die("Connection error: " .mysqli_connect_errno());
}

$pname1=$nom_article."-".$_FILES["image1"]["name"];
$pname2=$nom_article."-".$_FILES["image2"]["name"];
$pname3=$nom_article."-".$_FILES["image3"]["name"];
$pname4=$nom_article."-".$_FILES["image4"]["name"];
$pname5=$nom_article."-".$_FILES["image5"]["name"];
$pname6=$nom_article."-".$_FILES["image6"]["name"];
$description=$_POST["description_article"];
$price=$_POST["prix_article"];
$category=$_POST["categorie_article"];



 $sql= "INSERT INTO articles (nom_article,description_article, prix, categorie, photo1, photo2,photo3,photo4,photo5,photo6)
            VALUES ('$nom_article','$description','$price','$category','$pass','$email','$pname1','$pname2','$pname3','$pname4','$pname5','$pname6')";
            
    $stmt = mysqli_stmt_init($conn);
    mysqli_query($conn,$sql);
    
    move_uploaded_file($_FILES['image1']['tmp_name'],$target1);
    move_uploaded_file($_FILES['image2']['tmp_name'],$target2);
    move_uploaded_file($_FILES['image3']['tmp_name'],$target3);
    move_uploaded_file($_FILES['image4']['tmp_name'],$target4);
    move_uploaded_file($_FILES['image5']['tmp_name'],$target5);
    move_uploaded_file($_FILES['image6']['tmp_name'],$target6);

  