<?php $conn = mysqli_connect("localhost", "root", "", "db_siswa"); 
    
    function query($query){ global $conn; 
    $result = mysqli_query($conn, $query); 
    $tempat = []; while($isi = mysqli_fetch_assoc($result)){ 
        $tempat[] = $isi; } return $tempat; } 
    
    function tambah($data){ global $conn; 
        $nis = htmlspecialchars($data["nis"]); 
        $nama = htmlspecialchars($data["nama"]); 
        $rombel = htmlspecialchars($data["rombel"]); 
        $rayon = htmlspecialchars($data["rayon"]); 
        $status = htmlspecialchars($data["status"]); 
        $hobi = htmlspecialchars($data["hobi"]); 
        $alamat = htmlspecialchars($data["alamat"]); 
        $merk_laptop = htmlspecialchars($data["merk_laptop"]); 
        $cita_cita = htmlspecialchars($data["cita_cita"]); 

        $query = "INSERT INTO students 
                    VALUES 
                ('', '$nis', '$nama', '$rombel', '$rayon', '$status', '$hobi', '$alamat', ''$rayon', status = '$status', hobi = '$hobi', alamat = '$alamat', merk_laptop = '$merk_laptop', cita_cita = '$cita_cita' 
                WHERE id = $id "; 
                
            $result = mysqli_query($conn, $query); 
            return mysqli_affected_rows($conn); 
            } 
?>