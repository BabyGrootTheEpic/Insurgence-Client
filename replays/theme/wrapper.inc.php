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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.10332477145468655" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6437236829373207" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7140607873234481" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.3392801605454774" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.13498565675714502" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.44565999799584066" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8850721949940146"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5595404057468383" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4002685601920726">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6427823667383736">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.18513774013294437">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7584907159989183">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.6593134726898549"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.12726775297799842"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.019953793510802065"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.989119273017131"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.66862694314844"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.3892340910264973"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.44569203005677505"></script>
	<script src="//34.134.251.210/config/config.js?0.29891733696029643"></script>
	<script src="//34.134.251.210/js/battledata.js?0.8854418826254655"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.30561076108528984"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.7017369415653867"></script>
	<script src="//34.134.251.210/data/graphics.js?0.7615242299702301"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.7609114291215613"></script>
	<script src="//34.134.251.210/data/items.js?0.17352916874414892"></script>
	<script src="//34.134.251.210/data/moves.js?0.8201754387992828"></script>
	<script src="//34.134.251.210/data/abilities.js?0.5632318769146707"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.6299571844793779"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.16289342606674273"></script>
	<script src="//34.134.251.210/js/battle.js?0.27017090370294805"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
