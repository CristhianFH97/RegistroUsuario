<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <script src="assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5">
  <title>Registration</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* ... Existing styles ... */
  </style>
  <!-- Custom styles for this template -->
  <link href="css/sign-in.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

<main class="form-signin w-100 m-auto">
    <form action="index.php?accion=Registrar" method="POST">
      <h1 class="h3 mb-3 fw-normal">Registro</h1>
      <div class="form-floating">
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
        <label for="nombre">Nombre</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" name="correo" id="correo" placeholder="name@example.com">
        <label for="correo">Correo</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
      <button href="index.php?accion=Guardar" class="btn btn-primary w-100 py-2 mt-3" type="submit">Guardar</button>
    </form>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
