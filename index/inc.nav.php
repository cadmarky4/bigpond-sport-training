<?php // inc nav 

if ($SEC_check != $CONFIG['SEC_Page_Secret']) exit;
?>

	<nav id="nav-header" class="navbar navbar-custom">
		<div id="nav-header-container" class="container-fluid navbar-container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span id="dashboard_link2" class="fa fa-th"></span>				
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<?php /* TODO: offline <li><a href="offline/" class="nav_offline" style="color:#ddd;" target="_blank"><i class="fa fa-wifi" style="font-size:14px; color:#ddd;"></i> &nbsp; Offline</a></li>@@@@@@@@@@@@@ offline disabled for now*/?>
					
				<?php if ($ADMIN) { ?>
					<li><a href="administration.php" class="nav_link nav_admin"><i class="fa fa-cogs"></i> &nbsp; <?=$LANG->BUTTON_ADMINISTRATION;?></a></li>
					
					<li><a href="config.php" class="nav_link"><i class="fa fa-cog" style="font-size:17px;"></i> &nbsp; <?=$LANG->CONFIG_PAGE_TITLE;?></a></li>
				<?php } ?>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart"></i> &nbsp; <?=$LANG->BUTTON_RESULTS;?> &nbsp; <b class="caret"></b></a>
						<ul class="dropdown-menu" style="padding:1px;">
							<li><a href="forms_results.php" class="nav_link nav_results_group" style="font-size:15px;"><i class="fa fa-bar-chart"></i> &nbsp;<i class="fa fa-user"></i>&nbsp; &nbsp; <?=$LANG->BUTTON_FORMS_RESULTS;?></a></li>
							<li><a href="results.php" class="nav_link nav_results_group" style="font-size:15px;"><i class="fa fa-bar-chart"></i> <i class="fa fa-users"></i> &nbsp; <?=$LANG->BUTTON_RESULTS;?></a></li>
						</ul>
					</li>
			

					<li><a href="login/ajax.page.profile_edit.php" class="nav_link nav_profile fancybox fancybox.ajax"><i class="fa fa-user"></i> &nbsp; <?=$LANG->BUTTON_USER_ACCOUNT;?></a></li>
					
					<li><a href="login/logout.php" class="nav_link nav_logout"><i class="fa fa-lock"></i> &nbsp; <?=$LANG->BUTTON_LOGOUT;?></a></li>
				</ul>
			</div>
		</div>
	</nav>
