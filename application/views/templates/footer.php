
		<div id="wrapper">
			<div id="pageNav">
				<div id="pageNavLeft">
					<a href="<?php echo base_url();?>"><div class="navButton1"><i class="icon-home icon-3x" style="float:left;"></i><p>HOME</p></div></a>
					<div id="calendar" class="navButton1"><i class="icon-calendar icon-3x" style="float:left;"></i><p>CALENDAR</p></div>
					<a href="<?php echo  base_url($back_url);?>"><div class="navButton1"><i class="icon-arrow-left icon-3x" style="float:left;"></i><p>BACK</p></div></a>
					<a href=""><div id="keyboard" class="navButton1"><i class="icon-keyboard icon-3x" style="float:left;"></i><p>KEYBOARD</p></div></a>
					<div style="clear:both;"></div>
				</div>
				<div id="navButton2"><p style="float:left;">HELP<span style="margin-left:10px;"></span><i class="icon-exclamation-sign"></i></p></div>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="divisionopaque hideclass"></div>
		<div class="stopbox hideclass">
			<img src="<?php echo base_url();?>img/stopsign.png">
			<div style="margin-top:-500px;">
				<p style="font-size:130px;">HELP</p>
				<p style="margin-top:130px;">I've been waiting for</p>
				<p id="timer" style="margin-top:50px;">0:00</p>
				<p style="margin-top:50px;">minutes</p>
			</div>
		</div>
		<div id="wrapper">
			<img id="dummy" src="<?php echo base_url();?>img/dummytext.png">
		</div>
		<img id="calendarImage" style="position:absolute; display:none; z-index:99999; top:0; left:0;" src="<?php echo base_url();?>img/june2013.png">
	</body>
</html>



<!-- <img style="width:180px;" src="<?php echo base_url();?>img/bed.png"> -->