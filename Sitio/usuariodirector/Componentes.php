<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<title>Radmin - the Raddest Admin Template</title>
	<meta name="description" content="An admin template from Square Turtle Studios" />
	<meta name="author" content="Square Turtle Studios" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Styles -->
	<!-- Logo Font - Molle -->
	<link href="css/molle.css" rel="stylesheet" type="text/css" />

	<link href="css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/icon-style.css" />
	<!--[if lte IE 7]>
	<script src="../scripts/lte-ie7.js"></script>
	<![endif]-->
	<link href="css/bootstrap-responsive.css" rel="stylesheet" />
	<link href="css/radmin.css" rel="stylesheet" id="main-stylesheet" />
	<link href="css/radmin-responsive.css" rel="stylesheet" />

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.cloneposition.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
	<!--[if lte IE 9]>
	<script src="scripts/placeholder.js" type="text/javascript"></script>
	<![endif]-->
	<script type="text/javascript" src="scripts/theme.js"></script>
	<link rel="stylesheet" type="text/css" href="css/radmin-plugins.css" />
	<link rel="stylesheet" type="text/css" href="css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="css/datepicker.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body id="body-components">

	<div class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-inner black-gradient">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html">
					<span class="rad">Rad</span>min
				</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						<a id="user-popover" href="#" class="navbar-link user-info"> <i class="radmin-icon radmin-user"></i>
							Jack Frost
						</a>
						<a href="login.html" class="btn btn-mini btn-inverse navbar-link logout"> <i class="radmin-icon radmin-redo"></i>
							Logout
						</a>
					</p>

					<ul class="stats-sparkline pull-left hidden-phone hidden-tablet">
						<li>
							<span class="line-sparkline">Loading…</span>
							<span class="sparkline-text">Traffic</span>
						</li>
						<li>
							<span class="bar2-sparkline">Loading…</span>
							<span class="sparkline-text">Tickets</span>
						</li>
						<li>
							<span class="discrete-sparkline">Loading…</span>
							<span class="sparkline-text">Sales</span>
						</li>
						<li>
							<span class="bar1-sparkline">Loading…</span>
							<span class="sparkline-text">Revenue</span>
						</li>
					</ul>

					<form class="navbar-search pull-right" />
						<input type="text" class="span2 search-query" placeholder="Search" /></form>
				</div>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">&nbsp;</div>
	</div>

	<div class="row-fluid hidden-phone hidden-tablet">
		<div class="span12 top-stats">
			<ul class="top-nav-boxes">
				<li class="top-stats-arrow" title="Hide Top Stats" id="hide-top-stats">
					<img src="img/chevron-left.png" alt="Hide Top Stats" />
				</li>
				<li class="first">
					<a href="#">
						<i class="radmin-bookmark"></i>
						<span>Favourites</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="radmin-pencil"></i>
						<span>New Post</span>
					</a>
				</li>
				<li>
					<div class="notifications-wrapper">
						<div class="notifications"> <strong>3</strong>
						</div>
					</div>
					<a href="#">
						<i class="radmin-comments-2"></i>
						<span>Comments</span>
					</a>
				</li>
				<li>
					<a href="http://www.google.com/analytics/" target="_blank">
						<i class="radmin-dashboard"></i>
						<span>Analytics</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="radmin-stats-up"></i>
						<span>Reporting</span>
					</a>
				</li>
				<li>
					<div class="notifications-wrapper">
						<div class="notifications"> <strong>12</strong>
						</div>
					</div>
					<a href="#">
						<i class="radmin-bell"></i>
						<span>Alerts</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="radmin-cabinet"></i>
						<span>Sales History</span>
					</a>
				</li>
				<li id="color-switcher-control">
					<a href="#">
						<i class="radmin-cog"></i>
						<span>Styles</span>
					</a>
				</li>
			</ul>

			<div class="notifications-wrapper">
				<div class="color-switcher" id="color-switcher" style="display:none">
					<small>Choose style</small>
					<br />
					<span class="default color-switcher-color"></span>
					<span class="pink color-switcher-color"></span>
					<span class="green color-switcher-color"></span>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid main-container">
		<div class="row-fluid">
			<div class="span12">

				<div class="sidebar-nav">
					<ul class="nav nav-stacked left-menu">
						<li id="navigation-index">
							<a href="index.html">
								<span class="box">
									<i class="radmin-icon radmin-home"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Dashboard</span>
							</a>
						</li>
						<li id="navigation-calendar">
							<a href="calendar.html">
								<span class="box">
									<i class="radmin-icon radmin-calendar"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Calendar</span>
							</a>
						</li>
						<li id="navigation-graphs">
							<a href="graphs.html">
								<span class="box">
									<i class="radmin-icon radmin-bars"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Graphs &amp; Charts</span>
							</a>
						</li>
						<li class="accordion" id="navigation-sample-pages">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#navigation-sample-pages" href="#collapse1">
								<span class="box">
									<i class="radmin-icon radmin-file"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Sample Pages</span>
								<span class="label pull-right hidden-tablet hidden-phone">3</span>
							</a>
							<div id="collapse1" class="accordion-body collapse">
								<ul class="nav nav-stacked submenu">
									<li>
										<a href="users.html">
											<span class="box">
												<i class="radmin-icon radmin-user"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Users</span>
										</a>
									</li>
									<li>
										<a href="invoices.html">
											<span class="box">
												<i class="radmin-icon radmin-clipboard-2"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Invoices</span>
										</a>
									</li>
									<li class="submenu-last">
										<a href="reports.html">
											<span class="box">
												<i class="radmin-icon radmin-attachment"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Reports</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="accordion" id="navigation-components">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="navigation-components" href="#collapse2">
								<span class="box">
									<i class="radmin-icon radmin-tree-view"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Components</span>
								<span class="label pull-right hidden-tablet hidden-phone">3</span>
							</a>
							<div id="collapse2" class="accordion-body collapse">
								<ul class="nav nav-stacked submenu">
									<li>
										<a href="grid.html">
											<span class="box">
												<i class="radmin-icon radmin-grid-view"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Grid layout</span>
										</a>
									</li>
									<li>
										<a href="icons.html">
											<span class="box">
												<i class="radmin-icon radmin-picture"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Radmin Icons</span>
										</a>
									</li>
									<li class="submenu-last">
										<a href="elements.html">
											<span class="box">
												<i class="radmin-icon radmin-star"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Misc. Elements</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="container-fluid content-wrapper">

					<div class="row-fluid">
						<div class="span12">
							<div class="hero-unit non-index">
								<h2>Miscellaneous Elements</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod mattis consectetur. 
							Sed iaculis tincidunt egestas. Donec faucibus, justo quis dapibus tristique.
								</p>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">
							<ul class="breadcrumb">
								<li>
									<a href="index.html">
										<i class="radmin-icon radmin-home"></i>
										Dashboard
									</a>
									<span class="divider">/</span>
								</li>
								<li>
									<a href="#">
										<i class="radmin-icon radmin-tree-view"></i>
										Components
									</a>
									<span class="divider">/</span>
								</li>
								<li class="active">
									<i class="radmin-icon radmin-star"></i>
									Elements
								</li>
							</ul>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span4">
							<h4 class="title">DatePicker</h4>
							<div class="squiggly-border"></div>
							<div class="well align-center">
								<div id="dp1" class="input-append date" data-date-format="dd-mm-yyyy" data-date="17-02-2012">
									<input class="span5" type="text" readonly="" value="17-02-2012" size="16" />
									<span class="add-on">
										<i class="icon-calendar"></i>
									</span>
								</div>
							</div>
						</div>

						<div class="span4">
							<h4 class="title">ColorPicker</h4>
							<div class="squiggly-border"></div>
							<div class="well align-center">
								<div class="input-append color" id="cp1" data-color="hex(#8fff00)" data-color-format="hex">
									<input type="text" class="span5" value="#8fff00" />
									<span class="add-on">
										<i style="background-color: #FF92B4"></i>
									</span>
								</div>
							</div>
						</div>

						<div class="span4">
							<h4 class="title">Modals</h4>
							<div class="squiggly-border"></div>
							<div class="well align-center extra-padding">
								<a data-target="#modal1" role="button" class="btn btn-info" data-toggle="modal">Press me!</a>
							</div>
							<div class="modal hide fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1-label" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h3 id="modal1-label">Modal header</h3>
								</div>
								<div class="modal-body">
									<p>One fine body…</p>
								</div>
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									<button class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">&nbsp;</div>
					</div>

					<div class="row-fluid">
						<div class="span12">
							<h4 class="title">Progress Bars</h4>
							<div class="squiggly-border"></div>
							<div class="row-fluid">
								<div class="span6">
									<h5>Colours</h5>
									<div class="progress">
										<div class="bar" style="width: 10%;"></div>
									</div>
									<div class="progress progress-info">
										<div class="bar" style="width: 20%;"></div>
									</div>
									<div class="progress progress-success">
										<div class="bar" style="width: 30%;"></div>
									</div>
									<div class="progress progress-warning">
										<div class="bar" style="width: 40%;"></div>
									</div>
									<div class="progress progress-danger">
										<div class="bar" style="width: 50%;"></div>
									</div>
									<small>Radmin</small>
									<div class="progress progress-grey">
										<div class="bar" style="width: 60%;"></div>
									</div>
								</div>

								<div class="span6">
									<h5>Options</h5>
									<small>
										<strong>Striped</strong>
									</small>
									<br />
									<small>
										Uses a gradient to create a striped effect.
										<span class="text-error">Not available in IE7-8.</span>
									</small>
									<div class="progress progress-info progress-striped">
										<div class="bar" style="width: 20%;"></div>
									</div>
									<div class="progress progress-success progress-striped">
										<div class="bar" style="width: 30%;"></div>
									</div>

									<small>
										<strong>Active</strong>
									</small>
									<br />
									<small>
										Add the class of '.active' to '.progress-striped' to animate the stripes 
							    	right to left.
										<span class="text-error">Not available in all versions of IE.</span>
									</small>
									<div class="progress progress-warning progress-striped active">
										<div class="bar" style="width: 40%;"></div>
									</div>
									<div class="progress progress-danger progress-striped active">
										<div class="bar" style="width: 50%;"></div>
									</div>

									<small>
										<strong>Stacked</strong>
									</small>
									<div class="progress">
										<div class="bar bar-success" style="width: 35%;"></div>
										<div class="bar bar-warning" style="width: 20%;"></div>
										<div class="bar bar-danger" style="width: 10%;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">&nbsp;</div>
					</div>

					<div class="row-fluid">
						<div class="span12">
							<h4 class="title">Typography</h4>
							<div class="squiggly-border"></div>
							<h5>Emphasis Classes</h5>
							<div class="indent">
								<p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
								<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
								<p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
								<p class="text-info">
									Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.
								</p>
								<p class="text-success">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
								</p>
							</div>
							<h5>Descriptions</h5>
							<div class="indent">
								<dl>
									<dt>Nullam eu massa leo.</dt>
									<dd>
										Aenean hendrerit laoreet dui, vulputate consequat arcu condimentum sed. In elementum 
								auctor lacus.
									</dd>
									<dt>Sed a elit.</dt>
									<dd>A Etiam in dui ut dolor commodo auctor eu posuere orci.</dd>
								</dl>
								<dl class="dl-horizontal">
									<dt>Praesent id velit justo</dt>
									<dd>
										Pellentesque semper nisl nec turpis dapibus commodo. Lorem ipsum dolor sit amet, 
								consectetur adipiscing elit.
									</dd>
									<dt>Pellentesque</dt>
									<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
								</dl>
							</div>
							<h5>Blockquote</h5>
							<blockquote>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
								</p>
							</blockquote>
							<h5>Blockquote with source and right-aligned</h5>
							<blockquote class="pull-right">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
								</p>
								<small>
									Someone famous
									<cite title="Source Title">Source Title</cite>
								</small>
							</blockquote>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">&nbsp;</div>
					</div>

					<div class="row-fluid">
						<div class="span4">
							<h4 class="title">Alerts</h4>
							<div class="squiggly-border"></div>
							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Hey there!</strong>
								This is an example of an alert that's not so important.
							</div>
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Well done!</strong>
								This is an alert for a successful change.
							</div>
							<div class="alert alert">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Attention!</strong>
								This is an alert that requires your attention.
							</div>
							<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Attention!</strong>
								This is an example of an alert for when there is an error.
							</div>
						</div>
						<div class="span8">
							<h4 class="title">Buttons</h4>
							<div class="squiggly-border"></div>
							<div>
								<h5>Large</h5>
								<button class="btn btn-large" type="button">Button</button>
								<button class="btn btn-large btn-primary" type="button">Button</button>
								<button class="btn btn-large btn-info" type="button">Button</button>
								<button class="btn btn-large btn-success" type="button">Button</button>
								<button class="btn btn-large btn-warning" type="button">Button</button>
								<button class="btn btn-large btn-danger" type="button">Button</button>
								<button class="btn btn-large btn-inverse" type="button">Button</button>
							</div>
							<div>
								<h5>Default</h5>
								<button class="btn" type="button">Button</button>
								<button class="btn btn-primary" type="button">Button</button>
								<button class="btn btn-info" type="button">Button</button>
								<button class="btn btn-success" type="button">Button</button>
								<button class="btn btn-warning" type="button">Button</button>
								<button class="btn btn-danger" type="button">Button</button>
								<button class="btn btn-inverse" type="button">Button</button>
							</div>
							<div>
								<h5>Small</h5>
								<button class="btn btn-small" type="button">Button</button>
								<button class="btn btn-small btn-primary" type="button">Button</button>
								<button class="btn btn-small btn-info" type="button">Button</button>
								<button class="btn btn-small btn-success" type="button">Button</button>
								<button class="btn btn-small btn-warning" type="button">Button</button>
								<button class="btn btn-small btn-danger" type="button">Button</button>
								<button class="btn btn-small btn-inverse" type="button">Button</button>
							</div>
							<div>
								<h5>Mini</h5>
								<button class="btn btn-mini" type="button">Button</button>
								<button class="btn btn-mini btn-primary" type="button">Button</button>
								<button class="btn btn-mini btn-info" type="button">Button</button>
								<button class="btn btn-mini btn-success" type="button">Button</button>
								<button class="btn btn-mini btn-warning" type="button">Button</button>
								<button class="btn btn-mini btn-danger" type="button">Button</button>
								<button class="btn btn-mini btn-inverse" type="button">Button</button>
							</div>
							<div>
								<h5>Block Level</h5>
								<button class="btn btn-large btn-block btn-info" type="button">Block level button</button>
								<button class="btn btn-large btn-block" type="button">Block level button</button>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">&nbsp;</div>
					</div>

					<div class="row-fluid">
						<div class="span6">
							<h4 class="title">Button Dropdowns</h4>
							<div class="squiggly-border"></div>
							<div class="btn-toolbar">
								<div class="btn-group">
									<button class="btn dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group">
									<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group">
									<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group">
									<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group">
									<button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="btn-toolbar">
								<div class="btn-group">
									<button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group">
									<button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
							<br />
							<h5>Works with different button sizes</h5>
							<div class="btn-toolbar">
								<div class="btn-group">
									<button class="btn btn-large dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group">
									<button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
								<div class="btn-group">
									<button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">
										Action
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="span6">
							<h4 class="title">Buttons with Icons</h4>
							<div class="squiggly-border"></div>
							<button class="btn btn-icon" type="button">
								<i class="icon-edit"></i>
								Edit
							</button>
							<button class="btn btn-icon btn-info" type="button">
								<i class="icon-search icon-white"></i>
								Preview
							</button>
							<button class="btn btn-icon btn-success" type="button">
								<i class="icon-refresh icon-white"></i>
								Refresh
							</button>
							<button class="btn btn-icon btn-danger" type="button">
								<i class="icon-trash icon-white"></i>
								Delete
							</button>
							<br />
							<br />
							<button class="btn btn-icon btn-primary" type="button">
								<i class="icon-comment icon-white"></i>
								Comment
							</button>
							<button class="btn btn-icon btn-warning" type="button">
								<i class="icon-remove icon-white"></i>
								Remove
							</button>
							<button class="btn btn-icon btn-inverse" type="button">
								<i class="icon-tag icon-white"></i>
								Tag
							</button>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">&nbsp;</div>
					</div>

					<div class="row-fluid">
						<div class="span8">
							<h4 class="title">Labels</h4>
							<div class="squiggly-border"></div>
							<table class="table table-striped table-bordered table-radmin">
								<thead>
									<tr>
										<th>Example</th>
										<th>Use</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<span class="label">Default</span>
										</td>
										<td>
											<code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-success">Success</span>
										</td>
										<td>
											<code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-warning">Warning</span>
										</td>
										<td>
											<code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-important">Important</span>
										</td>
										<td>
											<code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-info">Info</span>
										</td>
										<td>
											<code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-inverse">Default</span>
										</td>
										<td>
											<code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="span4">
							<h4 class="title">Button Groups</h4>
							<div class="squiggly-border"></div>
							<h5>A regular button group</h5>
							<div class="btn-group">
								<button class="btn">Left</button>
								<button class="btn">Middle</button>
								<button class="btn">Right</button>
							</div>

							<br />
							<h5>A button toolbar</h5>
							<div class="btn-toolbar radmin-button-toolbar" style="margin: 0;">
								<div class="btn-group">
									<button class="btn">
										<i class="icon-step-backward"></i>
									</button>
									<button class="btn">
										<i class="icon-fast-backward"></i>
									</button>
									<button class="btn">
										<i class="icon-backward"></i>
									</button>
								</div>
								<div class="btn-group">
									<button class="btn">
										<i class="icon-play"></i>
									</button>
									<button class="btn">
										<i class="icon-pause"></i>
									</button>
									<button class="btn">
										<i class="icon-stop"></i>
									</button>
								</div>
								<div class="btn-group">
									<button class="btn">
										<i class="icon-forward"></i>
									</button>
									<button class="btn">
										<i class="icon-fast-forward"></i>
									</button>
									<button class="btn">
										<i class="icon-step-forward"></i>
									</button>
								</div>
							</div>

							<br />
							<h5>A vertical button group</h5>
							<div class="btn-group btn-group-vertical">
								<button class="btn" type="button">
									<i class="icon-align-left"></i>
								</button>
								<button class="btn" type="button">
									<i class="icon-align-center"></i>
								</button>
								<button class="btn" type="button">
									<i class="icon-align-right"></i>
								</button>
								<button class="btn" type="button">
									<i class="icon-align-justify"></i>
								</button>
							</div>

						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">&nbsp;</div>
					</div>

					<div class="row-fluid">
						<div class="span8">
							<h4 class="title">Badges</h4>
							<div class="squiggly-border"></div>
							<table class="table table-striped table-bordered table-radmin">
								<thead>
									<tr>
										<th>Name</th>
										<th>Example</th>
										<th>Use</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Default</td>
										<td>
											<span class="badge">1</span>
										</td>
										<td>
											<code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>Success</td>
										<td>
											<span class="badge badge-success">2</span>
										</td>
										<td>
											<code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>Warning</td>
										<td>
											<span class="badge badge-warning">3</span>
										</td>
										<td>
											<code>&lt;span class="badge badge-warning"&gt;3&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>Important</td>
										<td>
											<span class="badge badge-important">4</span>
										</td>
										<td>
											<code>&lt;span class="badge badge-important"&gt;4&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>Info</td>
										<td>
											<span class="badge badge-info">5</span>
										</td>
										<td>
											<code>&lt;span class="badge badge-info"&gt;5&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>Inverse</td>
										<td>
											<span class="badge badge-inverse">6</span>
										</td>
										<td>
											<code>&lt;span class="badge badge-inverse"&gt;6&lt;/span&gt;</code>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="span4">
							<h4 class="title">Pagination</h4>
							<div class="squiggly-border"></div>
							<div class="pagination">
								<ul>
									<li class="disabled">
										<a href="#">&laquo;</a>
									</li>
									<li class="active">
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li>
										<a href="#">3</a>
									</li>
									<li>
										<a href="#">4</a>
									</li>
									<li>
										<a href="#">5</a>
									</li>
									<li>
										<a href="#">&raquo;</a>
									</li>
								</ul>
							</div>

							<div>
								<ul class="pager">
									<li>
										<a href="#">Previous</a>
									</li>
									<li>
										<a href="#">Next</a>
									</li>
								</ul>
							</div>

							<div>
								<ul class="pager">
									<li class="disabled">
										<a href="#">Previous</a>
									</li>
									<li>
										<a href="#">Next</a>
									</li>
								</ul>
							</div>

							<div>
								<ul class="pager">
									<li class="previous">
										<a href="#">&larr; Older</a>
									</li>
									<li class="next">
										<a href="#">Newer &rarr;</a>
									</li>
								</ul>
							</div>

							<div>
								<ul class="pager">
									<li class="previous disabled">
										<a href="#">&larr; Older</a>
									</li>
									<li class="next">
										<a href="#">Newer &rarr;</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">&nbsp;</div>
					</div>

					<div class="row-fluid">
						<div class="span12">
							<h4 class="title">
								Bootstrap Icons
								<small>
									Provided by
									<a href="http://glyphicons.com/" target="_blank">Glyphicons</a>
								</small>
							</h4>
							<div class="squiggly-border"></div>
							<small>Available in dark-grey or white</small>
							<br />
							<br />
							<ul class="the-icons clearfix" style="list-style: none;">
								<li>
									<i class="icon-glass"></i>
									icon-glass
								</li>
								<li>
									<i class="icon-music"></i>
									icon-music
								</li>
								<li>
									<i class="icon-search"></i>
									icon-search
								</li>
								<li>
									<i class="icon-envelope"></i>
									icon-envelope
								</li>
								<li>
									<i class="icon-heart"></i>
									icon-heart
								</li>
								<li>
									<i class="icon-star"></i>
									icon-star
								</li>
								<li>
									<i class="icon-star-empty"></i>
									icon-star-empty
								</li>
								<li>
									<i class="icon-user"></i>
									icon-user
								</li>
								<li>
									<i class="icon-film"></i>
									icon-film
								</li>
								<li>
									<i class="icon-th-large"></i>
									icon-th-large
								</li>
								<li>
									<i class="icon-th"></i>
									icon-th
								</li>
								<li>
									<i class="icon-th-list"></i>
									icon-th-list
								</li>
								<li>
									<i class="icon-ok"></i>
									icon-ok
								</li>
								<li>
									<i class="icon-remove"></i>
									icon-remove
								</li>
								<li>
									<i class="icon-zoom-in"></i>
									icon-zoom-in
								</li>
								<li>
									<i class="icon-zoom-out"></i>
									icon-zoom-out
								</li>
								<li>
									<i class="icon-off"></i>
									icon-off
								</li>
								<li>
									<i class="icon-signal"></i>
									icon-signal
								</li>
								<li>
									<i class="icon-cog"></i>
									icon-cog
								</li>
								<li>
									<i class="icon-trash"></i>
									icon-trash
								</li>
								<li>
									<i class="icon-home"></i>
									icon-home
								</li>
								<li>
									<i class="icon-file"></i>
									icon-file
								</li>
								<li>
									<i class="icon-time"></i>
									icon-time
								</li>
								<li>
									<i class="icon-road"></i>
									icon-road
								</li>
								<li>
									<i class="icon-download-alt"></i>
									icon-download-alt
								</li>
								<li>
									<i class="icon-download"></i>
									icon-download
								</li>
								<li>
									<i class="icon-upload"></i>
									icon-upload
								</li>
								<li>
									<i class="icon-inbox"></i>
									icon-inbox
								</li>

								<li>
									<i class="icon-play-circle"></i>
									icon-play-circle
								</li>
								<li>
									<i class="icon-repeat"></i>
									icon-repeat
								</li>
								<li>
									<i class="icon-refresh"></i>
									icon-refresh
								</li>
								<li>
									<i class="icon-list-alt"></i>
									icon-list-alt
								</li>
								<li>
									<i class="icon-lock"></i>
									icon-lock
								</li>
								<li>
									<i class="icon-flag"></i>
									icon-flag
								</li>
								<li>
									<i class="icon-headphones"></i>
									icon-headphones
								</li>
								<li>
									<i class="icon-volume-off"></i>
									icon-volume-off
								</li>
								<li>
									<i class="icon-volume-down"></i>
									icon-volume-down
								</li>
								<li>
									<i class="icon-volume-up"></i>
									icon-volume-up
								</li>
								<li>
									<i class="icon-qrcode"></i>
									icon-qrcode
								</li>
								<li>
									<i class="icon-barcode"></i>
									icon-barcode
								</li>
								<li>
									<i class="icon-tag"></i>
									icon-tag
								</li>
								<li>
									<i class="icon-tags"></i>
									icon-tags
								</li>
								<li>
									<i class="icon-book"></i>
									icon-book
								</li>
								<li>
									<i class="icon-bookmark"></i>
									icon-bookmark
								</li>
								<li>
									<i class="icon-print"></i>
									icon-print
								</li>
								<li>
									<i class="icon-camera"></i>
									icon-camera
								</li>
								<li>
									<i class="icon-font"></i>
									icon-font
								</li>
								<li>
									<i class="icon-bold"></i>
									icon-bold
								</li>
								<li>
									<i class="icon-italic"></i>
									icon-italic
								</li>
								<li>
									<i class="icon-text-height"></i>
									icon-text-height
								</li>
								<li>
									<i class="icon-text-width"></i>
									icon-text-width
								</li>
								<li>
									<i class="icon-align-left"></i>
									icon-align-left
								</li>
								<li>
									<i class="icon-align-center"></i>
									icon-align-center
								</li>
								<li>
									<i class="icon-align-right"></i>
									icon-align-right
								</li>
								<li>
									<i class="icon-align-justify"></i>
									icon-align-justify
								</li>
								<li>
									<i class="icon-list"></i>
									icon-list
								</li>

								<li>
									<i class="icon-indent-left"></i>
									icon-indent-left
								</li>
								<li>
									<i class="icon-indent-right"></i>
									icon-indent-right
								</li>
								<li>
									<i class="icon-facetime-video"></i>
									icon-facetime-video
								</li>
								<li>
									<i class="icon-picture"></i>
									icon-picture
								</li>
								<li>
									<i class="icon-pencil"></i>
									icon-pencil
								</li>
								<li>
									<i class="icon-map-marker"></i>
									icon-map-marker
								</li>
								<li>
									<i class="icon-adjust"></i>
									icon-adjust
								</li>
								<li>
									<i class="icon-tint"></i>
									icon-tint
								</li>
								<li>
									<i class="icon-edit"></i>
									icon-edit
								</li>
								<li>
									<i class="icon-share"></i>
									icon-share
								</li>
								<li>
									<i class="icon-check"></i>
									icon-check
								</li>
								<li>
									<i class="icon-move"></i>
									icon-move
								</li>
								<li>
									<i class="icon-step-backward"></i>
									icon-step-backward
								</li>
								<li>
									<i class="icon-fast-backward"></i>
									icon-fast-backward
								</li>
								<li>
									<i class="icon-backward"></i>
									icon-backward
								</li>
								<li>
									<i class="icon-play"></i>
									icon-play
								</li>
								<li>
									<i class="icon-pause"></i>
									icon-pause
								</li>
								<li>
									<i class="icon-stop"></i>
									icon-stop
								</li>
								<li>
									<i class="icon-forward"></i>
									icon-forward
								</li>
								<li>
									<i class="icon-fast-forward"></i>
									icon-fast-forward
								</li>
								<li>
									<i class="icon-step-forward"></i>
									icon-step-forward
								</li>
								<li>
									<i class="icon-eject"></i>
									icon-eject
								</li>
								<li>
									<i class="icon-chevron-left"></i>
									icon-chevron-left
								</li>
								<li>
									<i class="icon-chevron-right"></i>
									icon-chevron-right
								</li>
								<li>
									<i class="icon-plus-sign"></i>
									icon-plus-sign
								</li>
								<li>
									<i class="icon-minus-sign"></i>
									icon-minus-sign
								</li>
								<li>
									<i class="icon-remove-sign"></i>
									icon-remove-sign
								</li>
								<li>
									<i class="icon-ok-sign"></i>
									icon-ok-sign
								</li>

								<li>
									<i class="icon-question-sign"></i>
									icon-question-sign
								</li>
								<li>
									<i class="icon-info-sign"></i>
									icon-info-sign
								</li>
								<li>
									<i class="icon-screenshot"></i>
									icon-screenshot
								</li>
								<li>
									<i class="icon-remove-circle"></i>
									icon-remove-circle
								</li>
								<li>
									<i class="icon-ok-circle"></i>
									icon-ok-circle
								</li>
								<li>
									<i class="icon-ban-circle"></i>
									icon-ban-circle
								</li>
								<li>
									<i class="icon-arrow-left"></i>
									icon-arrow-left
								</li>
								<li>
									<i class="icon-arrow-right"></i>
									icon-arrow-right
								</li>
								<li>
									<i class="icon-arrow-up"></i>
									icon-arrow-up
								</li>
								<li>
									<i class="icon-arrow-down"></i>
									icon-arrow-down
								</li>
								<li>
									<i class="icon-share-alt"></i>
									icon-share-alt
								</li>
								<li>
									<i class="icon-resize-full"></i>
									icon-resize-full
								</li>
								<li>
									<i class="icon-resize-small"></i>
									icon-resize-small
								</li>
								<li>
									<i class="icon-plus"></i>
									icon-plus
								</li>
								<li>
									<i class="icon-minus"></i>
									icon-minus
								</li>
								<li>
									<i class="icon-asterisk"></i>
									icon-asterisk
								</li>
								<li>
									<i class="icon-exclamation-sign"></i>
									icon-exclamation-sign
								</li>
								<li>
									<i class="icon-gift"></i>
									icon-gift
								</li>
								<li>
									<i class="icon-leaf"></i>
									icon-leaf
								</li>
								<li>
									<i class="icon-fire"></i>
									icon-fire
								</li>
								<li>
									<i class="icon-eye-open"></i>
									icon-eye-open
								</li>
								<li>
									<i class="icon-eye-close"></i>
									icon-eye-close
								</li>
								<li>
									<i class="icon-warning-sign"></i>
									icon-warning-sign
								</li>
								<li>
									<i class="icon-plane"></i>
									icon-plane
								</li>
								<li>
									<i class="icon-calendar"></i>
									icon-calendar
								</li>
								<li>
									<i class="icon-random"></i>
									icon-random
								</li>
								<li>
									<i class="icon-comment"></i>
									icon-comment
								</li>
								<li>
									<i class="icon-magnet"></i>
									icon-magnet
								</li>

								<li>
									<i class="icon-chevron-up"></i>
									icon-chevron-up
								</li>
								<li>
									<i class="icon-chevron-down"></i>
									icon-chevron-down
								</li>
								<li>
									<i class="icon-retweet"></i>
									icon-retweet
								</li>
								<li>
									<i class="icon-shopping-cart"></i>
									icon-shopping-cart
								</li>
								<li>
									<i class="icon-folder-close"></i>
									icon-folder-close
								</li>
								<li>
									<i class="icon-folder-open"></i>
									icon-folder-open
								</li>
								<li>
									<i class="icon-resize-vertical"></i>
									icon-resize-vertical
								</li>
								<li>
									<i class="icon-resize-horizontal"></i>
									icon-resize-horizontal
								</li>
								<li>
									<i class="icon-hdd"></i>
									icon-hdd
								</li>
								<li>
									<i class="icon-bullhorn"></i>
									icon-bullhorn
								</li>
								<li>
									<i class="icon-bell"></i>
									icon-bell
								</li>
								<li>
									<i class="icon-certificate"></i>
									icon-certificate
								</li>
								<li>
									<i class="icon-thumbs-up"></i>
									icon-thumbs-up
								</li>
								<li>
									<i class="icon-thumbs-down"></i>
									icon-thumbs-down
								</li>
								<li>
									<i class="icon-hand-right"></i>
									icon-hand-right
								</li>
								<li>
									<i class="icon-hand-left"></i>
									icon-hand-left
								</li>
								<li>
									<i class="icon-hand-up"></i>
									icon-hand-up
								</li>
								<li>
									<i class="icon-hand-down"></i>
									icon-hand-down
								</li>
								<li>
									<i class="icon-circle-arrow-right"></i>
									icon-circle-arrow-right
								</li>
								<li>
									<i class="icon-circle-arrow-left"></i>
									icon-circle-arrow-left
								</li>
								<li>
									<i class="icon-circle-arrow-up"></i>
									icon-circle-arrow-up
								</li>
								<li>
									<i class="icon-circle-arrow-down"></i>
									icon-circle-arrow-down
								</li>
								<li>
									<i class="icon-globe"></i>
									icon-globe
								</li>
								<li>
									<i class="icon-wrench"></i>
									icon-wrench
								</li>
								<li>
									<i class="icon-tasks"></i>
									icon-tasks
								</li>
								<li>
									<i class="icon-filter"></i>
									icon-filter
								</li>
								<li>
									<i class="icon-briefcase"></i>
									icon-briefcase
								</li>
								<li>
									<i class="icon-fullscreen"></i>
									icon-fullscreen
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="black-gradient">
		<a class="brand pull-right" href="index.html">
			<span class="rad">Rad</span>min
		</a>
		<div class="square-turtle pull-left">
			<p>
				2012 &copy; All rights reserved -
				<a href="http://www.squareturtle.com.au" target="_blank">square turtle studios</a>
			</p>
		</div>
	</footer>
	<!-- Javascript -->

	<!-- Sparklines -->
	<script type="text/javascript" src="scripts/sparkline.js"></script>

	<script type="text/javascript">
     	switcher_div = $('#color-switcher');
		switcher_control = $('#color-switcher-control');
		switcher_is_transitioning = false;
		
		switcher_div_style = {
			'width': switcher_control.children('a:first').width(),
			'z-index': 2,
			'top': '+=78px',
			'left': '-=5px'
		};
		
		switcher_control_style = {
			'z-index': 3,
			'position': 'relative'
		};

		
		
		function get_flot_colors() {
		    if(radmin_current_theme === 'pink') {
		        return ['#E63E5D', '#97AF22', '#9D3844', '#533436', '#082D35'];
		    } else if(radmin_current_theme === 'green') {
		        return ['#42826C', '#FFC861', '#A5C77F', '#6d9f00', '#002F32'];
		    } else {
		        return ['#49AFCD', '#FF6347', '#38849A', '#BF4A35', '#999', '#555'];
		    }
		
		    return ['#49AFCD', '#FF6347', '#38849A', '#BF4A35', '#999', '#555'];
		}
		
		function get_sparkline_colors(){
			if(radmin_current_theme === 'pink') {
		        return ['#E63E5D', '#97AF22'];
		    } else if(radmin_current_theme === 'green') {
		        return ['#42826C', '#FFC861'];
		    } else {
		        return ['#49AFCD', '#FF6347'];
		    }
		
		    return ['#49AFCD', '#FF6347'];
		}
     
	    var sparkline_colors = get_sparkline_colors();
	    
    	/**
		 *  Jquery Load Event
		 *
		 */
		jQuery(function($){
			// format date inputs
			$( "a[rel=popover]" ).popover();
			
 	        $('.bar1-sparkline').sparkline([12, 8, 10, 13, 15, -6, -8, 10, 18, 10, -8, -7 ], {type: 'bar', barColor: sparkline_colors[0], negBarColor: sparkline_colors[1], barWidth: '5', height: '20'} );
	       
	        $('.bar2-sparkline').sparkline([ [5,6],[7,9],[9,5],[6,2],[10,4],[6,7],[5,4],[6,7] ], {type: 'bar',stackedBarColor: sparkline_colors, barWidth: '5', height: '20'} );
	       
	        $('.discrete-sparkline').sparkline([ 12,11,13,14,13,12,11,12,13,14,15,16,15,14,13,14,15,16,17,18,17,16,17 ], {type: 'discrete', lineColor: sparkline_colors[0], height: '20'} );
	       
	        $('.line-sparkline').sparkline([ 12,11,13,14,13,12,11,12,13,14,15,16,15,14,13,12,11,12,13,14,15,16,17,18 ], {type: 'line', lineColor: sparkline_colors[0], fillColor: sparkline_colors[0], height: '20'} );
	        
	        $('#user-popover').popover();
	        
	        /**
	         * Sets active and expands menu items based on id of body tag of current page
	         * e.g. <body id="body-index-page"> will result in the menu item with the id="navigation-index-page" having the 
	         * class 'active' added, subsequently it will look for a child div with a class of collapse and add the class 'in' 
	         * and set the height to auto
	         */
	        var body_id = $('body').attr('id');
			if(body_id != null){
				var nav_element = $('#navigation-' + body_id.replace('body-',''));
	        	nav_element.addClass('active');
	        	if(nav_element.has('div.collapse')){
	        		var child_nav = nav_element.find('div.collapse');
	        		child_nav.addClass('in');
	        		child_nav.css('height: auto;');
	        		
	        	}
	        	
	        }
	        
	        //hide the top-stats when the arrow is clicked
	        var item = $('.top-stats');
	        var target = $('#hide-top-stats');
	        if(item.length > 0 && target.length > 0){
   		        target.on('click', function() {
					item.css('position', 'relative');
					item.animate({
					    left: '-=1200',
		  		  	}, 1000, function() {
					    // Animation complete.
					    item.hide('slow');
					});
				});
			}
			
			//display the color-switcher and change theme (plus anything with comments of //used in theming logic )
			position_color_switcher(true);
			switcher_div.show();
			
			switcher_control.on('click', toggle_color_switcher);
			
			$(window).resize(function() {
				switcher_div.hide();
			});
			
			$('.color-switcher-color').bind('click', set_theme_url);
			
			
		});
		
    </script>

	<!-- Date & Color Picker js files -->

	<script type="text/javascript" src="scripts/bootstrap-colorpicker.js"></script>
	<script type="text/javascript" src="scripts/bootstrap-datepicker.js"></script>

	<script type="text/javascript">
	  $(function(){
	  
       $('#cp1').colorpicker();

		
		$('#dp1').datepicker();
	  });
	</script>

</body>
</html>