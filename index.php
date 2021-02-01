
<?php
$products = array(
				"Electronics" => array(
									"Television" => array(
														array(
															"id" => "PR001", 
															"name" => "MAX-001",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR002", 
															"name" => "BIG-301",
															"brand" => "Bravia"
														),
														array(
															"id" => "PR003", 
															"name" => "APL-02",
															"brand" => "Apple"
														)
													),
									"Mobile" => array(
														array(
															"id" => "PR004", 
															"name" => "GT-1980",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR005", 
															"name" => "IG-5467",
															"brand" => "Motorola"
														),
														array(
															"id" => "PR006", 
															"name" => "IP-8930",
															"brand" => "Apple"
														)
													)
								),
				"Jewelry" => array(
									"Earrings" => array(
														array(
															"id" => "PR007", 
															"name" => "ER-001",
															"brand" => "Chopard"
														),
														array(
															"id" => "PR008", 
															"name" => "ER-002",
															"brand" => "Mikimoto"
														),
														array(
															"id" => "PR009", 
															"name" => "ER-003",
															"brand" => "Bvlgari"
														)
													),
									"Necklaces" => array(
														array(
															"id" => "PR010", 
															"name" => "NK-001",
															"brand" => "Piaget"
														),
														array(
															"id" => "PR011", 
															"name" => "NK-002",
															"brand" => "Graff"
														),
														array(
															"id" => "PR012", 
															"name" => "NK-003",
															"brand" => "Tiffany"
														)
													)				
							)
			);



			$output1= '<table style=" text-align: center" border="1" width="100%" cellspacing="0" cellpadding="10px">
			<th>Category</th>
			<th>Subcategory</th>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>';

			foreach($products as $key1 => $value1){


				foreach($value1 as $key2 => $value2){

				foreach($value2 as $key3){


				$output1.= "<tr>
				<td>{$key1}</td>
				<td>{$key2}</td>
				<td>{$key3["id"]}</td>
				<td>{$key3["name"]}</td>
				<td>{$key3["brand"]}</td>

					</tr>";


				}

					
				}
			}
			$output1.='</table>';
			echo '<h1 style=" text-align: center; color: red">List of All the Products </h1>';
			echo ($output1);


			// codding for mobile category Products
			$output2= '<table style=" text-align: center" border="1" width="100%" cellspacing="0" cellpadding="10px">
			<th>Category</th>
			<th>Subcategory</th>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>';

			foreach($products as $key1 => $value1){


				foreach($value1 as $key2 => $value2){

				foreach($value2 as $key3){
       
					if($key2=="Mobile"){
				$output2.= "<tr>
				<td>{$key1}</td>
				<td>{$key2}</td>
				<td>{$key3["id"]}</td>
				<td>{$key3["name"]}</td>
				<td>{$key3["brand"]}</td>

					</tr>";
				}

				}

					
				}
			}
			$output2.='</table>';
		
			
			
			echo '<h1 style=" text-align: center; color: red">List of All the Mobile category Products </h1>';
			
			echo ($output2);


			// arranging all the products where Brand is Samsung
			$output3= '<table style=" text-align: center" border="1" width="100%" cellspacing="0" cellpadding="10px">
			<th>Category</th>
			<th>Subcategory</th>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>';

			foreach($products as $key1 => $value1){


				foreach($value1 as $key2 => $value2){

				foreach($value2 as $key3){
       
					if($key3["brand"]=="Samsung"){
				$output3.= "<tr>
				<td>{$key1}</td>
				<td>{$key2}</td>
				<td>{$key3["id"]}</td>
				<td>{$key3["name"]}</td>
				<td>{$key3["brand"]}</td>

					</tr>";
				}

				}

					
				}
			}
			$output3.='</table>';
		
			
			
			echo '<h1 style=" text-align: center; color: red">List of All Samsung brand category Products </h1>';
			
			echo ($output3);

			// Delete & Show product with id = PR003. (Fourth Section)


			$output4= '<table style=" text-align: center" border="1" width="100%" cellspacing="0" cellpadding="10px">
			<th>Category</th>
			<th>Subcategory</th>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>';

			foreach($products as $key1 => $value1){


				foreach($value1 as $key2 => $value2){

				foreach($value2 as $key3){
       
					if($key3["id"]=="PR003"){

						array_splice($value2,array_search($key3,$value2),1);
					}else{
				$output4.= "<tr>
				<td>{$key1}</td>
				<td>{$key2}</td>
				<td>{$key3["id"]}</td>
				<td>{$key3["name"]}</td>
				<td>{$key3["brand"]}</td>

					</tr>";
				}

				}

					
				}
			}
			$output4.='</table>';
		
			
			
			echo '<h1 style=" text-align: center; color: red">Delete & Show product with id = PR003. (Fourth Section) </h1>';
			
			echo ($output4);


			//  Update product name = "BIG-555" with id = PR002. and show again in table (fifth section)

			$output5= '<table style=" text-align: center" border="1" width="100%" cellspacing="0" cellpadding="10px">
			<th>Category</th>
			<th>Subcategory</th>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>';

			foreach($products as $key1 => $value1){


				foreach($value1 as $key2 => $value2){

				foreach($value2 as $key3){
       
					if($key3["id"]=="PR002"){
						$key3["name"]="BIG-555";
						// array_splice($value2,array_search($key3,$value2),1);
					}
				$output5.= "<tr>
				<td>{$key1}</td>
				<td>{$key2}</td>
				<td>{$key3["id"]}</td>
				<td>{$key3["name"]}</td>
				<td>{$key3["brand"]}</td>

					</tr>";
				

				}

					
				}
			}
			$output5.='</table>';
		
			
			
			echo '<h1 style=" text-align: center; color: red">Update product name = "BIG-555" with id = PR002. and show again in table (fifth section) </h1>';
			
			echo ($output5);


            ?>