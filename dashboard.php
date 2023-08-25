<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Dashboard</h2>
    <canvas id="vendorsChart" width="400" height="200"></canvas>
    <canvas id="customersChart" width="400" height="200"></canvas>
    <canvas id="itemsChart" width="400" height="200"></canvas>

    <script>
        // Sample data (replace with actual data)
        var vendorsData = {
            labels: ["Vendor A", "Vendor B", "Vendor C"],
            datasets: [{
                label: 'Items Sold by Vendors',
                data: [30, 45, 25],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
            }]
        };

        var customersData = {
            labels: ["Customer X", "Customer Y", "Customer Z"],
            datasets: [{
                label: 'Orders by Customers',
                data: [12, 20, 8],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
            }]
        };

        var itemsData = {
            labels: ["Item 1", "Item 2", "Item 3"],
            datasets: [{
                label: 'Items Sold',
                data: [50, 70, 40],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
            }]
        };

        // Create charts
        var vendorsCtx = document.getElementById('vendorsChart').getContext('2d');
        new Chart(vendorsCtx, {
            type: 'bar',
            data: vendorsData
        });

        var customersCtx = document.getElementById('customersChart').getContext('2d');
        new Chart(customersCtx, {
            type: 'pie',
            data: customersData
        });

        var itemsCtx = document.getElementById('itemsChart').getContext('2d');
        new Chart(itemsCtx, {
            type: 'doughnut',
            data: itemsData
        });
    </script>
</body>
</html>
