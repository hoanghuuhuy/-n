@extends('layouts.app_frontend')
@section('content')
<section class="noo-page-heading eff heading-blog">
    <div class="container">
        <div class="noo-heading-content">
            <h1 class="page-title eff">Blog Detail</h1>
            <div class="noo-page-breadcrumb eff">
                <a href="index.html" class="home">Organici</a>/<span>Blog Detail</span>
            </div>
        </div>
    </div>
</section>
<div class="main">
    <div class="single noo-shop-main">
        <div class="container">
            <div class="row">
                <div class="noo-main col-md-9">
                    <article>
                        <div class="blog-item">
                            <div class="blog-description">
                                <span class="cat">
                                <a href="#">General</a>/<a href="#">Recipes</a> 
                                </span>
                                <h1 style="word-wrap: break-word">{{ $article->a_name }}</h1>
                                <span class="meta">
                                {{ $article->created_at }}
                                </span>
                            </div>
                            <div class="content-featured">
                                <div class="blog-thumbnail">
                                    <div class="content-thumb">
                                        <img width="740" height="440" src="{{ pare_url_file($article->a_avatar) }}" alt="{{ $article->a_name }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="blog_excerpt" style="word-wrap: break-word">
                                <p>{{ $article->a_description }}</p>
                                <p>&nbsp;</p>
                                {{ $article->a_content }}
                            </div>
                        </div>
                    </article>
                    <div class="content-meta">
                        <div class="content-tags">
                            <span class="fa fa-tag"></span>
                            <a href="#">fertiliser</a>, <a href="#">organic food</a>, <a href="#">tips</a> 
                        </div>
                    </div>
                    <nav class="post-navigation post-navigation-line">
                        <div class="prev-post">
                            <div class="bg-prev-post" style="background-image: url(images/blog/blog_4.jpg);"></div>
                            <i class="fa fa-long-arrow-left">&nbsp;</i>
                            <a href="#">Health Benefits of a Raw Food</a>
                        </div>
                        <div class="next-post">
                            <div class="bg-next-post" style="background-image: url(images/blog/blog_6.jpg);"></div>
                            <a href="#">Tips for Ripening your Fruit</a> 
                            <i class="fa fa-long-arrow-right">&nbsp;</i>
                        </div>
                    </nav>
                    <div id="comments" class="comments-area">
                        <h3 class="comments-title">Comments</h3>
                        <ol class="comments-list">
                            <li class="comment">
                                <div class="comment-wrap">
                                    <div class="comment-img">
                                        <img alt='' src='http://placehold.it/100x100' height='80' width='80' />
                                    </div>
                                    <article class="comment-block">
                                        <header class="comment-header">
                                            <cite class="comment-author">
                                            admin
                                            </cite>
                                            <div class="comment-meta">
                                                <span class="time">
                                                4 months ago
                                                </span>
                                            </div>
                                        </header>
                                        <div class="comment-content">
                                            <p>fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
                                        </div>
                                        <span class="comment-reply">
                                        <a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
                                        </span>
                                    </article>
                                </div>
                                <ol class="children">
                                    <li class="comment">
                                        <div class="comment-wrap">
                                            <div class="comment-img">
                                                <img alt='' src='http://placehold.it/100x100' height='80' width='80' />
                                            </div>
                                            <article class="comment-block">
                                                <header class="comment-header">
                                                    <cite class="comment-author">
                                                    admin
                                                    </cite>
                                                    <div class="comment-meta">
                                                        <span class="time">
                                                        4 months ago
                                                        </span>
                                                    </div>
                                                </header>
                                                <div class="comment-content">
                                                    <p>fSames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
                                                </div>
                                                <span class="comment-reply">
                                                <a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
                                                </span>
                                            </article>
                                        </div>
                                    </li>
                                    <!-- #comment-## -->
                                </ol>
                                <!-- .children -->
                            </li>
                            <!-- #comment-## -->
                            <li class="comment">
                                <div class="comment-wrap">
                                    <div class="comment-img">
                                        <img alt='' src='http://placehold.it/100x100' height='80' width='80' />
                                    </div>
                                    <article class="comment-block">
                                        <header class="comment-header">
                                            <cite class="comment-author">
                                            admin
                                            </cite>
                                            <div class="comment-meta">
                                                <span class="time">
                                                4 months ago
                                                </span>
                                            </div>
                                        </header>
                                        <div class="comment-content">
                                            <p>fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
                                        </div>
                                        <span class="comment-reply">
                                        <a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
                                        </span>
                                    </article>
                                </div>
                            </li>
                            <!-- #comment-## -->
                        </ol>
                        <!-- /.comments-list --> 
                        <div id="respond-wrap">
                            <div id="respond" class="comment-respond">
                                <h3 class="comment-reply-title">
                                    <span>Leave us a comment</span>
                                </h3>
                                <form class="comment-form">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="comment-form-author">
                                                <input id="author" name="author" type="text" placeholder="Name*" class="form-control" value="" size="30" />
                                            </div>
                                            <div class="comment-form-email">
                                                <input id="email" name="email" type="text" placeholder="Email*" class="form-control" value="" size="30" />
                                            </div>
                                            <div class="comment-form-website">
                                                <input id="url" name="url" type="text" placeholder="Website" class="form-control" value="" size="30"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="comment-form-comment">
                                                <textarea class="form-control" placeholder="Your Comment" id="comment" name="comment" cols="40" rows="6" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comments"/>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                            @foreach($menus ?? [] as $item) 
                                <ul> 
                                    <li><a href="{{ route('get.menu',['slug'=>$item->mn_slug]) }}" title="{{ $item->mn_name }}">{{ $item->mn_name }}</a> <span class="count">{{ $item->articles_count }}</span></li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="widget widget_recent_entries">
                            <h3 class="widget-title">Bài viết mới nhất</h3>
                                @foreach($articlesLatest ?? [] as $item)
                                <ul class="post_list_widget">
                                    <li>
                                        <a href="{{ route('get.article_detail',['slug' => $item->a_slug]) }}" title="{{ $item->a_name }}">
                                            <span class="post-thumb" data-bg="{{ pare_url_file($item->a_avatar) }}"></span>
                                            <span class="post-title shorten" style="max-width: 20ch; width:100px">{{ $item->a_name }}</span>
                                            <span class="post-date" >{{ $item->created_at }}</span>
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
