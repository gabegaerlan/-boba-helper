<?php
session_start();
include './db.php';
$conn = getDatabaseConnection();
function getBobaInfo() {
    global $conn;
    
    $sql = "SELECT * 
            FROM boba
            WHERE id = " . $_GET['id']; 
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $record;

}
    if(isset($_GET['edit'])){// checks whether admin has submitted form
        $conn = getDatabaseConnection();
        echo "Form has been submitted!";
        $sql = "UPDATE boba
                SET bobaName = :bobaName,
                    type = :type,
                    description = :description
                WHERE id = :id";
        $np = array();
    
        $np[':id'] = $_GET['id'];
        $np[':bobaName'] = $_GET['bobaName'];
        $np[':type'] = $_GET['type'];
        $np[':description'] = $_GET['description'];
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
        
        
        
        echo"Record has been updated!";
        header("Location: index.php");
    }
if(isset($_GET['id'])){
    $bobaInfo = getBobaInfo();
}
?>
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
          <!--<a class="nav-link active" href="addPage.php">Create Drink</a>-->
          <!--<input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">-->
          <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
          <a class="nav-link active" href="searchPage.php">Search</a>
        </form>
      </nav>
    </header>
    <main class="container">
     <?php echo $_GET['bobaName']?>
      <section>
        <p>
        <div class="card border-primary mb-3" style="max-width: 20rem;">
          <div class="card-header"><?=$bobaInfo['type']?></div>
          <div class="card-body">
            <h4 class="card-title"><?=$bobaInfo['bobaName']?></h4>
            <p class="card-text"><?=$bobaInfo['description']?></p>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>