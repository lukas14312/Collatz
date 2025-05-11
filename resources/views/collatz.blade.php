<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Collatz seka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f8f8f8;
        }

        .container {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        h2 {
            color: #333;
        }

        .sequence {
            margin-top: 15px;
            background: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Įvestas skaičius: <strong>{{ $number }}</strong></h2>

        <div class="sequence">
            <strong>Collatz seka:</strong><br>
            {{ implode(' → ', $sequence) }}
        </div>
    </div>
</body>
</html>
