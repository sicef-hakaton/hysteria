<style>

	#admin-opts {
		height: 190px;
	}

	#admin-opts-content {
		height: 170px;
	}
	
	.admin-opt {
		width: 168px;
		height: 130px;
		float: left;
		margin-right: 15px;
		position: relative;
	}
	
	#admin-opt-leftmost {
		width: 168px;
		height: 130px;
		float: left;
		margin-right: 15px;
		margin-left: 10px;
		position: relative;
	}
	
	#admin-opt-rightmost {
		width: 168px;
		height: 130px;
		float: right;
		margin-right: 10px;
		position: relative;
	}
	
	.opt-button {
		font-size: 20px;
		width: 146px;
		height: 64px;
		text-align: center;
		position: absolute;
		left: 0px;
		bottom: 0px;
	}
	
	.one-liner {
		line-height: 64px;
	}
	
	.two-liner {
		line-height: 32px;
	}
	
	.admin-opt-slide {
		background-color: #3D3E67;
		width: 100px;
		height: 56px;
		margin-left: 34px;
		margin-top: 56px;
	}
	
	.admin-opt-slide img {
		height: 46px;
		width: auto;
		margin-top: 5px;
		margin-left: 27px;
	}

</style>

<div id="admin-opts" class="fluid-element">
	<div id="admin-opts-content" class="rigid-element">
	
		<div style="height: 20px;"></div>
		
		<div id="admin-opt-leftmost">
			<div class="admin-opt-slide"><img src="<?= base_url(); ?>/asets/images/add_user.png"></img></div>
			<a href="<?= base_url(); ?>admin_controller/create_account_page"><label class="button opt-button one-liner">Направи налог</label></a>
		</div>
		<div class="admin-opt">
			<div class="admin-opt-slide"><img src="<?= base_url(); ?>/asets/images/add_info.png"></img></div>
			<a href="<?= base_url(); ?>admin_controller/add_news_page" ><label class="button opt-button two-liner">Објави овавештење</label></a>
		</div>
		<div class="admin-opt">
			<div class="admin-opt-slide"><img src="<?= base_url(); ?>/asets/images/view_info.png"></img></div>
			<a><label class="button opt-button two-liner">Прегледај овавештења</label></a>
		</div>
		<div class="admin-opt">
			<div class="admin-opt-slide"><img src="<?= base_url(); ?>/asets/images/demands.png"></img></div>
			<a href="<?= base_url(); ?>admin_controller/view_requests_page"><label class="button opt-button two-liner">Прегледај захтеве</label></a>
		</div>
		<div id="admin-opt-rightmost">
			<div class="admin-opt-slide"><img src="<?= base_url(); ?>/asets/images/prices.png"></img></div>
			<a><label class="button opt-button two-liner">Уреди ценовник</label></a>
		</div>
	
	</div>
</div>

<script>
	
	$(".opt-button").mouseenter(function() {
		$(this).parent().prev().animate({"marginTop": "0px"});
	}).mouseleave(function() {
		$(this).parent().prev().animate({"marginTop": "56px"});
	});
	
</script>