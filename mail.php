<?php

$recepient = "helinsv@gmail.com";
$sitename = "Graff Pink";

$form_subject = trim($_GET["form_subject"]);
$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
//$text = trim($_GET["text"]);

$pagetitle = "Нове повідомлення \"$sitename\" ";
$message = "Форма: $form_subject\nІмя: $name \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");