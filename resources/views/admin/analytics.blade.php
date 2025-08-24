@extends('admin.components.layout')

@section('content')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Google Analytics</h2>
            <div>
                <button class="btn btn-outline-primary btn-sm me-2">Clarity</button>
                <button class="btn btn-outline-primary btn-sm me-2">Advertising</button>
                <button class="btn btn-primary btn-sm">Google Analytics</button>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Audience overview</h5>
                    <canvas id="audienceChart" height="120"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Acquisition report</h5>
                    <canvas id="acquisitionChart" height="120"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mt-1">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="card-title">Popular pages</h6>
                    <table class="table table-sm table-dark table-striped mb-0">
                        <thead>
                            <tr><th>Page</th><th>Pageviews</th><th>Actions</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>/clarity.microsoft.com/home</td><td>700,000</td><td>...</td></tr>
                            <tr><td>/clarity.microsoft.com/signup</td><td>150,000</td><td>...</td></tr>
                            <tr><td>/clarity.microsoft.com/login</td><td>120,000</td><td>...</td></tr>
                            <tr><td>/clarity.microsoft.com/pricing</td><td>70,000</td><td>...</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="card-title">Sessions by country</h6>
                    <table class="table table-sm table-dark table-striped mb-0">
                        <thead>
                            <tr><th>Country</th><th>Sessions</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>United States</td><td>5,416,481</td></tr>
                            <tr><td>India</td><td>1,200,000</td></tr>
                            <tr><td>Mexico</td><td>800,964</td></tr>
                            <tr><td>Ukraine</td><td>500,000</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="card-title">Sessions by device</h6>
                    <canvas id="deviceChart" height="120"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Audience overview chart
const ctxAudience = document.getElementById('audienceChart').getContext('2d');
new Chart(ctxAudience, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Sessions',
            data: [1.2, 2.4, 2.5, 2.3, 2.1, 1.8, 2.0],
            borderColor: '#007bff',
            backgroundColor: 'rgba(0,123,255,0.1)',
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
    }
});

// Acquisition report chart
const ctxAcquisition = document.getElementById('acquisitionChart').getContext('2d');
new Chart(ctxAcquisition, {
    type: 'bar',
    data: {
        labels: ['Direct', 'Organic Search', 'Paid Search', 'Email', 'Other'],
        datasets: [{
            label: 'Sessions',
            data: [1.1, 2.0, 1.5, 1.2, 0.8],
            backgroundColor: [
                '#007bff', '#6610f2', '#6f42c1', '#e83e8c', '#20c997'
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
    }
});

// Device pie chart
const ctxDevice = document.getElementById('deviceChart').getContext('2d');
new Chart(ctxDevice, {
    type: 'doughnut',
    data: {
        labels: ['Desktop', 'Mobile', 'Tablet', 'Other'],
        datasets: [{
            data: [57.6, 41.7, 1.1, 0.1],
            backgroundColor: [
                '#007bff', '#20c997', '#ffc107', '#6c757d'
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { position: 'bottom' } }
    }
});
</script>
@endsection
