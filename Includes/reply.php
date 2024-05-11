<?php 
    $servername = "sql113.infinityfree.com";
    $username = "if0_36523148";
    $password = "MB2ceoWsls";
    $dbname = "if0_36523148_contact";

     $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        // echo "connection ok";
    }
    else
    {
        // echo "connection faild !".mysqli_connect_error();
    }
?>

<?php
    if($_POST['register'])
    {
        $u_name = $_POST['user-name'];
        $u_email = $_POST['user-email'];
        $u_sub = $_POST['user-website'];
        $u_msg = $_POST['user-comment'];

        $query = "INSERT INTO feedback VALUES('$u_name','$u_email','$u_sub','$u_msg')";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            // echo "indert into database";
        }
        else
        {
            // echo "indert faild into database";
        }
    }
?>