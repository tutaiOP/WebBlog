
<!DOCTYPE html>
<html lang="en">
<head>
	@include('layout.head')
</head>

<body>
	<!-- HEADER -->
	@include('layout.header')
	<!-- /HEADER -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post share -->
					<div class="section-row">
						<div class="post-share">
							<a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
							<a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
							<a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
							<a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
						</div>
					</div>
					<!-- /post share -->

					<!-- post content -->
					<div class="section-row">
						<h3>{{$blogpost->title}}</h3>
						{!! $blogpost->content !!}

					</div>
					<!-- /post content -->

					<!-- post tags -->
					<div class="section-row">
						<div class="post-tags">
							<ul>
								<li>TAGS:</li>
								@foreach ($blogpost->tags as $tag)
								<li><a href="#">{{$tag->name}}</a></li>
								@endforeach

							</ul>
						</div>
					</div>
					<!-- /post tags -->

					<!-- post nav -->
					<div class="section-row">
						<div class="post-nav">
							<div class="prev-post">
								<a class="post-img" href="blog-post.html"><img src="/templates/img/widget-8.jpg" alt=""></a>
								<h3 class="post-title"><a href="#">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
								<span>Previous post</span>
							</div>

							<div class="next-post">
								<a class="post-img" href="blog-post.html"><img src="/templates/img/widget-10.jpg" alt=""></a>
								<h3 class="post-title"><a href="#">Postea senserit id eos, vivendo periculis ei qui</a></h3>
								<span>Next post</span>
							</div>
						</div>
					</div>
					<!-- /post nav  -->

					<!-- post author -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">About <a href="author.html">{{$blogpost->author->name}}</a></h3>
						</div>
						<div class="author media">
							<div class="media-left">
								<a href="author.html">
									<img class="author-img media-object" src="/templates/img/avatar-1.jpg" alt="">
								</a>
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="author-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post author -->

					<!-- /related post -->
					<div>
						<div class="section-title">
							<h3 class="title">Related Posts</h3>
						</div>
						<div class="row">
							<!-- post -->
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="blog-post.html"><img src="/templates/img/post-4.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="category.html">Health</a>
										</div>
										<h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
										<ul class="post-meta">
											<li><a href="author.html">John Doe</a></li>
											<li>20 April 2018</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /post -->

							<!-- post -->
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="blog-post.html"><img src="/templates/img/post-6.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="category.html">Fashion</a>
											<a href="category.html">Lifestyle</a>
										</div>
										<h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
										<ul class="post-meta">
											<li><a href="author.html">John Doe</a></li>
											<li>20 April 2018</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /post -->

							<!-- post -->
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="blog-post.html"><img src="/templates/img/post-7.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="category.html">Health</a>
											<a href="category.html">Lifestyle</a>
										</div>
										<h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
										<ul class="post-meta">
											<li><a href="author.html">John Doe</a></li>
											<li>20 April 2018</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /post -->
						</div>
					</div>
					<!-- /related post -->

					<!-- post comments -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">3 Comments</h3>
						</div>
						<div class="post-comments">
							<!-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="/templates/img/avatar-2.jpg" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h4>John Doe</h4>
										<span class="time">5 min ago</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<a href="#" class="reply">Reply</a>
									<!-- comment -->
									<div class="media media-author">
										<div class="media-left">
											<img class="media-object" src="/templates/img/avatar-1.jpg" alt="">
										</div>
										<div class="media-body">
											<div class="media-heading">
												<h4>John Doe</h4>
												<span class="time">5 min ago</span>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											<a href="#" class="reply">Reply</a>
										</div>
									</div>
									<!-- /comment -->
								</div>
							</div>
							<!-- /comment -->

							<!-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="/templates/img/avatar-3.jpg" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h4>John Doe</h4>
										<span class="time">5 min ago</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<a href="#" class="reply">Reply</a>
								</div>
							</div>
							<!-- /comment -->
						</div>
					</div>
					<!-- /post comments -->

					<!-- post reply -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">Leave a reply</h3>
						</div>
						<form class="post-reply">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="input" name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="text" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="text" name="website" placeholder="Website">
									</div>
								</div>
								<div class="col-md-12">
									<button class="primary-button">Submit</button>
								</div>

							</div>
						</form>
					</div>
					<!-- /post reply -->
				</div>
				@include('layout.sidebar')
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
	@include('layout.footer')

</body>

</html>
