<?php 
require_once('config/config.php');

if(isset($_GET['login'])) {
    $errorMessage = user_cheack_login($_POST['username'], $_POST['password']);
}

$__curpage = basename($_SERVER['PHP_SELF']);
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
      <li class="nav-item">
          <a class="nav-link" href="index.php">Startseite</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="login.php">Anmelden <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form>
              <!-- User input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="username"><b>Benutername</b></label>
                <input type="text" id="username" class="form-control" />
                <small>Um Ihre Anonymität zu schützen, raten wir Ihnen nicht Ihren tatsächlichen Namen oder Initialien zu verwenden.
Wählen Sie bitte einen geeigneten Benutzernamen mit min. 5 Zeichen.<br></small>
              </div>

              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" id="email" class="form-control" />
                <small>Dieses Feld kannst du leer lassen. Du bekommst dann nur keine Benarichtigungen wemm eine neue Antwort da ist.</small>
              </div>

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="password"><b>Password</b></label>
                <input type="password" id="password" class="form-control" />
                <small>Um eine geschützte Beratung zu garantieren, sollte ihr Password 9 Zeichen lang ( Groß/Kleinschreibung, min 1 Zahl und Sonderzeichen )</small>
                                        </div>

              <!-- Submit button -->
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                Regestrieren
              </button>
              <small>Fettgedruckte Felder sind Pflicht angaben</small>

            </form>
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

                