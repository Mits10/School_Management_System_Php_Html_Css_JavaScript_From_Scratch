<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/login.css">
    <title>Login</title>
  </head>
  <body>
    <div class="form">
          <form action="../../controler/login.php" method="post">
            <h1>Login</h1>
            <label>User Id</label><br>
            <input type="text" id="fname" name="fName"><br>
            <label>Password</label><br>
            <input type="text" id="psw" name="psw"><br>
            <input type="submit" id="submit" value="Submit"><br>
          </form>
        </div>
  </body>
</html>
