<?php
    include './koneksi.php';
    $nis = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE SISWA SET nis='$nis' , nama_lengkap='$nama_lengkap' , alamat='$alamat' WHERE id='$id'";
    if($conn->query($sql) === TRUE){
        echo "ubah data berhasil <br>";
        echo "<a href='tampil.php' >Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>