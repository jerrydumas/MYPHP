

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form - Jerry Dumas</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <form action="htmlspecialchars($_SERVER['PHP_SELF'])" method="post" class="form">
  <div>
    <label for='fname'>Name</label>
    <input type='text' placeholder='Please Enter Your Name' name="fname"/>
  </div>
  <div>
    <label for='email'>Email</label>
    <input type='text' placeholder='Please Enter Your Email' name="email"/>
  </div>
  <div class='fieldset'>
    <label for='moreInfo'>Textarea</label>
    <textarea placeholder='More Info' name="moreInfo"></textarea>
  </div>
  <div>
  <button type="submit">Submit</button>
  </div>
</form>
  </body>
</html>
<?php
$fname = $_POST['fname'];
$email = $_POST['email'];
$fname = $_POST['moreInfo'];

if ($_SERVER['REQUEST_METHOD']=="POST") {
    echo "I did it"
}


// if (condition) {
    # code...<div class='message message--warning'>Warning message</div>
// } else {
    # code...<div class='message message--success'>Success message</div>
// }

?>