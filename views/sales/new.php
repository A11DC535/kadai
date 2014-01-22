<html>
<head>
<meta charset="UTF-8">
<title>News</title>
</head>
<body>
<ul>

<p>new</p>
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
</ul>
</body>
</html>