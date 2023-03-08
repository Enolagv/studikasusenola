<?php
  $conn = mysqli_connect("localhost", "root", "", "db_siswa");

  function query( $query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $tempat = [];
    while ( $barang = mysqli_fetch_assoc($result)){
        $tempat[] = $barang;
    }
    return $tempat;
  }

  function tambah( $data ){
    global $conn;

    $images =  htmlspecialchars ($data["images"]);
    $nama = htmlspecialchars ($data["nama"]);
    $nis = htmlspecialchars ($data["nis"]);
    $rombel = htmlspecialchars ($data["rombel"]);
    $rayon = htmlspecialchars ($data["rayon"]);
    $status = htmlspecialchars ($data["status"]);
    $hobi = htmlspecialchars ($data["hobi"]);
    $alamat = htmlspecialchars ($data["alamat"]);
    $merk_laptop = htmlspecialchars ($data["merk_laptop"]);
    $cita_cita = htmlspecialchars ($data["cita_cita"]);
 

      $query ="INSERT INTO students 
            VALUES
               ('', '$nama', '$nis','$rombel','$rayon','$status', '$hobi','$alamat', '$merk_laptop', '$cita_cita', '$images')";

           mysqli_query($conn, $query);

                return mysqli_affected_rows($conn);
  }

    function delete( $id ){
        global $conn;
        mysqli_query($conn, "DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function update ( $data ){
        global $conn;


        $id = $data["id"];
        $nama = htmlspecialchars ($data["nama"]);
        $nis = htmlspecialchars ($data["nis"]);
        $rombel = htmlspecialchars ($data["rombel"]);
        $rayon = htmlspecialchars ($data["rayon"]);
        $status = htmlspecialchars ($data["status"]);
        $hobi = htmlspecialchars ($data["hobi"]);
        $alamat = htmlspecialchars ($data["alamat"]);
        $merk_laptop = htmlspecialchars ($data["merk_laptop"]);
        $cita_cita = htmlspecialchars ($data["cita_cita"]);
        $images = htmlspecialchars ($data["images"]);

        $query ="UPDATE students SET 
                 nama ='$nama',
                 nis ='$nis',
                 rombel ='$rombel',
                 rayon ='$rayon',
                 status ='$status',
                 hobi ='$hobi',
                 alamat ='$alamat',
                 images ='$images'
                 WHERE id = $id ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function lihat ( $data ){
        global $conn;

        $id = $data["id"];
        $nama = htmlspecialchars ($data["nama"]);
        $nis = htmlspecialchars ($data["nis"]);
        $rombel = htmlspecialchars ($data["rombel"]);
        $rayon = htmlspecialchars ($data["rayon"]);
        $status= htmlspecialchars ($data["status"]);
        $hobi = htmlspecialchars ($data["hobi"]);
        $alamat = htmlspecialchars ($data["alamat"]);
        $merk_laptop = htmlspecialchars ($data["merk_laptop"]);
        $cita_cita = htmlspecialchars ($data["cita_cita"]);
        $images = htmlspecialchars ($data["images"]);

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    } ?>