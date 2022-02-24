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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.08330368609750649" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2368350780743056" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8675718269867168" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.08883892932182502" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.2967432156732692" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.011537238834171681" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7348986813471101"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5826628413041153" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.01620151716435636">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5399497874145902">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6143277973665091">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.2740778109715418">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.39303645489238437"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.6984177308557926"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.6974896662201044"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9058400279028416"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.04383663755155842"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.10026025281525319"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.6315389514180045"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.25208079468245126"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.5091325507713038"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.08759270082151582"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.8596231081372983"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.8875874473100138"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.4004854381465026"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.7726383509384123"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.25382457846605444"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.7489276204887554"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.057301037901466456"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.9563380804615176"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.9537916250157568"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
