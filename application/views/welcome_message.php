<style>
.twoButton {
	background-color: white;
	width: 460px;
	height:500px;
	margin: 10px;
	float:left;
	color:#2c2c2c;
	font-size: 55px;
	text-align: center;
}

a.fill-div {
    display: block;
    height: 100%;
    width: 100%;
    text-decoration: none;
}

a:link { 
	text-decoration: none;
	color:black;
	}
a:visited { 
	text-decoration: none;
	color:black;
	}
a:hover { 
	text-decoration: none;
	color:black;
	}
a:active { 
	text-decoration: none;
	color:black;
	}
	</style>
<div id="wrapper">
	<div id="pageContent">
		<div class="twoButton"><i class="icon-ambulance icon-5x"></i><a href="<?php echo base_url('myhealth');?>" class="fill-div"> MY HEALTH</a></div>
		<div class="twoButton"><i class="icon-food icon-5x"></i><a href="<?php echo base_url('myneeds');?>" class="fill-div"> MY NEEDS</a></div>
		<div style="clear:both;"></div>
	</div>
</div>