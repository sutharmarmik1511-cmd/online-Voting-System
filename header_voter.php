<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #EBE9E9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        header h2 {
            margin: 0;
        }

        nav {
            text-align: center;
            margin: 20px 0;
        }

        nav a {
            text-decoration: none;
            color: #4CAF50;
            font-size: 24px;
            margin: 0 15px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #45a049;
        }

        .marquee-container {
            background-color: #f0f0f0;
            padding: 10px 0;
            margin: 0;
        }

        marquee {
            font-size: 24px;
            color: #4CAF50;
        }

        .content {
            text-align: center;
            margin-top: 50px;
        }

        .content h1 {
            font-size: 48px;
            color: #333;
        }
    </style>
    <script src="jscript/validation.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <div class="marquee-container">
            <marquee>Welcome To Online Voting System</marquee>
        </div>
    </header>
    
    <nav>
        <a href="voter.php">Home</a>
        <a href="lan_view.php">Vote Results</a>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
        <a href="change_pass.php">Change Password</a>
    </nav>

    <div class="content">
        <h1>Online Voting System</h1>
        <p>Welcome to the Online Voting System. Use the links above to navigate through the website.</p>
    </div>
</body>
</html>
