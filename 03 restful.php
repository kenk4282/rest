<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload = "loadDoc()">
    <h1>Result</h1>
    Add Test:<br>
             <input type="text" name="" id="u_name">
             <input type="text" name="" id="u_age"><br>
    <button onclick="add_new()">Add Data</button><br>
    <div id="result"></div>
    <script>
        function loadDoc(){
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                console.log(this.readyState + "," + this.status);
                if(this.readyState == 4 && this.status == 200){
                }
            }
            xhttp.open("GET", "02 rest.php");
            xhttp.send();
        }

        function add_new(){
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                console.log(this.readyState + "," + this.status);
                if(this.readyState == 4 && this.status == 200){
                }
            }
            n = document.getElementById("u_name");
            u = document.getElementById("u_age");
            xhttp.open("POST", "02 rest.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("u_name="+n.value+"&u_age="+u.value);
        }

    </script>
</body>
</html>