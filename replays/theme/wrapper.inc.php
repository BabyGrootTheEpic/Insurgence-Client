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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.08267297984852728" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.376919899598096" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.1690448960605473" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.8931854588968013" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.3683816872934289" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.07372756684728388" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9354810285913506"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.1255425054252104" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7199280816520406">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5036794061886061">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.044546151467178774">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4604178659137004">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.2440411154017592"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.7044684886871362"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.9088833790986008"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07512620827726746"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.7227202963906838"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.014804442393415718"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.8827815480538987"></script>
	<script src="//34.134.251.210/config/config.js?0.941203483738767"></script>
	<script src="//34.134.251.210/js/battledata.js?0.1068488407567274"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.13001189142372338"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.0023234163133944996"></script>
	<script src="//34.134.251.210/data/graphics.js?0.7466345573544699"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.7529891130844693"></script>
	<script src="//34.134.251.210/data/items.js?0.4033780212692064"></script>
	<script src="//34.134.251.210/data/moves.js?0.37319087611297785"></script>
	<script src="//34.134.251.210/data/abilities.js?0.036831402058764784"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.32128417718038027"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.1527878624898531"></script>
	<script src="//34.134.251.210/js/battle.js?0.2263224482645323"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
