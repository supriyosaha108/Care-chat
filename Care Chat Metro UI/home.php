<html>

<head>
<title>Messenger</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="bg/logo.png">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />

<style>
html {
    -webkit-font-smoothing: antialiased;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-text-size-adjust: 100%;
}

body {
background-color: rgb(234, 241, 251); /* #4A148C; */
background-image: url(bg/b.png);
background-repeat: no-repeat;
background-size: cover;
display: flex;
justify-content: center;
font-family: 'Roboto';
font-weight:500;
font-size:16px;
-webkit-font-smoothing: antialiased;
}

.abc1 {
background-color: rgba(255,255,255,0.9);
/* background-color: rgb(231,235,240); */
border-radius: 8px 8px 0px 0px;
/* box-shadow: 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%), 0px 2px 4px -1px rgb(0 0 0 / 20%); */

/* box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); */
/* transition: all 0.3s cubic-bezier(.25,.8,.25,1); */
/* backdrop-filter: blur(30px); */
position: absolute;
bottom: 0;
width: 95%;
height: calc(100% - 100px);
max-width: 800px;
animation: example1 1s ease;
overflow: hidden;
display: flex;
justify-content: center;
align-items: center;
transition: height 1s;
}

@keyframes example1 {
from {height: 0;}
to {height: calc(100% - 100px);}
}


.abc2 {
border-radius: 8px;
height: 75px;
background-color: white;
position: absolute;
left: 10px;
opacity: 0.8; 
}
/* .abc2:active {
    background-color: rgb(196, 231, 255);
    opacity: 0.8;
} */

.txt1 {
position: absolute;
bottom: 10px;
border-radius: 8px;
height: 50px;
width: 93%;
background-color: white;
display: flex;
flex-wrap: nowrap;
flex-direction: row;
box-shadow: 0px 2px 1px -1px rgb(0 0 0 / 20%), 0px 1px 1px 0px rgb(0 0 0 / 14%), 0px 1px 3px 0px rgb(0 0 0 / 12%);
border: 1px solid rgba(0, 0, 0, 0.12);
align-items: center;
}

.txt2 {
color: #1A2027;
font-family: 'Roboto';
font-weight: 500;
font-size:16px;      
padding: 15px;
padding-left: 5px;
border: none;
outline: none;
background-color: transparent;
width: 100%;
}

.txt2::placeholder {
color: rgba(32,33,36,0.302);                
}

#send {
height: 50%;
padding-right: 14px;
opacity: 0.2;
transition: opacity 0.5s;
color: rgb(95,110,117);
}

.maindiv {
top: 20px;
background-color: transparent;
box-shadow: none;
height: calc(100% - 90px);
display: block;
overflow-y:scroll;
width: 95%;
padding-left: 10px;
background-color: transparent;
scroll-behavior: smooth;
animation: none;
}

.maindiv::-webkit-scrollbar {
width: 2px;
}
.maindiv::-webkit-scrollbar-thumb {
    background-color: rgba(211, 211, 211, 0.5);
}

.maindiv div {
    clear: both;
    background-color: white;
    color: #1A2027;
    float: left;
    margin: 10px;
    padding: 15px 30px 15px 30px;
    border-radius: 8px;
    font-weight: 500;
    width: fit-content;
    max-width: 70%;
    word-wrap: break-word;
    /* box-shadow: 1px 1px 5px lightgrey;*/
    /* box-shadow: 0px 2px 1px -1px rgb(0 0 0 / 20%), 0px 1px 1px 0px rgb(0 0 0 / 14%), 0px 1px 3px 0px rgb(0 0 0 / 12%); */
    border: 1px solid rgba(0, 0, 0, 0.14);
    animation: popout 0.2s ease;
    }

    @keyframes popout {
            from{transform:scale(0.8)}
            to{transform:scale(1)}
        }

.maindiv div#resp {float: right;}


.maindiv img {
    background-color: white;
    border-radius: 4px; height: 100px;
    max-height: 100px; max-width: 100%;
}

#resp {
    /* background-color: #6B5B95; */
    background-color: rgb(0,101,142); 
    color: white;
    float: right;
    }
#resp img {
    box-shadow: 0 0 0 1px rgb(240,240,240), 0 0 0 2px rgb(200,200,200);
}


.imaj {
position: absolute;
top: -80px;
width: 100%; height: 80px; 
background-color: transparent;
display: flex;
flex-direction: row; 
flex-wrap: nowrap;
overflow-x: scroll;
overflow-y: hidden;
visibility: hidden;
}
.imaj::-webkit-scrollbar {
visibility: hidden;
}

.imaj img {
background-color: white; border-radius: 2px;
box-shadow: 0 0 0 1px rgb(240,240,240), 0 0 0 2px rgb(200,200,200);
max-width: 60px; min-width: 60px; padding: 5px; margin: 8px;
animation: none; visibility: hidden; cursor: pointer;
}
.imaj img:active { transform: scale(0.9); opacity: 0.7; }

.switch {
    height: 50%; width: fit-content; user-select: none;
    padding: 5px ; margin-left: 5px; border-radius: 4px;
    cursor: pointer; color: rgb(95,110,117);
  }
  @keyframes switchanimation {
    from { background-color: whitesmoke; }
    50% { background-color: lightgray;  }
    to { background-color: whitesmoke;}
  }

  .onlinestatus { 
    background-color: rgba(0,0,0,0.5);
    width: 100%; height: 100%;
    position: absolute; left: 0; top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    color: darkred;
    flex-direction: column;
    cursor: pointer;
    visibility: hidden;
    text-align: center;
  }

</style>
</head>

<body>
<?php $user = $_GET['q'] ?>
<img src="bg/ggg.png" class="abc2" onclick="hidechat();" ontouchstart="window.navigator.vibrate(14);">

<div class="abc1" id="abc1">
<div class="abc1 maindiv" id="maindiv"></div>
<div class="txt1" onkeyup="abc123()">
  <div class="switch" id="switch" onclick="changeswitch();focusKbd();"><span class="material-symbols-rounded" id="switchvalue" ontouchstart="window.navigator.vibrate(14);">account_box</span></div>
<input type="text" id="txtbox1" class="txt2" placeholder="Type here" autocomplete="off"
  onkeyup="if(event.keyCode == 13){ sendresp(); } else{ abdhandler(); }" spellcheck="false">
  
  <div class="material-symbols-rounded" id="send" onclick="sendresp();abc123();focusKbd();" ontouchstart="window.navigator.vibrate(14);">send</div>
  <!-- <img src="bg/send2.png" id="send" > -->
<div class="imaj" id="imaj">
<img class="abc" src="" onclick="hidebutton(0)" ontouchstart="window.navigator.vibrate(14);">
<img class="abc" src="" onclick="hidebutton(1)" ontouchstart="window.navigator.vibrate(14);">
<img class="abc" src="" onclick="hidebutton(2)" ontouchstart="window.navigator.vibrate(14);">
<img class="abc" src="" onclick="hidebutton(3)" ontouchstart="window.navigator.vibrate(14);">
<img class="abc" src="" onclick="hidebutton(4)" ontouchstart="window.navigator.vibrate(14);">
</div></div></div>
<audio id="aud1" src="bg/1.mp3" style="visibility: hidden;"></audio>
<audio id="aud2" src="bg/2.mp3" style="visibility: hidden;"></audio>

<div class="onlinestatus" id="onlinestatus" onclick="location.reload()">
<span class="material-symbols-rounded" style="zoom:5">wifi_off</span>
<br>
You're not connected <br> Tap to refresh
</div>

</body>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  var e32 = setInterval(recresp, 2000);
  var x56 = setTimeout(abd, 0); clearTimeout(x56);

function sendresp() {
hidebutton(-1);
var x = document.getElementById('txtbox1').value.trim();
var x2 = "<?php echo $user; ?>";
$.ajax({
    url: "bg/send.php",
    type: "POST",
    data: {
        msg: x,
        name: x2,
        param: "send"
    },
    error: function(jqXHR, exception){
        if(jqXHR.status == 0) {
            document.getElementById('onlinestatus').style.visibility = "visible";
        clearInterval(e32); document.getElementById('txtbox1').value = "";
        document.getElementById('txtbox1').disabled = true;
        }
    }
});
createDiv1("resp", x, "text", x2);
document.getElementById('txtbox1').value = "";
}

function recresp() {
var name1 = "<?php echo $user;  ?>";
$.ajax({
    url: "bg/send.php",
    type: 'POST',
    data: {
        param: "rec",
        name1: name1
    },
    success: function(response) {
if(typeof response != "object"){ 
    if(response.length > 5) {
        document.getElementById('onlinestatus').style.visibility = "visible";
        clearInterval(e32); document.getElementById('txtbox1').value = "";
        document.getElementById('txtbox1').disabled = true;
    }
} //code for offline  
else {
var g1 = response.msg.split("<BR9474>");
var g2 = response.sender.split("<BR9474>");
for(i=0; i < g1.length-1; i++) {
if(g1[i].trim() != '') {
if (g1[i].startsWith("giphygif32")) {
var newStr = g1[i].substr(10);
createDiv1("", atob(newStr), "media", g2[i]);
} else {
createDiv1("", g1[i], "text", g2[i]);
}
window.navigator.vibrate(32);
}
}
}
},
error: function(jqXHR, exception){}
});
}

function createDiv1(idn, x, par, title) {
if (x != '') {
    var md = document.getElementById('maindiv');
    var content = document.createElement("div");
    content.id = idn;

    if (par != "media") {
        content.appendChild(document.createTextNode(x));
        md.appendChild(content);
    } else {
        var img1 = document.createElement("img");
        img1.src = x;
        content.appendChild(img1);
        md.appendChild(content);
    }
    
    if (idn == "resp") {
        document.getElementById('aud2').play();
    } else {
        document.getElementById('aud1').play();
    }
    md.scrollTop = md.scrollHeight;
}
}

function abc123() {
var x = document.getElementById('send');
var y = document.getElementById('txtbox1');
y.scrollLeft = y.scrollWidth;
if (y.value == "") {
    x.style.opacity = '0.2';
} else {
    x.style.opacity = '1.0';
}
}

function hidechat() {
if (document.getElementById('abc1').style.height != "75px") {
    document.getElementById('abc1').style.height = "75px";
} else {
    document.getElementById('abc1').style.height = "calc(100% - 100px)";
}
}

function abdhandler() {
    var na = document.getElementById('txtbox1').value.trim();
    if(na.length < 25) {
        clearTimeout(x56);
        x56 = setTimeout(abd, 500);
    }
    else if (document.getElementById("imaj").style.visibility == 'visible') {
            hidebutton(-1);
            clearTimeout(x56);
    }
}

function abd() {
if (document.getElementById("imaj").style.visibility == 'visible') { hidebutton(-1); }
var na = document.getElementById('txtbox1').value.trim();
var sv = document.getElementById("switchvalue").innerText;
if (na != '' && na.length < 25 && sv!="keyboard") {
var x = document.getElementsByClassName('abc');
var url1 = ''; var api = "mssW8Hc0JjfuHnDKIVSJviPae56DzxqB"; hidebutton(-1);
if(sv=="gif_box"){ url1 = "https://api.giphy.com/v1/gifs/search?api_key=" + api + "&limit=5&q=" + na; }
else { url1 = "https://api.giphy.com/v1/stickers/search?api_key=" + api + "&limit=5&q=Jinzhan " + na; }
$.ajax({
url: url1,
method: "GET",
success: function(resp) {
if(document.getElementById('txtbox1').value.trim()!=''){
document.getElementById("imaj").style.visibility = "visible";
for (var i = 0; i < resp.pagination.count; i++) {
x[i].src = resp.data[i].images.preview_gif.url;
x[i].id = resp.data[i].images.fixed_height.url;
x[i].style.visibility = "visible";
x[i].style.animation = "kaa 0.2s ease";
}
clearTimeout(x56);
}}});}
}

function hidebutton(x11) {
var x = document.getElementsByClassName('abc');
document.getElementById('imaj').scrollLeft = 0;
if (x11 != -1) {
    var x2 = "<?php echo $user;  ?>";
    $.ajax({
        url: "bg/send.php",
        type: "POST",
        data: {
            msg: "giphygif32 " + btoa(x[x11].id),
            name: x2,
            param: "send"
        }
    });
    createDiv1("resp", x[x11].id, "media", x2);
    document.getElementById('txtbox1').value = "";
    focusKbd();
}
for (var i = 0; i < 5; i++) {
    x[i].src = "";
    x[i].style.visibility = "hidden";
    x[i].style.animation = "none";
}
document.getElementById("imaj").style.visibility = "hidden";
abc123();
}

function changeswitch(){
  hidebutton(-1)
    var x = document.getElementById("switchvalue");
    var y = document.getElementById("switch");
    y.style.animation = "None";
    if(x.innerText=="keyboard") { x.innerText="gif_box";}
    else if(x.innerText=="gif_box") { x.innerText="account_box";}
    else if(x.innerText=="account_box") { x.innerText="keyboard";}
    y.style.animation = "switchanimation 0.5s linear";
  }

function focusKbd(){
    document.getElementById('txtbox1').focus();
}

</script>
</html>