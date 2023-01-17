<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="html.js"></script>
</head>
<body>



    <canvas id="myChart"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 1',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2
                },
                {
                    label: 'Dataset 2',
                    data: [30, 20, 50, 60, 40, 35, 25],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'My Chart',
                    fontSize: 24
                },
                legend: {
                    position: 'bottom'
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        gridLines: {
                            color: 'rgba(0, 0, 0, 0.1)'
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Y-axis Label'
                        }
                    },
                    x: {
                        gridLines: {
                            color: 'rgba(0, 0, 0, 0.1)'
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'X-axis Label'
                        }
                    }
                },
                animation: {
                    duration: 2000,
                    easing: 'easeOutQuart'
                }
           
            });
</script>




</body>
</html>