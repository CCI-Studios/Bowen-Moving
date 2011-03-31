<!DOCTYPE html>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
$testing = "true";
?>
<html>
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="/templates/BowenMoving/css/template.css" />
	<script src="/templates/BowenMoving/scripts/column_set.js" type="text/javascript" charset="utf-8"></script>
	<link rel="shortcut icon" href="/templates/BowenMoving/images/favicon.ico" />
</head>
	
<body class="<?php echo $menu ?>">
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22408768-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<div id="top"><div>
		<jdoc:include type="modules" name="top" style="xhtml"/>
		<div class="clear"></div>	
		
		<div id="logo1">
			<jdoc:include type="modules" name="logo1" style="xhtml"/>
		</div><!-- end logo1 -->
			
		<div id="logo2">
			<jdoc:include type="modules" name="logo2" style="xhtml"/>
		</div><!-- end logo2 -->
		<div class="clear"></div>
	</div></div>	
						
	<div id="mainmenu"><div>
		<jdoc:include type="modules" name="mainmenu" style="xhtml" />
		<div class="clear"></div>
	</div></div>
	
	<div id="content"><div><div>
		<jdoc:include type="component" />
		<div class="clear"></div>
	</div></div></div>

	<div id="bottom"><div>
		<div class="colContainer">
			<jdoc:include type="modules" name="bottom" style="xhtml" />	
		</div>
		<div class="clear"></div>
	</div></div>

	<div id="footer"><div>
			<div>Copyright &copy; Bowen Moving <?php echo date('Y') ?><br /> 
			 	 Site by<a href="http://www.ccistudios.com" target="_blank">
			     CCI Studios</a>
				<jdoc:include type="modules" name="footer" style="xhtml"/>
			</div>
	</div></div>
	
	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="raw" />
	</div>
</body>

</html>