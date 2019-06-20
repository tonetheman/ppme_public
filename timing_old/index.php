<html>
<head>
</head>
<body>
<h1><div id="d"></div></h1>
javascript: <h1><div id="s"></div></h1>
javascript2: <h1><div id="s2"></div></h1>
unix: <h1><div id="p"></div></h1>
<script>
function dd() {
var d = new Date(),
    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    ampm = d.getHours() >= 12 ? 'pm' : 'am',
    months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
return days[d.getDay()]+' '+months[d.getMonth()]+' '+d.getDate()+' '+d.getFullYear()+' '+hours+':'+minutes+ampm;
}
document.getElementById("d").innerHTML = dd();
document.getElementById("s").innerHTML = Math.floor(Date.now() / 1000);
document.getElementById("s2").innerHTML = (new Date()).toJSON();
document.getElementById("p").innerHTML = <?= time() ?>;
</script>
</body>
</html>
