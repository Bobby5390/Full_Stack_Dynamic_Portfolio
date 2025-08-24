@extends('admin.components.layout')

@section('content')
<style>
    body, .analytics-dark-bg {
        background: #0f0f0f !important;
        color: #f0f0f0;
    }
    .analytics-dark-bg {
        min-height: 100vh;
        padding: 40px 0;
        position: relative;
        overflow: hidden;
    }
    .analytics-dark-bg::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: 
            radial-gradient(circle at 20% 50%, rgba(0, 188, 212, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(0, 255, 255, 0.06) 0%, transparent 50%),
            radial-gradient(circle at 40% 80%, rgba(0, 188, 212, 0.08) 0%, transparent 50%);
        animation: backgroundShift 15s ease-in-out infinite;
        pointer-events: none;
        z-index: 0;
    }
    @keyframes backgroundShift {
        0%, 100% {
            transform: translateX(0) translateY(0) scale(1);
            opacity: 0.4;
        }
        50% {
            transform: translateX(10px) translateY(-20px) scale(1.05);
            opacity: 0.6;
        }
    }
    .analytics-card {
        border-radius: 24px;
        box-shadow: 0 8px 40px 0 rgba(0,255,255,0.10), 0 1.5px 8px 0 rgba(0,0,0,0.18);
        background: rgba(28, 28, 28, 0.85);
        backdrop-filter: blur(18px) saturate(140%);
        border: 1.5px solid rgba(0,255,255,0.18);
        color: #f0f0f0;
        position: relative;
        z-index: 1;
        transition: box-shadow 0.2s;
        animation: cardFloat 3s ease-in-out infinite alternate;
        margin-bottom: 2rem;
    }
    @keyframes cardFloat {
        from { transform: translateY(0px); }
        to { transform: translateY(-5px); }
    }
    .analytics-card:hover {
        box-shadow: 0 12px 60px 0 rgba(0,255,255,0.18), 0 2px 12px 0 rgba(0,0,0,0.22);
    }
    .analytics-title {
        color: #00fff7;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        letter-spacing: 1px;
        text-shadow: 0 0 10px #00fff7, 0 0 20px #2d4df1;
    }
    .analytics-card .card-title, .analytics-card .card-body h6 {
        color: #00fff7;
        font-weight: 600;
    }
    .table-dark {
        background: #181818;
        color: #f0f0f0;
    }
    .table-dark th, .table-dark td {
        border-color: #232b3b;
    }
</style>
<div class="analytics-dark-bg">
    <div class="container-fluid py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="analytics-title">Google Analytics</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="analytics-card h-100 p-4">
                    <h5 class="card-title">Audience overview</h5>
                    <canvas id="audienceChart" height="120"></canvas>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="analytics-card h-100 p-4">
                    <h5 class="card-title">Acquisition report</h5>
                    <canvas id="acquisitionChart" height="120"></canvas>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-1">
            <div class="col-lg-4">
                <div class="analytics-card h-100 p-4">
                    <h6>Popular pages</h6>
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
            <div class="col-lg-4">
                <div class="analytics-card h-100 p-4">
                    <h6>Sessions by country</h6>
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
            <div class="col-lg-4">
                <div class="analytics-card h-100 p-4">
                    <h6>Sessions by device</h6>
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
            borderColor: '#00fff7',
            backgroundColor: 'rgba(0,255,255,0.1)',
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
                '#00fff7', '#2d4df1', '#6f42c1', '#e83e8c', '#20c997'
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
                '#00fff7', '#2d4df1', '#ffc107', '#6c757d'
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
