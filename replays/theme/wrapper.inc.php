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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.012943044290789851" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2559049014207304" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8498175867703404" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.8813922971857993" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.5186547920636326" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.4721471209685655" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7204815467869838"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.23693847471491258" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08215446112231595">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7493960365965444">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.1382668659595676">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4725980629473243">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.9508108687316532"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.2545158614881229"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.2733966073477354"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6865602336343479"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.7486881416212663"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.41771107657310624"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.7150665979350643"></script>
	<script src="//34.134.251.210/config/config.js?0.041501145573827"></script>
	<script src="//34.134.251.210/js/battledata.js?0.8124478396157517"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.3949431928228402"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.07003852493691709"></script>
	<script src="//34.134.251.210/data/graphics.js?0.3766088581719371"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.8110203436085965"></script>
	<script src="//34.134.251.210/data/items.js?0.3982904898011628"></script>
	<script src="//34.134.251.210/data/moves.js?0.813027200426427"></script>
	<script src="//34.134.251.210/data/abilities.js?0.38647912030273845"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.9100321951068551"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.302961561612759"></script>
	<script src="//34.134.251.210/js/battle.js?0.373251316581519"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
