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
        <form class="form-inline">
          <a class="nav-link active" href="addPage.php">Create Drink</a>
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
    </header>
    <main class="container">
      <section>
        <p>
          <table align="center" border=2>
            <th><b>BOBA NAME</b></th>
            <th><b>TYPE</b></th>
            <th><b>DESCRIPTION</b></th>
            <?php
              include'./functions.php';
              $display = displayBoba();
              foreach($display as $d)
              {
                echo'<tr>';
                echo'<td>'.$d['bobaName'].'</td>';
                echo'<td>'.$d['type'].'</td>';
                echo'<td>'.$d['description'].'</td>';
                echo'</tr>';
              }
            ?>
          </table>
        </p>
      </section>
    </main>
  </body>
</html>