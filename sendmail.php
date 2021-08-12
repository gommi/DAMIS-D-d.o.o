<?php
$ime=$_REQUEST['ime'];
$prezime=$_REQUEST['prezime'];
$email=$_REQUEST['email'];
$firma=$_REQUEST['firma'];
$adresa=$_REQUEST['adresa'];
$telefon=$_REQUEST['telefon'];
$poruka=$_REQUEST['poruka'];
$msg = '
<html>
<head>
  <title>Email sa sajta</title>
</head>
<body>
  <table>
    <tr>
      <td>Ime:</td><td>'.$ime.'</td>
    </tr>
    <tr>
      <td>Prezime:</td><td>'.$prezime.'</td>
    </tr>
    <tr>
      <td>Email:</td><td>'.$email.'</td>
    </tr>
    <tr>
      <td>Firma:</td><td>'.$firma.'</td>
    </tr>
    <tr>
      <td>Adresa:</td><td>'.$adresa.'</td>
    </tr>
    <tr>
      <td>Telefon:</td><td>'.$telefon.'</td>
    </tr>
    <tr>
      <td>Poruka:</td><td>'.$poruka.'</td>
    </tr>					
  </table>
</body>
</html>
';
$to      = 'damisbmont76@gmail.com';
$subject = 'Poruka sa sajta damisb.com';
$message = $msg;
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
mail($to, $subject, $message, implode("\r\n", $headers));
$arr=array('html'=>'Nachricht erfolgreich gesendet.');
echo json_encode($arr);
?>