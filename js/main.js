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
    $('#dummy').hide();
    $('#calendarImage').hide();
    $('#keypadImage').hide();
    clearInterval(timerItself);
    $('#timer').text('0:00');
  });

  $('#logButton').click(function(){
    $('.divisionopaque').show();
    $('#dummy').show();
    $('#dummy').css({"margin-top":"-790px"});
  });
  $('#dummy').click(function(){
    $('.divisionopaque').hide();
    $('#dummy').hide();
  });

  $('#changeText').click(function(){
    $('#headText1').text('Can I have ice cubes');
    $('#headText2').text('I feel hungry');
    $('#headText3').text('My eye is in pain 8/10');
  });

  $('#calendar').click(function(){
    $('.divisionopaque').show();
    $('#calendarImage').show();
  });
  $('#calendarImage').click(function(){
    $('.divisionopaque').hide();
    $('#calendarImage').hide();
  });

  $('#keyboard').click(function(){
    $('.divisionopaque').show();
    $('#keypadImage').show();
  });
  $('#keypadImage').click(function(){
    $('.divisionopaque').hide();
    $('#keypadImage').hide();
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