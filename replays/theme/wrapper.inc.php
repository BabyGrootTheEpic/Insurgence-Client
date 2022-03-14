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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.3875191675625085" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8926288101804749" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7892715100803676" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.9110698437819467" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.762662276646846" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.9696004177415378" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.31342308745306746"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.39623925713475905" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3033482399690757">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5264787292118047">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9980778940609434">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.1934246163604969">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.04962501055354407"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.21996164577837973"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.204685211467307"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43856245112794245"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.21884244501015382"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.163261578200099"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.8570254792784997"></script>
	<script src="//34.134.251.210/config/config.js?0.6699902234422872"></script>
	<script src="//34.134.251.210/js/battledata.js?0.11801259910195672"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.49851307746711715"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.45250249770398643"></script>
	<script src="//34.134.251.210/data/graphics.js?0.8517474933862568"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.3239796139153883"></script>
	<script src="//34.134.251.210/data/items.js?0.8887559675959755"></script>
	<script src="//34.134.251.210/data/moves.js?0.23634666854331043"></script>
	<script src="//34.134.251.210/data/abilities.js?0.6701446122210843"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.7654359736415652"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.4808946938262182"></script>
	<script src="//34.134.251.210/js/battle.js?0.6075256035817818"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
