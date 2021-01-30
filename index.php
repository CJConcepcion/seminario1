<!-- put in ./www directory -->
<!--html example-->
<html>
 <head>
  <title>Bienvenido</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div width="80%" class="container">

<?php echo "<h1>Hola! PHP 5 te saluda desde Docker</h1>"; ?>

<form  action="" method="POST">
 	<input type="hidden" name="a" value="YES">
  <div class="form-group">
    <label for="formGroupExampleInput">Programa</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="titulo" placeholder="T&iacute;tulo del programa" required="" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Utilidad</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="utilidad" rows="3" required=""></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<hr>
<?php
//phpinfo();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
extract($_POST);
extract($_GET);

$conn = mysqli_connect('db', 'root', 'docker', "mi_app");

if($a=="YES")
{
  mysqli_query($conn, "insert into programas (Titulo, Utilidad) values ('$titulo', '$utilidad')");
}

$query = 'SELECT * From programas';
$result = mysqli_query($conn, $query);?>
	

<table class="table table-striped">
  <thead>
    <tr>
      <th>id</th><th>T&iacute;tulo</th>
      <th>Utilidad</th>
    </tr>
  </thead>

<?php
    while($value = $result->fetch_array(MYSQLI_ASSOC))
    {?>
        <tr>
        <?php foreach($value as $element)
        {?>
            <td>
              <?php echo $element ?>
              </td>
       <?php }?>
        </tr>
<?php } ?>
</table>

<?php
    $result->close();
    mysqli_close($conn);
?>


    </div>
</body>
</html>
