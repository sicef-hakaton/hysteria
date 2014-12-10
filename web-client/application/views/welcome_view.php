
	
		<!-- blok1 ---------------------------------------------------------------------->
	
		<style>
		
			#login_div {
				height: 400px;
				/*background-color: green;*/
			}

			#login_div-content 
			{
				height: 380px;
				
			}
			
			#login_div-content input[type="button"] { 
				margin-top: 30px;
				margin-left : 30px;
			}
			
			#login_div-content input[type="text"] { 
				width: 200px;
			}
		
		</style>
	
		<div id="login_div" class="fluid-element">
			<div id="login_div-content" class="rigid-element">
				
				<div style="height: 1px;"></div>
				
				<form action='Welcome/login_view' method="post" accept-charset="utf-8"> 
				<!--- ludnica ... -->
					<div>
					<label>Студент</label>
					<input type="text" placeholder="Унесите корисничко име ..."/>
					<input type="text" placeholder="Унесите лозинку ..."/>
					<!--input type="text" placeholder="Some text ..."/-->
					
					<!--label class="button">Moj Gumb</label-->
					<!--label class="button">Moj Gumb</label-->
					
					
					<input type="button" name="login" value="Пријавите се" ></input>
					<input type="button" onclick="location.href='<?php echo base_url();?>Welcome/login_view'" value="Register"></input>
					</div>
					<div>
					<label>Студент</label>
					<input type="text" placeholder="Унесите корисничко име ..."/>
					<input type="text" placeholder="Унесите лозинку ..."/>
					<!--input type="text" placeholder="Some text ..."/-->
					
					<!--label class="button">Moj Gumb</label-->
					<!--label class="button">Moj Gumb</label-->
					
					
					<input type="button" name="login" value="Пријавите се" ></input>
					<input type="button" onclick="location.href='<?php echo base_url();?>Welcome/login_view'" value="Register"></input>
					</div>
				</form>
			</div>
		</div>
		
		<!------------------------------------------------------------------------------->
		
		<!-- blok2 ---------------------------------------------------------------------->
	
		<style>
		
			#blok2 {
				height: 400px;
				/*background-color: red;*/
			}

			#blok2-content {
				height: 380px;
			}
		
		</style>
	
		<div id="blok2" class="fluid-element">
			<div id="blok2-content" class="rigid-element">
			
				<!--- ludnica ... -->blok2
			
			</div>
		</div>
		
		<!------------------------------------------------------------------------------->
		
		<!-- blok3 ---------------------------------------------------------------------->
	
		<style>
		
			#blok3 {
				height: 400px;
				/*background-color: aqua;*/
			}

			#blok3-content {
				height: 380px;
			}
		
		</style>
	
		<div id="blok3" class="fluid-element">
			<div id="blok3-content" class="rigid-element">
			
				<!--- ludnica ... -->blok3
			
			</div>
		</div>
		
		
		<!------------------------------------------------------------------------------->
		
		<!-- footer --------------------------------------------------------------------->
	
		<style>
		
			#footer {
				height: 150px;
				/*background-color: yellow;*/
			}

			#footer-content {
				height: 130px;
			}
		
		</style>
	
		<div id="footer" class="fluid-element">
			<div id="footer-content" class="rigid-element">
			
				<!--- ludnica ... -->footer
			
			</div>
		</div>
		
		<!------------------------------------------------------------------------------->
		
		<!-- background & tabs ---------------------------------------------------------->
		
		<div id="background"></div>
		
		<div class="tab">tab1</div>
		<div class="tab">tab2</div>
		<div class="tab">tab3</div>
		
		<!------------------------------------------------------------------------------->