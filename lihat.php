<?php 
  
 require 'controll.php';

 $id = $_GET["id"];

 $student = query("SELECT * FROM students WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LIHAT DATA SISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .card{
            background-color: #EDE9D5;
            margin-left: 450px;
            margin-top: 0px;
            margin-right: 40px;
            box-shadow: 5px 10px #888888;
        }
        h2{
            text-align : center;
            margin-left: 50px;
        }
        body{
            text-align : center;
           margin-right: 50px;
           background-color:  #DFD3C3;
        }
        a{
          
            list-style: none ;
            text-decoration: none;
            color: black;
            text-align: center;
        }
        .card2{
        margin-left: 100px;
        margin-right: 100px;
        transition-duration: 0.1s;
        color: white;
        border: 2px solid #8D7B68;
        
        }
        .card2:hover{
        background-color: #C8B6A6;
        color: white;
        }
        p{
            margin-right: 17px;
        }
    </style>
</head>
<body>
    <h2>DATA SISWA</h2>
<div class="card" style="width: 22rem; height: 40rem; padding: 10px;" >
<div class="card-body">

        <ul>
            <p><img src="images/<?= $student["images"]; ?>"width="200"></p>
            <p>Nama : <?= $student["nama"] ?> </p>
            <p>Nis : <?= $student["nis"] ?> </p>
            <p>Rombel : <?= $student["rombel"] ?> </p>
            <p>Rayon : <?= $student["rayon"] ?> </p>
            <p>Status : <?= $student["status"] ?> </p>
            <p>Hobi : <?= $student["hobi"] ?> </p>
            <p>Alamat : <?= $student["alamat"] ?> </p>
            <p>Merek Laptop : <?= $student["merk_laptop"] ?> </p>
            <p>Cita-Cita : <?= $student["cita_cita"] ?> </p>
        </ul>
        <div class="card2"> 

         <a href="index.php">kembali</a>
        </div>
    </div>
      </div>
    </body>
    </html>