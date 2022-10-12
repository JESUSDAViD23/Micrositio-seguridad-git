<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">Portada</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" href="AES.php" aria-current="page">AES <span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="RSA.php">RSA</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-4">
      <h1>Metodo RSA</h1>
      <div class="form-group">
        <form action="enviar_RSA.php" method="post">
        <label for="">Nombre completo</label>
        <input type="text" class="form-control" name="nombre" id="" aria-describedby="emailHelpId" placeholder="Nombre completo" required>
        <label for="">Correo elctronico</label>
        <input type="email" class="form-control" name="correo" id="" aria-describedby="emailHelpId" placeholder="Email" required>
        <label for="">Telefono no fijo o celular</label>
        <input type="tel" class="form-control" name="telef" id="" aria-describedby="emailHelpId" placeholder="Telefono" required>
        <label for="">Domicilio</label>
        <input type="text" class="form-control" name="domic" id="" aria-describedby="emailHelpId" placeholder="Dirección" required>
        <label for="">Identificación</label>
        <input type="text" class="form-control" name="ident" id="" aria-describedby="emailHelpId" placeholder="Identificación" required>
        <label for="">Contraseña</label>
        <input type="password" class="form-control" name="contra" placeholder="Password" required>
        <br/>
        <input name="" id="" class="btn btn-primary" type="submit" value="Guardar">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <table class="table table-sm table-inverse table-responsive">
    <thead class="thead-inverse">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Domicilio</th>
        <th>Identificación</th>
        <th>Contra cifrada</th>
        <th>Contraseña</th>
      </tr>
      </thead>
      <tbody>
        <?php
        require("conexion.php");
        $sql = "SELECT * FROM `RSA`";
        $res = mysqli_query($conn,$sql); 
        ?>
        <?php while($row = mysqli_fetch_array($res)){?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nombre'];?></td>
          <td><?php echo $row['correo']; ?></td>
          <td><?php echo $row['telefono']; ?></td>
          <td><?php echo $row['domicilio']; ?></td>
          <td><?php echo $row['identificacion']; ?></td>
          <td><?php echo $row['passencript']; ?></td>
          <td><?php echo $row['contra']; ?></td>

        </tr>
        <?php }?>
      </tbody>
  </table>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-4">
        <div class="form-group">
        <form method="post">
          <label for="">Id</label>
          <input type="text" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <label for="">Contraseña</label>
          <input type="text" name="contra" id="" class="form-control" placeholder="" aria-describedby="helpId"><br/>
          <input name="decifrar" id="" class="btn btn-primary" type="submit" value="Decifrar">
        </form>
        </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-4">
      <?php
        if(isset($_POST['decifrar'])){
          include("conexion.php");
          $id = $_POST['id'];
          $clave = $_POST['contra'];
          $sql = "SELECT * FROM `rsa` WHERE id = '$id' AND contra = '$clave'; ";
          $res1 = mysqli_query($conn,$sql);
          require("cifrasim_rsa.php");
          while($row = mysqli_fetch_array($res1)){
            $dom =/* base64_decode(*/$row['domicilio']/*)*/;
            $iden =/* base64_decode(*/$row['identificacion']/*)*/;
          ?>
          <h3>Nombre:<?php echo $row['nombre']?></h3></br>
          <h3>Correo:<?php echo $row['correo']?></h3></br>
          <h3>Telefono:<?php echo $row['telefono']?></h3></br>
          <h3>Domicilio:<?php echo desencriptar($dom,$clave)?></h3></br>
          <h3>Identificación:<?php echo desencriptar($iden,$clave);?></h3></br><?php
          }
        }else{ 
       ?>
      <h3>Nombre:</h3></br>
      <h3>Correo:</h3></br>
      <h3>Telefono:</h3></br>
      <h3>Domicilio:</h3></br>
      <h3>Identificación:</h3></br>
      <?php } ?>
    </div>
  </div>
</div>
</body>

</html>