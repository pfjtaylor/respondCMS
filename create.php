<?php	
	include 'app.php'; // import php files
	
	// set language to preferred language (HTTP_ACCEPT_LANGUAGE)
	$supported = Utilities::GetSupportedLanguages('');
	$language = Utilities::GetPreferredLanguage($supported);
	
	Utilities::SetLanguage($language);
?>
<!DOCTYPE html>
<html>

<head>
	
<title><?php print _("Create Site"); ?>&mdash;<?php print BRAND; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<!-- include styles -->
<link href="<?php print FONT; ?>" rel="stylesheet" type="text/css">
<link href="<?php print BOOTSTRAP_CSS; ?>" rel="stylesheet">
<link href="<?php print FONTAWESOME_CSS; ?>" rel="stylesheet">
<link type="text/css" href="css/app.css?v=<?php print VERSION; ?>" rel="stylesheet">
<link type="text/css" href="css/messages.css?v=<?php print VERSION; ?>" rel="stylesheet">
<link type="text/css" href="css/login.css?v=<?php print VERSION; ?>" rel="stylesheet">

</head>

<body>

<!-- messages -->
<input id="msg-create-required" value="<?php print _("All fields are required"); ?>" type="hidden">
<input id="msg-password-error" value="<?php print _("The password and retype fields must match"); ?>" type="hidden">
<input id="msg-creating" value="<?php print _("Creating site..."); ?>" type="hidden">
<input id="msg-created-successfully" value="<?php print _("Site created successfully"); ?>" type="hidden">
<input id="msg-passcode-invalid" value="<?php print _("The passcode is invalid"); ?>" type="hidden">
<input id="msg-email-invalid" value="<?php print _("The email you provided is already used in the system"); ?>" type="hidden">

<!-- begin content -->
<div class="content">

	<h1><?php print BRAND; ?></h1>
	
	
		<p><?php print _("Enter your site name, login, password, and timezone to create your site."); ?></p>
	
	<div id="create-form">
	
	<fieldset>
	

		<div class="form-group">
			<label for="name"><?php print _("Site Name:"); ?></label>
			<input id="name" type="text" value="" class="form-control input-lg">
			<p class="site-name"><?php print APP_URL; ?>/sites/<span id="tempUrl" class="temp">your-site</span></p>
			<input id="friendlyId" type="hidden" value="">
		</div>

		<div class="form-group">
			<label for="email"><?php print _("Email:"); ?></label>
			<input id="email" type="text" value="" class="form-control input-lg">
		</div>
		
		<div class="form-group">
			<label for="password"><?php print _("Password:"); ?></label>
			<input id="password" type="password" class="form-control input-lg">
		</div>

		<div class="form-group">
			<label for="password"><?php print _("Re-type Password:"); ?></label>
			<input id="retype" type="password" placeholder="" class="form-control input-lg">
		</div>
		
		<div class="form-group">
			<label for="language"><?php print _("Language:"); ?></label>
			<select id="language" class="form-control" data-bind="
			    options: languages,
			    optionsText: 'text',
			    optionsValue: 'code'">
				    <option value="en">English</option>
			    </select>
		</div>
		
		<div class="form-group">
			<label for="timeZone"><?php print _("Timezone:"); ?></label>
			<select id="timeZone" data-bind="value: timeZone" class="form-control">
					<option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
<option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
<option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
<option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
<option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
<option value="America/Anchorage">(GMT-09:00) Alaska</option>
<option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
<option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
<option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
<option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
<option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
<option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
<option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
<option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
<option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
<option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
<option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
<option value="America/Havana">(GMT-05:00) Cuba</option>
<option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
<option value="America/Caracas">(GMT-04:30) Caracas</option>
<option value="America/Santiago">(GMT-04:00) Santiago</option>
<option value="America/La_Paz">(GMT-04:00) La Paz</option>
<option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
<option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
<option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
<option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
<option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
<option value="America/Araguaina">(GMT-03:00) UTC-3</option>
<option value="America/Montevideo">(GMT-03:00) Montevideo</option>
<option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
<option value="America/Godthab">(GMT-03:00) Greenland</option>
<option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
<option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
<option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
<option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
<option value="Atlantic/Azores">(GMT-01:00) Azores</option>
<option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
<option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
<option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
<option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
<option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
<option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
<option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
<option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
<option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
<option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
<option value="Asia/Beirut">(GMT+02:00) Beirut</option>
<option value="Africa/Cairo">(GMT+02:00) Cairo</option>
<option value="Asia/Gaza">(GMT+02:00) Gaza</option>
<option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
<option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
<option value="Europe/Minsk">(GMT+02:00) Minsk</option>
<option value="Asia/Damascus">(GMT+02:00) Syria</option>
<option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
<option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
<option value="Asia/Tehran">(GMT+03:30) Tehran</option>
<option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
<option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
<option value="Asia/Kabul">(GMT+04:30) Kabul</option>
<option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
<option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
<option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
<option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
<option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
<option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
<option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
<option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
<option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
<option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
<option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
<option value="Australia/Perth">(GMT+08:00) Perth</option>
<option value="Australia/Eucla">(GMT+08:45) Eucla</option>
<option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
<option value="Asia/Seoul">(GMT+09:00) Seoul</option>
<option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
<option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
<option value="Australia/Darwin">(GMT+09:30) Darwin</option>
<option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
<option value="Australia/Hobart">(GMT+10:00) Hobart</option>
<option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
<option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
<option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
<option value="Asia/Magadan">(GMT+11:00) Magadan</option>
<option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
<option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
<option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
<option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
<option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
<option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
<option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
				</select>
		</div>

		<div class="form-group">
			<label for="passcode"><?php print _("Passcode:"); ?></label>
			<input id="passcode" type="text" class="form-control input-lg">
		</div>

		<span class="actions">
			<button type="button" class="primary-button" data-bind="click: create"><?php print _("Create Site"); ?></button>
		</span>

	</fieldset>
	
	</div>
	
	<div id="create-confirmation">

	<fieldset>
		<p>
			<?php print _("Account created! To get started, click on your login link below."); ?>
		</p>	


		<p>
			<?php print _("Login here to update your site:"); ?>
		</p>
		<p>
			<a id="loginLink" href="<?php print APP_URL; ?>"><?php print APP_URL; ?></a>
		</p>
		
		<p>
			<?php print _("You can already view your site here:"); ?> 
		</p>
		<p>	
			<a id="siteLink" href="<?php print APP_URL; ?>/sites/{friendlyId}"><?php print APP_URL; ?>/sites/{friendlyId}</a>
		</p>
		
		<p>
			<?php print _("Bookmark these links for easy access."); ?>
		</p>
		

	</fieldset>
	
	</div>

	 <small><?php print COPY; ?></small>


</div>
<!-- /.content -->

</body>

<!-- include js -->
<script type="text/javascript" src="<?php print JQUERY_JS; ?>"></script>
<script type="text/javascript" src="<?php print JQUERYUI_JS; ?>"></script>
<script type="text/javascript" src="<?php print BOOTSTRAP_JS; ?>"></script>
<script type="text/javascript" src="<?php print KNOCKOUT_JS; ?>"></script>
<script type="text/javascript" src="<?php print TIMEZONEDETECT_JS; ?>"></script>
<script type="text/javascript" src="js/helper/moment.min.js?v=<?php print VERSION; ?>"></script>
<script type="text/javascript" src="js/global.js?v=<?php print VERSION; ?>"></script>
<script type="text/javascript" src="js/messages.js?v=<?php print VERSION; ?>"></script>
<script type="text/javascript" src="js/viewModels/createModel.js?v=<?php print VERSION; ?>"></script>

</html>