<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Submit</title>
  </head>
  <body>

    <!-- function is called by callback function in the captcha div in contact.php, enables the send message button if the captcha is completed -->
    <script type="text/javascript">
      function enableBtn(){
        document.getElementById("submit").disabled = false;
      }
    </script>

    <?php
        function post_captcha($user_response) {
            $fields_string = '';
            $fields = array(
                'secret' => ' captcha secret key goes here !!!'
                'response' => $user_response
            );
            foreach($fields as $key=>$value)
            $fields_string .= $key . '=' . $value . '&';
            $fields_string = rtrim($fields_string, '&');

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

            $result = curl_exec($ch);
            curl_close($ch);

            return json_decode($result, true);
        }

        // Call the function post_captcha
        $res = post_captcha($_POST['g-recaptcha-response']);

         if ($res['success']) {
          // If CAPTCHA is successfully completed collect information from the form and send email
          // add your email
            $admin_email="youremail@email.com";
            $recipent =$_POST['email'];
            $name =$_POST['customer'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $message_body = "Name: " .$name."\n"."\n";
            $message_body .= "Message: " .$message;
            //headers ensures that the email address the email is sent from is the senders and not the websites
            $headers = "From: " .$recipent;

            mail($admin_email,$subject,$message_body,$headers);
            // echo "Thank you for contacting us, we will get back to you shortly!" ;
               echo "<script>alert('Thank you for contacting us, we will get back to you shortly!');</script>";
        }
        ?>

  </body>
</html>
