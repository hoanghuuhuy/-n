<article class="hentry">
    <div class="blog-item">
        <div class="content-featured">
            <div class="blog-thumbnail">
                <a class="content-thumb" href="{{ route('get.article_detail', ['slug' => $item -> a_slug]) }}" title="{{ $item->a_name }}">
                    <img width="740" height="440" src="{{ pare_url_file($item->a_avatar) }}" alt="{{ $item->a_name }}" >
                </a>
            </div>
        </div>
        <div class="blog-description">
            <span class="cat">
                <a href="#">Đặc sản 3 miền</a>/<a href="#" title="{{ $item->menu->mn_name ?? '' }}">{{ $item->menu->mn_name ?? ''  }}</a>
            </span>
            <h2 class= "shorten"><a href="{{ route('get.article_detail', ['slug' => $item -> a_slug]) }}" title="{{ $item->a_name }}">{{ $item->a_name }}</a></h2>
            <span class="meta">
                {{ $item->created_at }}
            </span>
            <div class="blog_excerpt shorten">
                <p>
                    {{ $item->a_description }}
                </p>
                <a href="blog-detail.html" class="view-more"><span>View more</span></a>
            </div>
            <div class="content-meta">
                <div class="content-tags">
                    <span class="fa fa-tag"></span>
                    <a href="#">organic food</a>, <a href="#">organic gardening</a>, <a href="#">organic living</a>
                </div>
                <div class="single-social">
                    <span class="text-share">
                        <span class="fa fa-share-alt"></span>Share this post
                    </span>
                    <div class="content-share">
                        <div class="noo-social social-share">
                            <a href="#share" class="noo-share" title="Share on Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#share" class="noo-share" title="Share on Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#share" class="noo-share" title="Share on Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#share" class="noo-share" title="Share on Pinterest">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
