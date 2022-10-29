<?php
    $host = "localhost";
    $user = "root";
    $pw = "admin1";
    $dbName = "login";

    $conn = new mysqli($host, $user, $pw, $dbName);

    $email=$_POST['email'];
    $num=$_POST['num'];

    /* DB 연결 확인 */
    if($conn){ echo "Connection established"."<br>";}
    else{ die( 'Could not connect: ' . mysqli_error($conn) ); }

    /* INSERT 예제 */
    //$sql = "SELECT INTO log(name, email, num) VALUES('".$name."','".$email."','".$num."')";
    //$result = mysqli_query($conn, $sql);

    //if($result) { echo "insert success!"; }
    //else { echo "failure"; }

    /* SELECT 예제 */
    $sql = "SELECT * FROM log";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result))
    {
        if ((strcmp($row['email'], $email) == 0) && (strcmp($row['num'], $num) == 0))
        {
          echo("<script>location.replace('./index.html');</script>");
        }
    }
    echo "failed!";
    mysqli_close($conn);

?>
