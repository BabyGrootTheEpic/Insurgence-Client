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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.8656134411766887" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.42407181434609287" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4672724933049952" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.33149663349497094" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.7872362038097225" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.02866942901544345" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.20573639611741945"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7455987395411807" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7606215815993764">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5158718789307704">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5858442575298972">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4652315857541416">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.43033677935174164"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.032576926702158726"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.8744659096132028"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09681699390532983"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.5706719555963515"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.840124769975537"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.9271097967045416"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.5785284854338759"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.9415312447916733"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.2261152700243816"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.5377946203917454"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.4358423798646349"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.43690795167450713"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.4815562344395685"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.6322846064633356"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.7044361153669039"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.7639972968569491"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.33954562301541724"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.7173280878264379"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
