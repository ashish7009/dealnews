@extends('layouts.app')
@section('content')
<div class="banner-section">
 <div class="container">
    <section class="regular slider">
       <div>
          <img src="{{asset('assets/images/product01.webp')}}">
          <div class="caption-part">
             <h5>Overstock Items at Amazon: <span class="price">Up to 50% off</span>  </h5>
          </div>
       </div>
       <div>
          <img src="{{asset('assets/images/product02.webp')}}">
          <div class="caption-part">
             <h5>Overstock Items at Amazon: <span class="price">Up to 50% off</span>  </h5>
          </div>
       </div>
       <div>
          <img src="{{asset('assets/images/product03.webp')}}">
          <div class="caption-part">
             <h5>Overstock Items at Amazon: <span class="price">Up to 50% off</span>  </h5>
          </div>
       </div>
       <div>
          <img src="{{asset('assets/images/product04.webp')}}">
          <div class="caption-part">
             <h5>Overstock Items at Amazon: <span class="price">Up to 50% off</span>  </h5>
          </div>
       </div>
       <div>
          <img src="{{asset('assets/images/product05.webp')}}">
          <div class="caption-part">
             <h5>Overstock Items at Amazon: <span class="price">Up to 50% off</span>  </h5>
          </div>
       </div>
       <div>
          <img src="{{asset('assets/images/product01.webp')}}">
          <div class="caption-part">
             <h5>Overstock Items at Amazon: <span class="price">Up to 50% off</span>  </h5>
          </div>
       </div>
    </section>
 </div>
</div>
<div class="list-views">
 <div class="container">
    <ul class="nav nav-pills">
       <li class="active"><a data-toggle="pill" href="#grid"><i class="fa fa-th" aria-hidden="true"></i></a></li>
       <li><a data-toggle="pill" href="#list"><i class="fa fa-list" aria-hidden="true"></i></a></li>
    </ul>
 </div>
</div>
<section class="products">
 <div class="container">
    <div class="tab-content">
       <div id="grid" class="tab-pane fade in active">
          <div class="products-header">
             <h4>Scraping Deals</h4>
             <div class="select-field">
                <select>
                   <option value="1">Most Recent</option>
                   <option value="2">Another option</option>
                   <option value="3" disabled>A disabled option</option>
                   <option value="4">Potato</option>
                </select>
             </div>
          </div>
          <div class="products-body">
             <ul class="scraping">
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product05.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product03.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product01.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product02.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
             </ul>
          </div>
          <div class="products-header sponsor-deals">
             <h4>Sponsor Deals</h4>
             <div class="select-field">
                <select>
                   <option value="1">Most Recent</option>
                   <option value="2">Another option</option>
                   <option value="3" disabled>A disabled option</option>
                   <option value="4">Potato</option>
                </select>
             </div>
          </div>
          <div class="products-body">
             <ul class="sponsor">
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product05.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product03.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product01.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product02.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
             </ul>
          </div>
       </div>
       <div id="list" class="tab-pane fade in active">
          <div class="products-header">
             <h4>Scraping Deals1</h4>
             <div class="select-field">
                <select>
                   <option value="1">Most Recent</option>
                   <option value="2">Another option</option>
                   <option value="3" disabled>A disabled option</option>
                   <option value="4">Potato</option>
                </select>
             </div>
          </div>
          <div class="products-body">
             <ul>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product05.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product03.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product01.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>TP-Link Deco M9 Plus Smart Hub & Whole Home Mesh WiFi System</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product02.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
             </ul>
          </div>
          <div class="products-header sponsor-deals">
             <h4>Sponsor Deals</h4>
             <div class="select-field">
                <select>
                   <option value="1">Most Recent</option>
                   <option value="2">Another option</option>
                   <option value="3" disabled>A disabled option</option>
                   <option value="4">Potato</option>
                </select>
             </div>
          </div>
          <div class="products-body">
             <ul>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product05.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product03.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product01.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
                <li>
                   <div class="products-body-left">
                      <img src="{{asset('assets/images/product02.webp')}}">
                   </div>
                   <div class="products-body-right">
                      <h5>Plush 15-lb. Weighted Blanket</h5>
                      <div class="rating">
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                         <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <div class="price">
                         <h3>$90</h3>
                      </div>
                      <button onClick="parent.location='product-detail.html'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now </button>
                      <div class="discription">
                         A DealNews exclusive! Tanga offers this Plush 15-lb. Weighted Blanket in Grey or Blue for $99.99. Coupon code "DEALNEWS" drops it to $89.99. With free shipping, that's the lowest price we could find by $14. It's machine-washable and measures 48" x 72".
                      </div>
                   </div>
                </li>
             </ul>
          </div>
       </div>
    </div>
</div>
</div></section>
@endsection