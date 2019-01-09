<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
  <style>
body {
background-image: url(campus.jpg);
background-size: cover;
font-family: 'Open Sans', sans-serif;
}

.login {
width: 400px;
margin: 16px auto;
font-size: 16px;
}

.login-header, .login p {
margin-top: 0;
margin-bottom: 0;
position: center;

}

.login-header {
background: #28d;
padding: 20px;
font-size: 1.4em;
font-weight: normal;
text-align: center;
text-transform: uppercase;
color: #fff;
}

.login-container {
background: #ebebeb;
padding: 12px;
}

.login p {
padding: 12px;
}

.login input {
box-sizing: border-box;
display: block;
width: 100%;
border-width: 1px;
border-style: solid;
padding: 16px;
outline: 0;
font-family: inherit;
font-size: 0.95em;
}
.login input[type="password"]

{
border-color: #888;
}

.login input[type="submit"]

{
background: #28d;
border-color: transparent;
color: #fff;
cursor: pointer;
}

  </style>
  <br></br><br></br><br></br><br></br><br></br>
<div class="login">
    <h2 class="login-header">H A L L O</h2>
        <form class="login-container" action="login.php" method="post">
            <p>
                <input type="text" placeholder="Username" name="username">
            </p>
            <p>
                <input type="password" placeholder="Password" name="password">
            </p>
            <p>
                <input type="submit" name="simpan" value="Login">
            </p>
        </form>
</div>
</body>
</html>
