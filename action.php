<?php

if (isset($_POST['submit']))
{
  $username=$_POST['username'];
  $pasword=$_POST['password'];
  $datum=$_POST['datum'];
  $email=$_POST['email'];
}

echo "Vas username je".$username;
echo "<br>";
echo "Vas pasword je".$pasword;
echo "<br>";
echo "Vas email je:".$email;
echo "<br>";
echo "Datum je:".$datum;
echo "<br>";



?>