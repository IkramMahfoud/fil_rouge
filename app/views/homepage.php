<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>


<div class="main_title w-100 flex  flex-column">
	<div class="w-auto ">
		<h1 class="display-4 text-center justify-center text_h">Shop Now</h1>
	</div>
	<?php if (!empty($_SESSION['user_id'])) : ?>
		<div class="button mx-auto h-40">

			<?php if (!empty($_SESSION['role']) && $_SESSION['role'] == 2) : ?>
				<div class="container mx-auto">
					<a href="<?= URLROOT ?>portfolioController/Became_an_artist" class="button">
						<div class="button__line"></div>
						<div class="button__line"></div>
						<span class="button__text">Your Portfolio</span>
						<div class="button__drow1"></div>
						<div class="button__drow2"></div>
					</a>
				</div>
			<?php else : ?>
				<div class="container mx-auto">
					<a href="<?= URLROOT ?>portfolioController/Become_an_artist" class="button">
						<div class="button__line"></div>
						<div class="button__line"></div>
						<span class="button__text">Become An Artist</span>
						<div class="button__drow1"></div>
						<div class="button__drow2"></div>
					</a>
				</div>
			<?php endif ?>

		</div>
	<?php endif; ?>

	<div class=" ">
		<h5 class="text-center flex flex-col justify-center position-absolute start-50 translate-middle text_h3"><strong>20% OFF EVERYTHING // CODE: HOLIDAY</strong></h5>
	</div>
</div>

<div class="shop_img">
	<div class="row ">
		<div class="test_box box-01 col-xs-6 col-md-4">
			<div class="inner">

				<a href="" class="test_click b1">
					<div class="flex_this">
						<h1 class="test_title">Digital Arts</h1>
					</div>
				</a>
			</div>
		</div>
		<div class="test_box box-01 col-xs-6 col-md-4">
			<div class="inner">

				<a href="" class="test_click b2">
					<div class="flex_this">
						<h1 class="test_title">Plastic Arts</h1>
					</div>
				</a>
			</div>
		</div>
		<div class="test_box box-01 col-xs-6 col-md-4">
			<div class="inner">

				<a href="" class="test_click b3">
					<div class="flex_this">
						<h1 class="test_title">Photography</h1>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="sqs-block-content text-center mt-3">
		<p class="" style="white-space:pre-wrap;">Ships everywhere in the world. Credit, debit, and Paypal all accepted &gt;&gt;&nbsp;<a href="/faq">FAQs</a></p>
	</div>

	<?php
	include_once APPROOT . '/views/includes/footer.php';
	?>