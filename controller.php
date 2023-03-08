<?php
    $conn = mysqli_connect("localhost", "root", "", "db_siswa");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $tempat = [];
        while($isi = mysqli_fetch_assoc($result)){
            $tempat[] = $isi;
        }
        return $tempat;
    }

    function tambah( $data ){
        global $conn;

        $nama = htmlspecialchars ($data["nama"]);
        $nis = htmlspecialchars ($data["nis"]);
        $rombel = htmlspecialchars ($data["rombel"]);
        $rayon = htmlspecialchars ($data["rayon"]);
        $status = htmlspecialchars ($data["status"]);
        $hobi = htmlspecialchars ($data["hobi"]);
        $alamat = htmlspecialchars ($data["alamat"]);

        $query = "INSERT INTO students
                    VALUES
                ('', '$nama', '$nis', '$rombel', '$rayon', '$status', '$hobi', '$alamat')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }

    function hapus($data){
        global $conn;
        mysqli_query($conn, "DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);

        $query = "UPDATE students SET
            nama = '$nama',
            nis = '$nis',
            rombel = '$rombel',
            rayon = '$rayon',
            status = '$status',
            hobi = '$hobi',
            alamat = '$alamat',
            WHERE id = $id
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }
?>