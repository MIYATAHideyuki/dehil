$mail=new PHPmailer(true);
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='camiyata.com@gmail.com';
$mail->Password='catman.1';
$mail->SMTPSecure='tls';
$mail->Port=587;