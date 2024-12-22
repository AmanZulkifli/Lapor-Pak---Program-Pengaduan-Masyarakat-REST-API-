@extends('templates.app')

@section('content')
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body class="wrapperes">
    <div class="patternbos">
        <div class="background">
            <div class="ergono">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @elseif (session('failed'))
                    <div class="alert alert-danger">{{ session('failed') }}</div>
                @endif

                <div class="content-wrapper">
                    <canvas id="reportChart" width="400" height="200"></canvas>

                    <script>
                        var ctx = document.getElementById('reportChart').getContext('2d');
                        var reportChart = new Chart(ctx, {
                            type: 'bar', // Bar chart type
                            data: {
                                labels: ['Pengaduan', 'Tanggapan'], // Labels for the chart
                                datasets: [{
                                    label: 'Jumlah',
                                    data: [{{ $report_count }}, {{ $response_count }}], // Data points: report_count and response_count
                                    backgroundColor: [
                                        'rgba(54, 162, 235, 0.2)', // Color for the first bar (Pengaduan)
                                        'rgba(255, 99, 132, 0.2)'  // Color for the second bar (Tanggapan)
                                    ],
                                    borderColor: [
                                        'rgba(54, 162, 235, 1)', // Border color for the first bar
                                        'rgba(255, 99, 132, 1)'  // Border color for the second bar
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true // Start the y-axis at zero
                                    }
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
