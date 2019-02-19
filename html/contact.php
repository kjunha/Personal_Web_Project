<?php
if(isset($_POST['submit'])){
    $to = "kjunha77@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $email_message .= "First Name: ".$first_name."\n";
    $email_message .= "Last Name: ".$last_name."\n";
    $email_message .= "Email: ".$from."\n";
    $email_message .= "Message: ".$_POST['message']."\n";

    $headers = "From:noreply@kjunha.is3.byuh.edu";
    mail($to,$subject,$email_message,$headers);
    header('Location: successful.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Contact Me</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<style media="screen">
  #contents{
    width: 70%;
    margin-top: 7em;
    margin-bottom: 7em;
  }
  #formlabel{
    font-size: 15pt;
    margin-top: 3em;
    margin-bottom: 1em;
  }
</style>
<body>
  <!--Common menu bar-->
  <div id="menubar"></div>
  <script>
    $("#menubar").load("../menubar.html");
  </script>

  <!--Contents Begins-->
    <div id="contents" class="ui container">
      <form class="ui form" action="" method="post">

        <label id="formlabel">Name</label>
        <div class="two fields">
          <div class="field">
            <input type="text" name="first_name" placeholder="First Name">
          </div>
          <div class="field">
            <input type="text" name="last_name" placeholder="Last Name">
          </div>
        </div>

        <label id="formlabel">E-mail</label>
        <div class="field">
          <input type="text" name="email" placeholder="E-mail">
        </div>

        <label id="formlabel">Message</label>
        <textarea name="message" placeholder="Enter your message here."></textarea>

        <input class = "ui huge primary button" type="submit" name="submit" value="Submit" style="margin-top: 1em">
      </form>
    </div>

    <!--Common footer-->
    <div id="footer"></div>
    <script>
      $("#footer").load("../footer.html");
    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>
