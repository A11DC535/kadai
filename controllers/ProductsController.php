 <?php
 require_once 'model/products.php';
 
 class ProductsController 
 {
  

  	public function indexAction() 
	{
	  
	  $products = Products::all();
	  echo "Products all";
	  require_once 'views/products/index.php';
    }
	
	
	
  	public function loadAction() 
	{
	  
	  $products = Products::load($id);
	  echo "Products load";
	  require_once 'views/products/index.php';
    }
	
	public function testAction() 
	{
	  
	  $products = Products::test();
	 
	 
	  echo "Products test";
	  require_once 'views/products/index.php';
	  
	}
	
 }
      
   

