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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.6713549530212191" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6704687387426538" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9843817932965935" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.07368949311578099" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.8385035062483184" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.6608353170333328" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7331610639610402"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.15907707537870586" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8651056655197558">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.639938394593035">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6271648249411395">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4018724438497141">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.41868062934741346"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.9875445296057317"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.4660986516162686"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7240844009217509"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.20757126583454144"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.1774644409614643"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.3541581942249372"></script>
	<script src="//34.134.251.210/config/config.js?0.7179246843106859"></script>
	<script src="//34.134.251.210/js/battledata.js?0.3232940135656497"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.9920491096492039"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.0004585604980440472"></script>
	<script src="//34.134.251.210/data/graphics.js?0.422599502737105"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.6632656780903399"></script>
	<script src="//34.134.251.210/data/items.js?0.18552564578253072"></script>
	<script src="//34.134.251.210/data/moves.js?0.40015493369278077"></script>
	<script src="//34.134.251.210/data/abilities.js?0.13657133838640578"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.474946169679094"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.18813543547331202"></script>
	<script src="//34.134.251.210/js/battle.js?0.6720142242094034"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
