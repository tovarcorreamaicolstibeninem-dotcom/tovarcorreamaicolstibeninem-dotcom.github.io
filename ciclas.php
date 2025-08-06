<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ciclas - Tu Aventura sobre Ruedas</title>

  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: url('./img/images.jpeg') no-repeat center center/cover;
      height: 90vh;
      width: 100%;
      color: rgb(0, 0, 0);
      display: flex;
      align-items: center;
      justify-content: center;
      text-shadow: 2px 2px 6px black;
    }
    .hero h1 {
      font-size: 3.5rem;
    }
    .section-title {
      text-align: center;
      margin: 60px 0 20px;
    }
    
    .whatsapp-btn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #25D366;
      color: white;
      border: none;
      padding: 15px 20px;
      border-radius: 50px;
      font-size: 16px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 10px;
      z-index: 1000;
    }

    .whatsapp-btn img {
      width: 20px;
      height: 20px;
    }

  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="./ciclas.html">
  <img src="logo tornasol" alt="Garaje MTB Logo" style="height: 40px;">
</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
  <li class="nav-item"><a class="nav-link active" href="./ciclas.html">Inicio</a></li>
  <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
  <li class="nav-item"><a class="nav-link" href="./productos/productos.php">Productos</a></li>
  <li class="nav-item"><a class="nav-link" href="./citas/crear_cita.php">Citas</a></li>
  <li class="nav-item"><a class="nav-link" href="login.php">Admin</a></li>
</ul>
</ul>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero text-center">
    <div class="container">
      <h1>GARAJE MTB NEIVA</h1>
      <p class="lead">Compra, renta y arreglos de ciclas</p>
      <a href="#productos" class="btn btn-primary btn-lg mt-3">Ver Bicicletas</a>
    </div>
  </section>

  <!-- Servicios -->
  <section id="servicios" class="py-5">
    <div class="container">
      <h2 class="section-title">Nuestros Servicios</h2>
      <div class="row text-center">
        <div class="col-md-4">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Venta de Bicicletas</h5>
              <p class="card-text">Modelos para montaña, enduro y free ride.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Alquiler Diario</h5>
              <p class="card-text">Renta por horas o días con excelente mantenimiento y mejores ciclas.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Accesorios</h5>
              <p class="card-text">Cascos, luces, guantes,traje y muchas coasa para tu seguridad.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Productos -->
  <section id="productos" class="bg-light py-5">
    <div class="container">
      <h2 class="section-title">Bicicletas de mostrario </h2>
      <div class="row text-center">
        <div class="col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1525104885119-d065c038d89d" class="card-img-top" alt="Bicicleta montaña">
            <div class="card-body">
              <h5 class="card-title">Bici de Montaña XC doble suspencion</h5>
              <p class="card-text">$1.200.000 COP</p>
              <a href="#" class="btn btn-outline-primary">Ver más</a>
              <form action="comprar.php" method="POST" class="mt-3">
  <input type="hidden" name="producto_nombre" value="Bici de Montaña">
  <input type="hidden" name="precio" value="1200000">



 
</form>


            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1615398093453-cced5c0e8b67" class="card-img-top" alt="Bicicleta urbana">
            <div class="card-body">
              <h5 class="card-title">Bici FREE RIDE</h5>
              <p class="card-text">$980.000 COP</p>
              <a href="./productos/productos.php" class="btn btn-outline-primary">Ver más</a>
             <form action="comprar.php" method="POST" class="mt-3">
  <input type="hidden" name="producto_nombre" value="Bici de Montaña">
  <input type="hidden" name="precio" value="1200000">
  
</form>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1587560699334-cc4ff1cbe3b7" class="card-img-top" alt="Bicicleta de ruta">
            <div class="card-body">
              <h5 class="card-title">Bici de enduro</h5>
              <p class="card-text">$2.500.000 COP</p>
              <a href="#" class="btn btn-outline-primary">Ver más</a>
             <form action="comprar.php" method="POST" class="mt-3">
  <input type="hidden" name="producto_nombre" value="Bici de Montaña">
  <input type="hidden" name="precio" value="1200000">
  
 
</form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 


  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4">
    <div class="container">
      <p>&copy; 2025 Ciclas. Todos los derechos reservados.</p>
    </div>
  </footer>

   <!-- BOTÓN DE WHATSAPP -->
  <a class="whatsapp-btn" 
     href="https://wa.me/573207338360?text=Hola%2C%20estoy%20interesado%20en%20un%20producto%20de%20Estudio%20Único" 
     target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    WhatsApp
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
<?php
include("../db.php");

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Catálogo de Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="../ciclas.html">Garaje MTB </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="../ciclas.html">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
        <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="../citas/crear_cita.php">Citas</a></li>
        <li class="nav-item"><a class="nav-link" href="../carrito/agregar_carrito.php">Carrito</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 mb-5"> <!-- Agrega mb-5 aquí -->
  <h2 class="mb-4 text-center">Catálogo de Productos</h2>
  <div class="mb-4 text-end">
    <a href="iproductos.html" class="btn btn-success">Agregar Producto</a>
  </div>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="<?php echo $row['imagen']; ?>" class="card-img-top rounded border" alt="Imagen del producto" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
            <p class="card-text"><?php echo $row['descripcion']; ?></p>
            <p class="card-text fw-bold">$<?php echo number_format($row['precio'], 2); ?></p>
          </div>
          <div class="card-footer d-flex justify-content-between">
            <a href="editar_producto.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
            <a href="eliminar_producto.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</a>
          </div>
        
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
  <div class="container">
    <p>&copy; 2025 Ciclas. Todos los derechos reservados.</p>
  </div>
</footer>

<!-- BOTÓN DE WHATSAPP -->
<a class="whatsapp-btn"
   href="https://wa.me/573207338360?text=Hola%2C%20estoy%20interesado%20en%20un%20producto%20de%20Estudio%20Único"
   target="_blank"
   style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; display: flex; align-items: center; background: #25d366; color: white; padding: 10px 18px; border-radius: 50px; box-shadow: 0 2px 8px rgba(0,0,0,0.2); text-decoration: none; font-weight: bold;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 28px; height: 28px; margin-right: 8px;">
  WhatsApp
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

?>
<!-- Sección de productos insertada -->

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Estudio Unico</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php
<?php
include("../db.php");

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Catálogo de Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="../ciclas.html">Garaje MTB </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="../ciclas.html">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
        <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="../citas/crear_cita.php">Citas</a></li>
        <li class="nav-item"><a class="nav-link" href="../carrito/agregar_carrito.php">Carrito</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 mb-5"> <!-- Agrega mb-5 aquí -->
  <h2 class="mb-4 text-center">Catálogo de Productos</h2>
  <div class="mb-4 text-end">
    <a href="iproductos.html" class="btn btn-success">Agregar Producto</a>
  </div>
  <div class="row g-4">
    <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="<?php echo $row['imagen']; ?>" class="card-img-top rounded border" alt="Imagen del producto" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
            <p class="card-text"><?php echo $row['descripcion']; ?></p>
            <p class="card-text fw-bold">$<?php echo number_format($row['precio'], 2); ?></p>
          </div>
          <div class="card-footer d-flex justify-content-between">
            <a href="editar_producto.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
            <a href="eliminar_producto.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</a>
          </div>
        
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
  <div class="container">
    <p>&copy; 2025 Ciclas. Todos los derechos reservados.</p>
  </div>
</footer>

<!-- BOTÓN DE WHATSAPP -->
<a class="whatsapp-btn"
   href="https://wa.me/573207338360?text=Hola%2C%20estoy%20interesado%20en%20un%20producto%20de%20Estudio%20Único"
   target="_blank"
   style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; display: flex; align-items: center; background: #25d366; color: white; padding: 10px 18px; border-radius: 50px; box-shadow: 0 2px 8px rgba(0,0,0,0.2); text-decoration: none; font-weight: bold;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 28px; height: 28px; margin-right: 8px;">
  WhatsApp
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

?>
<!-- Sección de productos insertada -->

</body>
</html>





