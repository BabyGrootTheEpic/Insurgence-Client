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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.09827589903796285" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.14849855384814847" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4356652873889755" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.19949584946481624" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.713993896900389" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.01276880811013048" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8483260183841335"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.35414534843242373" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7427208710579722">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9371500068279133">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7627757278069791">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.222936878792378">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.6570923711995571"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.8742864499584233"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.9167503851169041"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2958754891869817"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.20035893575675656"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.11425070734449161"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.10527231754899957"></script>
	<script src="//34.134.251.210/config/config.js?0.007650974311682157"></script>
	<script src="//34.134.251.210/js/battledata.js?0.46122103048551266"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.5971152704356575"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.21535430566130698"></script>
	<script src="//34.134.251.210/data/graphics.js?0.3963730086199606"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.4516140379802587"></script>
	<script src="//34.134.251.210/data/items.js?0.2952382999664991"></script>
	<script src="//34.134.251.210/data/moves.js?0.8483637427671564"></script>
	<script src="//34.134.251.210/data/abilities.js?0.6511057857796236"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.38230170233551397"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.7628036757071326"></script>
	<script src="//34.134.251.210/js/battle.js?0.48086403007649614"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
