
<!DOCTYPE html>
<html lang="en">

<head>
	@include('layout.head')

</head>

<body>
	<!-- HEADER -->
	@include('layout.header')
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			 <!-- row -->
			 <div id="hot-post" class="row hot-post">
				<!-- Cột lớn col-md-8 -->
				<div class="col-md-8 hot-post-left">
					@if (isset($posts[0]))
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/blog-post/{{$posts[0]->id}}-{{$posts[0]->title}}"><img src="{{ $posts[0]->thumb }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								@foreach ($posts[0]->categories as $category)
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
								@endforeach
							</div>                
							<h3 class="post-title title-lg"><a href="/blog-post/{{$posts[0]->id}}-{{$posts[0]->title}}">{{ $posts[0]->title }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{ $posts[0]->author->name }}</a></li>
								<li class="post-author">{{ $posts[0]->created_at->format('d F Y') }}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					@endif
				</div>        
		
				<!-- Cột nhỏ col-md-4 -->
				<div class="col-md-4 hot-post-right">
					@if (isset($posts[1]))
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/blog-post/{{$posts[1]->id}}-{{$posts[1]->title}}"><img src="{{ $posts[1]->thumb }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								@foreach ($posts[1]->categories as $category)
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
								@endforeach
							</div>
							<h3 class="post-title"><a href="/blog-post/{{$posts[1]->id}}-{{$posts[1]->title}}">{{ $posts[1]->title }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{ $posts[1]->author->name }}</a></li>
								<li class="post-author">{{ $posts[1]->created_at->format('d F Y') }}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					@endif
		
					@if (isset($posts[2]))
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/blog-post/{{$posts[2]->id}}-{{$posts[2]->title}}"><img src="{{ $posts[2]->thumb }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								@foreach ($posts[2]->categories as $category)
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
								@endforeach
							</div>
							<h3 class="post-title"><a href="/blog-post/{{$posts[2]->id}}-{{$posts[2]->title}}">{{ $posts[2]->title }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{ $posts[2]->author->name }}</a></li>
								<li class="post-author">{{ $posts[2]->created_at->format('d F Y') }}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					@endif
				</div>
			</div>
			<!-- /row -->
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
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($recentPosts as $post)
						<div class="col-md-12">
							<div class="post">
								<a class="post-img" href="/blog-post/{{$post->id}}-{{$post->title}}"><img src="{{$post->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										@foreach ($post->categories as $category)
										<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{$category->name}}</a>
										@endforeach
									</div>
									<h3 class="post-title"><a href="/blog-post/{{$post->id}}-{{$post->title}}">{{$post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$post->author->name}}</a></li>
										<li>{{$post->created_at->format('d F Y')}}</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="clearfix visible-md visible-lg"></div>
						@endforeach
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Lifestyle</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($postLifeStyle as $post)	
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="/blog-post/{{$post->id}}-{{$post->title}}"><img src="{{$post->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										@foreach ($post->categories as $category)
										<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{$category->name}}</a>
										@endforeach
									</div>
									<h3 class="post-title title-sm"><a href="/blog-post/{{$post->id}}-{{$post->title}}">{{$post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$post->author->name}}</a></li>
										<li>{{$post->created_at->format('d F Y')}}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						<!-- /post -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Fashion & Travel</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($postFashionAndTravel as $post)
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="/blog-post/{{$post->id}}-{{$post->title}}"><img src="{{$post->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										@foreach ($post->categories as $category)
										<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{$category->name}}</a>
										@endforeach
									</div>
									<h3 class="post-title title-sm"><a href="/blog-post/{{$post->id}}-{{$post->title}}">{{$post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$post->author->name}}</a></li>
										<li>{{$post->created_at->format('d F Y')}}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						
						<!-- /post -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Technology & Health</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($postTechAndHealthy as $post)
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="/blog-post/{{$post->id}}-{{$post->title}}"><img src="{{$post->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										@foreach ($post->categories as $category)
										<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{$category->name}}</a>
										@endforeach
									</div>
									<h3 class="post-title title-sm"><a href="/blog-post/{{$post->id}}-{{$post->title}}">{{$post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$post->author->name}}</a></li>
										<li>{{$post->created_at->format('d F Y')}}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
					
						<!-- /post -->

					</div>
					<!-- /row -->
				</div>
				@include('layout.sidebar')
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
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="/templates/img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
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
						<h2 class="title">Lifestyle</h2>
					</div>
					<!-- post -->
					@if (isset($postLifeStyle[0]))
					<div class="post">
						<a class="post-img" href="/blog-post/{{$postLifeStyle[0]->id}}-{{$postLifeStyle[0]->title}}"><img src="{{$postLifeStyle[0]->thumb}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								@foreach ($postLifeStyle[0]->categories as $category)
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
								@endforeach
							</div>
							<h3 class="post-title"><a href="/blog-post/{{$postLifeStyle[0]->id}}-{{$postLifeStyle[0]->title}}">{{$postLifeStyle[0]->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$postLifeStyle[0]->author->name}}</a></li>
								<li>{{$postLifeStyle[0]->created_at->format('d F Y')}}</li>
							</ul>
						</div>
					</div>
					@endif
				
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Fashion</h2>
					</div>
					<!-- post -->
					@if (isset($postFashion[0]))
					<div class="post">
						<a class="post-img" href="/blog-post/{{$postFashion[0]->id}}-{{$postFashion[0]->title}}"><img src="{{$postFashion[0]->thumb}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								@foreach ($postFashion[0]->categories as $category)
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
								@endforeach
							</div>
							<h3 class="post-title"><a href="/blog-post/{{$postFashion[0]->id}}-{{$postFashion[0]->title}}">{{$postFashion[0]->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$postFashion[0]->author->name}}</a></li>
								<li>{{$postFashion[0]->created_at->format('d F Y')}}</li>
							</ul>
						</div>
					</div>
					@endif
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Health</h2>
					</div>
					<!-- post -->
					@if (isset($postHealthy[0]))
					<div class="post">
						<a class="post-img" href="/blog-post/{{$postHealthy[0]->id}}-{{$postHealthy[0]->title}}"><img src="{{$postHealthy[0]->thumb}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								@foreach ($postHealthy[0]->categories as $category)
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
								@endforeach
							</div>
							<h3 class="post-title"><a href="/blog-post/{{$postHealthy[0]->id}}-{{$postHealthy[0]->title}}">{{$postHealthy[0]->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$postHealthy[0]->author->name}}</a></li>
								<li>{{$postHealthy[0]->created_at->format('d F Y')}}</li>
							</ul>
						</div>
					</div>
					@endif
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<!-- post -->
					@foreach ($postLifeStyle as $index => $post)		
						@if ($index > 0) <!-- Bỏ qua phần tử đầu tiên -->
							<div class="post post-widget">
								<a class="post-img" href="/blog-post/{{$post->id}}-{{$post->title}}"><img src="{{$post->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										@foreach ($post->categories as $category)
										<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
										@endforeach
									</div>
									<h3 class="post-title"><a href="/blog-post/{{$post->id}}-{{$post->title}}">{{$post->title}}</a></h3>
								</div>
							</div>		
						@endif
					@endforeach
				
					<!-- /post -->

				</div>
				<div class="col-md-4">
					<!-- post -->
					@foreach ($postFashion as $index => $post)		
						@if ($index > 0) <!-- Bỏ qua phần tử đầu tiên -->
							<div class="post post-widget">
								<a class="post-img" href="/blog-post/{{$post->id}}-{{$post->title}}"><img src="{{$post->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										@foreach ($post->categories as $category)
										<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
										@endforeach
									</div>
									<h3 class="post-title"><a href="/blog-post/{{$post->id}}-{{$post->title}}">{{$post->title}}</a></h3>
								</div>
							</div>		
						@endif
					@endforeach
					<!-- /post -->

				</div>
				<div class="col-md-4">
				<!-- post -->
				@foreach ($postHealthy as $index => $post)		
				@if ($index > 0) <!-- Bỏ qua phần tử đầu tiên -->
					<div class="post post-widget">
						<a class="post-img" href="/blog-post/{{$post->id}}-{{$post->title}}"><img src="{{$post->thumb}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								@foreach ($post->categories as $category)
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
								@endforeach
							</div>
							<h3 class="post-title"><a href="/blog-post/{{$post->id}}-{{$post->title}}">{{$post->title}}</a></h3>
						</div>
					</div>		
				@endif
			@endforeach
			<!-- /post -->

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
					@foreach ($posts as $post)
					<div class="post post-row">
						<a class="post-img" href="/blog-post/{{$post->id}}-{{$post->title}}"><img src="{{$post->thumb}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								@foreach ($post->categories as $category)
									<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
								@endforeach
							</div>
							<h3 class="post-title"><a href="/blog-post/{{$post->id}}-{{$post->title}}">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$post->author->name}}</a></li>
								<li>{{$post->created_at->format('d F Y')}}</li>
							</ul>
							<p>{{$post->description}}</p>
						</div>
					</div>
					@endforeach
					<!-- /post -->
					

					<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
					</div>
				</div>
				<div class="col-md-4">
					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								<li><a href="#"><img src="/templates/img/galery-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="/templates/img/galery-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="/templates/img/galery-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="/templates/img/galery-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="/templates/img/galery-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="/templates/img/galery-6.jpg" alt=""></a></li>
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="/templates/img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
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
