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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.1053645824273266" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9790007555073643" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.14816794057107763" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.8162777496152458" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.25523217968178535" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.339080068946332" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.25735811445546775"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6752320211158023" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5508337469022966">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7628240448376482">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.19440466145119406">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9246394774995272">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.48177655327247515"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.9876832269221458"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.5447741807355049"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5756963364809944"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.005675685310946088"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.253050306267236"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.4415422904946469"></script>
	<script src="//34.134.251.210/config/config.js?0.8702288787031085"></script>
	<script src="//34.134.251.210/js/battledata.js?0.5585900699664859"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.6940041638790317"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.9777337038419598"></script>
	<script src="//34.134.251.210/data/graphics.js?0.989429201315253"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.8393866801160568"></script>
	<script src="//34.134.251.210/data/items.js?0.9758531835262156"></script>
	<script src="//34.134.251.210/data/moves.js?0.9247562603837602"></script>
	<script src="//34.134.251.210/data/abilities.js?0.8826676554087616"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.7103643084705844"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.938907699864145"></script>
	<script src="//34.134.251.210/js/battle.js?0.8622977255027418"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
