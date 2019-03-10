<?php
include_once "snsproj_be.php";
$sql_all = "SELECT * FROM userinput;";
$result = mysqli_query($connection, $sql_all);
$numrow = mysqli_num_rows($result) + 1;

$today = date("Y-m-d H:i:s");
$email = mysqli_real_escape_string($connection,$_POST['email']);
$quote = mysqli_real_escape_string($connection,$_POST['quote']);
$btitle = mysqli_real_escape_string($connection,$_POST['btitle']);
$author = mysqli_real_escape_string($connection,$_POST['author']);
$liked = mysqli_real_escape_string($connection,$_POST['liked']);

$sql_add = "INSERT INTO userinput (`key`, `date`, `email`, `quote`, `btitle`, `author`, `liked`)
  VALUES($numrow, '$today', '$email', '$quote', '$btitle', '$author', $liked);";
$res = mysqli_query($connection, $sql_add);
if($res == TRUE){
  header('Location: snsproj.php?submit=success');
} else {
  echo($liked);
  echo(mysqli_error($connection));
}
mysqli_close($connection);
?>
