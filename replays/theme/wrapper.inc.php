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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.336695834268097" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.3751184706626425" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4690596229086219" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.40747027861014784" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.4758307233199772" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.23877420125010018" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.42280318252723714"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9032293214235945" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10169894297434912">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.623516009502453">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.25148067156081666">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4606464701122799">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.8201458325946602"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.3508453358832877"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.8662074010834189"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5383096996844421"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.12363461211453042"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.3652006141304309"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.5067047790726915"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.8588160309329733"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.17698341195293477"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.555227216665481"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.35286152047210684"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.09448907350902891"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.7304941385023558"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.33846532813230246"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.6236160332359348"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.7733615697280221"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.4710503978579199"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.4728525599371627"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.9717503755214161"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
