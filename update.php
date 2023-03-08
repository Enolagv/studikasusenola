<?php

 require 'controll.php';

   $id = $_GET["id"];
   $student = query("SELECT * FROM students WHERE id = $id")[0];

   if ( isset($_POST["submit"])){

    if ( update($_POST) > 0){
        echo " <script>
                 alert('data berhasil diupdate');
                 document.location.href = 'index.php';</script>";
    }else{
        echo "<script>
               alert('data gagal diupdate');
               document.location.href = 'index.php'; </script>";
    }
   } ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            background-color:  #DFD3C3;
        }
        .card{
        background-color: #EDE4E0;
        }
    </style>
   </head>
   <body>
   <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 20rem; height: 25rem; padding: 30px; text-align:left; " >
        <form action="" method="post">
            <input type="hidden" name="id" id="" value="<?= $student["id"] ?>">
            <label for="">Nama</label>
            <input type="text" name="nama" id="" value="<?= $student["nama"] ?>">
            <br>
            <label for="">Nis</label>
            <input type="text" name="nis" id="" value="<?= $student["nis"] ?>">
            <br>
            <label for="">Rombel</label>
            <input type="text" name="rombel" id="" value="<?= $student["rombel"] ?>">
            <br>
            <label for="">Rayon</label>
            <input type="rayon" name="rayon" id="" value="<?= $student["rayon"] ?>">
            <br>
            <label for="">Status</label>
            <input type="text" name="status" id="" value="<?= $student["status"] ?>">
            <br>
            <label for="">Hobi</label>
            <input type="text" name="hobi" id="" value="<?= $student["hobi"] ?>">
            <br>
            <label for="">Alamat</label>
            <input type="text" name="alamat" id="" value="<?= $student["alamat"] ?>">
            <br>
            <label for="">Merek Laptop</label>
            <input type="text" name="merk_laptop" id="" value="<?= $student["merk_laptop"] ?>">
            <br>
            <label for="">Cita-cita</label>
            <input type="text" name="cita_cita" id="" value="<?= $student["cita_cita"] ?>">
            <br>
            <button ttype="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        </div>
        </div>
        </div>
   </body>
   </html>