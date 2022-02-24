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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.6947770298329723" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.08818989116669784" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.564602877840964" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.12019247974763414" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.3697575111383873" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.2924989511040268" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.3182615363926333"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9094294250406891" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2014395642183655">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.02206717380530332">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6799791567695799">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.378913139322399">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.771587138336522"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.2076764785103138"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.5137824356419538"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7629509521610511"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.36722637658626245"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.4106821960021243"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.4914340129735051"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.3326186248061558"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.7290385450663828"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.5467221012544776"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.42255823196934617"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.3432751522517412"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.5327016951398014"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.5773125050862786"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.21011008990928048"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6300331388093792"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.6501543759092268"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.6655220600786897"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.8132244180894526"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
