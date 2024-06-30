<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <style>
        img {
  opacity: 0.5;
}
        body {
    font-family: Arial, sans-serif;
}

.login-container {
    max-width: 350px;
    margin: 100px auto;
    padding: 50px;
    text-align: center;
}
.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    width: 50%;
    padding: 10px;
    background-color:BLACK;
    border: none;
    border-radius: 3px;
    color:WHITE;
    cursor: pointer;
}


button:hover {
    background-color:rgb(66, 164, 202);
}
    </style>
    <body style="background-color: hotpink;">
    <div class="login-container">
        <form action="#" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>


        <form id="login-form">
            <div class="form-group">
                <label for="username">USERNAME:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">PASSSWORD:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="button" onclick="location.href='home.php'">LOGIN</button>
            <div class="input-text"><br>
                <label for="create">create account</label><br>
            </div>
            <div>
                <label for="already">Already have account?</label>
                       </div>
        </form>
        </form>
    </div>
        </div>

    <script src="script.js"></script>
</body>
</html>

