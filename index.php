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
          <a class="nav-link active" href="login.php">Admin Access</a>
          <!--<a class="nav-link active" href="addPage.php">Create Drink</a>-->
          <a class="nav-link active" href="searchPage.php">Search</a>
        </form>
      </nav>
    </header>
    <main class="container">
      <section>
        <p>
          <align="center">A Little Summary Of How Every Drink Is Made</align>
          <table align="center" border=2>
            <th><strong>Snowbubbles</strong></th>
            <th><strong>Slushs</strong></th>
            <tr>
              <td>
                Regular size: Milk: 4 oz Large size: Milk: 6 oz<br>
                  Creamer (Non dairy Creamer): 2 Scoops<br>
                  Sugar (Fructose): 1 Scoop (Large = 2 scoops)<br>
                  Flavor (Syrup or Powder): Usually is 3 Scoops of Powder/Syrup<br>
                  However, if the flavor has both syrup, and powder. You would split<br>
                  the amount and make it 2 Scoops over powder, and 1 scoop of syrup.<br>
              </td>
              <td>
                Regular size: Water: 4 oz Large size: Water 6 oz<br>
                Sugar (Fructose): 1 scoop (for Large as well)<br>
                Flavor (Syrup or Powder): Usually 3 scoops of flavor however, if mixed 2 scoops of both flavors.<br>
                (Large is 3 1/2 scoops). There may be some drinks that are only powder<br>
                such as Mocha Cap slush. In this case use creamer as well, and neccessary scoops of flavors<br>
              </td>
            </tr>
          </table>
          <!--<table align="center" border=2>-->
          <!--  <th><b>BOBA NAME</b></th>-->
          <!--  <th><b>TYPE</b></th>-->
          <!--  <th><b>DESCRIPTION</b></th>-->
            <?php
              // include'./functions.php';
              // $display = displayBoba();
              // foreach($display as $d)
              // {
              //   echo'<tr>';
              //   echo'<td>'.$d['bobaName'].'</td>';
              //   echo'<td>'.$d['type'].'</td>';
              //   echo'<td>'.$d['description'].'</td>';
              //   echo'</tr>';
              // }
              
            ?>
          <!--</table>-->
        </p>
      </section>
    </main>
  </body>
</html>