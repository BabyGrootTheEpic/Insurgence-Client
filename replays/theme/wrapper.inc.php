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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.3706789602556966" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8753730377506987" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7403453604706214" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.7730510944851925" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.9555322588350077" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.8709759635443208" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.4188430613664682"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.308555481599202" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11602571255934846">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5113435767887147">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.2458934344579482">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8732766376831913">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.7454948870679465"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.35255613694403487"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.6964060472637799"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9322193891915658"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.8987315571597463"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.18520738551057514"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.9379002123039013"></script>
	<script src="//34.134.251.210/config/config.js?0.9047589567160073"></script>
	<script src="//34.134.251.210/js/battledata.js?0.43546348484040487"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.14205571111466275"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.4950740586978266"></script>
	<script src="//34.134.251.210/data/graphics.js?0.9666093204058868"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.8241026826266971"></script>
	<script src="//34.134.251.210/data/items.js?0.30992930143160735"></script>
	<script src="//34.134.251.210/data/moves.js?0.07578331920585213"></script>
	<script src="//34.134.251.210/data/abilities.js?0.5717261798809281"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.12871308707914486"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.5436190634595017"></script>
	<script src="//34.134.251.210/js/battle.js?0.6419676614721288"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
