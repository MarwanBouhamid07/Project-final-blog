// Get the context of the canvas element
const ctx = document.getElementById('pageViewsChart').getContext('2d');

// Create a linear gradient for the "Area" fill
const gradient = ctx.createLinearGradient(0, 0, 0, 400);
gradient.addColorStop(0, 'rgba(59, 130, 246, 0.5)'); // Light blue at top
gradient.addColorStop(1, 'rgba(59, 130, 246, 0.0)'); // Transparent at bottom

const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1 Mar', '5 Mar', '10 Mar', '15 Mar', '20 Mar', '25 Mar', '30 Mar'], // X-axis
        datasets: [{
            label: 'Page Views',
            data: [400, 800, 1200, 1600, 2400, 2100, 3400], // Y-axis data
            borderColor: '#3b82f6', // Line color (Blue)
            borderWidth: 3,
            fill: true, // Enable the area fill
            backgroundColor: gradient, // Apply the gradient
            tension: 0.4, // This creates the smooth "curved" line
            pointRadius: 0, // Hides the dots on the line for a cleaner look
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false } // Hide the legend like in your image
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: { display: true, drawBorder: false, color: '#f1f5f9' }
            },
            x: {
                grid: { display: false }
            }
        }
    }
});