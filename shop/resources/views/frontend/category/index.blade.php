@extends('layouts.app_frontend')
@section('title','Danh mục')
@section('content')
<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">Danh mục</h1>
						<div class="noo-page-breadcrumb eff">
							<a href="index.html" class="home">Organici</a>/<span>Shop List</span>
						</div>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce noo-shop-main">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-9">
								<div class="noo-catalog">
									<p class="commerce-result-count">Showing 1&ndash;9 of 18 results</p>
									<div class="product-style-control pull-right">
										<span class="noo-list active"><i class="fa fa-th-list"></i></span>
										<span class="noo-grid"><a href="shop.html"><i class="fa fa-th-large"></i></a></span>
									</div>
									<form class="commerce-ordering">
										<select name="orderby" class="orderby">
											<option value="" selected='selected'>Default sorting</option>
											<option value="">Sort by popularity</option>
											<option value="">Sort by average rating</option>
											<option value="">Sort by newness</option>
											<option value="">Sort by price: low to high</option>
										</select>
									</form>
								</div>
								<div class="products row product-list">
                                    @foreach($products as $product)
                                        @include('frontend.components._inc_product_item',['item' => $product])
                                    @endforeach
								</div>
								<div class="d-flex justify-content-center">
    								{{ $products->onEachSide(1)->links() }}
                                </div>
							</div>
							<div class="noo-sidebar col-md-3">
								<div class="noo-sidebar-wrap">
									<div class="widget commerce widget_product_search">
										<h3 class="widget-title">Search</h3>
										<form class="commerce-product-search">
											<input type="search" id="commerce-product-search-field" class="search-field" placeholder="Search Products&hellip;" value="" name="s"/>
											<input type="submit" value="Search"/>
										</form>
									</div>
									<div class="widget commerce widget_product_categories">
										<h3 class="widget-title">Categories</h3>
										<ul class="product-categories">
                                            <li><a href="{{ route('get.product') }}">Tất cả</a></li>
                                            @foreach($categoriesGlobal as $item)
											<li><a href="{{ route('get.category', $item->c_slug) }}" class="nav-link {{ Request::segment(2) == $item -> c_slug ? 'active' : '' }}">{{ $item->c_name }}</a></li>
                                            @endforeach
										</ul>
									</div>

									<div class="widget commerce widget_products">
										<h3 class="widget-title">Popular products</h3>
										<ul class="product_list_widget">
											<li>
												<a href="shop-detail.html">
													<img width="100" height="100" src="images/product/thumb/product_1.png" alt="" />
													<span class="product-title">French Bread</span>
												</a>
												<span class="amount">&#36;10.00</span>
											</li>
											<li>
												<a href="shop-detail.html">
													<img width="100" height="100" src="images/product/thumb/product_2.png" alt="" />
													<span class="product-title">Cookie</span>
												</a>
												<span class="amount">&#36;15.00</span>
											</li>
											<li>
												<a href="shop-detail.html">
													<img width="100" height="100" src="images/product/thumb/product_3.png" alt="" />
													<span class="product-title">Brown Bread</span>
												</a>
												<span class="amount">&#36;12.00</span>
											</li>
											<li>
												<a href="shop-detail.html">
													<img width="100" height="100" src="images/product/thumb/product_6.png" alt="" />
													<span class="product-title">Apples</span>
												</a>
												<span class="amount">&#36;3.95</span>
											</li>
											<li>
												<a href="shop-detail.html">
													<img width="100" height="100" src="images/product/thumb/product_7.png" alt="" />
													<span class="product-title">Pomegranates</span>
												</a>
												<span class="amount">&#36;3.90</span>
											</li>
										</ul>
									</div>
									<div class="widget commerce widget_product_tag_cloud">
										<h3 class="widget-title">Keywords</h3>
										<div class="tagcloud">
											<a href="#">apple</a>
											<a href="#">bread</a>
											<a href="#">broccoli</a>
											<a href="#">brown bread</a>
											<a href="#">carrot</a>
											<a href="#">celery</a>
											<a href="#">cookie</a>
											<a href="#">cucumbers</a>
											<a href="#">detox juicing</a>
											<a href="#">french bread</a>
											<a href="#">fruits</a>
											<a href="#">green apple</a>
											<a href="#">lemon</a>
											<a href="#">lime</a>
											<a href="#">mango</a>
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
