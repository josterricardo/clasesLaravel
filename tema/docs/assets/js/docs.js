$(function(){
	$('#calendar2').fullCalendar({ 
	});

	var chart2 = c3.generate({
	   bindto: '#piechart',
	    data: {
	         
	        // iris data from R
	        columns: [
	            ['data1', 30],
	            ['data2', 120],
	        ],
	        type : 'pie',
	        onclick: function (d, i) { console.log("onclick", d, i); },
	        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
	        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
	    },
	    color: {
	        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
	    }
	});
});
