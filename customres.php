<html>
    <head>
        <link href="customer.css" rel="stylesheet">
        <header>
            
        </header>
    

    </head>
    <body>
        
        <section id="customer">

            <div class="home">
                <a href="index.php"><span></span>HOME</a>
            </div>
    
            <div class="customerinfo">

            
                <table class="content-table" cellspacing=0 cellpadding=10  >
                
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                        <th>Email Id</th>
                        <th>Current Balance</th>
                        </tr>
                <?php

include 'connect_db.php';


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        table, th, td {
  border: 2px solid black;
}
    </style>
</head>
<body>









<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>

    <tr>
        <td><?php echo $row["id"]     ?></td>
        <td><?php echo $row["name"]  ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["balance"] ?></td>
        
    </tr>




    <?php

  }

  ?>
  </table>

</body>
</html>
  <?php
} else {
  echo "0 results";
}




?>
                </tbody>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        </section>

    </body>

</html>