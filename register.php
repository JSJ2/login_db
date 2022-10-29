<?php
    $host = "localhost";
    $user = "root";
    $pw = "admin1";
    $dbName = "login";

    $conn = new mysqli($host, $user, $pw, $dbName);

    $name=$_POST['name'];
    $email=$_POST['email'];
    $num=$_POST['num'];

    /* DB 연결 확인 */
    if($conn){ echo "Connection established"."<br>";}
    else{ die( 'Could not connect: ' . mysqli_error($conn) ); }

    /* INSERT 예제 */
    $sql = "INSERT INTO log(name, email, num) VALUES('".$name."','".$email."','".$num."')";
    $result = mysqli_query($conn, $sql);

    if($result) { echo("<script>location.replace('./index.html');</script>"); }
    else { echo "failure"; }
    mysqli_close($conn);

?>
