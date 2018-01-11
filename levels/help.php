<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <link rel="stylesheet" type="text/css" href="global_graphic.css">
           
    <title>Purkiáda 2k18 - Hack test</title>
    </head>
    <body>
  <div class="level">
       <h1>HEX TO ASCII<br/>ASCII TO HEX</h1>
  </div>
  <div>
           
                    <input type="text" id="code" value="">
                    <button onclick="printHex()">Ascii2Hex</button>
                    <button onclick="printAscii()">Hex2Ascii</button>
                    <p id="output"></p>
                    <script>
                    function printHex() {
                        var x = document.getElementById("code").value;
                        document.getElementById("output").innerHTML = a2hex(x);
                    }
                    function a2hex(str) {
                        var arr = [];
                        for (var i = 0, l = str.length; i < l; i ++) {
                            var hex = Number(str.charCodeAt(i)).toString(16);
                            arr.push(hex);
                        }
                        return arr.join("");
                    }
                    function printAscii() {
                        var x = document.getElementById("code").value;
                        document.getElementById("output").innerHTML = hex2a(x);
                    }
                    function hex2a(hexx) {
                        var hex = hexx.toString();//force conversion
                        var str = "";
                        for (var i = 0; i < hex.length; i += 2){
                            str += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
                        }                        
                        return str;
                    } 
                    </script>
           
  <br> <br>
           
  <br><br>
  </div>
<!-- Pod timhle upozornenim neni v kodu uz nic co by se tykalo zadani!!! !-->
<!-- Pod timhle upozornenim neni v kodu uz nic co by se tykalo zadani!!! !-->
<!-- Pod timhle upozornenim neni v kodu uz nic co by se tykalo zadani!!! !-->
<!-- Pod timhle upozornenim neni v kodu uz nic co by se tykalo zadani!!! !-->
<div>
    <p>Autoři: Jan Rodák a Martin Nečas</p>
</div>
<div>        
      <p class="zpet">
        <a href="http://purkiada.sspbrno.cz/rocnik2018/">Zpět na rozcestník</a>
      </p>    
    </div>
  </body>
</html>