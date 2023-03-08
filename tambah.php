<?php 
   require 'controll.php';


   if ( isset($_POST["submit"])) {

    if( tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil diinput');
            document.location.href = 'index.php'; </script>";
    }else{
        echo "<script>
                alert('data gagal diinput');
                document.location.href = 'index.php'; </script>";

    }
   }
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
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
            <label for="">Nama</label>
            <input type="text" name="nama" id="">
            <br>
            <label for="">Nis</label>
            <input type="text" name="nis" id="">
            <br>
            <label for="">Rombel</label>
            <input type="text" name="rombel" id="">
            <br>
            <label for="">Rayon</label>
            <input type="text" name="rayon" id="">
            <br>
            <label for="">Status</label>
            <input type="text" name="status" id="">
            <br>
            <label for="">Hobi</label>
            <input type="text" name="hobi" id="">
            <br>
            <label for="">Alamat</label>
            <input type="text" name="alamat" id="">
            <br>
            <label for="">Merek Laptop</label>
            <input type="text" name="merk_laptop" id="">
            <br>
            <label for="">Cita Cita</label>
            <input type="text" name="cita_cita" id="">
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
        </form>
   </body>
   </html>