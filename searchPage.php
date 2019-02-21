
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
    
<?php
mysql_connect("us-cdbr-iron-east-03.cleardb.net","b1f0aa2908c861","0eb70cc4") or die ("could not connect");
mysql_select_db("heroku_e9d1cc3ad148014") or die("could not find db");
$output = '';

if(isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    
    $query = mysql_query("SELECT * FROM boba WHERE bobaName LIKE '%$searchq%' OR type LIKE '%$searchq%'") or die("could not search");
    $count = mysql_num_rows($query);
    if($count == 0){
        $output = 'There was no search results!'; 
    }else{
        while($row = mysql_fetch_array($query)){
            $bobaName = $row['bobaName'];
            $type = $row['type'];
            $description = $row['description'];
            $id = $row['id'];
            
            $output .="
            <tr>
            <td>$bobaName</td>
            <td>$type</td>
            <td>$description</td>
            </tr>
            ";
        }
    }
}
?>
    <main class="container">
        <section>
            <p>
                <form class="form-inline" action="searchPage.php" method="post">
                  <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <table align="center" border=2>
                <th><b>BOBA NAME</b></th>
                <th><b>TYPE</b></th>
                <th><b>DESCRIPTION</b></th>
                <?php print("$output");?>
                </table>
            </p>
        </section>
    </main>

  </body>
</html>