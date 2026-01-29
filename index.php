<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>

</head>

<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Have an account?</span>
                <header>Login</header>
            </div>

            <div class="input-field">
                <input type="text" class="input" placeholder="Username" required>
                <span class="material-icons icon">person</span>
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Password" required>
                <span class="material-icons icon">lock</span>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" value="Login">
            </div>

            <div class="bottom">
                <div class="left">
                    <label for="check"> Remember Me</label>
                    <input type="checkbox" name="check" id="check">
                </div>
                <div class="right">
                    <label><a href="">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>
</body>

</html>