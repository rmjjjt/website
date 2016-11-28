<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$result = '';
$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$body = $_REQUEST['request'] ;

function sendEmail($name, $email, $body, &$result)
{
    $mail = new PHPMailer;

    $mail->From = $email;
    $mail->FromName = $name;
    $mail->addAddress('admin@triplejdeveloping.com', 'Rhymes');

    $mail->Subject = 'Website Enquiry';
    $mail->Body = $body;
    if (!$mail->send()) {
        $result = 'Message was not sent. <br>Mailer error: ' . $mail->ErrorInfo;
    } else {
        $result = 'Message has been sent.';
    }
}

sendEmail($name, $email, $body, $result);
?>
<body>
<?php
$contact = 'activePage';
include 'includes/navSideSection.php';

?>
<section class="contentSide padded">
    <h1>contact</h1>
    <div>
        <?php
        echo $result;
        ?>
    </div>
</section>
</body>
</html>