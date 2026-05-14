<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Front-End</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa; 
            color: #004d40; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #00796b; 
            margin-bottom: 15px;
        }
        p {
            font-size: 1.1em;
            line-height: 1.7;
            margin-bottom: 25px;
        }
        .api-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background-color: #00796b;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .api-link:hover {
            background-color: #004d40; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Simple Front-End Page</h1>
        <p>
            This page is served by Laravel, running on FrankenPHP within Docker.
            It demonstrates a clean separation of presentation (HTML/CSS) and backend logic.
        </p>
        <a href="{{ route('api.message') }}" class="api-link">Get Backend Message</a>
    </div>
</body>
</html>
