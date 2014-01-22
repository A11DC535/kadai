<html lang="ja">
<body>



    <ul>
    <p>abaa</p>
    
   <!-- <?php
       $re=$db->all();
	   while( $row=$re->fetch(PDO::FETCH_ATCH)) {
		   
		  // echo "<a href=/sale/new.php?id=".$row['id'].">".$row['name']."</a></br>";	
		  echo "test";	   
		  }
    ?>-->
    
    
   <?php foreach ($products as $product) { ?>
  <li> <?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); 
  echo "test"; ?> 
  </li> 
    <?php } ?>
    </ul>
</body>
</html>