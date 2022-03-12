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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.8120530912900488" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.41216629683710093" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.09179052017642175" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.5345680667767498" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.17257221953167412" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.01589413028923814" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9150747966456387"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6977824405519002" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3994909816659564">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9420741972562103">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.41603517436260695">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4776804306958391">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.6291119688057103"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.9464497757414667"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.4398428368700771"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35479972885403877"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.833964943512919"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.9721298774081308"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.020877380380793342"></script>
	<script src="//34.134.251.210/config/config.js?0.6417894781508748"></script>
	<script src="//34.134.251.210/js/battledata.js?0.09055539510628674"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.1800790566394661"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.14966644318995015"></script>
	<script src="//34.134.251.210/data/graphics.js?0.7970640381195482"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.7918301974022974"></script>
	<script src="//34.134.251.210/data/items.js?0.7266691609984253"></script>
	<script src="//34.134.251.210/data/moves.js?0.3962541919960172"></script>
	<script src="//34.134.251.210/data/abilities.js?0.29540128489511974"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.11862161042957098"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.3932466737049778"></script>
	<script src="//34.134.251.210/js/battle.js?0.10841302630232708"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
