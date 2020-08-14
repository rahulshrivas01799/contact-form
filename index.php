<?php  

$result="";

if(isset($_POST['submit'])){
require 'PHPMailerAutoload.php';
$mail =new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Port=587;

// $mail->SMTPDebug = 1; 

$mail->Username='no-reply@digimonk.in';
$mail->Password='digi@123';

$mail->setFrom('no-reply@digimonk.in', 'Digimonk');
$mail->addAddress('rahulshrivas31121998@gmail.com', 'rahul');     // Add a recipient
#$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('rahulshrivas31121998@gmail.com', 'rahul');
/* $mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name */
$mail->isHTML(true);                                  // Set email format to HTML 

$mail->Subject = 'Here is the subject' .$_POST['subject'];
$mail->Body    = '<h1 align=center> Name :'.$_POST['name'].' <br>  Email:'.$_POST['email'].' <br>Message:'.$_POST['msg']. '</h1>' ;

          if(!$mail->send()){
          	$result="something went wrong";

          }
          else{
          	$result="thanks ".$_POST['name']." for contacting us. we'll get back to you soon!";
          }
      }
      ?>






<!DOCTYPE html>
<html>
<head>
	<title>contect form</title>
<meta charset="utf-8">
<meta name="author" content="rahul shrivas">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/release/v5.0.13/css/all.css">

</head>
<body class="bg-dark">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4 bg-light rounded">
			<h1 class="text-center font-weight-bold text-primary">contect us</h1>
			<hr class="bg-light">
			<h5 class="text-center text-success"><?= $result; ?></h5>
			<form action="" method="post" id="form-box" class="p-2">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="text" name="name" class="form-control" placeholder="enter name" required="required">
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-envelope"></i></span>
					</div>
					<input type="email" name="email" class="form-control" placeholder="enter email" required="required">
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-at"></i> </span>
					</div>
					<input type="text" name="subject" class="form-control" placeholder="enter subject" required="required">
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
					</div>
					<textarea name="msg" id="msg" class="form-control" placeholder="write ypur massege" cols="30" rows="5"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="send">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>



</body>
</html>