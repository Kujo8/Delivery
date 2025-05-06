<?php include('includes/db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Доставка</title>
	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main4.css">
	<link rel="icon" href="/img/sushi.ico?v=2">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">
</head>

<body>
	  <div class="tabs">
		<a href="index.php" class="tab">Суши</a>
		<a href="drinks.php" class="tab">Напитки</a>
		<a href="burger.php" class="tab">Бургер</a>
	  </div>

	<header class="header">
		<div class="container text-center">
			<img class="logo" src="img/logo/pizza.svg" width="92" alt="Суши и пицца">
			<div class="site-title">Доставка</div>
			<p class="lead">Оперативно и вкусно</p>
		</div>
	</header>

	<div class="tabs">
		<a href="#standart" class="tab">Стандарт</a>
		<a href="#skidki" class="tab">Скидки</a>
		<a href="#" class="tab">Комбо</a>
	  </div>

	<div id="standart" class="container mb-5">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<div class="card mb-4" data-id="01">
							<img class="product-img" src="img/roll/philadelphia.jpg" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Филадельфия хит ролл</h4>
								<p><small data-items-in-box class="text-muted">6 шт.</small></p>

								<div class="details-wrapper">
								<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
								</div>
									<div class="price">
										<div class="price__weight">180г.</div>
										<div class="price__currency">2000 Т</div>
									</div>
								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">+ в корзину</button>

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card mb-4" data-id="02">
							<img class="product-img" src="img/roll/california-tempura.jpg" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Калифорния темпура</h4>
								<p><small data-items-in-box class="text-muted">6 шт.</small></p>

								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>

									<div class="price">
										<div class="price__weight">205г.</div>
										<div class="price__currency">1500 Т</div>
									</div>
								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">+ в корзину</button>

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card mb-4" data-id="03">
							<img class="product-img" src="img/roll/zapech-california.jpg" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Запеченый ролл «Калифорния»</h4>
								<p><small data-items-in-box class="text-muted">6 шт.</small></p>

								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>

									<div class="price">
										<div class="price__weight">182г.</div>
										<div class="price__currency">1300 Т</div>
									</div>

								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">+ в корзину</button>

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card mb-4" data-id="04">
							<img class="product-img" src="img/roll/philadelphia.jpg" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Филадельфия</h4>
								<p><small data-items-in-box class="text-muted">6 шт.</small></p>

								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>

									<div class="price">
										<div class="price__weight">230г.</div>
										<div class="price__currency">2500 Т</div>
									</div>

								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">
									+ в корзину
								</button>

							</div>
						</div>
					</div>


					<div class="col-md-6">
						<div class="card mb-4" data-id="05">
							<img class="product-img" src="img/roll/123.jpg" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Инь янь</h4>
								<p><small data-items-in-box class="text-muted">6 шт.</small></p>

								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>

									<div class="price">
										<div class="price__weight">180г.</div>
										<div class="price__currency">1200 Т</div>
									</div>

								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">
									+ в корзину
								</button>

							</div>
						</div>
					</div>


					<div class="col-md-6">
						<div class="card mb-4" data-id="06">
							<img class="product-img" src="img/roll/i.webp" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Маки</h4>
								<p><small data-items-in-box class="text-muted">6 шт.</small></p>

								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>

									<div class="price">
										<div class="price__weight">230г.</div>
										<div class="price__currency">2500 Т</div>
									</div>

								</div>

								<button data-cart type="button" class="btn btn-block btn-outline-warning">
									+ в корзину
								</button>

							</div>
						</div>
					</div>


					<div id="skidki" class="col-md-6">
						<div class="card mb-4" data-id="06">
							<img class="product-img" src="img/roll/i.webp" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Маки</h4>
								<p><small data-items-in-box class="text-muted">6 шт.</small></p>
					
								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>
					
									<div class="price">
										<!-- Старая цена -->
										<div class="price__weight">230г.</div>
										<div class="price__currency new-price">2500 Т</div> <!-- старая цена -->
										<!-- Новая цена с учетом скидки -->
										<div class="price__currency old-price">3000 Т</div> <!-- новая цена -->
										<!-- Отображение скидки -->
										<div class="discount">Скидка 17%</div>
									</div>
					
								</div>
					
								<button data-cart type="button" class="btn btn-block btn-outline-warning">
									+ в корзину
								</button>
					
							</div>
						</div>
					</div>




					<div class="col-md-6">
						<div class="card mb-4" data-id="06">
							<img class="product-img" src="img/roll/i.webp" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Маки</h4>
								<p><small data-items-in-box class="text-muted">6 шт.</small></p>
					
								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>
					
									<div class="price">
										<!-- Старая цена -->
										<div class="price__weight">230г.</div>
										<div class="price__currency new-price">2500 Т</div> <!-- старая цена -->
										<!-- Новая цена с учетом скидки -->
										<div class="price__currency old-price">3000 Т</div> <!-- новая цена -->
										<!-- Отображение скидки -->
										<div class="discount">Скидка 17%</div>
									</div>
					
								</div>
					
								<button data-cart type="button" class="btn btn-block btn-outline-warning">
									+ в корзину
								</button>
					
							</div>
						</div>
					</div>




					<div class="col-md-6">
						<div class="card mb-4" data-id="06">
							<img class="product-img" src="img/roll/i.webp" alt="">
							<div class="card-body text-center">
								<h4 class="item-title">Маки</h4>
								<p><small data-items-in-box class="text-muted">6 шт.</small></p>
					
								<div class="details-wrapper">
									<div class="items counter-wrapper">
										<div class="items__control" data-action="minus">-</div>
										<div class="items__current" data-counter>1</div>
										<div class="items__control" data-action="plus">+</div>
									</div>
					
									<div class="price">
										<!-- Старая цена -->
										<div class="price__weight">230г.</div>
										<div class="price__currency new-price">2500 Т</div> <!-- старая цена -->
										<!-- Новая цена с учетом скидки -->
										<div class="price__currency old-price">3000 Т</div> <!-- новая цена -->
										<!-- Отображение скидки -->
										<div class="discount">Скидка 17%</div>
									</div>
					
								</div>
					
								<button data-cart type="button" class="btn btn-block btn-outline-warning">
									+ в корзину
								</button>
					
							</div>
						</div>
					</div>
					
</div>
			</div>
		</div>


			<div class="col-md-4">
				<div class="card mb-4">
					<div class="card-body">
						<h4 class="card-title">Ваш заказ</h4>

							<div data-cart-empty class="alert alert-secondary" role="alert">
							Корзина пуста
						</div>
						
						<div class="cart-wrapper">

						</div>

						<div class="cart-total">
							<p data-cart-delivery class="none">
								<span class="h5">Доставка:</span>
								<span class="delivery-cost">2500 Т</span><br>
								<span class="small">Бесплатно при заказе от 3000 Т</span>
							</p>
							<p><span class="h5">Итого:</span>
								<span class="total-price">0</span>
								<span class="rouble">Т</span></p>
						</div>

					</div>
					<div id="order-form" class="card-body border-top none">
						<h5 class="card-title">Оформить заказ</h5>
						<form method="post" action="register.php">
							<div class="form-group">
								<label for="name">Имя:</label>
								<input type="text" id="name" name="name" class="form-control" required><br>

								<label for="address">Адрес:</label>
								<input type="text" id="address" name="address" class="form-control" required><br>

								<label for="apartment_number">Номер квартиры:</label>
								<input type="text" id="apartment_number" name="apartment_number" class="form-control" required><br>

							</div>
						<button type="submit" class="btn btn-primary">Отправить</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<script src="./js/renderProducts.js"></script>
	<script src="./js/calcCartPrice.js"></script>
	<script src="./js/toggleCartStatus.js"></script>
	<script src="./js/counter-02.js"></script>
	<script src="./js/cart-02.js"></script>
	<script src="./js/cart-01.js"></script>
	

</body>
</html>