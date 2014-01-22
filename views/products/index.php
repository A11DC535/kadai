<html>
<head>
<meta charset="UTF-8">
<title>Products</title>
</head>
<body>
<ul>




<p>abaafsdgg</p>

<p>abaafsdgg</p>
    <?php foreach ($products as $product) { ?>
  <li> <?php
 //  echo htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8'); 
//   echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8');
//   echo htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8');  
//   echo htmlspecialchars($product['testname'], ENT_QUOTES, 'UTF-8'); 
  //echo htmlspecialchars($product[$result], ENT_QUOTES, 'UTF-8'); 
  
  
  //echo var_dump($product); ?> 
  </li> 
  
  <?php echo htmlspecialchars($products['price'], ENT_QUOTES, 'UTF-8'); ?> 
  
  
    <?php } ?>
    
    
    
   <?php
       $result=$dpo->all();
	   while( $row=$resul->fetch(PDO::FETCH_ATCH)) {
		   
		  // echo "<a href=/sale/new.php?id=".$row['id'].">".$row['name']."</a></br>";	
		   echo "<a href=/products/index.php?id=".$row['id'].">".$row['name']."</a></br>";	   
		   }
    ?>     
</ul>
</body>
</html>