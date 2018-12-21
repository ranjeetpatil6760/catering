<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
   /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
<script type="text/javascript">
  function test() {
        var b = document.getElementById('mytext').value;
        b = b.replace(/(?:\r\n|\r|\n)/g, '<br />');
        document.getElementById('here').innerHTML = b;
        document.getElementById('here1').innerHTML = b;
        document.getElementById('here2').innerHTML = b;
        document.getElementById('here3').innerHTML = b;
        
    }
</script>
</head>
<body>

<h2>Two Equal Columns</h2>
<textarea type="text" id="mytext"></textarea>
<button onclick="test()">Click Me</button>

<div class="row">
  <div id="here" class="column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
   <div id="here1" class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
   <div id="here2" class="column" style="background-color:#aaa;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
  <div id="here3" class="column" style="background-color:#bbb;">
    <h2>Column 4</h2>
    <p>Some text..</p>
  </div>
</div>
<div class="row">
  <div id="here" class="column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
   <div id="here1" class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
   <div id="here2" class="column" style="background-color:#aaa;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
  <div id="here3" class="column" style="background-color:#bbb;">
    <h2>Column 4</h2>
    <p>Some text..</p>
  </div>
</div>

</body>
</html>
