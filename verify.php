<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabian</title>
    <link rel="stylesheet" href="index.css" type="text/css" media="all" />
  </head>
  <body>
    <h1>Verify</h1>
    <form action="index.php" method="get">
      <div>
        <p>We have sent six digit verification code to your phone number please check and submit. <a href="Signup.html">Edit phone number</a></p>
        <label for="code">Code</label><br />
        <input type="text" name="code" id="code" placeholder="Enter" maxlength="6"/>
      </div>
      <input type="submit" name="submit" id="submit" value="Submit" />
      <div>
        <p>Did't get verification code | <a href="#">Resend</a></p>
      </div>
    </form>
  </body>
</html>
