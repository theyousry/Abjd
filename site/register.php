<?php
$connection = mysqli_connect("localhost", "root", "", "college"); // Establishing connection with server..
/*$db = mysqli_select_db("college", $connection); // Selecting Database.*/
$name=$_POST['name1']; // Fetching Values from URL.
$email=$_POST['email1'];
$password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysqli_query($connection,"SELECT * FROM registration WHERE email='$email'");
$data = mysqli_num_rows($result);
if(($data)==0){
$query = mysqli_query($connection,"insert into registration(name, email, password) values ('$name', '$email', '$password')"); // Insert query
if($query){
echo "You have Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}
}
mysqli_close ($connection);
?>