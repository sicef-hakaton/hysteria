<style>

	#add-student {
		height: 117px;
	}
	
	#add-student-content {
		height: 97px;
	}
	
	#add-student-form {
		background-color: yellow;
		margin-top: 10px;
		margin-left: 10px;
		margin-right: 10px;
	}
	
	#index-textfield {
		float: left;
		width: 263px;
		font-size: 16px;
		margin-right: 22px;
	}
	
	#pass-textfield {
		float: left;
		width: 263px;
		font-size: 16px;
	}
	
	#confirm-textfield {
		float: right;
		width: 263px;
		font-size: 16px;
	}
	
	.add-student-info {
		height: 30px;
		width: 590px;
		border: 1px solid red;
		float: left;
		margin-top: 10px;
		background-color: rgba(255, 255, 255, 0.5);
	}
	
	.add-student-info img {
		margin-top: 3px;
		margin-left: 3px;
		float: left;
	}
	
	.add-student-info label {
		color: red;
		display: inline-block;
		float: left;
		line-height: 30px;
		margin-left: 6px;
	}
	
	#add-student-button 	{
		float: right;
		margin-top: 10px;
		font-size: 16px;
		height: 32px;
		width: 285px;
	}

</style>

<div id="add-student" class="fluid-element">
	<div id="add-student-content" class="rigid-element">
	
		<div style="height: 1px;"></div>
	
		<form id="add-student-form" action="<?= base_url(); ?>admin_controller/create_account" method="POST">
			<input name="index" id="index-textfield" type="text" name="index" placeholder="Унеси индекс ..."/>
			<input id="pass-textfield" type="password" name="password" placeholder="Унеси лозинку ..."/>
			<input  id="confirm-textfield" type="password" name="confirm_password" placeholder="Понови лозинку ..."/>
			<div class="add-student-info">
				<img src="/images/info.png"></img>
				<label>
                    <?php echo $message ?>
				</label>
			</div>
			<input id="add-student-button" type="submit" value="Направи налог" />
		</form>
	
	</div>
</div>