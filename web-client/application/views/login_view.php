<style>

	#login {
		height: 340px;
	}

	#login-content {
		height: 320px;
	}
	
	#student-form {
		width: 400px;
		height: 240px;
		float: left;
		margin-top: 40px;
		margin-left: 40px;
	}
	
	#admin-form {
		width: 400px;
		height: 240px;
		float: right;
		margin-top: 40px;
		margin-right: 40px;
	}
	
	.login-img {
		height: 72px;
		width: auto;
		float: right;
	}
	
	#student-button, #admin-button {
		width: 318px;
		height: 72px;
		text-align: center;
		font-size: 16px;
		line-height: 72px;
	}
	
	.login-textfield {
		font-size: 16px;
		width: 378px;
		margin-top: 20px;
	}
	
	.login-info {
		height: 30px;
		width: 398px;
		border: 1px solid red;
		margin-top: 30px;
		background-color: rgba(255, 255, 255, 0.5);
	}
	
	.login-info img {
		margin-top: 3px;
		margin-left: 3px;
		float: left;
	}
	.login-info label {
		color: red;
		display: inline-block;
		float: left;
		line-height: 30px;
		margin-left: 6px;
	}


</style>

<div id="login" class="fluid-element">
	<div id="login-content" class="rigid-element">
	
		<div style="height: 1px;"></div>
		
		<form id="student-form" action="<?= base_url(); ?>welcome/login_as_student" method="POST" accept-charset="utf-8">
			<input type="submit" id="student-button" value="Пријави се као студент"/>
			<img class="login-img" src="<?= base_url(); ?>/asets/images/student.png"></img>
			<input name="stdUsername" class="login-textfield" type="text" placeholder="Унеси број индекса ..."/>
			<input name="stdPassword" class="login-textfield" type="password" placeholder="Унеси лозинку ..."/>
			<div class="login-info">
				<img src="<?= base_url(); ?>/asets/images/info.png"></img>
				<label>
					<?php
						if ($message_std != "")
							echo $message_std;
					?>
				</label>
			</div>
		</form>
		
		<form id="admin-form" action="<?= base_url(); ?>welcome/login_as_admin"  method="POST" accept-charset="utf-8">
			<input type="submit" id="admin-button" value="Пријави се као администратор"/>
			<img class="login-img" src="<?= base_url(); ?>/asets/images/admin.png"></img>
			<input name="admUsername" class="login-textfield" type="text" placeholder="Унеси корисничко име ..."/>
			<input name="admPassword" class="login-textfield" type="password" placeholder="Унеси лозинку ..."/>
			<div class="login-info">
				<img src="<?= base_url(); ?>/asets/images/info.png"></img>
				<label>
					<?php
						if ($message_adm != "")
							echo $message_adm;
					?>
				</label>
			</div>
		</form>
	
	</div>
</div>