@extends('layouts.dashboard')

@section('page_title')
	Welcome
@stop


@section('dashboard-content')

<div class="container-fluid home-page">
	<div class="row">
		<div class="col-md-6 calendar-col">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Welcome Sanket!</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4 calendar-wrapper">
							<div class="today">
								<h2 class="date"></h2>  <span class="month"></span>
							</div>									
						</div>
						<div class="col-md-8 calendar-widget">
							<div id="calendar2"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 graph-col">
			<div class="panel panel-default line-chart">
				<div class="panel-body">
					<div class="line-chart-container">
						<canvas id="home-line-chart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="alert alert-white">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Attention: </strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius lacus vitae purus tincidunt blandit. Phasellus malesuada accumsan felis venenatis mollis. Suspendisse at pharetra enim, in congue mauris. Nam sodales turpis lorem, ac semper augue congue sed. Nam id ullamcorper elit, at sodales justo. Aliquam suscipit mi nec ex tempus laoreet. Donec tincidunt risus eu rutrum sagittis. <a href="{{ url ('chart/c3charts') }}"></a>
		</div>
	</div>
	<div>
		<div class="row">
			<div class="col-md-4">
				@include('widgets.stat', array('icon'=> 'eye', 'header'=> 'Profile Views', 'value'=>'71,842', 'href'=>'#', 'color'=>'info'))
			</div>
			<div class="col-md-4">
				@include('widgets.stat', array('icon'=> 'bar-chart', 'header'=> 'Total Sales this week', 'value'=>'6,123', 'href'=>'#', 'color'=>'warning'))
			</div>
			<div class="col-md-4">
				@include('widgets.stat', array('icon'=> 'calculator', 'header'=> 'Net Revenue', 'value'=>'$12,34.00', 'href'=>'#', 'color'=>'danger'))
			</div>
		</div>
	</div>
</div>
    
@stop

@section('js')

	@parent

	<script>

		$(function(){


			// Activate Calendar

			$('#calendar2').fullCalendar({
			});




			// Line chart
			var lineChartData1 = {
	            labels : ["","","","","","","","","","","",""],
	            datasets : [
	                {
	                    label: "My First dataset",
	                    fillColor : "rgba(6, 197, 172, 0.5)",
	                    strokeColor : "rgba(6, 197, 172, 1)",
	                    pointColor : "rgba(6, 197, 172, 1)",
	                    pointStrokeColor : "#fff",
	                    pointHighlightFill : "#fff",
	                    pointHighlightStroke : "rgba(6, 197, 172, 1)",
	                    data : [65,59,80,81,56,55,40,74,36,65,33,55]
	                },
	                {
	                    label: "My Second dataset",
	                    fillColor : "rgba(244, 204, 11, 0.5)",
	                    strokeColor : "rgba(244, 204, 11, 1)",
	                    pointColor : "rgba(244, 204, 11, 1)",
	                    pointStrokeColor : "#fff",
	                    pointHighlightFill : "#fff",
	                    pointHighlightStroke : "rgba(244, 204, 11, 1)",
	                    data : [28,48,40,29,86,27,60,45,27,59,68,38]
	                }
	            ]

	        };

	    
	        var homeLineChart = document.getElementById("home-line-chart").getContext("2d");

	        var chartCurves = new Chart(homeLineChart).Line(lineChartData1, {
	            responsive: true,
	            scaleShowLabels:false,
	            scaleShowGridLines : false,
			    scaleShowHorizontalLines: false,
			    scaleShowVerticalLines: false,
	            pointDot: false
	        });

    		// Set the date
    		$('.today .date').text((new Date).getDate());
    		
    		var months = [
    			"January",
	    		"February",
	    		"March",
	    		"April",
	    		"May",
	    		"June",
	    		"July",
	    		"August",
	    		"September",
	    		"October",
	    		"November",
	    		"December"
    		];

    		$('.today .month').text(months[(new Date).getMonth()]);

		});

	</script>



@endsection