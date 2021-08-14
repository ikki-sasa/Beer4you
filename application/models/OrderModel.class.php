<?php

class OrderModel {

	public function getAllOrders() {
        
        $database = new Database();
       
		$sql = "SELECT * FROM order";

		$values = [ ];

		return $database->query($sql, $values);
	}
	
	public function getAllOrdersByUser($userId) {
	   
	    $database = new Database();
	    
		$sql = "SELECT * FROM order WHERE User_Id=?";

		$values = [ $userId ];

		return $database->query($sql, $values);
	}
	
	public function getAllOrderDetail($id) {
	   
	    $database = new Database();
	    
		$sql = "SELECT *
				FROM
					order
				WHERE Id= ? ";

		$values = [ $id ];

		$order = $database->queryOne($sql, $values);
	   
	    $sql = "SELECT *
				FROM
					users
				WHERE Id= ? ";

		$values = [ $order['User_Id'] ];

		$user = $database->queryOne($sql, $values);
	   
	    $sql = "SELECT orderline.Id, QuantityOrdered, PriceEach, Name, Photo
				FROM
					orderline
				INNER join
					beers
				ON
					orderline.Meal_Id = beers.Id
				WHERE Order_Id= ? ";

		$values = [ $id ];

		$orderDetail = $database->query($sql, $values);
	    
	    return  [ 
					'order'=> $order,
					'user'=> $user,
					'orderDetail'=>$orderDetail
				];
	}
	
	public function saveOrder($orders, $userId) {
	    
	    $database = new Database();
	   
		$sql = "INSERT INTO `order` (User_Id, CreationTimestamp) VALUES ( ?, NOW() )";

		$values = [ $userId ];

		$orderId = $database->executeSql($sql, $values);
	    
	    $totalAmount =0;
	    
	    foreach($orders as $order) {
	        
			$totalAmount += (floatval($order->quantity)*floatval($order->safePrice));
	        
	        $sql = "INSERT INTO orderline (QuantityOrdered,Meal_Id,Order_Id,PriceEach) VALUES (?, ?, ?, ?)";

			$values = [ $order->quantity, $order->beerId, $orderId, $order->safePrice ];

			$database->executeSql($sql, $values);
	    }    
	    
	    $sql = "UPDATE `order` SET TotalAmount=? WHERE Id= ?";

		$values = [ $totalAmount, $orderId ];

		$database->executeSql($sql, $values);
	}
	
}