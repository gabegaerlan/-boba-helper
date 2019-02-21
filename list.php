
   <h2><font color="red" face="Fugaz One">Welcome <?=$_SESSION['fullName']?>!</h2></font>
    
    
    <table align="center" border=2>
    <!--<th><b>ID</b></th>-->
    <th><b>FIRST NAME</b></th>
    <th><b>LAST NAME</b></th>
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
      $display = displayUsers();
      foreach($display as $d)
      {
        echo'<tr>';
        // echo'<td>'.$d['userId'].'</td>';
        echo'<td>'.$d['firstName'].'</td>';
        echo'<td>'.$d['lastName'].'</td>';
        // echo'<td>'.$d['username'].'</td>';
        echo'</tr>';
      }
    //   echo'</table>';
    ?>
    </table>
    </body>
</html>