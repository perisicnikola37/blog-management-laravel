@extends('pages.profile_page')

<x-titles.analytics_title></x-titles.analytics_title>

@section('content')


@if (auth()->user()->admin == 'true')

<div style="margin: 80px">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"    integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	<div class="col-sm-7">
		<canvas id="myChart"></canvas>
	</div>
	
	
	<script>
		const ctx = document.getElementById('myChart').getContext('2d');
		const myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['User Registered', 'Blogs Posted'],
				datasets: [{
					label: 'Analytics',
					data: [{{$postsCount}}, {{$usersCount}}],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255, 0, 0, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					y: {
						beginAtZero: true
					}
				}
			}
		});
	
	</script>
 
 </div>
	
@else 

<!-- 404 Error Text -->
<style>
	.noselect {
		user-select: none;
	}

	.margin {
		margin-top: 8rem
	}
</style>
<div class="text-center noselect margin">
 <div class="error mx-auto" data-text="404">404 error</div>
 <p class="lead  mb-5 text-gray-800">
	<img 
	height="150"
	src="assets/img/locked.gif" 
	alt="Locked access"
	title="Locked access">
</p>
 <p class="text-gray-500 mb-0">You do not have permission to see this page...</p>
 <a href="{{route('profile-index')}}">&larr; Back</a>
</div>

	
@endif

@endsection