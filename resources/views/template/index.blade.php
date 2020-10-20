<!DOCTYPE html>
<html lang="en">

<head>
	<script data-ad-client="ca-pub-2458126565459515" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>mCyne Media | Entertainment | Advertising | Collaboration</title>
	<link rel="icon" href="logo/mCyneL.png">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/new_style.css" />
	<script type="text/javascript" id="cookieinfo"
		src="https://cookieinfoscript.com/js/cookieinfo.min.js"
		data-bg="#645862"
		data-fg="#FFFFFF"
		data-link="#F1D600"
		data-cookie="CookieInfoScript"
		data-text-align="left"
		data-close-text="Got it!">
	</script>


</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
						<li><a href="https://www.facebook.com/mCyneMedia/" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/mcynemedia/" target="_blank"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="https://mcyne.com" class="logo"><img src="./logo/mcyne_main_logo.png" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<!-- <button class="search-btn"><i class="fa fa-search"></i></button> -->
						<div id="nav-search">
							<form>
								<input class="input" name="search" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<!-- <li><a href="#" onclick="window.location.reload(true);">Home</a></li> -->
                        <li><a href="#">Home</a></li>
                        @foreach ($cat as $item)
                    <li><a href="">{{$item->name}}</a></li>

                        @endforeach
						{{-- <li><a href="#">News</a></li>
						<li><a href="#">Entertainment</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Health & Beauty</a></li>
						<li><a href="#">Travel</a></li><br/>
						<li><a href="about.html">About US</a></li>
						<li><a href="contact.html">Advertise with US</a></li> --}}

					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="https://mcyne.com">Home</a></li>
					<li class="has-dropdown"><a>Categories</a>
						<ul class="dropdown">
                            @foreach ($cat as $item)
                            <li><a href="">{{$item->name}}</a></li>

                                @endforeach

							{{-- <li><a href="#">News</a></li>
							<li><a href="#">Entertainment</a></li>
							<li><a href="#">Technology</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Health & Beauty</a></li>
							<li><a href="#">Travel</a></li> --}}
						</ul>
					</li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.html">Advertise</a></li>
					<li><a href="privacy.html">Privacy</a></li>
					<li><a href="terms.html">Terms of Service</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="posts/2019/technology/november/things-you-should-never-google.html"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/03/20/10/search.jpg?width=1200" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Technology</a>
							</div>
							<h3 class="post-title title-lg"><a href="posts/2019/technology/november/things-you-should-never-google.html">Things You Should Never Google</a></h3>
							<ul class="post-meta">
								<li><a href="posts/2019/technology/november/things-you-should-never-google.html">View details...</a></li>
								<li>30 November 2019</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="posts/2019/healthandbeauty/november/benefits-of-tomatoes.html"><img src="https://steemitimages.com/DQmXe8kdZcYabergkcNdvT2hFZ27hvCsdGkMmskuLQLuoxs/image.png" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health and Beauty</a>
							</div>
							<h3 class="post-title title-lg"><a href="posts/2019/healthandbeauty/november/benefits-of-tomatoes.html">Benefits of using Tomatoes</a></h3>
							<ul class="post-meta">
								<li><a href="posts/2019/healthandbeauty/november/benefits-of-tomatoes.html">View details...</a></li>
								<li>20 November 2019</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
							<a class="post-img" href="posts/2019/entertainment/november/top-movies-to-watch-on-otts.html"><img src="https://www.theandroidsoul.com/wp-content/uploads/2018/03/Netflix-vs-Amazon-Prime-Video-vs-Hotstar-1-1.png" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Entertainment</a>
								</div>
								<h3 class="post-title"><a href="posts/2019/entertainment/november/top-movies-to-watch-on-otts.html">Top Movies to watch on OTT's</a></h3>
								<ul class="post-meta">
									<li><a href="posts/2019/entertainment/november/top-movies-to-watch-on-otts.html">View details...</a></li>
									<li>11 November 2019</li>
								</ul>
							</div>
						</div>
						<!-- /post -->
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="posts/2019/entertainment/november/top-tv-shows-to-watch-on-otts.html"><img src="https://officechai.com/wp-content/uploads/2017/10/pjimage-57-1024x538.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Entertainment</a>
							</div>
							<h3 class="post-title"><a href="posts/2019/entertainment/november/top-tv-shows-to-watch-on-otts.html">Top TV-Shows to watch on OTT's</a></h3>
							<ul class="post-meta">
								<li><a href="posts/2019/entertainment/november/top-tv-shows-to-watch-on-otts.html">View details...</a></li>
								<li>09 November 2019</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="posts/2019/business/november/why-ola-uber-dont-work-in-goa.html"><img src="https://im.rediff.com/money/2018/jan/05ola-uber.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Business</a>
							</div>
							<h3 class="post-title"><a href="posts/2019/business/november/why-ola-uber-dont-work-in-goa.html">Why OLA | UBER don't work in GOA?</a></h3>
							<ul class="post-meta">
								<li><a href="posts/2019/business/november/why-ola-uber-dont-work-in-goa.html">View details...</a></li>
								<li>04 November 2019</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="posts/2019/technology/october/best-mobile-apps-for-photo-editing.html"><img src="https://blog.hubspot.com/hubfs/best%20photo%20editing%20apps.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Technology</a>
									</div>
									<h3 class="post-title"><a href="posts/2019/technology/october/best-mobile-apps-for-photo-editing.html">Best Mobile Apps for Photo Editing</a></h3>
									<ul class="post-meta">
										<li><a href="posts/2019/technology/october/best-mobile-apps-for-photo-editing.html">view details</a></li>
										<li>26 October 2019</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="posts/2019/travel/october/most-important-things-to-carry-while-travelling.html"><img src="https://completecityguides.com/images/blog/md/camera-essentials/e-essential-travel-camera-and-photography-gear.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Travel</a>
									</div>
									<h3 class="post-title"><a href="posts/2019/travel/october/most-important-things-to-carry-while-travelling.html">Most important things to carry while travelling</a></h3>
									<ul class="post-meta">
										<li><a href="posts/2019/travel/october/most-important-things-to-carry-while-travelling.html">view details</a></li>
										<li>19 October 2019</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="posts/2019/healthandbeauty/october/rules-to-apply-lipstick.html"><img src="https://i0.wp.com/your-mirror.co.uk/wp-content/uploads/2018/07/how-to-apply-lipstick-1-1170x780.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Health & Beauty</a>
									</div>
									<h3 class="post-title"><a href="posts/2019/healthandbeauty/october/rules-to-apply-lipstick.html">Rules to apply Lipstick flawlessly</a></h3>
									<ul class="post-meta">
										<li><a href="posts/2019/healthandbeauty/october/rules-to-apply-lipstick.html">View details...</a></li>
										<li>14 October 2019</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<div class="clearfix visible-md visible-lg"></div>
					</div>

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Travel</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="https://drifterplanet.com/wp-content/uploads/2018/02/Humayun-Tomb-Delhi-001.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Travel</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Top Best places to visit in India</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">view details...</a></li>
										<li>07 October 2019</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="posts/2019/travel/october/most-important-things-to-carry-while-travelling.html"><img src="https://completecityguides.com/images/blog/md/camera-essentials/e-essential-travel-camera-and-photography-gear.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Travel</a>
									</div>
									<h3 class="post-title title-sm"><a href="posts/2019/travel/october/most-important-things-to-carry-while-travelling.html">Most important things to carry while travelling</a></h3>
									<ul class="post-meta">
										<li><a href="posts/2019/travel/october/most-important-things-to-carry-while-travelling.html">view details...</a></li>
										<li>19 October 2019</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="https://www.budgetdirect.com.au/blog/wp-content/uploads/2019/04/Travelling-Alone.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Travel</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Travelling alone feels!</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">view details...</a></li>
										<li>07 October 2019</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->
				</div>
				<div class="col-md-4">
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="https://www.instagram.com/mcynemedia/" target="_blank" class="social-instagram">
										<i class="fa fa-instagram"></i>
										<span>Click Here to<br>Follow us on<br/>Instagram</span>
									</a>
								</li>
								<li>
									<a href="https://www.facebook.com/mCyneMedia/" target="_blank" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>Click Here to<br>Follow us on<br/>Facebook</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Entertainment</h2>
						</div>
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="https://i.redd.it/noal81sh7az21.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Entertainment</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Why Game of Thrones is so famous???</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="https://goalife.in/wp-content/uploads/2019/08/IFFI-2019.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Entertainment</a>
									<!-- <a href="category.html">Lifestyle</a> -->
								</div>
								<h3 class="post-title"><a href="blog-post.html">Movies Selected for International Film festival from India</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="posts/2019/entertainment/november/top-tv-shows-to-watch-on-otts.html"><img src="https://officechai.com/wp-content/uploads/2017/10/pjimage-57-1024x538.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Entertainment</a>
								</div>
								<h3 class="post-title"><a href="posts/2019/entertainment/november/top-tv-shows-to-watch-on-otts.html">Top TV-Shows to watch on OTT's</a></h3>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /post widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Health and Beauty</h2>
					</div>
					<!-- post -->
					<div class="post">
						<a class="post-img" href="posts/2019/healthandbeauty/november/benefits-of-tomatoes.html"><img src="https://steemitimages.com/DQmXe8kdZcYabergkcNdvT2hFZ27hvCsdGkMmskuLQLuoxs/image.png" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health and Beauty</a>
								<!-- <a href="category.html">Lifestyle</a> -->
							</div>
							<h3 class="post-title"><a href="posts/2019/healthandbeauty/november/benefits-of-tomatoes.html">Benefits of using Tomatoes</a></h3>
							<ul class="post-meta">
								<li><a href="posts/2019/healthandbeauty/november/benefits-of-tomatoes.html">view details...</a></li>
								<li>20 November 2019</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Technology</h2>
					</div>
					<!-- post -->
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Technology</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">How to create a blog?</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">view details...</a></li>
								<li>07 October 2019</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Business</h2>
					</div>
					<!-- post -->
					<div class="post">
						<a class="post-img" href="posts/2019/business/november/why-ola-uber-dont-work-in-goa.html"><img src="https://im.rediff.com/money/2018/jan/05ola-uber.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Business</a>
							</div>
							<h3 class="post-title"><a href="posts/2019/business/november/why-ola-uber-dont-work-in-goa.html">Why OLA | UBER don't work in GOA?</a></h3>
							<ul class="post-meta">
								<li><a href="posts/2019/business/november/why-ola-uber-dont-work-in-goa.html">view details...</a></li>
								<li>04 November 2019</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="posts/2019/travel/october/most-important-things-to-carry-while-travelling.html"><img src="https://completecityguides.com/images/blog/md/camera-essentials/e-essential-travel-camera-and-photography-gear.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Travel</a>
							</div>
							<h3 class="post-title"><a href="posts/2019/travel/october/most-important-things-to-carry-while-travelling.html">Most important things to carry while travelling</a></h3>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="posts/2019/healthandbeauty/october/rules-to-apply-lipstick.html"><img src="https://i0.wp.com/your-mirror.co.uk/wp-content/uploads/2018/07/how-to-apply-lipstick-1-1170x780.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health and Beauty</a>
							</div>
							<h3 class="post-title"><a href="posts/2019/healthandbeauty/october/rules-to-apply-lipstick.html">Rules to apply Lipstick flawlessly</a></h3>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="posts/2019/entertainment/november/top-tv-shows-to-watch-on-otts.html"><img src="https://officechai.com/wp-content/uploads/2017/10/pjimage-57-1024x538.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Entertainment</a>
							</div>
							<h3 class="post-title"><a href="posts/2019/entertainment/november/top-tv-shows-to-watch-on-otts.html">Top TV-Shows to watch on OTT's</a></h3>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="posts/2019/business/november/why-ola-uber-dont-work-in-goa.html"><img src="https://im.rediff.com/money/2018/jan/05ola-uber.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Business</a>
								<!-- <a href="category.html">Lifestyle</a> -->
							</div>
							<h3 class="post-title"><a href="posts/2019/business/november/why-ola-uber-dont-work-in-goa.html">Why OLA | Uber dont work GOA?</a></h3>
							<ul class="post-meta">
								<li><a href="posts/2019/business/november/why-ola-uber-dont-work-in-goa.html">Read more...</a></li>
								<li>04 November 2019</li>
							</ul>
							<p>Ola and Uber are one of the most popular online cab services in India having a huge number of users. As of 2018, Ola company has...</p>
						</div>
					</div>
					<!-- /post -->
					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="posts/2019/news/october/amazons-great-indian-festival-starts-13th-17th-oct.html"><img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201910/Amazon_Special_Celebrations-770x433.png" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">News</a>
								<!-- <a href="category.html">Lifestyle</a> -->
							</div>
							<h3 class="post-title"><a href="posts/2019/news/october/amazons-great-indian-festival-starts-13th-17th-oct.html">Amazon's Great Indian Festival Starts 13th-17th OCT</a></h3>
							<ul class="post-meta">
								<li><a href="posts/2019/news/october/amazons-great-indian-festival-starts-13th-17th-oct.html">Read more...</a></li>
								<li>07 October 2019</li>
							</ul>
							<p>Presently, only days after the festive sale finished, Amazon has declared that it is facilitating another new deal on its foundation...</p>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
	<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-3">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="https://mcyne.com" class="logo"><img src="./logo/mcyne_bottom_logo.png" alt=""></a>
							</div>
							<p>We are one of the newly discovered planet in the universe by 'INTERNET' 🙃</p>
							<ul class="contact-social">
								<!--<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>-->
								<li><a href="https://www.facebook.com/mCyneMedia/" target="_blank" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/mcynemedia/" target="_blank" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Categories</h3>
							<div class="category-widget">
								<ul>
									<li><a href="#">News</a></li>
									<li><a href="#">Entertainment</a></li>
									<li><a href="#">Technology</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title"><br/></h3>
							<div class="category-widget">
								<ul>
									<li><a href="#">Business</a></li>
									<li><a href="#">Health & Beauty</a></li>
									<li><a href="#">Travel</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="footer-bottom row">
					<div class="col-md-6 col-md-push-6">
						<ul class="footer-nav">
							<li><a href="https://mcyne.com">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Advertise with Us</a></li>
							<li><a href="privacy.html">Privacy Policy</a></li>
							<li><a href="terms.html">Terms of Service</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<div class="footer-copyright">
							<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy; <script>document.write(new Date().getFullYear());</script> | All Rights Reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://mcyne.com/" target="_blank">mCyne Media</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/main.js"></script>

	</body>

	</html>
