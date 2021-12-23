<?php
    $host = "localhost";
    $dbUN = "id17333889_dbcit";
    $dbPW = "@isQ?G96Ce/f4bsj";
    $dbName = "id17333889_dbcit2021";

    $conn = new mysqli($host, $dbUN, $dbPW, $dbName);

    if ($conn -> connect_error) {
        die("Database tidak terkoneksi".$conn -> connect_error);
    } else {
        $nama_lengkap = $_POST['nama_lengkap'];
        $kelas = $_POST['kelas'];
        $gender = $_POST['gender'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $insert = "INSERT into registration (nama_lengkap, kelas, gender, jurusan, email, phone) values('$nama_lengkap','$kelas','$gender','$jurusan','$email','$phone')";

        $result = mysqli_query($conn, $insert);
        if($result){
            echo "<script>alert('Registration Successfully');window.location='index.html'</script>";
        }
    }
?>