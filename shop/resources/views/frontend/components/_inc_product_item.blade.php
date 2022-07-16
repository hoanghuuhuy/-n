
<div class="masonry-item noo-product-column col-md-4 col-sm-6 product">
    <div class="noo-product-inner">
        <div class="noo-product-thumbnail">
            <a href="#" title="{{ $item->pro_name }}">
                <img width="600" height="760" src="{{ pare_url_file($item->pro_avatar) }}" alt="{{ $item->pro_name }}"/>
            </a>
            <div class="noo-rating">
                <div class="star-rating">
                    <span style="width:0%"></span>
                </div>
            </div>
        </div>
        <div class="noo-product-title">
            <h3><a href="#" class = "shorten" style="margin-left:10px" title="{{ $item->pro_name }}">{{ $item->pro_name }}</a></h3>
            <span class="price"><span class="amount" style="margin-left:10px">{{ number_format($item->pro_price, 0, '', ',' ) }} đ</span></span>
            <div class="noo-product-excerpt">
                <p class = "shorten" style="margin-left:10px">{{ $item->pro_description }}</p>
            </div>
            <div class="noo-product-action">
                <div class="noo-action">
                    <a href="#" class="button product_type_simple add_to_cart_button" style="margin-left:10px">
                        <span>Thêm vào giỏ</span>
                    </a>
                    <div class="yith-wcwl-add-to-wishlist">
                        <div class="yith-wcwl-add-button">
                            <a href="#" class="add_to_wishlist"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
