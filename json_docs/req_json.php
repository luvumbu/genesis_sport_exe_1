<!DOCTYPE html>
<html>
<body>

<h2>Using the XMLHttpRequest Object</h2>

<div id="demo">
<button type="button" onclick="loadXMLDoc()">Change Content</button>
</div>

<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     
        text= this.responseText; 

  
      const myArr = JSON.parse(text);
     // console.log(myArr) ; 

      console.log(myArr) ; 
    }
  };
  xhttp.open("GET", "tuto.json", true);
  xhttp.send();
}
</script>

</body>
</html>
