<?php
class SendEmail{

  private $header = "";
  private $email = "";
  private $website = 'localhost';

  function __construct($email) {
		$this->email = $email;
    $this->header = 'From:sandboxentertainmentt@gmail.com' . "\r\n";
    $this->header .= "MIME-Version: 1.0\r\n";
    $this->header .= "Content-Type: text/html; charset=utf-8\r\n";
	}
  function sendContact($firstname){
    $subject = 'Thank you for reaching to us-SANDBOX';
    $message =
    '<html><body>
    <h3>Hello ' . $firstname . ",</h3>". '<p>You will hear from us very soon.</p>
    <p>Thank you for reaching to us.</p>
    <h3>This is an automated message please do not reply.</h3></body></html>';
    ;
    return mail($this->email, $subject, $message, $this->header);
  }
  function sendVerify($firstname, $hash){
    $border = str_repeat('=', strlen($this->email));
    $subject = 'Verification email SANDBOX';
    $message =
        '
          <html>
          <body>
          <h3>Hello <strong>' . $firstname . '</strong>, </h3>
          <h4>Your account has been created.</h4>
          </h4>
          These are your information: <br> 
          '.$border.' <br> 
          email:   ' . $this->email . ' <br>
          firstname:' . $firstname . ' <br> 
          '.$border.' <br>
          </h4>
          <h3> Click here <strong><a href = "' . $this->website . '/verify.php?email=' . $this->email . '&hash=' . $hash . '">ketu</a></strong>. </h3>
          <h3>This is an automated message please do not reply.</h3>
          </body>
          </html>
          ';
      return mail($this->email, $subject, $message, $this->header);
}
  
}
?>