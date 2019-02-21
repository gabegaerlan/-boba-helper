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
      </nav>
    </header>
    <main class="container">
    <?php
    include'./functions.php';
    ?>
    <form method="GET">
      <section>
        <p>
          <br>
          <label>Boba Name</label>
          <input type="text" class="form-control" placeholder="Drink Name (Mango, Strawberry, Green Apple)" name="bobaName" aria-label="boba_name" aria-describedby="basic-addon1">
          <br>
          <label>Boba Type</label>
          <input type="text" class="form-control" placeholder="Drink Type (Snowbubble, Flavortea, Milk Tea, Mocha Blast, Lemonade)" name="type" aria-label="boba_type" aria-describedby="basic-addon2">
          <br>
          <label>Boba Ingredients</label>
          <textarea class="form-control" name="description" placeholder="FORMAT: REGULAR(Milk:xx Sugar:xx Flavor:xx Additional:xx), LARGE(Milk:xx Sugar:xx Flavor:xx Additional:xx) " aria-label="desc_area"></textarea>
          <br>
          <button type="submit" name="addDrink" class="btn btn-outline-dark">Add Drink</button>
        </p>
      </section>
     </form>
     <?=addBoba()?>
    </main>
  </body>
</html>