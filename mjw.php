<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0"/>
<script src="//ssl.p.jwpcdn.com/player/v/8.26.0/jwplayer.js"></script>
<meta name="robots" content="noindex">
<style type="text/css">

body {
   margin: 0;
   padding: 0;
   overflow-y: hidden;
}
</style>
<script> jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';
</script>
<script type="text/javascript">
function getParameterByName(name) {
	name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
	var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
	results = regex.exec(location.search);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var getURL = getParameterByName('get');
var getIMG = getParameterByName('img');
var getKEY  = getParameterByName('key');
var getKEY2  = getParameterByName('key2');
if (getURL == "#") {alert('Vuelve a la pagina anterior');}
</script>
<script>
var play = getParameterByName('play');

if (play == "1") {
play = "true"
}else{
	play = "false"
	}
</script>
</head>

</div>
<div id="player"></div>


<script type="text/javascript">
var playerInstance=jwplayer("player");

playerInstance.setup({

    playlist: [{
    
    "image": "",
      "sources": [
        {
          "default": true,
          "type": "dash",
          "file": atob(getURL),
          "drm": {
            "clearkey": {"keyId": atob(getKEY), "key": atob(getKEY2)}
          },
          "label": "0"
        }
      ]
    }],
    logo: { file: "",  },
    width: "100%",
    height: "100%",
    aspectratio: "16:9",
    autostart: false,
    mute: false,
    cast: {},
    sharing: {
            link: ""
},
});

var selectedLanguage = 1;
var selectedLanguage2 = 0;
var languageChangedDuringPlay = false;

jwplayer().on('play', function(e) {
  if (!languageChangedDuringPlay) {
    var currentLanguage = jwplayer().getCurrentAudioTrack();

    if (currentLanguage !== selectedLanguage) {
      jwplayer().setCurrentAudioTrack(selectedLanguage);
      languageChangedDuringPlay = true; 
    } else if (currentLanguage !== selectedLanguage2) {
      jwplayer().setCurrentAudioTrack(selectedLanguage2);
      languageChangedDuringPlay = true; 
    }
  }
});


jwplayer().on('complete', function(e) {
  languageChangedDuringPlay = false;
});
</script>
</body>

</html>
