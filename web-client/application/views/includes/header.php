<!-- header --------------------------------------------------------------------->
		
		<style>

            #header {
                height: 180px;
            }

            #header-content {
                height: 160px;
            }

            #cover-left {
                width: 160px;
                height: 160px;
                float: left;
            }

            #cover-left img {
                height: 140px;
                width: auto;
                margin-top: 10px;
                margin-left: 10px;
            }

            #main-title {
                hight: 140px;
                width: 524px;
                float: left;
                margin-top: 10px;
                margin-left: 35px;
            }

            #main-title img {
                height: 140px;
                width: auto;
            }

            #cover-right {
                width: 160px;
                height: 160px;
                float: right;
            }

            #cover-right img {
                height: 140px;
                width: auto;
                margin-top: 10px;
                margin-right: 10px;
            }
			
		</style>
		
		<div id="header" class="fluid-element">
			<div id="header-content" class="rigid-element">

                <div id="cover-left"><img src="<?= base_url(); ?>/asets/images/sign.png"></img></div>
                <div id="main-title"><img src="<?= base_url(); ?>/asets/images/main-title.png"></img></div>
                <div id="cover-right"><img src="<?= base_url(); ?>/asets/images/snail.png"></img></div>


                <!--header -->
				<!--?php 
					if ($user === "none")
					{
					
						echo "nema korisnika";
					}
					else
					{
						
					}
				?-->
			</div>
		</div>
		
		<!------------------------------------------------------------------------------->