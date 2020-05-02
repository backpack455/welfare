<?php 

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $pnumber = $_POST['pnumber'];
  $write = $_POST['write'];

  $mailTo = "jmooshi21@gmail.com";
  $headers = "From: ".$mailFrom;

  $txt = "You have recieved an email from ".$name.".\n\n".$write;
  $pnumber = "Their phone number is".$pnumber;
  mail($mailTo, $pnumber, $txt, $headers);
  header("Location: index.html?mailsend");
}