<style>

	#add-news {
		height: 300px;
	}
	
	#add-news-content {
		height: 280px;
	}
	
	#title-textfield {
		font-size: 16px;
		width: 878px;
		margin-bottom: 10px;
	}
	
	#news-text {
		font-family: Corbel;
		width: 878px;
		margin-bottom: 10px;
		height: 158px;
	}
	
	#publish {
		margin-left: 10px;
		margin-right: 10px;
		position: relative;
		margin-top: 10px;
	}
	
	#file-name {
		width: 545px;
		display: inline-block;
		border: 1px solid #ACACAC;
		padding-left: 10px;
		text-overflow: ellipsis;
		overflow: hidden;
		white-space: nowrap;
		float: left;
		font-size: 16px;
		height: 26px;
		line-height: 26px;
		box-shadow: 0px 0px 1px 1px #9498FB inset;
		background-color: white;
	}
	
	#pdf-file {
		width: 0px;
		height: 28px;
		background-color: red;
	}
	
	#submit-pdf {
		height: 28px;
		float: right;
		font-size: 16px;
	}
	
	#choose-file {
		float: right;
		background-color: #EAEAEA;
		border: 1px solid #ACACAC;
		font-weight: bold;
		height: 26px;
		line-height: 26px;
		margin-right: 10px;
		padding-left: 10px;
		padding-right: 10px;
	}
	
	#choose-file:hover {
		background-color: #E2EFFC;
		border: 1px solid #7EB4EA;
		color: #9498FB;
	}

</style>

<div id="add-news" class="fluid-element">
	<div id="add-news-content" class="rigid-element">
	
		<div style="height: 1px;"></div>
		
		<!--textarea id="news-text" form="publish" placeholder="Унеси обавештење ..."></textarea-->
		<form enctype="multipart/form-data" action="<?php echo base_url()?>Admin_controller/up" id="publish" method="POST">
			<input id="title-textfield" type="text" name="title" placeholder="Унеси наслов ..."/>
			<textarea id="news-text" name="content" form="publish" placeholder="Унеси обавештење ..."></textarea>
			<label id="file-name"></label>
			<input type="file" name="file" id="pdf-file"/>
			<input id="submit-pdf" type="submit" value="Објави обавештење"/>
			<label id="choose-file">Додај прилог (.pdf)</label>
		</form>
	
	</div>
</div>

<script>
	
	$("#pdf-file").change(function() {
		$("#file-name").html($("#pdf-file").val());
	});
	
	$("#choose-file").click(function() {
		$("#pdf-file").trigger("click");
	});
	
</script>