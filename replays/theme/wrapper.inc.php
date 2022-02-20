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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.799440050875267" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.1534240385442327" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.07280492470809707" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.21379172958870085" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.22255970392489943" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.2401502370937112" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9641957224054454"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8304782059088205" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07716610355150988">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.25965565682367475">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7347263012467129">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.24906668145084354">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7223023452049786"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.2557207077565078"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.25427063952106943"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12356616545549226"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.9862628741220711"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.7716885983620818"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.26417582963723296"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.003304186722151936"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.6558877101959804"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.19264299719648892"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.8227378447335612"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7474086715840456"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.47383905412684735"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.2272809726216456"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.6629369160301317"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.2848362752454283"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.9239111011124574"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.020717576676552163"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.3088229479176259"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
