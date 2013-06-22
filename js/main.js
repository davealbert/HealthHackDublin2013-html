var timerCount;
var timerItself;
$(document).ready(function () {
  $('#navButton2').click(function(){
    timerCount = 0;
    $('.divisionopaque').show();
    $('.stopbox').show();
    timerItself = setInterval('countUp()',1000);
  });
  $('.hideclass').click(function(){
    $('.divisionopaque').hide();
    $('.stopbox').hide();
    clearInterval(timerItself);
    $('#timer').text('0:00');
  });
});




function countUp()
{
  timerCount++;
  var mins = Math.floor(timerCount/60);
  var seconds = timerCount%60;
  if (seconds<10) {
    $('#timer').text(mins+':0'+seconds);
  }
  else
  {
    $('#timer').text(mins+':'+seconds);
  }
}