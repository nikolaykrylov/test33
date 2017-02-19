<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
<header>
    <table>
        <tr>
            <td><img id="logo" src="img/logo.png" alt="Logo"></td>
            <td id="header_description"><span>Robin's Nest Site</span></td>
        </tr>
    </table>
</header>
    <div id="content">
        <p>Пожалуйста авторизуйтесь, чтобы просматривать содержимое сайта</p>
        <input id="sign_up" type="button" name="sign_up" value="Sign up" onclick="signupFormAppear()">
        <input id="log_in" type="button" name="Log_in" value="Log in" onclick="loginFormAppear()">
       <!-- <a href="index2.html"><input type="button" name="home" value="Home"></a> !-->
    </div>
    <form method="post" action="form_sign_up.php" name="form_sign_up" id="form_sign_up">
        <input name = "name" id="form_name" type="text" placeholder="Enter your name">
        <input name="surname" id="form_surname" type="text" placeholder="Enter your surname">
        <input name="email" id="form_email" type="text" placeholder="Enter your e-mail">
        <input name="password" type="password" placeholder="Enter your password">
        <input type="submit" value="Submit">
    </form>

    <form method = "post" action="form_log_in.php" name="form_log_in" id="form_log_in">
        <input id="log_in_email" type="text" placeholder="Enter your email">
        <input id="log_in_password" type="password" placeholder="Enter your password">
        <input type="submit" value="Submit">
    </form>


<script>

    function signupFormAppear() {
        var appear = document.getElementById('form_sign_up');
        appear.style.display = 'block';
    }

    function loginFormAppear() {
        var appear = document.getElementById('form_log_in');
        appear.style.display = 'block';
    }

</script>
</body>
</html>