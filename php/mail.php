<?php
include 'functions.php';

if (!empty($_POST)){

  $data['success'] = true;
  $_POST  = multiDimensionalArrayMap('cleanEvilTags', $_POST);
  $_POST  = multiDimensionalArrayMap('cleanData', $_POST);

  //your email adress 
  $emailTo ="kirill.pr9n1k@yandex.ru"; //Почта куда отправлять письмо

  //from email adress
  $emailFrom ="email@internationfamily.ru/"; //ссылка сайта

  //email subject
  $emailSubject = "Заявка на покупку"; // о чем письмо

  $name = $_POST["name"];
  
  $phone = $_POST["phone"];
  if($name == "")
   $data['success'] = false;
 



 if($phone == "")
   $data['success'] = false;

 if($data['success'] == true){

  $message = "Имя: $name<br>
  Телефон: $phone";


  $headers = "MIME-Version: 1.0" . "\r\n"; 
  $headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
  $headers .= "From: <$emailFrom>" . "\r\n";
  mail($emailTo, $emailSubject, $message, $headers);

  $data['success'] = true;
  echo json_encode($data);
}
}