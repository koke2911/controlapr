// Cargar Chart.js desde CDN si no está en tu proyecto
const script = document.createElement('script');
script.src = 'https://cdn.jsdelivr.net/npm/chart.js';
document.head.appendChild(script);

// Esperar a que Chart.js esté disponible
script.onload = function () {
    // Función para obtener datos de la tabla 'seguimiento'
    async function fetchSeguimientoData() {
        try {
            const response = await fetch('data_panel.php'); // Ruta del servidor para obtener los datos
            const data = await response.json();
            return data; // data = { pendiente: 10, noSolucionado: 5, solucionado: 15 }
        } catch (error) {
            console.error('Error al obtener los datos del seguimiento:', error);
            return { pendiente: 0, noSolucionado: 0, solucionado: 0 };
        }
    }

    // Crear el gráfico
    async function createSeguimientoChart() {
        const seguimientoData = await fetchSeguimientoData();

        // Configuración del gráfico
        const ctx = document.getElementById('seguimientoChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Pendiente', 'No solucionado', 'Solucionado'],
                datasets: [{
                    data: [
                        seguimientoData.pendiente,
                        seguimientoData.noSolucionado,
                        seguimientoData.solucionado
                    ],
                    backgroundColor: ['#F7F769', '#FB6666', '#96D796'],
                    borderColor: ['#E5D95C', '#E35D5D', '#85C685'],
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 10, // Ancho del cuadro de color junto al texto
                            boxHeight: 10, // Altura del cuadro de color (Chart.js 4.x+)
                            padding: 10, // Espaciado entre etiquetas
                            font: {
                                family: 'Arial', // Fuente de las etiquetas
                                size: 12, // Tamaño de la fuente
                                style: 'italic', // Estilo de la fuente ('normal', 'italic', 'oblique')
                                weight: 'bold', // Grosor de la fuente ('normal', 'bold', 'bolder', 'lighter')
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                const label = tooltipItem.label || '';
                                const value = tooltipItem.raw;
                                return `${label}: ${value}`;
                            }
                        }
                    }
                }
            }
        });
    }

    // Llamar a la función para renderizar el gráfico
    createSeguimientoChart();
};




$(document).ready(function () {

});

