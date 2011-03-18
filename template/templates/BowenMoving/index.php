<!DOCTYPE html>

<html>
	
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="/templates/BowenMoving/css/template.css" />
</head>
	
<body>
	<div id="top">
		<div>
			<jdoc:include type="modules" name="top" style="xhtml"/>
			<div class="clear"></div>	
			
			<div id="logo1">
				<jdoc:include type="modules" name="logo1" style="xhtml"/>
			</div><!-- end logo1 -->
				
			<div id="logo2">
				<jdoc:include type="modules" name="logo2" style="xhtml"/>
			</div><!-- end logo2 -->
		</div>
	</div>	
						
	<div id="mainmenu">
		<div id="main">
			<jdoc:include type="modules" name="mainmenu" style="xhtml" />
		</div>
	</div>
	
	<div id="content">	
		<jdoc:include type="component" />
	</div>

	<div id="bottom">
		<div>
			<jdoc:include type="modules" name="bottom" style="xhtml" />
		</div>
	</div>

	<div id="footer">
		<div>
			<jdoc:include type="modules" name="footer" style="xhtml"/>
		</div>
		<div>Copyright &copy; Bowen Moving 2011 
			 <span>Site by<a href="http://www.ccistudios.com" target="_blank"> CCI Studios</a></span>
		</div>
	</div>
</body>

</html>