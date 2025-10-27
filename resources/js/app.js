import './bootstrap';
import Chart from 'chart.js/auto';

// ============================================
// DARK MODE FUNCTIONALITY
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
    const html = document.documentElement;

    // Check for saved theme preference or default to light mode
    const currentTheme = localStorage.getItem('theme') || 'light';
    
    if (currentTheme === 'dark') {
        html.classList.add('dark');
        if (sunIcon && moonIcon) {
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        }
    }

    // Toggle dark mode
    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', function() {
            html.classList.toggle('dark');
            
            if (html.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            } else {
                localStorage.setItem('theme', 'light');
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            }
        });
    }

    // ============================================
    // CHART.JS INITIALIZATION
    // ============================================
    
    // Chart 1: IPK per Semester (Line Chart)
    const ipkChartCanvas = document.getElementById('ipkChart');
    if (ipkChartCanvas) {
        const isDark = html.classList.contains('dark');
        const textColor = isDark ? '#e5e7eb' : '#374151';
        const gridColor = isDark ? '#374151' : '#e5e7eb';

        new Chart(ipkChartCanvas, {
            type: 'line',
            data: {
                labels: ['Sem 1', 'Sem 2', 'Sem 3', 'Sem 4', 'Sem 5', 'Sem 6', 'Sem 7'],
                datasets: [{
                    label: 'IPK',
                    data: [3.45, 3.62, 3.78, 3.81, 3.75, 3.88, 3.85],
                    borderColor: '#0047AB',
                    backgroundColor: 'rgba(0, 71, 171, 0.1)',
                    borderWidth: 3,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#0047AB',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                aspectRatio: 2,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: textColor,
                            font: {
                                size: 14,
                                weight: 'bold'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderColor: '#0047AB',
                        borderWidth: 1,
                        padding: 12,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return 'IPK: ' + context.parsed.y.toFixed(2);
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 3.0,
                        max: 4.0,
                        ticks: {
                            color: textColor,
                            font: {
                                size: 12
                            }
                        },
                        grid: {
                            color: gridColor,
                            drawBorder: false
                        }
                    },
                    x: {
                        ticks: {
                            color: textColor,
                            font: {
                                size: 12
                            }
                        },
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }

    // Chart 2: Distribusi Nilai (Doughnut Chart)
    const gradeChartCanvas = document.getElementById('gradeChart');
    if (gradeChartCanvas) {
        const isDark = html.classList.contains('dark');
        const textColor = isDark ? '#e5e7eb' : '#374151';

        new Chart(gradeChartCanvas, {
            type: 'doughnut',
            data: {
                labels: ['A', 'A-', 'B+', 'B', 'B-', 'C+'],
                datasets: [{
                    label: 'Jumlah',
                    data: [15, 12, 8, 5, 3, 2],
                    backgroundColor: [
                        '#0047AB',
                        '#3b82f6',
                        '#60a5fa',
                        '#93c5fd',
                        '#dbeafe',
                        '#f3f4f6'
                    ],
                    borderWidth: 2,
                    borderColor: isDark ? '#1f2937' : '#ffffff'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                aspectRatio: 2,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            color: textColor,
                            font: {
                                size: 13
                            },
                            padding: 15,
                            usePointStyle: true
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderColor: '#0047AB',
                        borderWidth: 1,
                        padding: 12,
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.parsed || 0;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = ((value / total) * 100).toFixed(1);
                                return label + ': ' + value + ' (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });
    }
});