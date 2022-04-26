				<div class="clearfix"></div>
				</div>
			</div>
			<!-- END PAGE CONTAINER-->		
		</div>
		<!-- END PAGE -->
		</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		&copy; 2008-{$smarty.now|date_format:"%Y"}, все права защищены. ИК «Приоритет»
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>	
	<![endif]-->
	==js==
	
	
	{literal}
	<script type="text/javascript">
		jQuery(".fixed-top").fadeIn("normal");
		jQuery(document).ready(function() {		
			App.setPage("index");  // set current page
			App.init(); // init the rest of plugins and elements
			setTimeout(function () {
				{/literal}
				{foreach from=$aTemplate.messages item=aMessage}
				showMessage("{$aMessage.title}", "{$aMessage.msg}");
				{/foreach}
				{literal}
			}, 500);
		});
	</script>
	{/literal}
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>