
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="result"></p>
    <button onclick="loadDoc()">CLick</button>
<script>
    function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('result').innerHTML= this.responseText;
    }
  };
  xhttp.open("POST", "update_user_account", true);
  xhttp.send("submit=update-payment");
}
</script>
</body>
</html>