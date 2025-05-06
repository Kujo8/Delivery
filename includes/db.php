<?php
$servername='localhost';
$username='root';
$password='';

$dbname='register_user';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed".mysql_connect_error());
}else{
    echo "ZAEBIS ";
} 

?>