<?php 

require 'controll.php';
$students = query("SELECT * FROM students");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
       body{
        background-color: #DFD3C3;
       }
       button{
        color: black;
        margin : 150px;
        margin-bottom: 20px;
        margin-left: 550px;
        transition-duration: 0.1s;
        color: #9F8772;
        border: 2px solid black;
       }
       button:hover{
        background-color: #9F8772;
        color: #C7E8CA;
       }
       a{
        text-decoration: none;
       }
       table{
        margin-left: 300px;
        background-color : #EDE4E0;
        border: 2px solid black;
       }
    </style>
</head>
<body>
    <div class="card" >
    <div class="card-body">
        <table border ="1">
        <button><a href="tambah.php">Tambah Data</a></button>
        <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Nis</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>status</th>
        <th>Hobi</th>
        <th>Alamat</th>
        <th>Aksi</th>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($students as $student){ ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $student["nama"] ?></td>
            <td><?= $student["nis"] ?></td>
            <td><?= $student["rombel"] ?></td>
            <td><?= $student["rayon"] ?></td>
            <td><?= $student["status"] ?></td>
            <td><?= $student["hobi"] ?></td>
            <td><?= $student["alamat"] ?></td>
         
            <td>
                <a href="delete.php?id=<?= $student["id"] ?>" onclick="return confirm('yakin data ingin dihapus?')">Hapus</a>
                |
                <a href="update.php?id=<?= $student["id"] ?>">Update</a>
                |
                <a href="lihat.php?id=<?= $student["id"] ?>">lihat</a>
            </td>
            </tr>
            <?php $i++ ?>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>