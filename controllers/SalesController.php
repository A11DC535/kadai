 <?php
 require_once 'model/sales.php';
 
 class SalesController 
{
   


	public function indexAction()
	 {
		
	  $Sales = Sales::all(); 
      echo "sales";
      require_once 'views/sales/index.php';
	 }
	
	
	
	public function newAction()
	{
	 $Sales = Sales::all(); 
	  echo "new";
      require_once 'views/sales/new.php';
	  
	
	}	
	
	public function createAction()
	{
		
	  echo "create";
      require_once 'views/sales/index.php';
	}		
	
	
}

