<html>
<head></head>
<body>
<?
$arNumbers = array_merge(array('00', '01', '02', '03', '04', '05', '06', '07', '08', '09'), range(10, 99) );
shuffle($arNumbers);
echo implode('&nbsp;', array_slice($arNumbers, 0, 20) ).'<br>';

//$a = 27.89;
//$minut = ( ($a - intval($a) ) / 60);
//$b = round($minut, 6);
//echo round($b*60, 2)
?>

<p>
<button id="butt" onclick="doTimer()">Go</button>
</p>
<p>
<input type="checkbox" id="showTimer">Show timer
</p>
<p id="placeholderTimer"></p>

<script>
var start = 0;
var end = 0;
var proceed = false;
var sec = 0;
var stopTimer = false;
var showTimer = false;
var phTimer = document.getElementById('placeholderTimer');
var startButton = document.getElementById('butt');
var chbShowTimer = document.getElementById('showTimer');

function doTimer(){

//	var currentTime = new Date();
//	var sec = currentTime.getSeconds();
	var elem = document.getElementById("placeholderTimer");

	if(!proceed) {
		proceed = true;
		sec = 0;
		start = sec;
		showTimer = chbShowTimer.checked;
		startTimer();
		startButton.innerHTML = "Stop";
	}	else {
		proceed = false;
		end = sec;
		elem.innerHTML = end - start;
		stopTimer = true;
		startButton.innerHTML = "Go";
	}
}

function showTime(){
	sec++;
	if(showTimer){
		phTimer.innerHTML = sec;
	}else{

	}
	if(!stopTimer){
		setTimeout(showTime, 1000);
	}
}

function startTimer(){
	stopTimer = false;
	start=0;
	end=0;
	phTimer.innerHTML = '';
	setTimeout(showTime, 1000);
//	alert('Start timer');
}
</script>

</body>
</html>