var Config = Config || {};

/* version */ Config.version = "0";

Config.bannedHosts = ['cool.jit.su', 'pokeball-nixonserver.rhcloud.com'];

Config.whitelist = [
	// general sites
	'wikipedia.org',
	'wikimedia.org',
	'wiktionary.org',
	'github.com',
	'reddit.com',
	'gamefaqs.com',
	'facebook.com',
	'fbcdn.net',
	'twitter.com',
	'tumblr.com',
	'deviantart.com',
	'youtube.com',
	'youtu.be',
	'zombo.com',
	'strawpoll.me',
	'twitch.tv',
	'take-a-screenshot.org',
	'myanimelist.net',
	'4chan.org',
	'tumblr.com',
	'git.io',
	'mibbit.com',
	'codecademy.com',
	'xkcd.com',
	'stackoverflow.com',
	'stackexchange.com',
	'malwarebytes.org',
	'animenewsnetwork.com',
	'animenewsnetwork.cc',
	'zombo.com',
	'html5zombo.com',
	'whatismyipaddress.com',

	// pokemon sites
	'pokemonshowdown.com',
	'psim.us',
	'smogon.com',
	'upokecenter.com',
	'veekun.com',
	'bulbagarden.net',
	'serebii.net',
	'nuggetbridge.com',
	'pokecommunity.com',
	'pokemon-online.eu',
	'pokemonlab.com',
	'shoddybattle.com',
	'pokemonxy.com',
	'pokemon.com',
	'pokemon-gl.com',
	'pokecheck.org',
	'projectpokemon.org',
	'pokemondb.net',
	'pokemoncentral.it',
	'poketrade.us',
	'neverused.net',
	'pokestrat.com',
	'pokestrat.io',
	'spo.ink',
	'jooas.com',
	'pokemongodb.net',
	'pokeassistant.com',
	'pokemon-sunmoon.com',
	'gamepress.gg',
	'trainertower.com',
	'pokepast.es',
	'pokepedia.fr',
	'randbatscalc.github.io',
	'ruins-of-alph.github.io',

	// personal sites
	'breakdown.forumotion.com',
	'pokemonmillennium.net',
	'thebattletower.no-ip.org',
	'meltsner.com',
	'guangcongluo.com',
	'cathyjf.com',
	'xiaotai.org',
	'xfix.pw',
	'pkmn.cc',
	'bumba.me',
	'strategydatabase.jimdo.com',
	'hidden50.github.io',
	'krisxv.github.io',
	// personal hosting sites
	'forumieren.com',
	'soforums.com',
	'proboards.com',
	'weebly.com',
	'freeforums.org',
	'forumactif.com',
	'forumotion.com',
	'bigbangpokemon.com',
	'sites.google.com',

	// rich text
	'docs.google.com',

	// text
	'pastebin.com',
	'hastebin.com',
	'pastie.io',
	'trello.com',
	'challonge.com',
	'piratepad.net',
	'pastebin.run',

	// music
	'plug.dj',
	'openings.moe',

	// images
	'prntscr.com',
	'prnt.sc',
	'puu.sh',
	'd.pr',
	'snag.gy',
	'gyazo.com',
	'imgur.com',
	'gfycat.com',
	'4cdn.org'
];

// `defaultserver` specifies the server to use when the domain name in the
// address bar is `Config.routes.client`.
Config.defaultserver = {
	id: 'showdown',
	host: '77.162.113.75:8000',
	port: 443,
	httpport: 8000,
	altport: 80,
	registered: true
};

Config.roomsFirstOpenScript = function () {
};

Config.customcolors = {
	'zarel': 'aeo'
};
/*** Begin automatically generated configuration ***/
Config.version = "0.11.2 (03916a71)";

Config.routes = {
	root: 'pokemonshowdown.com',
	client: 'play.pokemonshowdown.com',
	dex: 'dex.pokemonshowdown.com',
	replays: 'replay.pokemonshowdown.com',
	users: 'pokemonshowdown.com/users',
};
/*** End automatically generated configuration ***/