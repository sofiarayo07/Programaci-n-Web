<?php
// admin.php
// (En el futuro aquí podrías validar la sesión del usuario)
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Panel Administrador | Técnicos Celaya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos del proyecto -->
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="stylesheet" href="estilos/estilo.css">
  </head>

  <body>
    <!-- NAVBAR unificada -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-celaya">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="home.html" aria-label="Ir a inicio">
          <img src="imagenes/fotocopia.png" alt="Logo Técnicos Celaya" class="me-2" style="width:40px;height:40px;">
          Técnicos Celaya
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal" aria-controls="menuPrincipal"
                aria-expanded="false" aria-label="Abrir menú de navegación">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="menuPrincipal">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="home.html" data-path="home.html">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="registro.html" data-path="registro.html">Registro</a></li>
            <li class="nav-item"><a class="nav-link" href="login.html" data-path="login.html">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="ofertas.html" data-path="ofertas.html">Ofertas</a></li>
            <li class="nav-item"><a class="nav-link" href="aboutus.html" data-path="aboutus.html">Nosotros</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- CONTENIDO -->
    <main class="container py-4 py-lg-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card text-center shadow-sm border-0">
            <div class="card-body p-5">
              <h1 class="h3 mb-3 text-success fw-bold">Bienvenido, Administrador</h1>
              <p class="lead mb-4">Sitio en construcción 🛠️</p>
              <img src="https://cdn-icons-png.flaticon.com/512/1665/1665731.png"
                   alt="Construcción" width="120" class="mb-4 opacity-75">
              <p class="text-muted">Próximamente podrás gestionar usuarios, servicios y pedidos desde este panel.</p>
              <a href="home.html" class="btn btn-outline-primary mt-3">Volver al inicio</a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
      <div class="container">
        <p class="mb-2">
          En Técnicos Celaya protegemos tus datos personales. La información que nos proporciones será utilizada
          únicamente para responder a tus solicitudes de servicio, cotización o compra de consumibles. No compartimos
          tus datos con terceros sin tu consentimiento. Para más información, contáctanos en
          <a href="mailto:tecnicosCelaya@gmail.com">tecnicosCelaya@gmail.com</a>.
        </p>
        <p class="mb-0">&copy; 2025 Técnicos Celaya</p>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Activar navbar actual -->
    <script>
      (function () {
        const path = location.pathname.split('/').pop() || 'home.html';
        document.querySelectorAll('.navbar .nav-link').forEach(a => {
          if (a.dataset.path === path) a.classList.add('active');
        });
      })();
    </script>

    
    <script>
      (function () {
        const navbar = document.querySelector(".navbar");
        let last = window.scrollY;
        window.addEventListener("scroll", () => {
          const y = window.scrollY;
          const goingDown = y > last;
          navbar.style.transform = goingDown ? "translateY(-100%)" : "translateY(0)";
          navbar.style.transition = "transform .25s ease";
          last = y;
        }, { passive: true });
      })();
    </script>
    
  </body>
</html>
