<?php
$con = mysqli_connect('localhost','root');

if($con)
{
    echo "connection successful";
}
    else
    {
        echo "no connection";
    }
mysqli_select_db($con, 'saghirelectricstoredata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];


$query = "insert into userinfodata (user, email, mobile, comment) values ('$user','$email','$mobile','$comment')";



echo "$query";
mysqli_query($con, $query);

header('location:index.html');




?>