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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.7325594208039647" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.591940893430166" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5134511810937061" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.3245264626691102" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.790241611263907" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.39050042381670247" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.934452328137038"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.95770460082707" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6612631917758034">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4892369664051428">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5486995391580769">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4954424573154015">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7691250100176215"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.2072690200292957"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.871440790121055"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4060915177338087"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.4065203447585797"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.4352763148679739"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.2385201726289714"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7935926435914575"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.08975289802262143"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.10833534896911745"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.8407813135938891"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.277104203804863"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.5458039168529067"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6361623329911301"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.3538232389664313"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.7063873170883466"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.9698464973013141"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.307634473929431"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.9345515192114944"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
