<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div style="width: 80%; margin: auto;">
    <canvas id="measurementChart"></canvas>
</div>

<script>
    var ctx = document.getElementById('measurementChart').getContext('2d');
    var dates = {!! json_encode($dates) !!};
    var values = {!! json_encode($values) !!};

    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dates,
            datasets: [{
                label: 'SO2 Measurement Data',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                data: values,
            }]
        },
        options: {
            scales: {
                x: [{
                    type: 'linear',
                    position: 'bottom',
                    ticks: {
                        stepSize: 1,
                    }
                }]
            }
        }
    });
</script>

</body>
</html>
