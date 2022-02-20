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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.267017136143723" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.1756507925637103" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7411123314340284" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6727221298373682" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.06611239974650984" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.9544827083657204" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.44322879135739757"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5309668792228535" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.854659697187359">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10677329006074698">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7382521021098887">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8409414817229746">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.11531692288686979"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.7489086936594127"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.12702924140056515"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5706968368721759"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.06054934724986816"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.5495336135926119"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.9868964550758652"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.8537619908367993"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.12766027758209852"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.14445637109218934"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.4307296770002811"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.48108925744569064"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.8061625785417708"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.04976352767896364"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.05579123487008664"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.9113190079682045"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.8583921476884167"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.900564173456383"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.32886891486867587"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
