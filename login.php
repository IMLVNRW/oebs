<?php 
require_once('config/config.php');

if(isset($_GET['login'])) {
    $errorMessage = user_cheack_login($_POST['username'], $_POST['password']);
}


?>



<?php include_once('includes/header.php') ?>

  <body>
    <header>
        <?php include_once('includes/nav.php') ?>
    </header>

  <main role="main">
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Open EBS </h1>
          <p class="lead text-muted">Elektronisches Beratung System</p>
        </div>
    </section>
        
    <div class="login-content ">
        <div class="card">
            <div class="card-body py-5 px-md-5">
                <form action="?login=1" id="login-form" method="post">
                    
                <?php 
                    if(isset($errorMessage)) {
                        echo $errorMessage;
                    }
                    ?>
                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="username" id="username"  class="form-control form-control-lg />
                    <label class="form-label" for="username">Email address</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password" id="password" class="form-control form-control-lg" required="required">   
                    <label class="form-label" for="password">Password</label>
                    </div>
            
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                    Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include_once('includes/footer.php') ?>
</body>


</html>

                