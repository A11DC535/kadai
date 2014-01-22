<html>
<head>
<meta charset="UTF-8">
<title>Sales</title>
</head>
<body>
<ul>

<p>abaafssssssssssssssdgg</p>
    <?php foreach ($Sales as $Sale) { ?>
  <li> <?php 
  
  echo htmlspecialchars($Sale['sales_at'], ENT_QUOTES, 'UTF-8'); 
   echo htmlspecialchars($Sale['product_id'], ENT_QUOTES, 'UTF-8'); 
    echo htmlspecialchars($Sale['quantity'], ENT_QUOTES, 'UTF-8'); 
	// echo htmlspecialchars($Sale['sales_at'], ENT_QUOTES, 'UTF-8'); 
 // echo "test1";
  //echo var_dump($Sale);
   ?> 
  </li> 
    <?php } ?>
    
    
    
   
    <?php
       $result=$pdo->all();
	   while( $row=$resul->fetch(PDO::FETCH_ATCH)) {
		   
		  // echo "<a href=/sale/new.php?id=".$row['id'].">".$row['name']."</a></br>";	
		   echo "<a href=/products/index.php?id=".$row['id'].">".$row['name']."</a></br>";	   
		   }
    ?>   
    
</ul>
</body>
</html>