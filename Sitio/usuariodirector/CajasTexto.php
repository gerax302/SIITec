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
	<!--[if lte IE 8]>
	<style>
				select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
					min-height: 20px !important;
				}
			</style>
	<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body id="body-sample-pages">

	<div class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-inner black-gradient">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html">
					<span class="rad">SII</span>Tec</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						<a id="user-popover" href="#" class="navbar-link user-info"> <i class="radmin-icon radmin-user"></i>
							Usuario
					  </a>
						<a href="login.html" class="btn btn-mini btn-inverse navbar-link logout"> <i class="radmin-icon radmin-redo"></i>
							Cerrar Sesión
					  </a>
					</p>

					<ul class="stats-sparkline pull-left hidden-phone hidden-tablet">
						
						</ul>

					</div>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">&nbsp;</div>
	</div>

	<div class="row-fluid hidden-phone hidden-tablet">
		<div class="span12 top-stats">
		
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
								<span class="hidden-tablet hidden-phone">Inicio</span>
							</a>
						</li>
						<li id="navigation-calendar">
							<a href="calendar.html">
								<span class="box">
									<i class="radmin-icon radmin-bell"></i>
								</span>
                                <span class="hidden-tablet hidden-phone">Notificaciones</span>
                                
                                 <div class="notifications-wrapper" >
	          <div class="notifications"> <strong>12</strong> </div>
            </div>
							</a>
						</li>
						<li class="accordion" id="navigation-sample-pages">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#navigation-sample-pages" href="#collapse1">
								<span class="box">
									<i class="radmin-icon radmin-user-3"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Usuarios</span>
								<span class="label pull-right hidden-tablet hidden-phone">2</span>
							</a>
							<div id="collapse1" class="accordion-body collapse">
								<ul class="nav nav-stacked submenu">
									<li>
										<a href="users.php">
											<span class="box">
												<i class="radmin-icon radmin-user"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Alta Usuarios</span>
										</a>
									</li>
									<li>
										<a href="invoices.html">
											<span class="box">
												<i class="radmin-icon radmin-cog"></i>
											</span><span class="hidden-tablet hidden-phone">Modificar Usuarios</span></a>
									</li>
									<li class="submenu-last">
										
									</li>
								</ul>
							</div>
						</li>
						<li class="accordion" id="navigation-components">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="navigation-components" href="#collapse2">
								<span class="box">
									<i class="radmin-icon radmin-book"></i>
								</span>
								<span class="hidden-tablet hidden-phone">Consultas</span>
								<span class="label pull-right hidden-tablet hidden-phone">2</span>
							</a>
							<div id="collapse2" class="accordion-body collapse">
								<ul class="nav nav-stacked submenu">
									<li>
										<a href="grid.html">
											<span class="box">
												<i class="radmin-icon radmin-bars"></i>
											</span>
                                            <span class="hidden-tablet hidden-phone">Gráficas</span>
                                            </a>
									</li>
									<li>
										<a href="icons.html">
											<span class="box">
												<i class="radmin-icon radmin-file"></i>
											</span>
											<span class="hidden-tablet hidden-phone">Documentos</span>
										</a>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="container-fluid content-wrapper">

					<div class="row-fluid">
						<div class="span12">
							<div class="hero-unit non-index">
								<h2>CajasTexto</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod mattis consectetur. 
							Sed iaculis tincidunt egestas. Donec faucibus, justo quis dapibus tristique.
								</p>
								<br />
								<p class="hidden-phone">
									<a class="btn btn-info btn-large pull-right">Create invoice &raquo;</a>
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
										<i class="radmin-icon radmin-file"></i>
										Sample Pages
									</a>
									<span class="divider">/</span>
								</li>
								<li class="active">
									<i class="radmin-icon radmin-clipboard-2"></i>
									Invoices
								</li>
							</ul>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Well done!</strong>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">
							<h4 class="title">Create an invoice</h4>
							<div class="squiggly-border"></div>

							<div class="progress progress-grey">
								<div class="bar" style="width: 30%;"></div>
							</div>

							<form class="form-horizontal invoice-form" />
								<fieldset>
									<h6>Client Details</h6>
									<div class="control-group">
										<label class="control-label" for="invoice-first-name">First Name</label>
										<div class="controls">
											<input id="invoice-first-name" class="input-large" type="text" name="invoice-first-name" /></div>
									</div>

									<div class="control-group">
										<label class="control-label" for="invoice-last-name">Last Name</label>
										<div class="controls">
											<input id="invoice-last-name" class="input-large" type="text" name="invoice-last-name" /></div>
									</div>

									<div class="control-group">
										<label class="control-label" for="invoice-email">Email</label>
										<div class="controls">
											<input id="invoice-email" class="span5" type="text" name="invoice-email" />
											<span class="help-block">Please ensure that email addresses are entered correctly</span>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="billing-address1">Billing Address</label>
										<div class="controls controls-row">
											<input id="billing-address1" class="span5" type="text" name="billing-address1" placeholder="Address*" />
											<input id="billing-address2" class="span5" type="text" name="billing-address2" placeholder="Address 2 (optional)" /></div>
										<div class="controls controls-row">
											<input id="billing-town" class="span8" type="text" name="billing-town" placeholder="Town/City*" />
											<input id="billing-postcode" class="span2" type="text" name="billing-postcode" placeholder="Postcode/Zip*" /></div>
										<div class="controls controls-row">
											<select id="country" name="country" class="span5">
												<option value="none" data-country-id="null" class="disabled" />Choose Country*
												<option value="af" data-country-id="4" />&#10; Afghanistan&#10;
												<option value="al" data-country-id="7" />&#10; Albania&#10;
												<option value="dz" data-country-id="60" />&#10; Algeria&#10;
												<option value="as" data-country-id="13" />&#10; American Samoa&#10;
												<option value="ad" data-country-id="2" />&#10; Andorra&#10;
												<option value="ao" data-country-id="10" />&#10; Angola&#10;
												<option value="ai" data-country-id="6" />&#10; Anguilla&#10;
												<option value="aq" data-country-id="11" />&#10; Antarctica&#10;
												<option value="ag" data-country-id="5" />&#10; Antigua and Barbuda&#10;
												<option value="ar" data-country-id="12" />&#10; Argentina&#10;
												<option value="am" data-country-id="8" />&#10; Armenia&#10;
												<option value="aw" data-country-id="16" />&#10; Aruba&#10;
												<option value="ac" data-country-id="1" />&#10; Ascension Island&#10;
												<option value="au" data-country-id="15" />&#10; Australia&#10;
												<option value="at" data-country-id="14" />&#10; Austria&#10;
												<option value="az" data-country-id="17" />&#10; Azerbaijan&#10;
												<option value="bs" data-country-id="31" />&#10; Bahamas&#10;
												<option value="bh" data-country-id="24" />&#10; Bahrain&#10;
												<option value="bd" data-country-id="20" />&#10; Bangladesh&#10;
												<option value="bb" data-country-id="19" />&#10; Barbados&#10;
												<option value="by" data-country-id="35" />&#10; Belarus&#10;
												<option value="be" data-country-id="21" />&#10; Belgium&#10;
												<option value="bz" data-country-id="36" />&#10; Belize&#10;
												<option value="bj" data-country-id="26" />&#10; Benin&#10;
												<option value="bm" data-country-id="27" />&#10; Bermuda&#10;
												<option value="bt" data-country-id="32" />&#10; Bhutan&#10;
												<option value="bo" data-country-id="29" />&#10; Bolivia&#10;
												<option value="ba" data-country-id="18" />&#10; Bosnia and Herzegovina&#10;
												<option value="bw" data-country-id="34" />&#10; Botswana&#10;
												<option value="bv" data-country-id="33" />&#10; Bouvet Island&#10;
												<option value="br" data-country-id="30" />&#10; Brazil&#10;
												<option value="io" data-country-id="103" />&#10; British Indian Ocean Territory&#10;
												<option value="bn" data-country-id="28" />&#10; Brunei Darussalam&#10;
												<option value="bg" data-country-id="23" />&#10; Bulgaria&#10;
												<option value="bf" data-country-id="22" />&#10; Burkina Faso&#10;
												<option value="bi" data-country-id="25" />&#10; Burundi&#10;
												<option value="kh" data-country-id="114" />&#10; Cambodia&#10;
												<option value="cm" data-country-id="46" />&#10; Cameroon&#10;
												<option value="ca" data-country-id="37" />&#10; Canada&#10;
												<option value="cv" data-country-id="51" />&#10; Cape Verde Islands&#10;
												<option value="ky" data-country-id="121" />&#10; Cayman Islands&#10;
												<option value="cf" data-country-id="40" />&#10; Central African Republic&#10;
												<option value="td" data-country-id="207" />&#10; Chad&#10;
												<option value="cl" data-country-id="45" />&#10; Chile&#10;
												<option value="cn" data-country-id="47" />&#10; China&#10;
												<option value="cx" data-country-id="52" />&#10; Christmas Island&#10;
												<option value="cc" data-country-id="38" />&#10; Cocos (Keeling) Islands&#10;
												<option value="co" data-country-id="48" />&#10; Colombia&#10;
												<option value="km" data-country-id="116" />&#10; Comoros&#10;
												<option value="cd" data-country-id="39" />&#10; Congo, Democratic Republic of&#10;
												<option value="cg" data-country-id="41" />&#10; Congo, Republic of&#10;
												<option value="ck" data-country-id="44" />&#10; Cook Islands&#10;
												<option value="cr" data-country-id="49" />&#10; Costa Rica&#10;
												<option value="ci" data-country-id="43" />&#10; Cote d'Ivoire&#10;
												<option value="hr" data-country-id="95" />&#10; Croatia/Hrvatska&#10;
												<option value="cy" data-country-id="53" />&#10; Cyprus&#10;
												<option value="cz" data-country-id="54" />&#10; Czech Republic&#10;
												<option value="dk" data-country-id="57" />&#10; Denmark&#10;
												<option value="dj" data-country-id="56" />&#10; Djibouti&#10;
												<option value="dm" data-country-id="58" />&#10; Dominica&#10;
												<option value="do" data-country-id="59" />&#10; Dominican Republic&#10;
												<option value="tp" data-country-id="216" />&#10; East Timor&#10;
												<option value="ec" data-country-id="61" />&#10; Ecuador&#10;
												<option value="eg" data-country-id="63" />&#10; Egypt&#10;
												<option value="sv" data-country-id="203" />&#10; El Salvador&#10;
												<option value="gq" data-country-id="85" />&#10; Equatorial Guinea&#10;
												<option value="er" data-country-id="65" />&#10; Eritrea&#10;
												<option value="ee" data-country-id="62" />&#10; Estonia&#10;
												<option value="et" data-country-id="67" />&#10; Ethiopia&#10;
												<option value="fk" data-country-id="70" />&#10; Falkland Islands&#10;
												<option value="fo" data-country-id="72" />&#10; Faroe Islands&#10;
												<option value="fj" data-country-id="69" />&#10; Fiji&#10;
												<option value="fi" data-country-id="68" />&#10; Finland&#10;
												<option value="fr" data-country-id="73" />&#10; France&#10;
												<option value="gf" data-country-id="77" />&#10; French Guiana&#10;
												<option value="pf" data-country-id="170" />&#10; French Polynesia&#10;
												<option value="tf" data-country-id="208" />&#10; French Southern Territories&#10;
												<option value="ga" data-country-id="74" />&#10; Gabon&#10;
												<option value="gm" data-country-id="82" />&#10; Gambia&#10;
												<option value="ge" data-country-id="76" />&#10; Georgia&#10;
												<option value="de" data-country-id="55" />&#10; Germany&#10;
												<option value="gh" data-country-id="79" />&#10; Ghana&#10;
												<option value="gi" data-country-id="80" />&#10; Gibraltar&#10;
												<option value="gr" data-country-id="86" />&#10; Greece&#10;
												<option value="gl" data-country-id="81" />&#10; Greenland&#10;
												<option value="gd" data-country-id="75" />&#10; Grenada&#10;
												<option value="gp" data-country-id="84" />&#10; Guadeloupe&#10;
												<option value="gu" data-country-id="89" />&#10; Guam&#10;
												<option value="gt" data-country-id="88" />&#10; Guatemala&#10;
												<option value="gg" data-country-id="78" />&#10; Guernsey&#10;
												<option value="gn" data-country-id="83" />&#10; Guinea&#10;
												<option value="gw" data-country-id="90" />&#10; Guinea-Bissau&#10;
												<option value="gy" data-country-id="91" />&#10; Guyana&#10;
												<option value="ht" data-country-id="96" />&#10; Haiti&#10;
												<option value="hm" data-country-id="93" />&#10; Heard and McDonald Islands&#10;
												<option value="hn" data-country-id="94" />&#10; Honduras&#10;
												<option value="hk" data-country-id="92" />&#10; Hong Kong&#10;
												<option value="hu" data-country-id="97" />&#10; Hungary&#10;
												<option value="is" data-country-id="106" />&#10; Iceland&#10;
												<option value="in" data-country-id="102" />&#10; India&#10;
												<option value="id" data-country-id="98" />&#10; Indonesia&#10;
												<option value="iq" data-country-id="249" />&#10; Iraq&#10;
												<option value="ie" data-country-id="99" />&#10; Ireland&#10;
												<option value="im" data-country-id="101" />&#10; Isle of Man&#10;
												<option value="il" data-country-id="100" />&#10; Israel&#10;
												<option value="it" data-country-id="107" />&#10; Italy&#10;
												<option value="jm" data-country-id="109" />&#10; Jamaica&#10;
												<option value="jp" data-country-id="111" />&#10; Japan&#10;
												<option value="je" data-country-id="108" />&#10; Jersey&#10;
												<option value="jo" data-country-id="110" />&#10; Jordan&#10;
												<option value="kz" data-country-id="122" />&#10; Kazakhstan&#10;
												<option value="ke" data-country-id="112" />&#10; Kenya&#10;
												<option value="ki" data-country-id="115" />&#10; Kiribati&#10;
												<option value="kr" data-country-id="119" />&#10; Korea, Republic of (South Korea)&#10;
												<option value="kv" data-country-id="248" />&#10; Kosovo&#10;
												<option value="kw" data-country-id="120" />&#10; Kuwait&#10;
												<option value="kg" data-country-id="113" />&#10; Kyrgyzstan&#10;
												<option value="la" data-country-id="123" />&#10; Laos&#10;
												<option value="lv" data-country-id="132" />&#10; Latvia&#10;
												<option value="lb" data-country-id="124" />&#10; Lebanon&#10;
												<option value="ls" data-country-id="129" />&#10; Lesotho&#10;
												<option value="lr" data-country-id="128" />&#10; Liberia&#10;
												<option value="ly" data-country-id="246" />&#10; Libya&#10;
												<option value="li" data-country-id="126" />&#10; Liechtenstein&#10;
												<option value="lt" data-country-id="130" />&#10; Lithuania&#10;
												<option value="lu" data-country-id="131" />&#10; Luxembourg&#10;
												<option value="mo" data-country-id="143" />&#10; Macau&#10;
												<option value="mk" data-country-id="139" />&#10; Macedonia&#10;
												<option value="mg" data-country-id="137" />&#10; Madagascar&#10;
												<option value="mw" data-country-id="151" />&#10; Malawi&#10;
												<option value="my" data-country-id="153" />&#10; Malaysia&#10;
												<option value="mv" data-country-id="150" />&#10; Maldives&#10;
												<option value="ml" data-country-id="140" />&#10; Mali&#10;
												<option value="mt" data-country-id="148" />&#10; Malta&#10;
												<option value="mh" data-country-id="138" />&#10; Marshall Islands&#10;
												<option value="mq" data-country-id="145" />&#10; Martinique&#10;
												<option value="mr" data-country-id="146" />&#10; Mauritania&#10;
												<option value="mu" data-country-id="149" />&#10; Mauritius&#10;
												<option value="yt" data-country-id="239" />&#10; Mayotte Island&#10;
												<option value="mx" data-country-id="152" />&#10; Mexico&#10;
												<option value="fm" data-country-id="71" />&#10; Micronesia&#10;
												<option value="md" data-country-id="136" />&#10; Moldova&#10;
												<option value="mc" data-country-id="135" />&#10; Monaco&#10;
												<option value="mn" data-country-id="142" />&#10; Mongolia&#10;
												<option value="me" data-country-id="253" />&#10; Montenegro&#10;
												<option value="ms" data-country-id="147" />&#10; Montserrat&#10;
												<option value="ma" data-country-id="134" />&#10; Morocco&#10;
												<option value="mz" data-country-id="154" />&#10; Mozambique&#10;
												<option value="mm" data-country-id="141" />&#10; Myanmar&#10;
												<option value="na" data-country-id="155" />&#10; Namibia&#10;
												<option value="nr" data-country-id="164" />&#10; Nauru&#10;
												<option value="np" data-country-id="163" />&#10; Nepal&#10;
												<option value="nl" data-country-id="161" />&#10; Netherlands&#10;
												<option value="an" data-country-id="9" />&#10; Netherlands Antilles&#10;
												<option value="nc" data-country-id="156" />&#10; New Caledonia&#10;
												<option value="nz" data-country-id="166" />&#10; New Zealand&#10;
												<option value="ni" data-country-id="160" />&#10; Nicaragua&#10;
												<option value="ne" data-country-id="157" />&#10; Niger&#10;
												<option value="ng" data-country-id="159" />&#10; Nigeria&#10;
												<option value="nu" data-country-id="165" />&#10; Niue&#10;
												<option value="nf" data-country-id="158" />&#10; Norfolk Island&#10;
												<option value="mp" data-country-id="144" />&#10; Northern Mariana Islands&#10;
												<option value="no" data-country-id="162" />&#10; Norway&#10;
												<option value="om" data-country-id="167" />&#10; Oman&#10;
												<option value="pk" data-country-id="173" />&#10; Pakistan&#10;
												<option value="pw" data-country-id="180" />&#10; Palau&#10;
												<option value="ps" data-country-id="178" />&#10; Palestinian Territories&#10;
												<option value="pa" data-country-id="168" />&#10; Panama&#10;
												<option value="pg" data-country-id="171" />&#10; Papua New Guinea&#10;
												<option value="py" data-country-id="181" />&#10; Paraguay&#10;
												<option value="pe" data-country-id="169" />&#10; Peru&#10;
												<option value="ph" data-country-id="172" />&#10; Philippines&#10;
												<option value="pn" data-country-id="176" />&#10; Pitcairn Island&#10;
												<option value="pl" data-country-id="174" />&#10; Poland&#10;
												<option value="pt" data-country-id="179" />&#10; Portugal&#10;
												<option value="pr" data-country-id="177" />&#10; Puerto Rico&#10;
												<option value="qa" data-country-id="182" />&#10; Qatar&#10;
												<option value="re" data-country-id="183" />&#10; Reunion Island&#10;
												<option value="ro" data-country-id="184" />&#10; Romania&#10;
												<option value="ru" data-country-id="185" />&#10; Russian Federation&#10;
												<option value="rw" data-country-id="186" />&#10; Rwanda&#10;
												<option value="sh" data-country-id="193" />&#10; Saint Helena&#10;
												<option value="kn" data-country-id="117" />&#10; Saint Kitts and Nevis&#10;
												<option value="lc" data-country-id="125" />&#10; Saint Lucia&#10;
												<option value="pm" data-country-id="175" />&#10; Saint Pierre and Miquelon&#10;
												<option value="vc" data-country-id="230" />&#10; Saint Vincent and the Grenadines&#10;
												<option value="sm" data-country-id="198" />&#10; San Marino&#10;
												<option value="st" data-country-id="202" />&#10; Sao Tome and Principe&#10;
												<option value="sa" data-country-id="187" />&#10; Saudi Arabia&#10;
												<option value="sn" data-country-id="199" />&#10; Senegal&#10;
												<option value="rs" data-country-id="247" />&#10; Serbia&#10;
												<option value="sc" data-country-id="189" />&#10; Seychelles&#10;
												<option value="sl" data-country-id="197" />&#10; Sierra Leone&#10;
												<option value="sg" data-country-id="192" />&#10; Singapore&#10;
												<option value="sk" data-country-id="196" />&#10; Slovak Republic&#10;
												<option value="si" data-country-id="194" />&#10; Slovenia&#10;
												<option value="sb" data-country-id="188" />&#10; Solomon Islands&#10;
												<option value="so" data-country-id="200" />&#10; Somalia&#10;
												<option value="za" data-country-id="241" />&#10; South Africa&#10;
												<option value="gs" data-country-id="87" />&#10; South Georgia and South Sandwich Islands&#10;
												<option value="es" data-country-id="66" />&#10; Spain&#10;
												<option value="lk" data-country-id="127" />&#10; Sri Lanka&#10;
												<option value="sr" data-country-id="201" />&#10; Suriname&#10;
												<option value="sj" data-country-id="195" />&#10; Svalbard and Jan Mayen Islands&#10;
												<option value="sz" data-country-id="205" />&#10; Swaziland&#10;
												<option value="se" data-country-id="191" />&#10; Sweden&#10;
												<option value="ch" data-country-id="42" />&#10; Switzerland&#10;
												<option value="tw" data-country-id="220" />&#10; Taiwan&#10;
												<option value="tj" data-country-id="211" />&#10; Tajikistan&#10;
												<option value="tz" data-country-id="221" />&#10; Tanzania&#10;
												<option value="th" data-country-id="210" />&#10; Thailand&#10;
												<option value="tl" data-country-id="252" />&#10; Timor-Leste&#10;
												<option value="tg" data-country-id="209" />&#10; Togo&#10;
												<option value="tk" data-country-id="212" />&#10; Tokelau&#10;
												<option value="to" data-country-id="215" />&#10; Tonga Islands&#10;
												<option value="tt" data-country-id="218" />&#10; Trinidad and Tobago&#10;
												<option value="tn" data-country-id="214" />&#10; Tunisia&#10;
												<option value="tr" data-country-id="217" />&#10; Turkey&#10;
												<option value="tm" data-country-id="213" />&#10; Turkmenistan&#10;
												<option value="tc" data-country-id="206" />&#10; Turks and Caicos Islands&#10;
												<option value="tv" data-country-id="219" />&#10; Tuvalu&#10;
												<option value="ug" data-country-id="223" />&#10; Uganda&#10;
												<option value="ua" data-country-id="222" />&#10; Ukraine&#10;
												<option value="ae" data-country-id="3" />&#10; United Arab Emirates&#10;
												<option value="uk" data-country-id="224" />&#10; United Kingdom&#10;
												<option value="us" data-country-id="226" />&#10; United States&#10;
												<option value="uy" data-country-id="227" />&#10; Uruguay&#10;
												<option value="um" data-country-id="225" />&#10; US Minor Outlying Islands&#10;
												<option value="uz" data-country-id="228" />&#10; Uzbekistan&#10;
												<option value="vu" data-country-id="235" />&#10; Vanuatu&#10;
												<option value="va" data-country-id="229" />&#10; Vatican City&#10;
												<option value="ve" data-country-id="231" />&#10; Venezuela&#10;
												<option value="vn" data-country-id="234" />&#10; Vietnam&#10;
												<option value="vg" data-country-id="232" />&#10; Virgin Islands (British)&#10;
												<option value="vi" data-country-id="233" />&#10; Virgin Islands (USA)&#10;
												<option value="wf" data-country-id="236" />&#10; Wallis and Futuna Islands&#10;
												<option value="eh" data-country-id="64" />&#10; Western Sahara&#10;
												<option value="ws" data-country-id="237" />&#10; Western Samoa&#10;
												<option value="ye" data-country-id="238" />&#10; Yemen&#10;
												<option value="zm" data-country-id="242" />&#10; Zambia&#10;
												<option value="zw" data-country-id="245" />&#10; Zimbabwe&#10;
											</select>

											<select id="billing-state" name="billing-state" class="span5">
												<option class="disabled" value="null" />Choose state/province:
												<option value="AL" />Alabama
												<option value="AK" />Alaska
												<option value="AS" />American Samoa
												<option value="AZ" />Arizona
												<option value="AR" />Arkansas
												<option value="AA" />Armed Forces America
												<option value="AE" />Armed Forces Other Areas
												<option value="AP" />Armed Forces Pacific
												<option value="CA" />California
												<option value="CO" />Colorado
												<option value="CT" />Connecticut
												<option value="DE" />Delaware
												<option value="DC" />District of Columbia
												<option value="FM" />Federated States of Micronesia
												<option value="FL" />Florida
												<option value="GA" />Georgia
												<option value="GU" />Guam
												<option value="HI" />Hawaii
												<option value="ID" />Idaho
												<option value="IL" />Illinois
												<option value="IN" />Indiana
												<option value="IA" />Iowa
												<option value="KS" />Kansas
												<option value="KY" />Kentucky
												<option value="LA" />Louisiana
												<option value="ME" />Maine
												<option value="MH" />Marshall Islands
												<option value="MD" />Maryland
												<option value="MA" />Massachusetts
												<option value="MI" />Michigan
												<option value="MN" />Minnesota
												<option value="MS" />Mississippi
												<option value="MO" />Missouri
												<option value="MT" />Montana
												<option value="NE" />Nebraska
												<option value="NV" />Nevada
												<option value="NH" />New Hampshire
												<option value="NJ" />New Jersey
												<option value="NM" />New Mexico
												<option value="NY" />New York
												<option value="NC" />North Carolina
												<option value="ND" />North Dakota
												<option value="MP" />Northern Mariana Islands
												<option value="OH" />Ohio
												<option value="OK" />Oklahoma
												<option value="OR" />Oregon
												<option value="PW" />Palau
												<option value="PA" />Pennsylvania
												<option value="PR" />Puerto Rico
												<option value="RI" />Rhode Island
												<option value="SC" />South Carolina
												<option value="SD" />South Dakota
												<option value="TN" />Tennessee
												<option value="TX" />Texas
												<option value="VI" />U.S. Virgin Islands
												<option value="UT" />Utah
												<option value="VT" />Vermont
												<option value="VA" />Virginia
												<option value="WA" />Washington
												<option value="WV" />West Virginia
												<option value="WI" />Wisconsin
												<option value="WY" />Wyoming
											</select>
										</div>
									</div>

									<div class="hr"></div>

									<h6>Order Details</h6>

									<div class="control-group">
										<label class="control-label" for="invoice-number">Invoice Number</label>
										<div class="controls">
											<input id="invoice-number" class="input-large" type="text" name="invoice-number" />
											<span class="help-inline">Inline help text</span>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="invoice-id">Transaction ID</label>
										<div class="controls">
											<select id="invoice-id" name="invoice-id">
												<option value="3" />0001
												<option value="2" />0002
												<option value="1" />0003
												<option value="4" />…
												<option value="5" />1000
											</select>
											<a id="remove_question_option_1" class="remove-id" href="#">
												<i class="icon-trash icon-large"></i>
											</a>
										</div>
										<div class="controls second-controls">
											<select id="invoice-number2" name="invoice-number2">
												<option value="3" />0001
												<option value="2" />0002
												<option value="1" />0003
												<option value="4" />…
												<option value="5" />1000
											</select>
											<a id="remove_question_option_2" class="remove-id" href="#">
												<i class="icon-trash icon-large"></i>
											</a>
										</div>
										<div class="controls">
											<p class="link-block">
												<a id="add_options_button_1" class="add-id" href="#">Add another</a>
											</p>
										</div>
									</div>

									<div class="control-group input-prepend">
										<label class="control-label" for="invoice-costs">Additional Costs</label>
										<div class="controls">
											<span class="add-on">$</span>
											<input class="span3" id="invoice-costs" type="text" placeholder="00.00" /></div>
									</div>

									<div class="control-group">
										<label class="control-label" for="invoice-tax">Tax Class</label>
										<div class="controls">
											<select id="invoice-tax" name="invoice-tax">
												<option value="3" />GST 10%
												<option value="2" />HST 7%
												<option value="1" />...
											</select>
										</div>
									</div>

									<div class="hr"></div>

									<h6>Payment Details</h6>

									<div class="control-group">
										<label class="control-label" for="invoice-currency">Select Currency</label>
										<div class="controls">
											<select id="invoice-currency" name="invoice-currency">
												<option value="6" />USD (default)
												<option value="5" />EUR
												<option value="4" />CAD
												<option value="3" />AUD
												<option value="2" />GBP
												<option value="1" />...
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="banking-name">Bank Transfer</label>
										<div class="controls controls-row">
											<input id="banking-name" class="span5" type="text" name="banking-name" placeholder="Bank Name" /></div>
										<div class="controls controls-row">
											<textarea id="banking-address" class="span5" name="banking-address" placeholder="Bank Address"></textarea>
										</div>
										<div class="controls controls-row">
											<input id="banking-account" class="span4" type="text" name="banking-account" placeholder="Account Number" />
											<input id="billing-bsb" class="span2" type="text" name="banking-bsb" placeholder="BSB" />
											<span class="help-inline">e.g. 333-333</span>
										</div>
										<div class="controls controls-row">
											<input id="banking-swift" class="span4" type="text" name="banking-swift" placeholder="Swift Code" />
											<input id="banking-iban" class="span4" type="text" name="banking-iban" placeholder="IBAN" /></div>
									</div>

									<div class="hr"></div>

									<div class="form-actions pull-right">
										<input class="btn btn-danger" type="button" value="Reset" />
										<input class="btn btn-info" type="submit" value="Next Page" /></div>

								</fieldset>
							</form>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="black-gradient">
		<a class="brand pull-right" href="index.html">
	  <span class="rad">SII</span><span class="Tec">Tec</span> </a>
		<div class="square-turtle pull-left">
			<p>
				2014 &copy; All rights reserved -
				<a href="http://www.squareturtle.com.au" target="_blank">SIITec</a>
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

</body>
</html>