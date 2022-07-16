@extends('layouts.app_frontend')
@section('title','Bài viết')
@section('content')
<section class="noo-page-heading eff heading-6">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">Blog</h1>
						<div class="noo-page-breadcrumb eff">
							<a href="index.html" class="home">Organici</a>/<span>Blog</span>
						</div>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="blog noo-shop-main">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-9">
								@foreach($articles as $article)
									@include('frontend.components._inc_article_item',['item' => $article])
								@endforeach
								<div class="d-flex justify-content-center">
									{{ $articles->onEachSide(1)->links() }}
								</div>
							</div>
							<div class="noo-sidebar col-md-3">
								<div class="noo-sidebar-wrap">
									<div class="widget widget_search">
										<h3 class="widget-title">Search</h3>
										<form>
											<input type="search" class="search-field" placeholder="Search&hellip;" value="" name="s"/>
											<input type="submit" value="Search"/>
										</form>
									</div>
									<div class="widget widget_categories">
										<h3 class="widget-title">Menus</h3>
										<ul>
                                            <li><a href="{{ route('get.article') }}">Tất cả</a></li>
                                            @foreach($menus ?? [] as $item)
											<li><a href="{{ route('get.menu',['slug'=>$item->mn_slug]) }}" title="{{ $item->mn_name }}" class="nav-link {{ Request::segment(2) == $item -> c_slug ? 'active' : '' }}">{{ $item->mn_name }}</a> <span class="count">{{ $item->articles_count }}</span></li>
										    @endforeach
                                        </ul>
									</div>
									<div class="widget widget_recent_entries">
										<h3 class="widget-title">Bài viết mới nhất</h3>
										@foreach($articlesLatest ?? [] as $item)
										<ul class="post_list_widget">
											<li>
												<a href="{{ route('get.article_detail',['slug' => $item->a_slug]) }}" title="{{ $item->a_name }}">
													<span class="post-thumb" data-bg="{{ pare_url_file($item->a_avatar) }}"></span>
													<span class="post-title shorten" style="max-width: 20ch; width:100px">{{ $item->a_name }}</span>
													<span class="post-date">{{ $item->created_at }}</span>
												</a>
											</li>
										</ul>
										@endforeach
									</div>
									<div class="widget widget_tag_cloud">
										<h3 class="widget-title">Tags</h3>
										<div class="tagcloud">
										@foreach($tags ?? [] as $item)
											<a href="{{ route('get.tag',['slug' => $item -> t_slug]) }}" title="{{ $item->t_name }}">{{ $item->t_name }}</a>
										@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="noo-footer-shop-now">
					<div class="container">
						<div class="col-md-7">
							<h4>- Every day fresh -</h4>
							<h3>organic food</h3>
						</div>
						<img src="images/organici-love-me.png" class="noo-image-footer" alt="" />
					</div>
				</div>
			</div>
@stop
