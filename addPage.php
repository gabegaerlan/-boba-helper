<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gabe Boba Training</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/">Gabes Boba</a>
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