
function timer(rest) {
	$('#timer').text(rest + ' s');

	if(rest <= 0) {
		var alarm = $('#alarm-sound')[0];
		alarm.currentTime = 0;

		alarm.play();
	}
	else {
		setTimeout(function() {
			timer(rest - 1)
		}, 1000);
	}
}

(function() {

	$('body').on('click', '#reload-btn', function() {
		var secs = Math.round(Math.random() * 50 + 10);

		timer(secs);
	});

})();