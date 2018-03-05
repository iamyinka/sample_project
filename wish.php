<?php

include("db.php");

$str=mysqli_real_escape_string($con,$_GET["str"]);

//Get data's from the Table
if(isset($str))
{
$sql_query="SELECT * FROM event_wishes WHERE str='$str'";
$result_set=mysqli_query($con,$sql_query) or die('error');
$user_wish=mysqli_fetch_array($result_set);
}

?>
<?php

// redirect to 404 page
if($user_wish == false)
{
header('HTTP/1.1 404 Not Found');
echo 'Sorry, the user Wish does not exist <a href="/">Create New</a>';
}
else
{ 
?>


<?php  

		

		date_default_timezone_set('Asia/Kuala_Lumpur');
		


		$start = '16:00:00';
		// $now = time('');
		$timestamp = date('H:i:s',strtotime('+1 hour +0 minutes',strtotime($start)));
		$time = date('H:i', strtotime($timestamp));
		$time2 = date(" H:i:s", time());
		$time3 = date("H:i:s", time());
		$lastUpdate = strftime("%H:00:00", time());
		// $today = date(" H:i:s", $now);
		$timestamp2 = strtotime($time2) - 3600;
		$timestamp3 = strtotime($time2) + 3600;
		$timeUp = strftime('%H:00', $timestamp2);
		$timeUp2 = strftime('%H', $timestamp2);
		$timeDown = strftime('%M', $timestamp3);
		$timeDown2 = strftime('00:00:00', $timestamp3);


		$seed = floor(time()/(60*60*1));
		// $seed = floor(time()/(60*5));
		srand($seed);
		$item = rand(49000,51000);

		

?>

<!DOCTYPE html>
<html lang="">
		<head>
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113214091-1"></script>
				<script>
				  window.dataLayer = window.dataLayer || [];
				  function gtag(){dataLayer.push(arguments);}
				  gtag('js', new Date());

				  gtag('config', 'UA-113214091-1');
				</script>
				<meta name="norton-safeweb-site-verification" content="etrv4i8oh67tiou-o2s134tuqgry7sg2249oa-itlpg7c06zptb8-bdf43-ya1so-1-7tj4vev03w69yqyprzzeedltbm7u2-tvox12v-mba7jqnxds8vxywpk13x5eh" />
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="robots" content="index,follow" />
				
				<?php $current_page = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				 echo '<link rel="canonical" href="'.$current_page.'" />'; ?>



				<!-- Seo Meta Tags -->
				<title><?php echo $user_wish['title']; ?>, Wishing you a Happy Chinese New year 2018</title>
				<meta name="description" content="<?php echo $user_wish['title']; ?> Wishing you a Happy Chinese New Year - Here is your Happy Chinese New Year 2018 Greeting Wishes."/>
				<link rel="icon" href="https://ezyfx.la/images/favicon.png" type="image/gif" sizes="16x16">

				<!-- Twitter Card data -->
				<meta name="twitter:card" content="summary">
				<meta name="twitter:title" content="<?php echo $user_wish['title']; ?> Wishing you a Happy Chinese New year 2018" />
				<meta name="twitter:description" content="<?php echo $user_wish['title']; ?> Wishing you a Happy Chinese New Year - Here is your Happy Chinese New Year 2018 Greeting Wishes." />
				<meta name="twitter:image" content="https://twitter.com/ezyfxlah" />
				<meta name="twitter:url" content="<?php echo $current_page; ?>" />
				<meta name="twitter:site" content="@ezyfxlah"/>
				<meta name="twitter:creator" content="@ezyfxlah"/>

				<!-- Facebook Open Graph data -->
				<meta property="og:title" content="<?php echo $user_wish['title']; ?> Wishing you a Happy Chinese New year 2018" />
				<meta property="og:type" content="article"/>
				<meta property="og:url" content="<?php echo $current_page; ?>" />
				<meta property="og:image" content="FB OG THUMBNAIL URL" />
				<meta property="og:image:alt" content="Happy Chinese New year" />
				<meta property="og:description" content="<?php echo $user_wish['title']; ?> Wishing you a Happy Chinese New Year - Here is your Happy New Year 2018 Greeting Wishes." /> 
				<meta property="og:site_name" content="Happy Chinese New Year 2018" />
				<meta property="fb:app_id" content="YOUR FB APP ID" />
				<meta property="article:publisher" content="https://www.facebook.com/ezyfxlah" />
				<meta property="article:author" content="https://www.facebook.com/ezyfxlah" />

				<!-- Google+ Meta Tags. -->
				<meta itemprop="name" content="<?php echo $user_wish['title']; ?> Wishing you a Happy Chinese New year 2018">
				<meta itemprop="description" content="<?php echo $user_wish['title']; ?> Wishing you a Happy Chinese New Year - Here is your Happy Chinese New Year 2018 Greeting Wishes.">
				<meta itemprop="image" content="OG THUMBNAIL URL">

				<!-- Bootstrap CSS -->
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
				<link rel="stylesheet" href="../cny2018/css/main.css">

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				<!--[if lt IE 9]>
						<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
						<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->

				<style>
				.panel-default > .panel-heading-custom {
						background: #CA000F !important; color: #fff;
				}
				.para {
						font-size: 14px;
				}
				.phead {
						font-size: 18px;
						font-weight: 600;
				}
							 .post-content {
							 	margin-top: 20px;
							 	/*background: #fff url('');*/
							 }

							 /*#wishesMsg {
							 	background: url('https://happy-new-year-2018-images.download/wp-content/uploads/2017/12/2018-chinese-new-year-wallpaper-chinese-new-year-wallpaper-2018-with-colorful-images-1.jpg');
							 	z-index: 100000;
							 }*/
						.post-content img {
								max-height: 100%;
								max-width: 100%;
								}
								.post-title{
										font-size:23px
								}
								.post-content h2 {
										font-size:23px
								}
								.post-content p {
										line-height: 24px;
										margin-bottom: 20px;
										font-size: 16px;
								}
								.post-author {
										font-size: 16px;
										text-transform: uppercase;
										color: #000;
										font-weight: 700;
								}
								.veer {
										border: 2px solid rgb(255, 204, 0);
										padding: 8px 10px;
										font-size: 120%;
										color: black;
										font-weight: bold;
										background-color: rgb(255, 255, 153);
										border-radius:20px 20px 0 20px;
										} 
						.panel-default > .panel-heading-custom {
						 background: #CA000F !important; color: #fff;
						}

						.panel-primary>.panel-heading {
							background: #CA000F !important; color: #fff;
							border: none;
						}

						.panel {
							border: none;
						}

						.veer-panel h2 {
							font-size: 2em;
							margin-top: 20px;
						}

						.veer-panel {
							background: linear-gradient(rgba(255, 255, 255, .3), rgba(255, 255, 255, .5)), url('https://happy-new-year-2018-images.download/wp-content/uploads/2017/12/2018-chinese-new-year-wallpaper-chinese-new-year-wallpaper-2018-with-colorful-images-1.jpg') 70% 120%;
							color: #000;
							padding-top: 50px;
							opacity: 1;
						}

						/* SHAREBUTTONS */
						.sharebuttons a { color: #fff !important; }
						.sharebuttons span {
								font-size: 16px;
						}
						.btn-whatsapp { background: #128c7e;}
						.btn-facebook { background: #3b5998;}
						.btn-google {background: #b33;}
						.btn-twitter {background: #50c8f4;}
						.btn-whatsapp:hover { background: #075e54;}
						.btn-facebook:hover { background: #2f4679;}
						.btn-google:hover {background: #ae2f2f;}
						.btn-twitter:hover {background: #10b3f0;}
						.panel-default > .panel-heading-custom {
						 background: #8e44ad; color: #fff;
						}
						
						@media only screen and (max-width:480px) {
						 .h-mbl {
						 display: none !important;}
						 }
						/*.veer-img {
						border:5px solid #d2d2d2;
						padding:2px;
						}*/
						/*.veer-panel {
						background-color: #b3e5fc;}*/
						.hello-head{font-weight: bold;font-variant: small-caps;text-align: center;font-size: 45px;}
						.home-logo {
							font-family: Lato;
							font-size: 24px;
							font-style: oblique;
							font-variant: normal;
							font-weight: bold;
							line-height: 37.5px;
						}
						.home-footer{padding:20px 0;background-color:#666;color:#FFF;margin:25px 0 0}
						.lnf{color:#fff;}
						</style>
		</head>
		<body>
				<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
										</button>
										<a class="navbar-brand" href="#"><img src="https://www.ezyfx.la/images/logo.png" alt=""></a>
								</div>
				
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
										
										<ul class="nav navbar-nav navbar-right">
												<li><a href="https://ezyfx.la">Home</a></li>
												<li><a href="https://secure.ezyfx.la/" target="_blank">Login</a></li>
												<li><a href="https://secure.ezyfx.la/open-live-account" target="_blank">Sign Up</a></li>
										</ul>
								</div><!-- /.navbar-collapse -->
						</div>
				</nav>
				<header>
						<div class="container-fluid header">
								<h1>Chinese New Year gifts from EZYFX</h1>
						</div>
				</header>



				<section class="intro">
						<div class="container">
								<h4><strong>Chinese New Year gifts</strong> from EZYFX are waiting for the winners</h4>
								
								<div class="animate-flicker">
										<p>Hurry up to participate in the Chinese New Year promotion!</p>
								</div>
								
						</div>
				</section>

				<section class="promo-video">
						<div class="container">
								<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
												<div class="video-responsive">
												<iframe width="560" height="315" src="https://www.youtube.com/embed/-mo_UInpLAQ?rel=1&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
											</div>
										</div>
								</div>
						</div>
				</section>

				<section class="post-content">
					<div class="container">
					<div class="row">
					<div class="col-lg-6 col-lg-offset-3 text-center" id="wishesMsg">

					<div class="panel panel-primary">
					<div class="panel-heading panel-heading-custom">
					<h4 class="phead section-heading"><b>Click <a href="https://ezyfx.la/cny2018" style="color: yellow;">&laquo; here &raquo;</a> to create your personalized greetings too.</b></h4>
					</div>
					<div class="panel-body veer-panel">
					<h2 class="hello-head" style="color: #CA000F;">Happy Chinese New Year</h2>
					<div class="text-center">
					<!-- <br /> -->
					<!-- <img class="animated infinite tada" src="build/image/happynewyear2018-web1.png" width="300" alt="Happy New Year"> -->
					</div>
					<!-- <br /> -->
					<br />
					<p class="post-title text-center" style="font-size: 1.4em; font-weight: bolder;">
						May This Chinese New Year Bring You <br>Good Health, Good Luck, Great Prosperity And Much
Happiness Throughout The Year. <br> <br><q><strong><span style="color: #CA000F;">GONG XI FA CHAI</span></strong></q> 
					</p>
					<h3 class="animated infinite pulse text-center"><b><i class="fa fa-star" aria-hidden="true"></i> <span style="color: #CA000F;"><?php echo $user_wish['title']; ?> </span><i class="fa fa-star" aria-hidden="true"></i></b></h3><br/>
					</div>
					</div>

					<!-- Social Share -->
					<div class="text-center" >
					<div class="sharebuttons btn-group btn-group-lg">

					<input class="disabled form-control" id="foo" type="text" value="<?php echo $current_page; ?>">
						<a class="btn btn-warning cny-btn" data-clipboard-action="copy" data-clipboard-target="#foo"><i class="fa fa-files-o"></i> <span>Copy</span></a>
					<a class="btn btn-whatsapp" href="https://web.whatsapp.com/send?text=<?php echo rawurlencode($user_wish['title']); ?>%20💯%20Sending%20you%20a%20Happy%20Chinese%20New%20Year%20Greetings%20🎁%20👉%20<?php echo $current_page; ?>" target="_blank"><i class="fa fa-whatsapp"></i> <span>Share</span></a>
					<a class="btn btn-facebook" href="https://facebook.com/sharer.php?u=<?php echo $current_page; ?>" target="_blank"><i class="fa fa-facebook"></i> <span>Share</span></a>
					<a class="btn btn-google" href="https://plus.google.com/share?url=<?php echo $current_page; ?>" target="_blank"><i class="fa fa-google-plus"></i> <span>Share</span></a>
					<a class="btn btn-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $current_page; ?>" target="_blank"><i class="fa fa-twitter"></i> <span>Share</span></a>
					</div>
					</div>

					</div>
					</div>
					</div>
					</section>

				
				
<section class="controls">
		<div class="container">
		<ul class="nav">
				<!-- <li data-target="#theCarousel" data-slide-to="0" class="active"><a href="#"><img src="http://placehold.it/50x50"><small>Slide One</small></a></li> -->
				<li data-target="#theCarousel" data-slide-to="0" class="active">
						<!-- <a href="#"><small>Slide One</small></a> -->
						<div class="box">
												<div class="title">
											Stage 1                            
										</div>
										<div class="date">
											1 - 16 February                            
										</div>
									</div>
				</li>
				<!-- <li data-target="#theCarousel" data-slide-to="1"><a href="#"><small>Slide Two</small></a></li> -->
				<li data-target="#theCarousel" data-slide-to="1">
						<!-- <a href="#"><small>Slide Two</small></a> -->
						<div class="box">
												<div class="title">
											Stage 2                           
										</div>
										<div class="date">
											17 - 23 February                            
										</div>
									</div>
				</li>
				<li data-target="#theCarousel" data-slide-to="2">
						<!-- <a href="#"><small>Slide Two</small></a> -->
						<div class="box">
												<div class="title">
											Stage 3                           
										</div>
										<div class="date">
											24 Feb - 02 March                            
										</div>
									</div>
				</li>

				<li data-target="#theCarousel" data-slide-to="3">
						<!-- <a href="#"><small>Slide Two</small></a> -->
						<div class="box">
												<div class="title">
											Stage 4                           
										</div>
										<div class="date">
											03 - 09 March                            
										</div>
									</div>
				</li>

				<li data-target="#theCarousel" data-slide-to="4">
						<!-- <a href="#"><small>Slide Two</small></a> -->
						<div class="box">
												<div class="title">
											Stage 5                           
										</div>
										<div class="date">
											10 - 16 March                            
										</div>
									</div>
				</li>
				
		</ul>
		</div> 
</section>
		

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 promoItems">
					<div class="carousel slide multi-item-carousel" id="theCarousel">
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-xs-4"><a href="#1"><img src="../cny2018/images/sliders/money.png" class="img-responsive"></a></div>

								<div class="carousel-caption">
										<h3>iPhone X</h3>
										<p>Stage 1</p>
									</div>
							</div>

							<div class="item">
								<div class="col-xs-4"><a href="#1"><img src="../cny2018/images/sliders/iphone.png" class="img-responsive"></a></div>

								<div class="carousel-caption">
										<h3>10.5-inch iPad Pro Wi-Fi 256GB</h3>
										<p>Stage 2</p>
									</div>
							</div>

							<div class="item">
								<div class="col-xs-4"><a href="#1"><img src="../cny2018/images/sliders/ipad.png" class="img-responsive"></a></div>

								<div class="carousel-caption">
										<h3>Macbook Pro 2017</h3>
										<p>Stage 3</p>
									</div>
							</div>

							<div class="item">
								<div class="col-xs-4"><a href="#1"><img src="../cny2018/images/sliders/macbook.png" class="img-responsive"></a></div>

								<div class="carousel-caption">
										<h3>88 Mystery Gifts</h3>
										<p>Stage 4</p>
									</div>
							</div>
							<div class="item">
								<div class="col-xs-4"><a href="#1"><img src="../cny2018/images/sliders/mystery-gift.png" class="img-responsive"></a></div>

								<div class="carousel-caption">
										<h3>88 prizes of $50 each</h3>
										<p>Stage 5</p>
									</div>
							</div>
							
						</div>
								<a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
								<a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> 
								<a class="left carousel-control" href="#theCarousel" data-slide="prev"><img src="https://www.liteforex.com/assets/b86a5598/images/contests/new-year-promotion-2017/left-arrow.png" alt=""></a>
								<a class="right carousel-control" href="#theCarousel" data-slide="next"><img src="https://www.liteforex.com/assets/b86a5598/images/contests/new-year-promotion-2017/right-arrow.png" alt=""></a>
							</div>


							
				</div>
			</div>
				
				<div class="new-caption-area"></div>

		</div>

		<section class="how-to-play">
				<div class="container">
						<div class="row">
								<div class="col-sm-4 steps stepsX">
										<i class="fa fa-usd"></i>
										<p>Top up your trading account</p>
										<img src="https://www.liteforex.com/assets/b86a5598/images/contests/new-year-promotion-2017/arrow.png" alt="">
								</div>
								<div class="col-sm-4 steps">
										<i class="fa fa-sort-numeric-asc"></i>
										<p>Get a unique number</p>
										<img src="https://www.liteforex.com/assets/b86a5598/images/contests/new-year-promotion-2017/arrow.png" alt="">
								</div>
								<div class="col-sm-4 steps">
										<i class="fa fa-gift"></i>
										<p>Win a precious prize</p>
								</div>
						</div>

						<hr>
						<h6 class="text-center">All the participants have equal winning chances!</h6>
						<hr>
				</div>
		</section>


		<section class="participate">
				<div class="container">
						<div class="mystery-number">
								<p>
										EZYFX’s all clients depositing <span>500</span> USD in their accounts during the promo period will participate in the promotion The winner will be defined randomly by use of a transparent and intelligible algorithm and a special number formed on the basis of currency quotes.
								</p>

								<div class="mystery-box">
										<!-- <h6>52321</h6> -->
										<h6>
												<?php 
														// echo rand(49000, 51000); 
														echo $item;
												?>
														
												</h6>
								</div>
								<p class="updated">
										<!-- Last Update on <?php $lastUpdate; ?>. Updates every SIXTY minutes <br> -->
										 Last Update on <?php echo $lastUpdate; ?>. Updates every SIXTY minutes <br> 
										Current Time: <?php echo $time2; ?> <br>
										
								</p>
						</div>

						<p class="text-center">Five digits above will make up a winner’s number on the basis of quotes for 5 currency pairs</p>

						<div class="text-center">
								<a data-toggle="modal" href="#myModal" class="btn text-danger">See the number forming algorithm</a>
						</div>

						<div class="call2action">
								<a href="https://secure.ezyfx.la/" target="_blank" class="btn btn-danger btn-lg">Participate &raquo;</a>
						</div>


						<div class="row">
								<div class="col-sm-12">
										<div id="myModal" class="modal fade in" tabindex="-1" role="dialog">
										<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">See the number forming algorithm</h4>
															</div>
															<div class="modal-body">
																<p>A winner’s number is formed on the basis of ASK prices for 5 currency pairs on the EZYFX-Live Server:</p>
																<h4>E Z Y F X</h4>
																<p>
																		where: <br>
																		<span>— E</span> is the last digit in the EURUSD Ask price <br>
																		<span>— Z</span> is the last digit in the GBPUSD Ask price <br>
																		<span>— Y</span> is the last digit in the USDJPY Ask price <br>
																		<span>— F</span> is the last digit in the GBPJPY Ask price <br>
																		<span>— X</span> is the last digit in the XAUUSD Ask price
																</p>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
								</div>
						</div>
				</div>
		</section>

		<section class="participants">
				<div class="container-fluid">
				

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#example2-tab1" aria-controls="example2-tab1" role="tab" data-toggle="tab">List of participants</a></li>
						<li role="presentation"><a href="#example2-tab2" aria-controls="example2-tab2" role="tab" data-toggle="tab">Terms &amp; Conditions</a></li>
						<li role="presentation"><a href="#example2-tab3" aria-controls="example2-tab3" role="tab" data-toggle="tab">Winners</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="example2-tab1">
						<table id="example2-tab1-dt" class="table table-striped table-bordered table-condensed" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Participant’s Number</th>
										<th>Account Number</th>
										<th>Country</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>001</td>
										<td>51676</td>
										<td>Malaysia</td>
									</tr>
									<tr>
										<td>002</td>
										<td>52240</td>
										<td>Indonesia</td>
									</tr>
									<tr>
										<td>003</td>
										<td>52519</td>
										<td>China</td>
									</tr>
								</tbody>
								</table>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="example2-tab2">
								<h4>Terms and conditions</h4>

								<ol>
										<li>Chinese New Year 2018 Special Offer from EZYFX is held from 1st Feb to 16.03.2018 inclusive</li>
										<li>The following prizes will be drawn under the Chinese New Year 2018 Special Offer from EZYFX: <span>Macbook Pro 2017, 10.5-inch iPad Pro Wi-Fi 256GB, Apple iPhone X, 88 Mystery Gifts and 88 prizes of $50</span></li>
										<li>The first 888 clients of EZYFX who made a deposit of at least 500 USD in their accounts during the promo period may participate in the promotion.</li>
										<li>A unique participant's number will be assigned to a client's trading account in which a relevant deposit has been made (see p.3). The number will be sent to the email address registered in the Client Profile. The account will be added to the list of participants displayed on the promotion page and will participate in the prize drawing.</li>
										<li>
												The prizes will be distributed in several stages according to the following schedule:<br>
												<span>1st stage, which will define the owner of an Apple iPhone X, will take place on 16.02.18 at 18:00;</span><br>
																		<span>2nd stage, which will define the owner of an 10.5-inch iPad Pro Wi-Fi256GB, will take place on 23.02.18 at 18:00;</span><br>
																		<span>3rd stage, which will define the owner of Macbook Pro 2017, will take place on 02.03.18 at 18:00; </span><br>
																		<span>4th stage is taking place on 09.03.18; 88 winners of Mystery Gifts will be defined one at a time every 60 minutes starting from 12:00. </span><br>
																		<span>5th stage is taking place on 16.03.18; 88 winners of gift $50 will be defined one at a time every 60 minutes starting from 12:00. </span><br>
																		The prize money will be put into their trading accounts and may be used in trading or withdrawn with no limits.
																		The server time GMT +8 indicated in the schedule corresponds to the time indicated in the trading platform.
										</li>
										<li>
												The winners are defined in accordance with the schedule above and a transparent algorithm which forms a winner's number.<br>

																		A winner’s number is formed on the basis of Ask prices for 5 currency pairs on the EZYFX-Live Server<br>

																		<span>Say, A winner’s number – E,Z,Y,F,X where:</span><br>

																		<span>&mdash; E</span> is the last digit in the EURUSD Ask price<br>

																		<span>&mdash; Z</span> is the last digit in the GBPUSD Ask price<br>

																		<span>&mdash; Y</span> is the last digit in the USDJPY Ask price<br>

																		<span>&mdash; F</span> is the last digit in the GBPJPY Ask price<br>

																		<span>&mdash; X</span> is the last digit in the XAUUSD Ask price<br>

																		A winner is an account whose unique number fully coincides with a winner's number generated according to the schedule.
										</li>
										<li>
												In case an account whose unique number coincides with a generated winner’s number cannot claim the prize under these conditions, the next or the previous participant will be recognized as the winner. The next winner will be the participant with a higher deposit made during the promotion period.
										</li>
										<li>
												Those participants who withdraw the registration deposit partially or in full before the drawing process has started cannot win a prize under Chinese New Year 2018 Special Offer.
										</li>
										<li>
												The participating accounts in which no trading activity has been registered during Chinese New Year 2018 Special Offer cannot claim a prize.
										</li>
										<li>
												Every winner is held responsible for paying taxes or any other fees related to using a prize under applicable legislation.
										</li>
										<li>
												The Organizer has the right to refuse a prize without giving explanations if there is a suspicion of rules violation or if the winner has refused to verify his profile and provide additional information regarding his identity. 
										</li>
										<li>
												The company’s representatives and staff as well as their relatives are not allowed to participate in the contest.
										</li>
										<li>
												Any claims arising in connection with this contest shall be examined according to the provisions of EZYFX’s. Any situation which is not mentioned in the company’s regulatory documents shall be sorted out by means of negotiations between the parties. A final decision shall be made by the organizer of the contest - EZYFX - and shall not be subject to any revisions.
										</li>
										<li>
												By participating in the promotion, a participant fully accepts its conditions and rules.
										</li>
										<li>
												EZYFX has the right to amend the contest terms at any time without special notification.
										</li>
										<li>
												EZYFX reserves the right to use the information related to the winning accounts for advertising purposes and publish it in any sources of information. The winners are invited to participate in EZYFX’s advertising and marketing actions such as interviews, photo- and video-reports, and press releases concerning the contest. At the same time EZYFX commits itself not to divulge a winner’s private information (including name and surname) without his/her consent. Should a winner refuse to participate in these actions, EZYFX reserves the right to change the list of winners.
										</li>
								</ol>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="example2-tab3">
								<h4 class="text-center">
										Winners
								</h4>
				</div>
		</div>

		</section>

		<footer>
				<div class="footer-icons">
						<div class="container">
								<div class="row">
										<div class="col-md-12">
												<div class="col-md-3">
														<div class="mt4 footer-links">
																<ul>
																		<li style="height: 92px;">
																				<a href="https://www.ezyfx.la/deposit-my-account.php">
																						<i class="fa fa-usd"></i><span>Make a Deposit</span>
																				</a>
																		</li>
																</ul>
														</div>
												</div>
												<div class="col-md-3">
														<div class="mt4 footer-links">
																<ul>
																		<li>
																				<a href="https://www.ezyfx.la/downloads/EzyFx-MT4.zip" target="_blank">
																						<i class="fa fa-download"></i><span>Download Trading Platform</span>
																				</a>
																		</li>
																</ul>
														</div>
												</div>
												<div class="col-md-3">
														<div class="mt4 footer-links">
																<ul>
																		<li>
																				<a href="https://www.ezyfx.la/register.php" target="_blank">
																						<i class="fa fa-money"></i><span>Open An Account With Us</span>
																				</a>
																		</li>
																</ul>
														</div>
												</div>
												<div class="col-md-3">
														<div class="mt4 footer-links">
																<ul>
																		<li>
																				<a href="https://www.ezyfx.la/partner-with-us.php" target="_blank">
																						<i class="fa fa-handshake-o"></i><span>Become An EZYFX Partner</span>
																				</a>
																		</li>
																</ul>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>



				<section class="extra-footer">
					<div class="container-fluid text-center">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<a href="https://www.ezyfx.la/payment-options.php"><img src="images/footer/banktransfer.png" alt=""></a>
									<a href="https://www.ezyfx.la/payment-options.php"><img src="images/footer/visa.png" alt=""></a>
									<a href="https://www.ezyfx.la/payment-options.php"><img src="images/footer/mastercard.png" alt=""></a>
									<a href="https://www.ezyfx.la/payment-options.php"><img src="images/footer/skrill.png" alt=""></a>
									<a href="https://www.ezyfx.la/payment-options.php"><img src="images/footer/bitcoin.png" alt=""></a>
									<a href="https://www.ezyfx.la/payment-options.php"><img src="images/footer/unionpay.png" alt=""></a>
									<a href="https://www.ezyfx.la/payment-options.php"><img src="images/footer/neteller.png" alt=""></a>
									<a href="https://www.ezyfx.la/payment-options.php"><img src="images/footer/mt.png" alt=""></a>
									<a href="https://www.ezyfx.la/payment-options.php"><img src="images/footer/localpay.jpg" alt=""></a>
								</div>

							</div>
						</div>
					</div>
				</section>


				<section class="footer-nav">
						<div class="container">
								<div class="row">
										<div class="col-md-12">
												<div class="col-md-4">

														<ul>
																<h6>About</h6>
																<div class="small-line">
																</div>
																<li><a href="/">Home</a></li>
																<li><a href="https://www.ezyfx.la/about.php">About Us</a></li>
																<li><a href="https://www.ezyfx.la/safety-and-more.php">Safety &amp; Security</a></li>
																<li><a href="https://www.ezyfx.la/regulations.php">License &amp; Registration</a></li>
																<li><a href="https://www.ezyfx.la/contact-us.php">Support</a></li>
																<li><a href="https://www.ezyfx.la/careers.php">Careers</a></li>
														</ul>
												</div>
												<div class="col-md-4">

														<ul>
																<h6>Account</h6>
																<div class="small-line">
																</div>
																<li><a href="https://www.ezyfx.la/trading-accounts.php">Accounts</a></li>
																<li><a href="https://www.ezyfx.la/deposit-my-account.php">Deposit</a></li>
																<li><a href="https://secure.ezyfx.la/open-live-account" target="_blank">Register (Live)</a></li>
																<li><a href="https://secure.ezyfx.la/open-demo-account" target="_blank">Register (Demo)</a></li>
																<li><a href="https://secure.ezyfx.la/login" target="_blank">Log In</a></li>
																<li><a href="https://secure.ezyfx.la/login" target="_blank">My Account</a></li>
														</ul>
												</div>
												<div class="col-md-4">

														<ul>
																<h6>Trade</h6>
																<div class="small-line">
																</div>
																<li><a href="https://www.ezyfx.la/software-downloads.php">Platform Information</a></li>
																<li><a href="https://trade.mql5.com/trade?servers=EZYFX-Demo+Server%2cEZYFX-Live+7%2cEZYFX-Live+Server&trade_server=EZYFX-Demo Server&demo_server=EZYFX-Demo Server&startup_mode=open_demo&lang=en" target="_blank">Web Trader</a></li>
																<li><a href="https://www.ezyfx.la/downloads/EzyFx-MT4.zip" target="_blank">Download MetaTrader 4</a></li>
																<li><a href="https://www.ezyfx.la/legals.php">Legals</a></li>
														</ul>
												</div>
												
										</div>
								</div>
						</section>

						<section class="footer-end">
						<div class="container">
								<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12">
												<p>
														<a href="/" class="btn-link singleColor1">EZYFX</a> grants access to all the major trading platforms in the world. Our users may benefit from a brief Forex training course by opening a free demo account and learn the basic steps of managing their funds on the foreign exchange (FX) market.
												</p>

												<p><a id="ezyfxInfo" class="btn-link">Read More</a></p>

												<div id="moreInfo">
														<p>
																Trading with <a href="/" class="btn-link singleColor1">EZYFX Limited</a> is simple. We cooperate with some of the leading banks and payment processors worldwide that allow for 24-hour processing of all client trades on the FX market. Every user who has registered a live trading account with us gets direct access to the Forex Market (FX), Contracts for Differences (CFD), Indices and wide range of futures.
														</p>
														<p>
																Risk notice: CFD and FX trading on margin carry high levels of risk. Traders should ensure they understand the risks associated with leveraged CFD and FX trading before deciding to trade.
														</p>
														<p>
																Nevertheless <a href="/" class="btn-link singleColor1">EZYFX Limited</a>  guarantees the safety of traders’ monetary assets and protects them from non-trading risks. Although we cannot promise a profit on Forex, we provide our traders with some of the best trading conditions, including bonuses of up to 100% and regular special offers.
														</p>

														<p>
																<a href="/" class="btn-link singleColor1">EZYFX Limited</a> (17925) has its registered office: S.I.P. Building, P.O. Box 3010, Rue Pasteur, Port Vila, Vanuatu. We are committed to provide the best services which were based on the elements of friendly, reliable and profitable and is now being paid off as we are now in the process of being recognized by Vanuatu FSC as one of the Registered Financial Service Provider (FSP).
														</p>

												</div>

												<p>The services listed on this website are not available to residents of USA.</p>

												<a id="ezyfxInfo2" class="btn-link" style="font-size: 1.4em;">Read More</a>

												<div id="moreInfo2">
														<h6>
																High Risk Investment
														</h6>

														<p>
																Trading foreign exchange carries a high level of risk, and may not be suitable for all investors. The high degree of leverage can work against you as well as for you. Before deciding to trade foreign exchange you should carefully consider your investment objectives, level of experience, and risk appetite. The possibility exists that you could sustain a loss of some or all of your initial investment and therefore you should not invest money that you cannot afford to lose. You should be aware of all the risks associated with foreign exchange and seek advice from an independent financial advisor if you have any doubts
														</p>
												</div>

												<h6>
														Disclaimer
												</h6>

												<p style="text-transform: uppercase;">
														ALL ISSUES RELATES TO THIRD PARTY SERVICES INCLUDING WITHOUT LIMITATION ROBOTS, ALGO TRADING, SIGNALS AND SOFTWARE ARE PROVIDED BY A THIRD PARTY (AFFILIATE) AND THE PLATFORM DOES NOT ENDORSE ANY VENDORS OR HOLD ANY LIABILITY FOR ANY INCIDENTAL, CONSEQUENTIAL, DIRECT, INDIRECT, SPECIAL OR PUNITIVE DAMAGES (INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOSS OF BUSINESS, LOSS OF PROFITS OR LOSS OF USE) AND THE USE OF IT IS SUBJECT TO YOUR DISCRETION AND AT YOUR OWN RISK.
												</p>
												<hr>
												<div class="contactInfo">
														<h6>OPERATION HOUR</h6>

														<p><strong>Monday to Friday (GMT + 01:00am – 10:00am)</strong></p>

														<p><strong>Telephone number</strong>: +44 20309 71796</p>

														<p>This site is owned and operated by: <a href="/">EZYFX LIMITED</a></p>

														<p>Company Number: 17925</p>

														<p><strong>Address</strong>: S.I.P. Building, P.O Box 3010, Rue Pasteur,Port Vila, Vanuatu</p>
														<p id="socials">
														<a href="https://www.facebook.com/ezyfxlah" target="_blank"><i class="fa fa-facebook"></i> </a>
														<a href="https://twitter.com/ezyfxlah" target="_blank"><i class="fa fa-twitter"></i> </a>
														<a href="https://www.instagram.com/ezyfx/" target="_blank"><i class="fa fa-instagram"></i> </a>
														<a href="https://www.youtube.com/channel/UCS3gkaLhHyuSKboTnen8lYA" target="_blank"><i class="fa fa-youtube"></i> </a>
														</p>
												</div>
										</div>
								</div>
						</div>
				</section>

				<div class="trademark">
						<div class="container">
								<div class="row">
										<div class="col-xs-12 col-sm-12">
												<p>&copy; 2017 <a href="/">EZYFX Limited</a> &mdash; All Rights Reserved!</p>
										</div>
								</div>
						</div>
				</div>

		</footer>
		

		<!-- <footer>
				<div class="disclaimer">
						<div class="container">
								<p>
										Risk Warning: Trading on financial markets carries risks. Contracts for Difference (‘CFDs’) are complex financial products that are traded on margin. Trading CFDs carries a high level of risk since leverage can work both to your advantage and disadvantage. As a result, CFDs may not be suitable for all investors because you may lose all your invested capital. You should not risk more than you are prepared to lose. Before deciding to trade, you need to ensure that you understand the risks involved taking into account your investment objectives and level of experience. Click here for our full <a href="#">Risk Disclosure</a>.
								</p>
						</div>
				</div>
		</footer>
 -->

				<!-- jQuery -->
				<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
				<!-- Bootstrap JavaScript -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<script src="../cny2018/js/clipboard.min.js"></script>
				<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
				<script src="../cny2018/js/script.js"></script>
				<script>

					function validateAlpha(){
						$('#error-display').hide();
						$('#title').keypress(function (e) {
						var regex = new RegExp("^[a-zA-Z0-9. ]+$");
						var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
						if (regex.test(str)) {
								return true;
						}

						e.preventDefault();
						return false;
						});
					}

					var clipboard = new Clipboard('.cny-btn');

			    clipboard.on('success', function(e) {
			        console.log(e);
			    });

			    clipboard.on('error', function(e) {
			        console.log(e);
			    });
			</script>
	</body>
</html>
<?php
}
?>