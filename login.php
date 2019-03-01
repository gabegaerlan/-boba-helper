<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css" media="all and (max-width: 1024px)">
    <title>Gabe Boba Training</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Gabes Boba Helper</a>
        <form class="form-inline" action="index.php" method="post">
          <!--<a class="nav-link active" href="login.php">Admin Access</a>-->
          <!--<a class="nav-link active" href="addPage.php">Create Drink</a>-->
          <!--<a class="nav-link active" href="searchPage.php">Search</a>-->
        </form>
      </nav>
    </header>
    
    <?php
    include'./functions.php';
    ?>
    <main class="container">
      <section>
        <p>
           <form method="POST">
               <label>Username</label>
               <input type="text" name="username" placeholder="Admin Username">
               <label>Password</label>
               <input type="password" name="password" placeholder="Admin Password">
               <button type="submit" name="login">Login</button>
           </form> 
        </p>
      </section>
    </main>
    <?=loginAdmin()?>
  </body>
</html>