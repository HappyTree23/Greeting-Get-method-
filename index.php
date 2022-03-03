<!DOCTYPE html>
<html>
<body>

<!-- <form action="<?php echo $SERVER['PHP_FORM'];?>" method="post">
	name: <input type="text" name="n1_form"><br>
  year: <input type="number" name="n2_form">
	<input type="submit">
</form> -->
<a href="index.php?name=Daniela C&year=2003">Test $GET</a>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "My name is " . $_GET['name'] . ". I am " . (2022 - $_GET['year']);
  }
?> 

</body>
</html>
