<?php 
require_once('config/config.php');
?>



<?php include_once('includes/header.php') ?>

  <body class="background-radial-gradient ">
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">OpenEBS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmain" aria-controls="navmain" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navmain">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="index.php">Startseite</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="login.php">Anmelden <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Regestrieren</a>
      </li>
    </ul>
  </div>
</nav>
    </header>

  <main role="main" >

<section class="overflow-hidden">

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Open EBS<br />
          <span style="color: hsl(218, 81%, 75%)">Beratung & Hilfe </span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        Online. Anonym. Sicher.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative py-5">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass ">
          <div class="card-body px-4 py-5 px-md text-start">
            <p class="uppercase_muted text-start">Beratung</p>
                <h2> Willkommen bei der Online-Beratung</h2>
                <p>Wie läuft die Beratung ab?</p>
                <div class="row py-3">
                    <div class="col">
                        <b>Einfache Registrierung</b><br><small>Für eine individuelle und geschützte Beratung</small>
                    </div>
                    <div class="col">
                        <b>Nachricht verfassen</b><br><small>Sie schicken Ihre Nachricht verschlüsselt an die Beratung</small>
                    </div>
                </div>

                <div class="row py-5">
                    <div class="col">
                    <b>Persönliche Beratung</b><br><small>Innerhalb von 2 Werktagen bekommen Sie eine Antwort</small>
                    </div>
                    <div class="col">
                    <b>Anonym und kostenfrei</b><br><small>OpenPGP verschlüsselt und kostenfrei</small>
                    </div>
                </div>
                <div class="row py-2">
                <div class="col">
                <a href="registration.php" type="button" class="btn btn-primary btn-lg btn-block">Regestrieren</a>
                    </div>
                    <div class="col">
                    <a href="login.php" type="button" class="btn btn-primary btn-lg btn-block">Anmelden</a>  
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->


</main>

<?php include_once('includes/footer.php') ?>
</body>


</html>

                