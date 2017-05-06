<template>
	<div class="col-lg-3 col-md-3 col-sm-6 col-sm-6">
		<div class="footer-block">
			<h6>Travel News</h6>
			<div class="footer-news">
				<a class="footer-news-img" href="#">
					<img class="img-responsive" src="img/news.jpg" alt="">
				</a>
				<div class="footer-news-content">
					<a class="footer-news-title" href="#">amazing place</a>
					<span class="footer-news-date">Mar 18, 2015</span>
					<a href="#" class="footer-news-more">read more</a>
				</div>
			</div>

			<div class="footer-news">
				<a class="footer-news-img" href="#">
					<img class="img-responsive" src="img/news.jpg" alt="">
				</a>
				<div class="footer-news-content">
					<a class="footer-news-title" href="#">amazing place</a>
					<span class="footer-news-date">Mar 18, 2015</span>
					<a href="#" class="footer-news-more">read more</a>
				</div>
			</div>

		</div>
	</div>
</template>

<style>
	.footer-block h6 {
		font-size: 13px;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 1px;
		padding-bottom: 15px;
	}
	.footer-block .footer-news {
		margin-bottom : 15px;
		display: flex;
		flex-direction: row;
	}

	.footer-block .footer-news-content {
		padding : 0px;
		display: flex;
		flex-direction: column;
		margin-left: 20px;

	}
		.footer-block .footer-news-content .footer-news-title {
			text-transform: uppercase;
			letter-spacing: 1.3px;
			font-weight: 500;
		}

		.footer-block .footer-news-content .footer-news-date {
			font-size: 12px;
			color: #777;
			padding: 5px 0px;
		}
</style>