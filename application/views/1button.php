<style>
.oneButton {
	background-color: white;
	width: 920px;
	height:500px;
	margin: 10px;
	float:left;
	color:#2c2c2c;
	font-size: 55px;
	text-align: center;
}
</style>

<div id="wrapper">
	<a href="<?php echo $buttons[0]['link'];?>">
	<div class="oneButton">
		<img src="<?php echo $buttons[0]['image'];?>">
		<?php echo $buttons[0]['title']; ?>

		<img src="<?php if(isset($buttons[1])){ echo $buttons[1]['image'];}?>">
	</div></a>
</div>