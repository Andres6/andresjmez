<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>buttonset demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script type="text/javascript" src="dog.js"></script>
  
</head>
<body>
 
<form>
  <fieldset>
    <legend>Favorite jQuery Project</legend>
    <div id="radio">
      <input type="radio" id="sizzle" name="project">
      <label for="sizzle">Sizzle</label>
 
      <input type="radio" id="qunit" name="project" checked="checked">
      <label for="qunit">QUnit</label>
 
      <input type="radio" id="color" name="project">
      <label for="color">Color</label>
    </div>
  </fieldset>
</form>
 

 
</body>
</html>