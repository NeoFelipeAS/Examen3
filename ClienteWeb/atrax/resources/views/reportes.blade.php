@extends('layouts.app')

@section('title', '| Reportes')

@section('content')
@include('layouts.nav-app')

<div class="jumbotron mb-0 radius-0">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Reporte de tiquetes</h3>
					<canvas id="myChart" width="300" height="300"></canvas>
				</div>
				<div class="col-md-4">
					<h3>Reporte de facturas</h3>
					<canvas id="pie-chart" width="300" height="300"></canvas>
				</div>
				<div class="col-md-4">
					<h3>Reporte de usuarios</h3>
					<canvas id="line-chart" width="300" height="300"></canvas>
				</div>
			</div>
		</div>
    </div>
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
		<script>
			var ctx = document.getElementById('myChart').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Nuevos', 'En progreso', 'Cerrados'],
					datasets: [{
						label: '# de Casos',
						data: [6, 15, 22],
						backgroundColor: [
							'rgba(255, 206, 86, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                			'rgba(75, 192, 192, 0.2)'
						],
						borderColor: [
							'rgba(255, 206, 86, 1)',
							'rgba(255, 99, 132, 1)',
                			'rgba(75, 192, 192, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});
			new Chart(document.getElementById("pie-chart"), {
				type: 'pie',
				data: {
				labels: ["Canceladas", "Pendientes"],
				datasets: [{
					label: "Total de facturas",
					backgroundColor: ["#3cba9f", "#c45850"],
					data: [130000,75000]
				}]
				},
				options: {
				title: {
					display: true,
					text: 'Ingresos totales por facturas: CRC 250000'
				}
				}
			});
			new Chart(document.getElementById("line-chart"), {
			type: 'line',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4"],
				datasets: [{
					data: [8, 6, 11, 4],
					label: "Pedro",
					borderColor: "#3cba9f",
					fill: false
				}, {
					data: [12, 5, 4, 22],
					label: "Maria",
					borderColor: "#e8c3b9",
					fill: false
				}, {
					data: [0, 9, 6, 10],
					label: "Miguel",
					borderColor: "#c45850",
					fill: false
				}
				]
			},
			options: {
				title: {
				display: true,
				text: 'Por semana'
				}
			}
			});
		</script>
    @endpush
@endsection
