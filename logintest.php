<!DOCTYPE html>
<html>
<head lang="en">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <link href="css/default.css" rel="stylesheet">
    <script src="login.js"></script>
    <title></title>
</head>
<body>
<nav>
    <ul>
        <li id="login">
            <a id="login-trigger" href="#">
                Log in <span>▼</span>
            </a>
            <div id="login-content">
                <form>
                    <fieldset id="inputs">
                        <input id="username" type="email" name="Email" placeholder="Your email address" required>
                        <input id="password" type="password" name="Password" placeholder="Password" required>
                    </fieldset>
                    <fieldset id="actions">
                        <input type="submit" id="submit" value="Log in">
                        <label><input type="checkbox" checked="checked"> Keep me signed in</label>
                    </fieldset>
                </form>
            </div>
        </li>
        <li id="signup">
            <a href="">Sign up FREE</a>
        </li>
    </ul>
</nav>
</body>
</html>