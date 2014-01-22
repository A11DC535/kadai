<html>
<head>
<meta charset="UTF-8">
<title>Products</title>
</head>
<body>

<p>abaafsdgg</p>
<ul>





     <?php foreach ($products as $product) { ?>
  <li> <?php 
   echo htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8'); 
   echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8');
   echo htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8');  
   echo htmlspecialchars($product['testname'], ENT_QUOTES, 'UTF-8'); 
 // echo htmlspecialchars($product[$result], ENT_QUOTES, 'UTF-8'); 
  
  
  //echo var_dump($product); ?> 
  </li> 
  
 <?php } ?>
    
    
    
   
</ul>
</body>
</html>