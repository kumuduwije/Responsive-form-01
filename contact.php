<?php

    $status = " ";
    //check whether user sumbit the form
    if(isset($_POST['send'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $to = 'kumudu@kaytrun.com';
    $mail_subject = 'Message from Kaytrun!';
    $email_body = "Message from Contact Us Page of Kaytrun: <br>";
    $email_body .= "<b>From:</b> {$firstname} {$lastname}<br>";
    $email_body .= "<b>Subject</b><br>" . nl2br(strip_tags($subject));

    $header = "From: {$email} \r\nContent-Type: text/html;";

    $mail_result = mail($to, $mail_subject, $email_body, $header);


    if($mail_result){

        $status = '<p class = "success">Message sent successfully.</p>';
    }else{
        $status = '<p class = "error">Error: Message was not send.</p>';
    }
    

    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kumudu's responsive contact form</title>
	<link rel="stylesheet" href="contact.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>

	<!-- Contact area  -->
    <!--<hr class="ruler contact-ruler">-->
    <div class="container">
        
        <form action="contact.php" id="contact-form" method="POST">
        
          <div class="row">
            <h3>Contact me</h3>
          <div class="divider"></div>
          <?php echo $status; ?>
            <div class="col-25">
              <label for="fname">First Name <span class="star">*</span></label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="firstname" placeholder="Enter your first name" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Last Name <span class="star">*</span></label>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="lastname" placeholder="Enter your last name" required>
            </div>
          </div>
      
          <div class="row">
            <div class="col-25">
              <label for="lname">E-mail <span class="star">*</span></label>
            </div>

            <div class="col-75">
              <input type="email" id="email" name="email" placeholder="Enter your e-mail" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="subject">Subject <span class="star">*</span></label>
            </div>
            <div class="col-75">
              <textarea id="subject" name="subject" placeholder="Write your message" style="height:150px" required></textarea>
            </div>
          </div>
          <div class="row submit-row">
            <input type="submit" value="Send message" name="send">
          </div>
        </form>
      </div>
    

    

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <script src="form.js"></script>
</body>
</html>