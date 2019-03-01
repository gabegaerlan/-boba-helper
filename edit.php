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
        if(isset($_SESSION['admin'])){
          header("Location: admin.php");
        }else{
          header("Location: index.php");
        }
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
      </nav>
    </header>
    
    
    <main class="container">
    <?php echo $_GET['bobaName']?>
    <form method="GET">
      <section>
        <p>
          <br>
          <label>Boba Name</label>
          <input type="hidden" name="id" value="<?=$bobaInfo['id']?>"/>
          <input type="text" class="form-control" name="bobaName" value="<?=$bobaInfo['bobaName']?>" aria-describedby="basic-addon1" placeholder="Drink Name (Mango, Strawberry, Green Apple)">
          <br>
          <label>Boba Type</label>
          <input type="text" class="form-control" name="type" value="<?=$bobaInfo['type']?>" aria-describedby="basic-addon2" placeholder="Drink Type (Snowbubble, Flavortea, Milk Tea, Mocha Blast, Lemonade)">
          <br>
          <label>Boba Ingredients</label>
          <input type="text" class="form-control" name="description" value="<?=$bobaInfo['description']?>" placeholder="FORMAT: REGULAR(Milk:xx Sugar:xx Flavor:xx Additional:xx), LARGE(Milk:xx Sugar:xx Flavor:xx Additional:xx)">
          <br>
          <button type="submit" name="edit" class="btn btn-outline-dark">Confirm Edit</button>
        </p>
      </section>
     </form>
    </main>
  </body>
</html>