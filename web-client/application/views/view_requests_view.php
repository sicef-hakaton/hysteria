<!-- blok4 ---------------------------------------------------------------------->
		
		<style>
			
			.request {
				height: 135px;
			}
			
			.request-content {
				height: 130px;
			}
			
			.request-pane-left {
				height:122px;
				float: left;
				width: 500px;
				margin-top: 4px;
				border-right: 1px solid #ACACAC;
			}
			
			.left-div1, .right-div1 {
				height: 35px;
				margin-top: 5px;
			}
			
			.left-div2, .right-div2 {
				height: 35px;
				margin-top: 4px;
				margin-bottom: 4px;
			}
			
			.left-div3, .right-div3 {
				height: 35px;
			}
			
			.demand-label, .type-label, .index-label {
				display:inline-block;
				font-weight: bold;
				margin-top: 7px;
				margin-left: 20px;
			}
			
			.demand-content {
				font-weight: bold;
				display:inline-block;
				margin-left: 10px;
				color: #3D3E67;
			}
			
			.type-content {
				font-weight: bold;
				display:inline-block;
				margin-left: 50px;
				color: #3D3E67;
			}
			
			.index-content {
				font-weight: bold;
				display:inline-block;
				margin-left: 42px;
				color: #3D3E67;
			}
			
			.request-pane-right {
				height:122px;
				float: right;
				width: 390px;
				margin-top: 4px;
				margin-right: 15px;
			}
			
			.right-div1 {
				border-bottom: 1px solid #ACACAC;
				height: 34px;
			}
			
			.status-label {
				float: right;
				display:inline-block;
				font-weight: bold;
				margin-top: 7px;
			}
			
			.status-content {
				float: right;
				display:inline-block;
				font-weight: bold;
				margin-top: 7px;
				margin-left: 15px;
				color: #30A000;
			}
			
			.right-div2 img, .right-div3 img {
				width: 21px;
				height: 21px;
				float: right;
				margin-top: 7px;
				margin-left: 10px;
			}
			
			.right-div3 img  {
				margin-right: 3px;
				margin-left: 7px;
			}
			
			.approve-button, .deny-button {
				float: right;
				width: 55px;
				text-align: center;
			}
			
			.issue-label {
				float: right;
				font-weight: bold;
				margin-top: 7px;
				display: inline-block;
			}
			
			.issue-content {
				float: right;
				font-weight: bold;
				color: #3D3E67;
				margin-top: 7px;
				margin-left: 10px;
				margin-right: 10px;
				display: inline-block;
			}
			
			.comment-textfield {
				float: right;
				font-size: 16px;
				width: 250px;
				margin-right: 10px;
			}
			
		</style>
		
		<div class="fluid-element request">
			<div class="rigid-element request-content">
			
				<div class="request-pane-left">
					<div class="left-div1">
						<label class="demand-label">Датум захтевања:</label>
						<label class="demand-content">05-11-2014</label>
					</div>
					<div class="left-div2">
						<label class="type-label">Тип захтева:</label>
						<label class="type-content">Потврда за градски превоз</label>
					</div>
					<div class="left-div3">
						<label class="index-label">Број индекса:</label>
						<label class="index-content">13812</label>
					</div>
				</div>
				
				<div class="request-pane-right">
					<div class="right-div1">
						<label class="status-content">ОДОБРЕН</label>
						<label class="status-label">Статус захтева:</label>
					</div>
					<div class="right-div2">
						<img src="<?= base_url(); ?>asets/images/approve_icon.png"></img>
						<a><label class="approve-button button">Одобри</label></a>
						<label class="issue-content">14-11-2014</label>
						<label class="issue-label">Датум издавања:</label>
					</div>
					<div class="right-div3">
						<img src="<?= base_url(); ?>asets/images/deny_icon.png"></img>
						<a><label class="deny-button button">Одбиј</label></a>
						<input type="text" placeholder="/" class="comment-textfield" disabled/>
					</div>
				</div>
			
			</div>
		</div>
		
		<div class="fluid-element request">
			<div class="rigid-element request-content">
			
				<div class="request-pane-left">
					<div class="left-div1">
						<label class="demand-label">Датум захтевања:</label>
						<label class="demand-content">06-11-2014</label>
					</div>
					<div class="left-div2">
						<label class="type-label">Тип захтева:</label>
						<label class="type-content">Потврда за стипендију</label>
					</div>
					<div class="left-div3">
						<label class="index-label">Број индекса:</label>
						<label class="index-content">13650</label>
					</div>
				</div>
				
				<div class="request-pane-right">
					<div class="right-div1">
						<label class="status-content">ОДОБРЕН</label>
						<label class="status-label">Статус захтева:</label>
					</div>
					<div class="right-div2">
						<img src="<?= base_url(); ?>asets/images/approve_icon.png"></img>
						<a><label class="approve-button button">Одобри</label></a>
						<label class="issue-content">15-11-2014</label>
						<label class="issue-label">Датум издавања:</label>
					</div>
					<div class="right-div3">
						<img src="<?= base_url(); ?>asets/images/deny_icon.png"></img>
						<a><label class="deny-button button">Одбиј</label></a>
						<input type="text" placeholder="/" class="comment-textfield" disabled/>
					</div>
				</div>
			
			</div>
		</div>
		
		<div class="fluid-element request">
			<div class="rigid-element request-content">
			
				<div class="request-pane-left">
					<div class="left-div1">
						<label class="demand-label">Датум захтевања:</label>
						<label class="demand-content">07-11-2014</label>
					</div>
					<div class="left-div2">
						<label class="type-label">Тип захтева:</label>
						<label class="type-content">Овера потврде за мензу</label>
					</div>
					<div class="left-div3">
						<label class="index-label">Број индекса:</label>
						<label class="index-content">14450</label>
					</div>
				</div>
				
				<div class="request-pane-right">
					<div class="right-div1">
						<label style="color: red;" class="status-content">ОДБИЈЕН</label>
						<label class="status-label">Статус захтева:</label>
					</div>
					<div class="right-div2">
						<img src="<?= base_url(); ?>asets/images/approve_icon.png"></img>
						<a><label class="approve-button button">Одобри</label></a>
						<label class="issue-content">16-11-2014</label>
						<label class="issue-label">Датум издавања:</label>
					</div>
					<div class="right-div3">
						<img src="<?= base_url(); ?>asets/images/deny_icon.png"></img>
						<a><label class="deny-button button">Одбиј</label></a>
						<input type="text" placeholder="Унеси коментар ..." class="comment-textfield"  value="Неизмирене обавезе" disabled/>
					</div>
				</div>
			
			</div>
		</div>
		
		<div class="fluid-element request" style="height: 150px;">
			<div class="rigid-element request-content" style="height: 130px;">
			
				<div class="request-pane-left">
					<div class="left-div1">
						<label class="demand-label">Датум захтевања:</label>
						<label class="demand-content">09-11-2014</label>
					</div>
					<div class="left-div2">
						<label class="type-label">Тип захтева:</label>
						<label class="type-content">Уверење о дипломирању</label>
					</div>
					<div class="left-div3">
						<label class="index-label">Број индекса:</label>
						<label class="index-content">13812</label>
					</div>
				</div>
				
				<div class="request-pane-right">
					<div class="right-div1">
						<label style="color: #3D3E67;" class="status-content">НЕОБРАЂЕН</label>
						<label class="status-label">Статус захтева:</label>
					</div>
					<div class="right-div2">
						<img src="<?= base_url(); ?>asets/images/approve_icon.png"></img>
						<a><label class="approve-button button">Одобри</label></a>
						<label class="issue-content">N/A</label>
						<label class="issue-label">Датум издавања:</label>
					</div>
					<div class="right-div3">
						<img src="<?= base_url(); ?>asets/images/deny_icon.png"></img>
						<a><label class="deny-button button">Одбиј</label></a>
						<input type="text" placeholder="Унеси коментар ..." class="comment-textfield"/>
					</div>
				</div>
			
			</div>
		</div>
		
		<!------------------------------------------------------------------------------->