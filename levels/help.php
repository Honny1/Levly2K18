<!DOCTYPE HTML>
<html>
    <head>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <link rel="stylesheet" type="text/css" href="global_graphic.css">
           
    <title>Purkiáda 2k18 - Hack test</title>
    </head>
    <body>
        <div class="col-md-4 col-md-offset-4 elements text-center">
        <div class="level">
                <h1>HEX TO ASCII<br/>ASCII TO HEX</h1>
        </div>
        <div class="lead">
           
                    <input type="text" id="code" value="" class="elements form-control">
                    <button onclick="printHex()" class="btn btn-lg elements">Ascii2Hex</button>
                    <button onclick="printAscii()" class="btn btn-lg elements">Hex2Ascii</button>
                    </br>
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
           
  <br> 
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
        <a href="http://purkiada.sspbrno.cz/men-in-black/" class="btn btn-info btn-sm">Zpět na rozcestník</a>
      </p>    
    </div>
</div>
  </body>
</html>
