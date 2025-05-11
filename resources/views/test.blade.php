<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>2025 Sausio Kalendorius</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        .calendar-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 300px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            padding: 10px 15px;
            margin-bottom: 8px;
            border-radius: 8px;
            background-color: #eaeaea;
            transition: background 0.2s;
        }

        li:hover {
            background-color: #d6d6d6;
        }

        .weekend {
            background-color: #d1f7d1 !important;
            color: #228B22;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="calendar-container">
        <h1>2025 m. Sausio mėnesio<br>kalendorius</h1>
        <ul>
            @php
                $start = strtotime('2025-01-01');
                $end = strtotime('2025-01-31');
                $weekdays = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII'];
            @endphp

            @for ($date = $start; $date <= $end; $date = strtotime('+1 day', $date))
                @php
                    $dayNumber = date('N', $date); // 1–7
                    $dayName = $weekdays[$dayNumber - 1];
                    $formatted = date('Y-m-d', $date);
                    $isWeekend = $dayNumber >= 6;
                @endphp

                <li class="{{ $isWeekend ? 'weekend' : '' }}">
                    {{ $formatted }} – {{ $dayName }}
                </li>
            @endfor
        </ul>
    </div>
</body>
</html>
