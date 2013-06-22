<style>
.buttons {
	background-color: white;
	width: 460px;
	height:200px;
	margin: 10px;
	float:left;
	color:#2c2c2c;
	font-size:25px;
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
		<div class="buttons"><a href="<?php echo $buttons[0]['link'];?>" class="fill-div">
			<?php echo $buttons[0]['image']; ?><?php echo $buttons[0]['title'];?></a></div>
		<div class="buttons"><i class="icon-thumbs-down icon-3x"></i>DISCOMFORT</div>
		<div class="buttons"><a href="<?php echo $buttons[2]['link'];?>" class="fill-div">
			<?php echo $buttons[2]['image']; ?><?php echo $buttons[2]['title'];?></a></div>
		<div class="buttons"><a href="<?php echo $buttons[3]['link'];?>" class="fill-div">
			<?php echo $buttons[3]['image']; ?><?php echo $buttons[3]['title'];?></a></div>
		<div style="clear:both;"></div>
</div>

	