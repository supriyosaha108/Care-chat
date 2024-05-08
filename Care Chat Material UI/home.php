<html>
<head>
<title>Care Chat</title>
<link rel="shortcut icon" href="bg/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

html {
  -webkit-font-smoothing: antialiased;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-text-size-adjust: 100%;
}

body { margin: 0; -webkit-font-smoothing: antialiased; zoom: 0.9;}

.top { 
 height: 70px; 
 box-sizing: border-box; 
 background-color: rgb(250, 250, 250);
 padding: 26px 15px 22px 18px;
}

.bottom { position: absolute; bottom: 10px; left: 22px; height: 54px; width: calc(100% - 57px); 
 background-color: rgb(248, 248, 248);
 box-sizing: border-box;
 padding: 14px 0px 14px 23px;
 border-radius: 10px;
 display: flex; flex-wrap: nowrap;
}

#na { 
 outline: none; 
 border: none; 
 font-family: 'Poppins', sans-serif; 
 font-weight: 500; 
 font-size: 16.5px; 
 width: 100%; 
 background-color: transparent;
 margin-right: 0px;
} 

#na::placeholder { color: rgb(208,208,208); }

#send { 
 padding-right: 20px; padding-left: 15px; padding-top: 15px;  position: relative; top: -11px;
 color: rgb(208,208,208);
 font-size: 19px; 
 transition: color 0.5s;
 height: calc(100% + 10px);
}


.logo {
 font-weight: bolder;
 font-size: 18px;
 font-family: 'Segoe UI', sans-serif; 
 margin-left: 18px;
 position: relative;
 top: -8px;
}

#menu { zoom: 1.2; margin-right: 0; }
#refresh { float: right; zoom: 1.3; color: lightgray; 
font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 0, 'opsz' 48; }


.middle { 
  height: calc(100% - 158px);
  margin: 0; padding: 16px 14px 0px 18px;
  overflow-y: scroll; overflow-x: hidden;
  scroll-behavior: smooth;

}
.middle::-webkit-scrollbar { visibility: hidden; }


.msg {
  clear: both; float: left; overflow: hidden;
  height: fit-content; min-height: 119px;
  width: 60%; max-width: 300px; border-radius: 10px; 
  padding: 24px 26px 24px 23px; margin-bottom: 16px;
  font-family: 'Poppins', sans-serif; 
  box-sizing: border-box; animation: k 0.2s linear;
  zoom: 1.05;
}
@keyframes k { from{transform:scale(0.8)} to{transform:scale(1)} }

#head { font-size: 32px; display: block; font-weight: 700;}
.msg #body { font-size: 12px; font-weight: 500; line-height: 14px; }
.msg#resp { clear: both; float: right; }

.msg.color0 { background-color: rgb(217, 244, 211); border: 1px solid rgb(244, 254, 243); }
.msg.color1 { background-color: #E5F0FA; border: 1px solid #E5F0FA80; }
.msg.color2 { background-color: #F0F4C3; border: 1px solid #F0F4C380; }
.msg.color3 { background-color: rgb(253, 236, 206); border: 1px solid rgb(255, 246, 237); }
.msg.color4 { background-color: #FFCCBC; border: 1px solid #FFCCBC80; }
.msg.color5 { background-color: #EDE7F6; border: 1px solid #EDE7F680; }
.msg.color6 { background-color: rgb(255, 221, 220); border: 1px solid rgb(243, 225, 225); }

.material-symbols-outlined { cursor: pointer; }
.material-symbols-rounded { cursor: pointer; }

.song * {font-family: 'Segoe UI'; font-weight: 500; color: #1f1f1f;}

.song {
  position: absolute;
  z-index: 999;
  left: 5px; top: 55px;
  background-color: rgb(243, 246, 252);
  height: 400px ; width: 300px; padding-top: 20px;
  border-radius: 15px;
  box-shadow: 0px 2px 1px -1px rgb(0 0 0 / 20%), 0px 1px 1px 0px rgb(0 0 0 / 14%), 0px 1px 3px 0px rgb(0 0 0 / 12%);
  border: 1px solid rgba(0, 0, 0, 0.12);
  visibility: hidden;
  zoom: 1.1;
}

.song #songposter {
margin: 10px;
border-radius: 50%;
height: 100px; width: 100px;
box-shadow: 0px 0px 2px 4px white, 0px 0px 3px 8px blueviolet;
}

.song #songtitle {
border-radius: 8px;
border: 1px solid whitesmoke;
outline: none;
padding: 10px;
text-align: center;
background-color: rgb(252, 252, 252);
}

.song button {
padding: 10px 16px 10px 16px;
border-radius: 4px;
background-color: rgb(194, 231, 255);
outline: none; border: none;
}
.song button:active { background-color: lightskyblue; }

#player {
border-radius: 15px;
height: 100px;
width: 200px;
background-color: black;
}
</style>
</head>

<body>

<?php $user = $_GET['q'] ?>

<div class="top">
<span class="material-symbols-outlined" id="menu" onclick="showmenu()" ontouchstart="window.navigator.vibrate(14)">menu</span>
<span class="logo">Carechat</span>
<span class="material-symbols-outlined" id="refresh" onclick= "location.reload()">refresh</span></div>

<div class="middle" id="maindiv"></div>

<div class="bottom">
<input type="text" id="na" spellcheck="false" placeholder="Enter message" 
 onkeyup="if (event.keyCode == 13) { sendresp() } sendvalidate() " >
<span class="material-symbols-rounded" id="send" onclick="sendresp();sendvalidate()" ontouchstart="window.navigator.vibrate(14)">check_circle</span></div>

<div class="song" id="song">
<center><img src="bg/purple.webp" id="songposter">
<br><br><input type="text" id="songtitle" placeholder= "Search here">
<br><br><button onclick="vset()">Play</button>
<button onclick="stop()" id="ma">Stop</button>
<br><br><div id="player"></div>
</center>
</div>

</body>
<audio id="aud1" src="bg/1.mp3" style="visibility: hidden;"></audio>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

setInterval(recresp, 2000);

var tag = document.createElement('script'); tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag); var player;
function onYouTubeIframeAPIReady() {
player = new YT.Player('player', {height: '100',width: '200', playerVars: {'autoplay': 1, 'controls': 0,'rel' : 0, 'fs' : 0}}); }


function sendresp () {
var x = document.getElementById('na');
if(x.value.trim() != '' ) {
var x2 = "<?php echo $user; ?>";
$.ajax({ url: "bg/send.php", type: "POST", data: { msg: x.value.trim(), name: x2, param: "send" }});
createDiv1("resp", x.value, x2); x.value = ""; x.focus();
} }

function recresp() {
var name1 = "<?php echo $user;  ?>";
$.ajax({ url: "bg/send.php", type: 'POST', data: { param: "rec", name1: name1 },
success: function(response) {
var g1 = response.msg.split("<BR9474>"); var g2 = response.sender.split("<BR9474>");
for(i=0; i < g1.length-1; i++) { if(g1[i].trim() != '') {createDiv1("", g1[i], g2[i]); window.navigator.vibrate(32); }}}});
}

function createDiv1(idn, x, title) {
if(x.startsWith("<YOUTUBE9475>")){ 
player.loadVideoById('', true); document.getElementById('songtitle').value = '';
document.getElementById('songposter').src = "bg/purple.webp";}
else if(x.startsWith("<YOUTUBE9474>")){ 
var mediafile = x.split("<YOUTUBE9474>");
player.loadVideoById(mediafile[1], true); document.getElementById('songtitle').value = mediafile[2];
document.getElementById('songposter').src = "https://img.youtube.com/vi/"+mediafile[1]+"/0.jpg";}
else {
var md = document.getElementById('maindiv');  var n = x.length % 7;
var content = document.createElement("div");
content.className = "msg color"+n; content.id = idn;
var head = document.createElement("span"); head.id = "head"; head.appendChild(document.createTextNode(title));
var body = document.createElement("span"); body.id = "body"; body.appendChild(document.createTextNode(x));
content.appendChild(head); content.appendChild(body); md.appendChild(content);
document.getElementById('aud1').play();
md.scrollTop = md.scrollHeight;}}

function stop() {
player.loadVideoById('', true); document.getElementById('songtitle').value = '';
var x2 = "<?php echo $user; ?>";
$.ajax({ url: "bg/send.php", type: "POST", data: { msg: "<YOUTUBE9475>", name: x2, param: "send" }});
document.getElementById('songposter').src = "bg/purple.webp";}

function vset() { 
if(document.getElementById('songtitle').value != '') {
$.ajax({ url : "https://www.googleapis.com/youtube/v3/search", type: "GET",
data : { key: "AIzaSyBYodN5UsN2Eau-WEoiBSLODyL0K1c0RVI", maxResults:1, q:document.getElementById('songtitle').value, videoEmbeddable: "true", type: "video" },
success: function(response) { 
player.loadVideoById(response.items[0].id.videoId, true); 
var x2 = "<?php echo $user; ?>";
var str1 = "<YOUTUBE9474>"+response.items[0].id.videoId+"<YOUTUBE9474>"+document.getElementById('songtitle').value;
$.ajax({ url: "bg/send.php", type: "POST", data: { msg: str1, name: x2, param: "send" }});
document.getElementById('songposter').src = "https://img.youtube.com/vi/"+response.items[0].id.videoId+"/0.jpg"; }}); }
else { stop(); }}

function sendvalidate() { 
var y = document.getElementById('send');
if(document.getElementById('na').value!='') { y.style.color = "rgb(20, 135, 234)"; } 
else { y.style.color = "rgb(208,208,208)"; }}

function showmenu() {
var song = document.getElementById('song');
if(song.style.visibility == "visible") { song.style.visibility = "hidden"; } else { song.style.visibility = "visible"; }}

</script>