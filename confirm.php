<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        .icon {
            font-size: 50px;
            color: #28a745;
            margin-bottom: 20px;
        }
        .container h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .container p {
            color: #666;
            font-size: 16px;
            margin-bottom: 30px;
        }
        .container a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Icon -->
        <div class="icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h2>Thank You!</h2>
        <p>We have received your message and will get back to you shortly.</p>
        <a href="index.php">Go Back to Home</a>
    </div>
</body>
</html>
