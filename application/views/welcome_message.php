<style>
.twoButton {
	background-color: white;
	width: 460px;
	height:500px;
	margin: 10px;
	float:left;
	color:#2c2c2c;
}

a.fill-div {
    display: block;
    height: 100%;
    width: 100%;
    text-decoration: none;
}
	</style>
<div id="wrapper">
	<div id="pageContent">
		<div class="twoButton"><a href="<?php echo base_url('myhealth');?>" class="fill-div"> MY HEALTH</a></div>
		<div class="twoButton"><a href="<?php echo base_url('myneeds');?>" class="fill-div"> MY NEEDS</a></div>
		<div style="clear:both;"></div>
	</div>
</div>