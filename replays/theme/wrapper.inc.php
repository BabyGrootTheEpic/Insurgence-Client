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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.16781863618035997" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2915864561759258" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6712275499137437" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.1290331783108658" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.31386445207487235" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.9740254320362964" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8539411367881298"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7340604775402757" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2350464301938613">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.01782435334282706">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8164664403299056">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.48989876032596746">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.4126889434635155"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.17685332593409564"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.10575275120396"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9527718749525207"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.9323108225687482"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.4052049494216299"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.8119414182352704"></script>
	<script src="//34.134.251.210/config/config.js?0.1359513451698675"></script>
	<script src="//34.134.251.210/js/battledata.js?0.5685672148160412"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.1573775536555171"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.7646215532333529"></script>
	<script src="//34.134.251.210/data/graphics.js?0.36522134697686237"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.15094539168977117"></script>
	<script src="//34.134.251.210/data/items.js?0.46594918359768567"></script>
	<script src="//34.134.251.210/data/moves.js?0.7876369470297013"></script>
	<script src="//34.134.251.210/data/abilities.js?0.7581265554730021"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.10587120832566654"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.5944525306705575"></script>
	<script src="//34.134.251.210/js/battle.js?0.1563585601747255"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
