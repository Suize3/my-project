<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		.color {
			background-color:#1a1c1c;
		}	
		.color2 {
			background-color:#232a2a;
		}
		.color3 {
			background-color:#;
		}
		.color4 {
			background-color:#;
		}
	</style>
</head>
<body class="color">
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'store');
		$text_zaprosa = "SELECT * FROM items";
		$zapros = mysqli_query($connect, $text_zaprosa);

		$stroka1=$zapros->fetch_assoc();
		echo $stroka1["tittle"];
		echo $stroka1["description"];
		echo $stroka1["price"];
		echo $stroka1["img"];

		$stroka2 =$zapros->fetch_assoc();
		echo $stroka2["tittle"];
		echo $stroka2["description"];
		echo $stroka2["price"];
		echo $stroka2["img"];

		$stroka3 = $zapros->fetch_assoc();
		echo $stroka3["tittle"];
		echo $stroka3["description"];
		echo $stroka3["price"];
		echo $stroka3["img"];

		$stroka4 = $zapros->fetch_assoc();
		echo $stroka4["tittle"];
		echo $stroka4["description"];
		echo $stroka4["price"];
		echo $stroka4["img"];

		$stroka5 = $zapros->fetch_assoc();
		echo $stroka5["tittle"];
		echo $stroka5["description"];
		echo $stroka5["price"];
		echo $stroka5["img"];

		$stroka6 = $zapros->fetch_assoc();
		echo $stroka6["tittle"];
		echo $stroka6["description"];
		echo $stroka6["price"];
		echo $stroka6["img"];
	?>










	<div class="col-12 color2" style="height: 50px">
		<div class="col-10 color2 mx-auto d-flex" style="height: 50px">	
			<div class="col-1 color2 mx-auto border d-flex" style="height: 50px">	
				<h5 class="text-white col-12 mt-2">Squize3</h5>	
			</div>

			<div class="col-8 color2 mx-auto border d-flex" style="height: 50px">	
				<a href="" class="badge text-white-50 col-3 mt-3">Быстрая доставка</a>
				<a href="" class="badge text-white-50 col-3 mt-3">Товары с душой</a>
				<a href="" class="badge text-white-50 col-3 mt-3">Лучшее качество</a>
				<a href="admin.php" class="badge text-white-50 col-3 mt-3">Админ-панель</a>
			</div>

			<div class="col-3 color2 mx-auto border d-flex" style="height: 50px">
				
				<span class="uk-icon mt-3 ml-5" style="margin-right:2px">
					<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="15" height="15">
						<path d="M1 11l9 3 3 9 9-21z" fill="#ccc" fill-rule="evenodd"></path>
					</svg>
				</span>
				<span class="jsCityLabel text-white-50 mt-3 ml-1" title="677000, Респ Саха /Якутия/, г Якутск">Якутск</span>

				<span class="jsGeoPhones mt-3 ml-3" data-widgetid="9">
					<a class="jsPhoneRussia uk-link-reset text-white-50">
					+0 (000) 000-00-00 </a>
				</span>
			</div>
		</div>
	</div>
	<div class="col-12 color2 mt-2" style="height: 500px">
		<div class="col-10 color2 mx-auto d-flex" style="height: 500px">	
			<div class="col-12 color2  " style="height: 500px">	
				<div id="carouselExampleControls" class="carousel slide col-12" data-ride="carousel" style="height: 500px">
				  	<div class="carousel-inner">
					    <div class="carousel-item active">
					      	<img src="carousel1.png" class="d-block col-12" alt="...">
					    </div>
					    <div class="carousel-item">
					     	 <img src="carousel2.png" class="d-block col-12" alt="...">
					    </div>
					    <div class="carousel-item">
					      	<img src="carousel3.png" class="d-block col-12" alt="...">
					   	</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-10 color2 mx-auto mt-2" style="height: 1010px">
		<div class="col-12 color2 d-flex" style="height: 500px">
			<div class="col-4 color2 border" style="height: 500px">	
					<?php
						echo "<img src='{$stroka1["img"]}' style='height: 360px; width: 450px' class='ml-3'>";
					?>	
				
					<h5  class="text-white-50">
						
						<?php 
							echo $stroka1["tittle"];
						 ?>	
					</h5>
					<p class="text-white-50">	
											
						<?php 
							echo $stroka1["description"];
						?>
					</p>
					<p  class="text-white-50">
										
						<?php 
							echo $stroka1["price"];
						?>
					</p>
			</div>
			<div class="col-4 color2 border" style="height: 500px">	
				<?php
					echo "<img src='{$stroka2["img"]}' style='height: 360px; width: 450px' class='ml-3'>";
				?>		
				
				<h5  class="text-white-50">
					
					<?php 
						echo $stroka2["tittle"];
					 ?>	
				</h5>
				<p  class="text-white-50">
					
					<?php 
						echo $stroka2["description"];
					?>
				</p>
				<p  class="text-white-50">	
					
					<?php 
						echo $stroka2["price"];
					?>
				</p>
			</div>
			<div class="col-4 color2 border" style="height: 500px">	
				<?php
					echo "<img src='{$stroka3["img"]}' style='height: 360px; width: 450px' class='ml-3'>";
				?>		
				
				<h5  class="text-white-50">
					
					<?php 
						echo $stroka3["tittle"];
					 ?>	
				</h5>
				<p  class="text-white-50">	
					
					<?php 
						echo $stroka3["description"];
					?>
				</p>
				<p  class="text-white-50">		
							
					<?php 
						echo $stroka3["price"];
					?>
				</p>
			</div>
		</div>
		<div class="col-12 color2 d-flex mt-2" style="height: 500px">
			<div class="col-4 color2 border" style="height: 500px">	
				<?php
					echo "<img src='{$stroka4["img"]}' style='height: 360px; width: 450px' class='ml-3'>";
				?>		
				
				<h5  class="text-white-50">
					
					<?php 
						echo $stroka4["tittle"];
					 ?>	
				</h5>
				<p  class="text-white-50">	
					
					<?php 
						echo $stroka4["description"];
					?>
				</p>
				<p  class="text-white-50">	
					
					<?php 
						echo $stroka4["price"];
					?>
				</p>
			</div>
			<div class="col-4 color2 border" style="height: 500px">	
				<?php
					echo "<img src='{$stroka5["img"]}' style='height: 360px; width: 450px' class='ml-3'>";
				?>		
				
				<h5  class="text-white-50">
					
					<?php 
						echo $stroka5["tittle"];
					 ?>	
				</h5>
				<p  class="text-white-50">	
					
					<?php 
						echo $stroka5["description"];
					?>
				</p>
				<p  class="text-white-50">	
								
					<?php 
						echo $stroka5["price"];
					?>
				</p>
			</div>
			<div class="col-4 color2 border" style="height: 500px">	
				<?php
					echo "<img src='{$stroka6["img"]}' style='height: 360px; width: 450px' class='ml-3'>";
				?>		
				
				<h5  class="text-white-50">
					
					<?php 
						echo $stroka6["tittle"];
					 ?>	
				</h5>
				<p  class="text-white-50">
					
					<?php 
						echo $stroka6["description"];
					?>
				</p>
				<p  class="text-white-50">	
									
					<?php 
						echo $stroka6["price"];
					?>
				</p>
			</div>
		</div>
	</div>
</body>
</html>