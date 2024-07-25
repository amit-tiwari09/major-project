<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beautiful Theme</title>
<style>
    /* Global styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        color: #333;
    }
    
    .container {
        max-width: 960px;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        padding: 20px;
        border-radius: 5px;
    }

    /* Header styles */
    header {
        background-color: #3498db;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 2.5em;
    }

    /* Navigation styles */
    nav {
        background-color: #2980b9;
        padding: 10px 0;
        text-align: center;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin: 0 10px;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 1.2em;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }

    /* Main content styles */
    .content {
        padding: 20px 0;
    }

    .content p {
        line-height: 1.6;
    }

    /* Footer styles */
    footer {
        text-align: center;
        padding: 10px 0;
        background-color: #2c3e50;
        color: #fff;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container {
            padding: 10px;
        }

        header h1 {
            font-size: 2em;
        }

        nav ul li {
            display: block;
            margin: 10px 0;
        }
    }
</style>
</head>
<body>
    <header>
        <h1>Beautiful Theme</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="content">
            <h2>Welcome to Our Website</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum metus vitae mi vehicula, sed laoreet lectus molestie.</p>
            <p>Proin id sem sed ex pulvinar tincidunt non id lorem. In hac habitasse platea dictumst. Duis gravida ante a mauris commodo, et malesuada turpis condimentum.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Beautiful Theme. All rights reserved.</p>
    </footer>
</body>
</html>
