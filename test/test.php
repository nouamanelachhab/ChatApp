<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <div id="getdata">
     
        <script type="text/javascript">
          
        function dis(){
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","method.php",false);
            xmlhttp.send(null);
            document.getElementById("getdata").innerHTML=xmlhttp.responseText;
            
        }
           dis();   
        setInterval(function(){ dis(); }, 5000);
        </script>
        </div>
    </body>
</html>