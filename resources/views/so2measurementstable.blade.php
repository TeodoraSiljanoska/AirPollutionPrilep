<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SO2 Measurements</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #007BFF;
        }

        table {
            margin: 0 auto;
            width: 80%;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>SO2 Measurements Table</h2>
        
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                @foreach($measurements as $measurement)
                    <tr>
                        <td>{{ $measurement->date }}</td>
                        <td>{{ $measurement->value }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
