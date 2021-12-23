<?php
    $host = "localhost";
    $dbUN = "id17333889_dbcit";
    $dbPW = "@isQ?G96Ce/f4bsj";
    $dbName = "id17333889_dbcit2021";

    $conn = new mysqli($host, $dbUN, $dbPW, $dbName);

    if ($conn -> connect_error) {
        die("Database tidak terkoneksi".$conn -> connect_error);
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $insert = "INSERT into contact_us (name, email, subject, message) values('$name','$email','$subject','$message')";

        $result = mysqli_query($conn, $insert);
        if($result){
            echo "<script>alert('Pesan anda telah terkirim');window.location='index.html'</script>";
        }
    }
?>