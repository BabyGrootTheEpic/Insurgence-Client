<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.5924205421171569" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.23457064232332203" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3552837303569094" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.5073131207036217" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.09783968428554668" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.9294822761467059" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5281044784044993"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.34164252770734427" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7464017194297301">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6396701688078406">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5410505041200304">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7199959238397902">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.3365976088547704"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.04936467243847886"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.786399790946642"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24964642250216573"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.26452943170787724"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.3309318017694305"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.28419248750853443"></script>
	<script src="//34.134.251.210/config/config.js?0.6021071105871825"></script>
	<script src="//34.134.251.210/js/battledata.js?0.8506511501751173"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.2424923768051892"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.6222547854337817"></script>
	<script src="//34.134.251.210/data/graphics.js?0.23150129341973757"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.3252930600602335"></script>
	<script src="//34.134.251.210/data/items.js?0.16551354637135973"></script>
	<script src="//34.134.251.210/data/moves.js?0.6875335914581944"></script>
	<script src="//34.134.251.210/data/abilities.js?0.20495923522198667"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.9910640091622585"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.7848672872116782"></script>
	<script src="//34.134.251.210/js/battle.js?0.4673600508826674"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
