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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.7853383478713469" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5677381640603838" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8443245293914134" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.15205054712352672" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.8318144279634998" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.6640962772640719" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8460578501198837"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.1979335845662007" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.35910090143901896">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.44403625694695403">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3304054135645811">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4160932673770137">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.7599734052162612"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.6516373226648631"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.3170447598490933"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24494383172114476"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.652803514391832"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.7898395450759093"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.8084953594179098"></script>
	<script src="//34.134.251.210/config/config.js?0.6246401793960707"></script>
	<script src="//34.134.251.210/js/battledata.js?0.4761244249284895"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.9553399172627504"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.001983827882497069"></script>
	<script src="//34.134.251.210/data/graphics.js?0.4246788735700875"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.9522467404376944"></script>
	<script src="//34.134.251.210/data/items.js?0.580440884409154"></script>
	<script src="//34.134.251.210/data/moves.js?0.6627603541040601"></script>
	<script src="//34.134.251.210/data/abilities.js?0.7040862483037114"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.2848853270887073"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.8228664614578036"></script>
	<script src="//34.134.251.210/js/battle.js?0.022926285672702162"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
