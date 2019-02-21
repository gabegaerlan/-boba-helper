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
          <!--<th><b>ID</b></th>-->
            <th><b>BOBA NAME</b></th>
            <th><b>TYPE</b></th>
            <th><b>DESCRIPTION</b></th>
            <!--<th><b>USERNAME</b></th>-->
            <?php
              include'./functions.php';
              //   echo'<table align="center" border=2>';
                // echo'<tr>';
                // echo'<th><b>ID</b></th>';
                // echo'<th><b>FIRST NAME</b></th>';
                // echo'<th><b>LASTNAME</b></th>';
                // echo'<th><b>USERNAME</b></th>';
                // echo'</tr>';
              $display = displayBoba();
              foreach($display as $d)
              {
                echo'<tr>';
                // echo'<td>'.$d['userId'].'</td>';
                echo'<td>'.$d['bobaName'].'</td>';
                echo'<td>'.$d['type'].'</td>';
                echo'<td>'.$d['description'].'</td>';
                // echo'<td>'.$d['username'].'</td>';
                echo'</tr>';
              }
            //   echo'</table>';
            ?>
          </table>
        </p>
      </section>
    </main>
  </body>
</html>