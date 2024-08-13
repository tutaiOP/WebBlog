
<!DOCTYPE html>
<html lang="en">

<head>
	@include('layout.head')

</head>

<body>
	<!-- HEADER -->
	@include('layout.header')
	<!-- /HEADER -->
	<!-- PAGE HEADER -->

    <!-- /PAGE HEADER -->
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-8">
					<!-- post -->
                      @if (isset($posts[0]))   
					<div class="post post-thumb">
						<a class="post-img" href="/blog-post/{{$posts[0]->id}}-{{$posts[0]->title}}"><img src="{{$posts[0]->thumb}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
                                @foreach ($posts[0]->categories as $category)
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
								@endforeach
							</div>
							<h3 class="post-title title-lg"><a href="/blog-post/{{$posts[0]->id}}-{{$posts[0]->title}}">{{$posts[0]->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$posts[0]->author->name}}</a></li>
								<li>{{ $posts[0]->created_at->format('d F Y') }}</li>
							</ul>
						</div>
                        @endif
					</div>
					<!-- /post -->

					<div class="row">
						<!-- post -->
						<div class="col-md-6">
                            @if (isset($posts[1]))   
							<div class="post">
								<a class="post-img" href="/blog-post/{{$posts[1]->id}}-{{$posts[1]->title}}"><img src="{{$posts[1]->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
                                        @foreach ($posts[1]->categories as $category)
                                        <a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
                                        @endforeach
									</div>
									<h3 class="post-title"><a href="/blog-post/{{$posts[1]->id}}-{{$posts[1]->title}}">{{$posts[1]->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$posts[1]->author->name}}</a></li>
										<li>{{$posts[1]->created_at->format('d F Y')}}</li>
									</ul>
								</div>
							</div>
                            @endif
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-6">
                            @if (isset($posts[2]))   
							<div class="post">
								<a class="post-img" href="/blog-post/{{$posts[2]->id}}-{{$posts[2]->title}}"><img src="{{$posts[2]->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
                                        @foreach ($posts[2]->categories as $category)
                                        <a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
                                        @endforeach
									</div>
									<h3 class="post-title"><a href="{{$posts[2]->id}}-{{$posts[2]->title}}">{{$posts[2]->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$posts[2]->author->name}}</a></li>
										<li>{{$posts[2]->created_at->format('d F Y')}}</li>
									</ul>
								</div>
							</div>
                            @endif
						</div>
						<!-- /post -->

						<div class="clearfix visible-md visible-lg"></div>

                        <!-- post -->
						<div class="col-md-6">
                            @if (isset($posts[3]))   
							<div class="post">
								<a class="post-img" href="{{$posts[3]->id}}-{{$posts[3]->title}}"><img src="{{$posts[3]->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
                                        @foreach ($posts[3]->categories as $category)
                                        <a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
                                        @endforeach
									</div>
									<h3 class="post-title"><a href="{{$posts[3]->id}}-{{$posts[3]->title}}">{{$posts[3]->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$posts[3]->author->name}}</a></li>
										<li>{{$posts[3]->created_at->format('d F Y')}}</li>
									</ul>
								</div>
							</div>
                            @endif
						</div>
						<!-- /post -->

                        <!-- post -->
						<div class="col-md-6">
                            @if (isset($posts[4]))   
							<div class="post">
								<a class="post-img" href="{{$posts[4]->id}}-{{$posts[4]->title}}"><img src="{{$posts[4]->thumb}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
                                        @foreach ($posts[4]->categories as $category)
                                        <a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">{{ $category->name }}</a>
                                        @endforeach
									</div>
									<h3 class="post-title"><a href="{{$posts[4]->id}}-{{$posts[4]->title}}">{{$posts[4]->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$posts[4]->author->name}}</a></li>
										<li>{{$posts[4]->created_at->format('d F Y')}}</li>
									</ul>
								</div>
							</div>
                            @endif
						</div>
						<!-- /post -->

					</div>

					
                    @foreach ($posts as $index => $post)
                        @if($index > 5 )
                    <!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{$post->id}}-{{$post->title}}"><img src="{{$post->thumb}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">Travel</a>
								<a href="/danh-muc/{{$category->id}}-{{$category->name}}.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{$post->id}}-{{$post->title}}">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$post->author->name}}</a></li>
								<li>{{$post->created_at->format('d F Y')}}</li>
							</ul>
							<p>{{$post->description}}</p>
						</div>
					</div>
					<!-- /post -->
                      @endif
                    @endforeach
                   


					<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
					</div>
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
