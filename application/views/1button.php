<style>
.oneButton {
	background-color: white;
	width: 980px;
	height:438px;
	/*margin: 22px 22px 0 22px;*/
	float:left;
	color:#2c2c2c;
	font-size: 55px;
	text-align: center;
	border-radius:20px;
}
</style>

<div id="wrapper">
	<div id="pageContent">
		<a href="<?php echo $buttons[0]['link'];?>">
		<div class="oneButton">
			<img src="<?php echo $buttons[0]['image'];?>">
			<?php echo $buttons[0]['title']; ?>


			<?php if(isset($buttons[1])) :?>
				<img src="<?php echo $buttons[1]['image'];?>">
				<?php echo $buttons[1]['title']; ?>
			<?php endif ?>


			<!-- <img src="<?php if(isset($buttons[1])){ echo $buttons[1]['image'];}?>">
			<?php echo $buttons[1]['title']; ?> -->
		</div></a>
	</div>
</div>