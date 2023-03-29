<x-head>
    <main class="main-content" id="MainContent" role="main" tabindex="-1">

        <div class="contents">


            <div class="main-container medium-up--three-quarters without-sidebar-main-container">

                <section id="shopify-section-template--15107348201524__main"
                         class="shopify-section product-section spaced-section">
                    <link
                        href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/cloud-zoom.css?v=125815945460830838071656133547"
                        rel="stylesheet" type="text/css" media="all">
                    <link
                        href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
                        rel="stylesheet" type="text/css" media="all">
                    <script
                        src="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/jquery.js?v=7110405980436279461656133570"
                        defer=""></script>
                    <script
                        src="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/cloud-zoom.1.0.2.min.js?v=154342357082638790291656133546"
                        defer=""></script>
                    <script
                        src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-9f517843f664ad329c689020fb1e45d03cac979f64b9eb1651ea32858b0ff452.js"
                        type="text/javascript"></script>

                    <link
                        href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/section-main-product.css?v=79427244571388747101658750396"
                        rel="stylesheet" type="text/css" media="all">
                    <link
                        href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-accordion.css?v=130516597265211004191656507170"
                        rel="stylesheet" type="text/css" media="all">
                    <link
                        href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-badge.css?v=178422458509255417231658223082"
                        rel="stylesheet" type="text/css" media="all">
                    <link
                        href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-price.css?v=44201472094399127451656494868"
                        rel="stylesheet" type="text/css" media="all">
                    <link
                        href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rte.css?v=24370899783461399961656422194"
                        rel="stylesheet" type="text/css" media="all">
                    <link
                        href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-slider.css?v=160588671735488219961658744308"
                        rel="stylesheet" type="text/css" media="all">

                    <link rel="stylesheet"
                          href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-cart-notification.css?v=160873855951260091311656418417"
                          media="all" onload="this.media='all'">
                    <link rel="stylesheet"
                          href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-deferred-media.css?v=40741356141559517761656133553"
                          media="all" onload="this.media='all'">
                    @foreach($prod as $prod)
                        <section class="page-width">
                            <div class="product grid grid--1-col grid--2-col-tablet">
                                <div class="grid__item product__media-wrapper">
                                    <slider-component class="slider-mobile-gutter">
                                        <ul class="product__media-list grid grid--peek list-unstyled slider slider--mobile"
                                            role="list">
                                            <li class="product__media-item grid__item slider__slide"
                                                data-media-id="template--15107348201524__main-21589661581364">


                                                <modal-opener
                                                    class="product__modal-opener product__modal-opener--image no-js-hidden"
                                                    data-modal="#ProductModal-template--15107348201524__main">



                                                                <?php
                                                                $a = json_decode($prod->photos);
                                                            foreach ($a as $fotos){
                                                                $split = explode(".png",
                                                                    $fotos);
                                                                ?>
                                                            <div id="wrap" style="top:0px;z-index:9;position:relative;">

                                                                    <img src="/product-photos/{{ $split[0] }}.png"
                                                                         loading="lazy" alt="" style="width: 100%; display: block;">

                                                                <div class="mousetrap"
                                                                     style="background-image: url(&quot;.&quot;); z-index: 999; position: absolute; width: 628px; height: 645px; left: 0px; top: 0px; cursor: move;"></div>
                                                            </div>

                                                                <?php
                                                            }
                                                                ?>

                                                </modal-opener>
                                            </li>
                                              </ul>

                                    </slider-component>
                                </div>
                                <div class="product__info-wrapper grid__item">
                                    <div id="ProductInfo-template--15107348201524__main"
                                         class="product__info-container product__info-container--sticky">
                                        <h1 class="product__title">
                                            {{ $prod->name }}
                                        </h1>
                                        <div class="price-product">
                                            <div class="product-price" id="price-template--15107348201524__main">
                                                <div class="price price--large">
                                                    <dl>
                                                        <div class="price__regular">
                                                            <dt>
                                                                <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                            </dt>
                                                            <dd>
        <span class="price-item price-item--regular">
          {{ $prod->price }}
        </span>
                                                            </dd>
                                                        </div>
                                                        <div class="price__sale">
                                                            <dt>
                                                                <span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                            </dt>
                                                            <dd>
        <span class="price-item price-item--sale">
          {{ $prod->price }}
        </span>
                                                            </dd>
                                                            <dt class="price__compare">
                                                                <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                            </dt>
                                                            <dd class="price__compare">
                                                                <s class="price-item price-item--regular">

                                                                </s>
                                                            </dd>
                                                        </div>
                                                        <small class="unit-price caption hidden">
                                                            <dt class="visually-hidden">Unit price</dt>
                                                            <dd>
                                                                <span></span>
                                                                <span aria-hidden="true">/</span>
                                                                <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                <span>
        </span>
                                                            </dd>
                                                        </small>
                                                    </dl>
                                                    <!--<span class="badge price__badge-sale color-accent-1" aria-hidden="true">
                                                          Sale
                                                        </span>

                                                        <span class="badge price__badge-sold-out color-" aria-hidden="true">
                                                          Sold out
                                                        </span>-->
                                                    <div class="product-card__badge price__badge-sale">

                                                        <span class="badge color-accent-1"
                                                              aria-hidden="true">save %</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<form method="post" action="/cart/add" id="product-form-installment" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="40357267636276">

                                        </form>-->
                                        <div class="product__description rte">
                                            {{ $prod->comment }}
                                        </div>
                                        <div class="product__type">
                                            <span class="product-type">Type</span>: tablet
                                        </div>
                                        <div class="product__type">
                                            <span class="product-vendor_name">Vendor</span>: Samsung
                                        </div>
                                        <div class="product__type">
                                            <span class="sku-name">Sku</span>: <span
                                                class="js-variant-sku">NHFL5-14</span>
                                        </div>

                                        <div class="product__type">
                                            <span class="availability">Availability</span>: <span
                                                class="js-variant-availability">In Stock</span>
                                        </div>
                                        <div class="product__type">
                                            <span class="tag-name">Tags</span>: <span> <a class="tag"
                                                                                          href="/search?q=Accessories">Accessories</a>,  <a
                                                    class="tag" href="/search?q=mobile">mobile</a>,  <a class="tag"
                                                                                                        href="/search?q=tech gadgets">tech gadgets</a>, </span>
                                        </div>
                                        <noscript>
                                            <div class="product-form__input hidden">
                                                <label class="form__label"
                                                       for="Variants-template--15107348201524__main">Product
                                                    variants</label>
                                                <div class="select">
                                                    <select name="id" id="Variants-template--15107348201524__main"
                                                            class="select__select" form="product-form">
                                                        <option
                                                            selected="selected"

                                                            value="40357267636276"
                                                        >
                                                            Default Title

                                                            - $250.00
                                                        </option>
                                                    </select>
                                                    <svg class="icon icon-caret" data-name="Layer 1"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 979.95 531.49">
                                                        <path
                                                            d="M22.14,246a40.74,40.74,0,0,0-.3,57.6l445.9,450a40.68,40.68,0,0,0,57.6.3c.2-.1.2-.3.4-.5.7-.6,1.6-.8,2.3-1.5L977.94,306a40.77,40.77,0,1,0-57.4-57.9l-423.3,419.5L79.74,246.24a40.83,40.83,0,0,0-57.6-.2Z"
                                                            transform="translate(-10.07 -234.26)"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </noscript>
                                        <div class="product-form__input product-form__quantity">
                                            <label class="form__label" for="Quantity-template--15107348201524__main">
                                                Quantity
                                            </label>
                                            <quantity-input class="quantity">
                                                <button class="quantity__button no-js-hidden" name="minus"
                                                        type="button">
                                                    <span class="visually-hidden">Decrease quantity for Silicone Watch Band for Apple Series SIX</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                         focusable="false" role="presentation" class="icon icon-minus"
                                                         fill="none" viewBox="0 0 10 2">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M.5 1C.5.7.7.5 1 .5h8a.5.5 0 110 1H1A.5.5 0 01.5 1z"
                                                              fill="currentColor">
                                                        </path>
                                                    </svg>

                                                </button>
                                                <input class="quantity__input" type="number" name="quantity"
                                                       id="Quantity-template--15107348201524__main" min="1" value="1"
                                                       form="product-form-template--15107348201524__main">
                                                <button class="quantity__button no-js-hidden" name="plus" type="button">
                                                    <span class="visually-hidden">Increase quantity for Silicone Watch Band for Apple Series SIX</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                         focusable="false" role="presentation" class="icon icon-plus"
                                                         fill="none" viewBox="0 0 10 10">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M1 4.51a.5.5 0 000 1h3.5l.01 3.5a.5.5 0 001-.01V5.5l3.5-.01a.5.5 0 00-.01-1H5.5L5.49.99a.5.5 0 00-1 .01v3.5l-3.5.01H1z"
                                                              fill="currentColor">
                                                        </path>
                                                    </svg>

                                                </button>
                                            </quantity-input>
                                        </div>
                                                <div class="product-form__buttons">
                                                    <button type="submit" name="add"
                                                            class="product-form__submit button button--secondary">Add to
                                                        cart
                                                    </button>

                                                </div>


                                        <link
                                            href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-pickup-availability.css?v=69300017035127205331656133558"
                                            rel="stylesheet" type="text/css" media="all">

                                        <script
                                            src="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/pickup-availability.js?v=33842032285521251971656133575"
                                            defer="defer"></script>
                                        <div class="product__accordion accordion">


                                        </div>

                                    </div>

                                </div>
                                <style data-shopify="">
                                    .cart-notification {
                                        display: none;
                                    }
                                </style>


                        </section>
                    @endforeach


                </section>
                <section id="shopify-section-template--15107348201524__product-recommendations"
                         class="shopify-section spaced-section">
                    <link rel="stylesheet"
                          href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-badge.css?v=178422458509255417231658223082"
                          media="all" onload="this.media='all'">
                    <link rel="stylesheet"
                          href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-card.css?v=176760420587347110931658223113"
                          media="all" onload="this.media='all'">
                    <link rel="stylesheet"
                          href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-price.css?v=44201472094399127451656494868"
                          media="all" onload="this.media='all'">
                    <link rel="stylesheet"
                          href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/section-product-recommendations.css?v=183007008161356703041658746305"
                          media="all" onload="this.media='all'">


                    <noscript>
                        <link
                            href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-badge.css?v=178422458509255417231658223082"
                            rel="stylesheet" type="text/css" media="all"/>
                    </noscript>
                    <noscript>
                        <link
                            href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-card.css?v=176760420587347110931658223113"
                            rel="stylesheet" type="text/css" media="all"/>
                    </noscript>
                    <noscript>
                        <link
                            href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-price.css?v=44201472094399127451656494868"
                            rel="stylesheet" type="text/css" media="all"/>
                    </noscript>
                    <noscript>
                        <link
                            href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/section-product-recommendations.css?v=183007008161356703041658746305"
                            rel="stylesheet" type="text/css" media="all"/>
                    </noscript>

                    <product-recommendations class="product-recommendations page-width product-recommendations--loaded"
                                             data-url="/recommendations/products?section_id=template--15107348201524__product-recommendations&amp;product_id=6847018893364&amp;limit=10">

                        <h2 class="title product-recommendations__heading">You may also like</h2>

                        <slider-component class="slider-mobile-gutter">
                            <ul class="grid grid--2-col grid--3-col-tablet grid--5-col-desktop grid--one-third-max grid--4-col-desktop grid--quarter-max slider slider--tablet"
                                role="list">

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/et-harum-quidem?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847019024436&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">Rose Gold Apple Smart Watch Series 2</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/20_c74900ce-9a9a-4180-92e5-8a9428bc587c_1044x.jpg?v=1656480823"
                  alt="Rose Gold Apple Smart Watch Series 2" loading="lazy" class="motion-reduce" width="973"
                  height="1000"><img src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/10_1044x.jpg?v=1656480823"
                                     alt="Rose Gold Apple Smart Watch Series 2" loading="lazy" class="motion-reduce"
                                     width="973" height="1000"></div>

          </div><!--         <div class="card__badge"><span class="badge badge--bottom-left" aria-hidden="true">
        Sale
        </span></div> --><div class="grid-product__on-sale card__badge">

<span class="badge badge--bottom-left" aria-hidden="true">-13%</span>
          </div></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="et-harum-quidem"><svg version="1.1" class="icon icon-cmheart not-added"
                                                   xmlns="http://www.w3.org/2000/svg"
                                                   xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                   viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000"
                                                   xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="et-harum-quidem"><svg class="icon icon-compare not-added" version="1.0"
                                                     xmlns="http://www.w3.org/2000/svg" width="512.000000pt"
                                                     height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                                     preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status" data-handle="et-harum-quidem"
                                             data-pavailable="true" href="javascript:void(0);"><svg
                    class="icon  fa-eye fa-w-18" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt"
                    height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="et-harum-quidem" data-product-variant-id="40357268160564">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper">
        <div class="rating" role="img" aria-label="5.0 out of 5.0 stars">
          <span aria-hidden="true" class="rating-star color-icon-text"
                style="--rating: 5; --rating-max: 5.0; --rating-decimal: 0;"></span>
        <p class="rating-count">
          <span class="visually-hidden">(1)</span>
          <span aria-hidden="true">(1 reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/et-harum-quidem?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847019024436&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          Rose Gold Apple Smart Watch Series 2
        </a>
      </span>


<div class="price  price--on-sale ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $250.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $250.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">
          $290.00
        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">Elegant and comfy, this embroidered A-line dress which has a round neck, and three-quarter sleeves is all you need to ensure your wardrobe is up...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357268160564">
        <div class="product-form__buttons">

          <button type="submit" name="add" class="product-form__submit button">Add to cart
</button>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/dictum-massa?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847018762292&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">Galaxy Watch4 Bluetooth pink-gold</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/17_ab366e88-20c3-469e-b818-fd41628762de_1044x.jpg?v=1656480379"
                  alt="Galaxy Watch4 Bluetooth pink-gold" loading="lazy" class="motion-reduce" width="973"
                  height="1000"><img
                    src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/2_f7075ffe-7bd1-43e8-aed5-b473e171f097_1044x.jpg?v=1656480379"
                    alt="Galaxy Watch4 Bluetooth pink-gold" loading="lazy" class="motion-reduce" width="973"
                    height="1000"></div>

          </div><!--         <div class="card__badge"><span class="badge badge--bottom-left" aria-hidden="true">
        Sale
        </span></div> --><div class="grid-product__on-sale card__badge">

<span class="badge badge--bottom-left" aria-hidden="true">-5%</span>
          </div></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="dictum-massa"><svg version="1.1" class="icon icon-cmheart not-added"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000"
                                                xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="dictum-massa"><svg class="icon icon-compare not-added" version="1.0"
                                                  xmlns="http://www.w3.org/2000/svg" width="512.000000pt"
                                                  height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                                  preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status" data-handle="dictum-massa"
                                             data-pavailable="true" href="javascript:void(0);"><svg
                    class="icon  fa-eye fa-w-18" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt"
                    height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="dictum-massa" data-product-variant-id="40357266784308">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper"><div class="rating" role="img" aria-label=" out of  stars">
          <span aria-hidden="true" class="rating-star-empty color-icon-text"
                style="--rating: 0; --rating-max: ; --rating-decimal: ;"></span>
        <p class="rating-count">
          <span class="visually-hidden">()</span>
          <span aria-hidden="true">( No reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/dictum-massa?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847018762292&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          Galaxy Watch4 Bluetooth pink-gold
        </a>
      </span>


<div class="price  price--on-sale ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $370.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $370.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">
          $390.00
        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">Maximize comfort with this printed T-shirt designed with a round neck and short sleeves.Look pretty in a kurta from u women's wear and get it...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357266784308">
        <div class="product-form__buttons">

          <a href="/products/dictum-massa?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847018762292&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
             class="product-form__submit button select-button" title="Select option">
            Select option
          </a>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/copy-of-pellentesque-at-1?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017910324&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">New Buy iPhone 12 Pro Max Black Apple</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/8_4f6de9b4-8a67-456e-8718-c276f74212d9_1044x.jpg?v=1656479705"
                  alt="New Buy iPhone 12 Pro Max Black Apple" loading="lazy" class="motion-reduce" width="973"
                  height="1000"><img src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/13_1044x.jpg?v=1656479707"
                                     alt="New Buy iPhone 12 Pro Max Black Apple" loading="lazy" class="motion-reduce"
                                     width="973" height="1000"></div>

          </div><!--         <div class="card__badge"><span class="badge badge--bottom-left" aria-hidden="true">
        Sale
        </span></div> --><div class="grid-product__on-sale card__badge">

<span class="badge badge--bottom-left" aria-hidden="true">-6%</span>
          </div></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="copy-of-pellentesque-at-1"><svg version="1.1" class="icon icon-cmheart not-added"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 1000 1000"
                                                             enable-background="new 0 0 1000 1000" xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="copy-of-pellentesque-at-1"><svg class="icon icon-compare not-added" version="1.0"
                                                               xmlns="http://www.w3.org/2000/svg" width="512.000000pt"
                                                               height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                                               preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status"
                                             data-handle="copy-of-pellentesque-at-1" data-pavailable="true"
                                             href="javascript:void(0);"><svg class="icon  fa-eye fa-w-18" version="1.0"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="512.000000pt" height="512.000000pt"
                                                                             viewBox="0 0 512.000000 512.000000"
                                                                             preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="copy-of-pellentesque-at-1" data-product-variant-id="40357264359476">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper">
        <div class="rating" role="img" aria-label="4.0 out of 5.0 stars">
          <span aria-hidden="true" class="rating-star color-icon-text"
                style="--rating: 4; --rating-max: 5.0; --rating-decimal: 0;"></span>
        <p class="rating-count">
          <span class="visually-hidden">(1)</span>
          <span aria-hidden="true">(1 reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/copy-of-pellentesque-at-1?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017910324&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          New Buy iPhone 12 Pro Max Black Apple
        </a>
      </span>


<div class="price  price--on-sale ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $70.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $70.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">
          $75.00
        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">Elegant and comfy, this embroidered A-line dress which has a round neck, and three-quarter sleeves is all you need to ensure your wardrobe is up...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357264359476">
        <div class="product-form__buttons">

          <a href="/products/copy-of-pellentesque-at-1?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017910324&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
             class="product-form__submit button select-button" title="Select option">
            Select option
          </a>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/copy-of-malesuada-fames-ac-turpis-1?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017156660&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">New Apple iPhone 12 Pro Max Gold</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/1_6254444c-753e-489c-a97b-7bbfe21bdc6e_1044x.jpg?v=1656479097"
                  alt="New Apple iPhone 12 Pro Max Gold" loading="lazy" class="motion-reduce" width="973" height="1000"><img
                    src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/20_75008f00-f95e-4a19-8aff-7bd75efbad03_1044x.jpg?v=1656479099"
                    alt="New Apple iPhone 12 Pro Max Gold" loading="lazy" class="motion-reduce" width="973"
                    height="1000"></div>

          </div><!--         <div class="card__badge"><span class="badge badge--bottom-left" aria-hidden="true">
        Sale
        </span></div> --><div class="grid-product__on-sale card__badge">

<span class="badge badge--bottom-left" aria-hidden="true">-25%</span>
          </div></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="copy-of-malesuada-fames-ac-turpis-1"><svg version="1.1" class="icon icon-cmheart not-added"
                                                                       xmlns="http://www.w3.org/2000/svg"
                                                                       xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                       x="0px" y="0px" viewBox="0 0 1000 1000"
                                                                       enable-background="new 0 0 1000 1000"
                                                                       xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="copy-of-malesuada-fames-ac-turpis-1"><svg class="icon icon-compare not-added"
                                                                         version="1.0"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         width="512.000000pt" height="512.000000pt"
                                                                         viewBox="0 0 512.000000 512.000000"
                                                                         preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status"
                                             data-handle="copy-of-malesuada-fames-ac-turpis-1" data-pavailable="true"
                                             href="javascript:void(0);"><svg class="icon  fa-eye fa-w-18" version="1.0"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="512.000000pt" height="512.000000pt"
                                                                             viewBox="0 0 512.000000 512.000000"
                                                                             preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="copy-of-malesuada-fames-ac-turpis-1"
           data-product-variant-id="40357261443124">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper"><div class="rating" role="img" aria-label=" out of  stars">
          <span aria-hidden="true" class="rating-star-empty color-icon-text"
                style="--rating: 0; --rating-max: ; --rating-decimal: ;"></span>
        <p class="rating-count">
          <span class="visually-hidden">()</span>
          <span aria-hidden="true">( No reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/copy-of-malesuada-fames-ac-turpis-1?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017156660&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          New Apple iPhone 12 Pro Max Gold
        </a>
      </span>


<div class="price  price--on-sale ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $9.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $9.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">
          $12.00
        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">Elegant and comfy, this embroidered A-line dress which has a round neck, and three-quarter sleeves is all you need to ensure your wardrobe is up...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357261443124">
        <div class="product-form__buttons">

          <a href="/products/copy-of-malesuada-fames-ac-turpis-1?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017156660&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
             class="product-form__submit button select-button" title="Select option">
            Select option
          </a>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/copy-of-laura-bambrough-viverra-del?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847016697908&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">JBL Clip Portable Bluetooth Speaker</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/7_3250ba30-f379-4c51-aec5-69916bf28327_1044x.jpg?v=1656479604"
                  alt="JBL Clip Portable Bluetooth Speaker" loading="lazy" class="motion-reduce" width="973"
                  height="1000"><img src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/14_1044x.jpg?v=1656479606"
                                     alt="JBL Clip Portable Bluetooth Speaker" loading="lazy" class="motion-reduce"
                                     width="973" height="1000"></div>

          </div><!--         <div class="card__badge"></div> --></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="copy-of-laura-bambrough-viverra-del"><svg version="1.1" class="icon icon-cmheart not-added"
                                                                       xmlns="http://www.w3.org/2000/svg"
                                                                       xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                       x="0px" y="0px" viewBox="0 0 1000 1000"
                                                                       enable-background="new 0 0 1000 1000"
                                                                       xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="copy-of-laura-bambrough-viverra-del"><svg class="icon icon-compare not-added"
                                                                         version="1.0"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         width="512.000000pt" height="512.000000pt"
                                                                         viewBox="0 0 512.000000 512.000000"
                                                                         preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status"
                                             data-handle="copy-of-laura-bambrough-viverra-del" data-pavailable="true"
                                             href="javascript:void(0);"><svg class="icon  fa-eye fa-w-18" version="1.0"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="512.000000pt" height="512.000000pt"
                                                                             viewBox="0 0 512.000000 512.000000"
                                                                             preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="copy-of-laura-bambrough-viverra-del"
           data-product-variant-id="40357259771956">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper"><div class="rating" role="img" aria-label=" out of  stars">
          <span aria-hidden="true" class="rating-star-empty color-icon-text"
                style="--rating: 0; --rating-max: ; --rating-decimal: ;"></span>
        <p class="rating-count">
          <span class="visually-hidden">()</span>
          <span aria-hidden="true">( No reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/copy-of-laura-bambrough-viverra-del?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847016697908&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          JBL Clip Portable Bluetooth Speaker
        </a>
      </span>


<div class="price ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $240.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $240.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">

        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357259771956">
        <div class="product-form__buttons">

          <a href="/products/copy-of-laura-bambrough-viverra-del?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847016697908&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
             class="product-form__submit button select-button" title="Select option">
            Select option
          </a>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/copy-of-erin-heather-bubley-proin-velit?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847016894516&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">French Connection Unisex smartwatch</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/12_7e96a694-39f0-4bd8-8bd1-e471eac0c8c4_1044x.jpg?v=1656479902"
                  alt="French Connection Unisex smartwatch" loading="lazy" class="motion-reduce" width="973"
                  height="1000"><img
                    src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/11_37118d1b-f81f-472b-9de2-5d443f68f4fd_1044x.jpg?v=1656479902"
                    alt="French Connection Unisex smartwatch" loading="lazy" class="motion-reduce" width="973"
                    height="1000"></div>

          </div><!--         <div class="card__badge"><span class="badge badge--bottom-left" aria-hidden="true">
        Sale
        </span></div> --><div class="grid-product__on-sale card__badge">

<span class="badge badge--bottom-left" aria-hidden="true">-10%</span>
          </div></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="copy-of-erin-heather-bubley-proin-velit"><svg version="1.1"
                                                                           class="icon icon-cmheart not-added"
                                                                           xmlns="http://www.w3.org/2000/svg"
                                                                           xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                           x="0px" y="0px" viewBox="0 0 1000 1000"
                                                                           enable-background="new 0 0 1000 1000"
                                                                           xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="copy-of-erin-heather-bubley-proin-velit"><svg class="icon icon-compare not-added"
                                                                             version="1.0"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="512.000000pt" height="512.000000pt"
                                                                             viewBox="0 0 512.000000 512.000000"
                                                                             preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status"
                                             data-handle="copy-of-erin-heather-bubley-proin-velit"
                                             data-pavailable="true" href="javascript:void(0);"><svg
                    class="icon  fa-eye fa-w-18" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt"
                    height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="copy-of-erin-heather-bubley-proin-velit"
           data-product-variant-id="40357260329012">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper">
        <div class="rating" role="img" aria-label="4.0 out of 5.0 stars">
          <span aria-hidden="true" class="rating-star color-icon-text"
                style="--rating: 4; --rating-max: 5.0; --rating-decimal: 0;"></span>
        <p class="rating-count">
          <span class="visually-hidden">(1)</span>
          <span aria-hidden="true">(1 reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/copy-of-erin-heather-bubley-proin-velit?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847016894516&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          French Connection Unisex smartwatch
        </a>
      </span>


<div class="price  price--on-sale ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $17.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $17.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">
          $19.00
        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357260329012">
        <div class="product-form__buttons">

          <a href="/products/copy-of-erin-heather-bubley-proin-velit?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847016894516&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
             class="product-form__submit button select-button" title="Select option">
            Select option
          </a>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/copy-of-egetalique-netus-penatibus?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847018041396&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">Beats Solo3 Wireless Headphones Beats</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/6_c535ad0c-3aac-429d-b668-63b2a16d5b12_1044x.jpg?v=1656479516"
                  alt="Beats Solo3 Wireless Headphones Beats" loading="lazy" class="motion-reduce" width="973"
                  height="1000"><img src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/15_1044x.jpg?v=1656479518"
                                     alt="Beats Solo3 Wireless Headphones Beats" loading="lazy" class="motion-reduce"
                                     width="973" height="1000"></div>

          </div><!--         <div class="card__badge"></div> --></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="copy-of-egetalique-netus-penatibus"><svg version="1.1" class="icon icon-cmheart not-added"
                                                                      xmlns="http://www.w3.org/2000/svg"
                                                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                      y="0px" viewBox="0 0 1000 1000"
                                                                      enable-background="new 0 0 1000 1000"
                                                                      xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="copy-of-egetalique-netus-penatibus"><svg class="icon icon-compare not-added"
                                                                        version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                                        width="512.000000pt" height="512.000000pt"
                                                                        viewBox="0 0 512.000000 512.000000"
                                                                        preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status"
                                             data-handle="copy-of-egetalique-netus-penatibus" data-pavailable="true"
                                             href="javascript:void(0);"><svg class="icon  fa-eye fa-w-18" version="1.0"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="512.000000pt" height="512.000000pt"
                                                                             viewBox="0 0 512.000000 512.000000"
                                                                             preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="copy-of-egetalique-netus-penatibus"
           data-product-variant-id="40357264752692">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper">
        <div class="rating" role="img" aria-label="4.0 out of 5.0 stars">
          <span aria-hidden="true" class="rating-star color-icon-text"
                style="--rating: 4; --rating-max: 5.0; --rating-decimal: 0;"></span>
        <p class="rating-count">
          <span class="visually-hidden">(1)</span>
          <span aria-hidden="true">(1 reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/copy-of-egetalique-netus-penatibus?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847018041396&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          Beats Solo3 Wireless Headphones Beats
        </a>
      </span>


<div class="price ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $250.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $250.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">

        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">An ideal pick for a casual wardrobe, this trendy t-shirt is designed with bold tropical prints, short sleeves and a round neckline.Elegant and comfy, this...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357264752692">
        <div class="product-form__buttons">

          <button type="submit" name="add" class="product-form__submit button">Add to cart
</button>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/copy-of-duis-sit-amet-massa-1?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017254964&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">Portable Optical Mouse Wireless USB</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/4_2183d6ec-17e5-4cde-a2aa-e33db37baa18_1044x.jpg?v=1656479345"
                  alt="Portable Optical Mouse Wireless USB" loading="lazy" class="motion-reduce" width="973"
                  height="1000"><img
                    src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/17_21545ef0-c1ee-4aa6-b4a2-cca93b086daf_1044x.jpg?v=1656479348"
                    alt="Portable Optical Mouse Wireless USB" loading="lazy" class="motion-reduce" width="973"
                    height="1000"></div>

          </div><!--         <div class="card__badge"></div> --></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="copy-of-duis-sit-amet-massa-1"><svg version="1.1" class="icon icon-cmheart not-added"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                 y="0px" viewBox="0 0 1000 1000"
                                                                 enable-background="new 0 0 1000 1000"
                                                                 xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="copy-of-duis-sit-amet-massa-1"><svg class="icon icon-compare not-added" version="1.0"
                                                                   xmlns="http://www.w3.org/2000/svg"
                                                                   width="512.000000pt" height="512.000000pt"
                                                                   viewBox="0 0 512.000000 512.000000"
                                                                   preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status"
                                             data-handle="copy-of-duis-sit-amet-massa-1" data-pavailable="true"
                                             href="javascript:void(0);"><svg class="icon  fa-eye fa-w-18" version="1.0"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="512.000000pt" height="512.000000pt"
                                                                             viewBox="0 0 512.000000 512.000000"
                                                                             preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="copy-of-duis-sit-amet-massa-1"
           data-product-variant-id="40357261934644">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper"><div class="rating" role="img" aria-label=" out of  stars">
          <span aria-hidden="true" class="rating-star-empty color-icon-text"
                style="--rating: 0; --rating-max: ; --rating-decimal: ;"></span>
        <p class="rating-count">
          <span class="visually-hidden">()</span>
          <span aria-hidden="true">( No reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/copy-of-duis-sit-amet-massa-1?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017254964&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          Portable Optical Mouse Wireless USB
        </a>
      </span>


<div class="price ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $250.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $250.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">

        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">Enhance your style with this printed top, which is designed with three-quarter sleeves and a round neckline. Adding to the style quotient, this top is...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357261934644">
        <div class="product-form__buttons">

          <a href="/products/copy-of-duis-sit-amet-massa-1?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017254964&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
             class="product-form__submit button select-button" title="Select option">
            Select option
          </a>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/copy-of-dapibus-in-viverra-2?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017582644&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">Sony Portable Bluetooth Speaker</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/13_1332cafe-32aa-484f-af07-e57e524486b2_1044x.jpg?v=1656480100"
                  alt="Sony Portable Bluetooth Speaker" loading="lazy" class="motion-reduce" width="973"
                  height="1000"><img
                    src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/8_0a4a05ca-dabc-452d-8275-dcefa1199895_1044x.jpg?v=1656480100"
                    alt="Sony Portable Bluetooth Speaker" loading="lazy" class="motion-reduce" width="973"
                    height="1000"></div>

          </div><!--         <div class="card__badge"></div> --></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="copy-of-dapibus-in-viverra-2"><svg version="1.1" class="icon icon-cmheart not-added"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" viewBox="0 0 1000 1000"
                                                                enable-background="new 0 0 1000 1000"
                                                                xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="copy-of-dapibus-in-viverra-2"><svg class="icon icon-compare not-added" version="1.0"
                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                  width="512.000000pt" height="512.000000pt"
                                                                  viewBox="0 0 512.000000 512.000000"
                                                                  preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status"
                                             data-handle="copy-of-dapibus-in-viverra-2" data-pavailable="true"
                                             href="javascript:void(0);"><svg class="icon  fa-eye fa-w-18" version="1.0"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="512.000000pt" height="512.000000pt"
                                                                             viewBox="0 0 512.000000 512.000000"
                                                                             preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="copy-of-dapibus-in-viverra-2"
           data-product-variant-id="40357263048756">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper"><div class="rating" role="img" aria-label=" out of  stars">
          <span aria-hidden="true" class="rating-star-empty color-icon-text"
                style="--rating: 0; --rating-max: ; --rating-decimal: ;"></span>
        <p class="rating-count">
          <span class="visually-hidden">()</span>
          <span aria-hidden="true">( No reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/copy-of-dapibus-in-viverra-2?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017582644&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          Sony Portable Bluetooth Speaker
        </a>
      </span>


<div class="price ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $235.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $235.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">

        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">Elegant and comfy, this embroidered A-line dress which has a round neck, and three-quarter sleeves is all you need to ensure your wardrobe is up...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357263048756">
        <div class="product-form__buttons">

          <a href="/products/copy-of-dapibus-in-viverra-2?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017582644&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
             class="product-form__submit button select-button" title="Select option">
            Select option
          </a>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                                <li class="grid__item slider__slide">
          <span class="products">

<link href="//cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-rating.css?v=130504962044444642191656133561"
      rel="stylesheet" type="text/css" media="all">
<div class="card-wrapper">
  <div class="card-img">
    <a href="/products/copy-of-amet-massa-tincidunt?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017386036&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
       class="full-unstyled-link">
      <span class="visually-hidden">New iphone 13 Pro Max Pink Rose</span>
      <div class="card card--product" tabindex="-1">
        <div class="card__inner"><div>
            <div class="media media--transparent media--adapt media--hover-effect"
                 style="padding-bottom: 102.7749229188078%;">
              <img
                  src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/16_d2991e62-5f2c-4134-83ef-a5b63ad3ec8c_1044x.jpg?v=1656480292"
                  alt="New iphone 13 Pro Max Pink Rose" loading="lazy" class="motion-reduce" width="973"
                  height="1000"><img src="//cdn.shopify.com/s/files/1/0601/1351/8644/products/5_1044x.jpg?v=1656480292"
                                     alt="New iphone 13 Pro Max Pink Rose" loading="lazy" class="motion-reduce"
                                     width="973" height="1000"></div>

          </div><!--         <div class="card__badge"></div> --></div>
      </div>
    </a>
    <div class="product-hover">
<button type="button" aria-label="Add to wishlist" class="cm-link btn--status" button-wishlist=""
        data-product-handle="copy-of-amet-massa-tincidunt"><svg version="1.1" class="icon icon-cmheart not-added"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" viewBox="0 0 1000 1000"
                                                                enable-background="new 0 0 1000 1000"
                                                                xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
<g><path
        d="M990,335.9c0,80.6-41.8,162.6-125.3,246.1L524.1,910.2c-6.6,6.5-14.6,9.8-24.1,9.8c-9.5,0-17.5-3.3-24.1-9.8L134.7,581c-3.7-2.9-8.7-7.7-15-14.2c-6.4-6.6-16.5-18.5-30.4-35.8c-13.9-17.3-26.3-35.1-37.2-53.3s-20.7-40.3-29.3-66.2C14.2,385.5,10,360.4,10,335.9c0-80.2,23.1-142.9,69.5-188.1c46.3-45.2,110.3-67.8,192-67.8c22.6,0,45.7,3.9,69.2,11.7c23.5,7.9,45.4,18.4,65.6,31.7s37.6,25.8,52.2,37.4c14.5,11.7,28.4,24.1,41.5,37.2c13.1-13.1,26.9-25.5,41.5-37.2c14.6-11.7,32-24.2,52.3-37.4c20.3-13.3,42.2-23.9,65.6-31.7C682.9,83.9,706,80,728.6,80c81.7,0,145.6,22.6,192,67.8C966.9,193.1,990,255.8,990,335.9z M920,335.9c0-29.5-3.9-55.6-11.7-78.2c-7.9-22.6-17.9-40.6-30.1-53.8c-12.2-13.3-27.1-24.2-44.6-32.5c-17.6-8.3-34.6-14.1-51.4-16.9s-34.7-4.4-53.6-4.4s-39.4,4.7-61.2,13.9c-21.8,9.3-42,21-60.4,35c-18.4,14.1-34.2,27.2-47.3,39.4c-13.1,12.2-24.1,23.3-32.8,33.6c-6.6,8-15.5,12-26.8,12c-11.3,0-20.3-4-26.8-12c-8.7-10.2-19.6-21.4-32.8-33.7c-13.1-12.2-28.9-25.3-47.3-39.3c-18.4-14.1-38.5-25.7-60.4-35c-21.9-9.3-42.3-14-61.2-14c-19,0-36.9,1.5-53.6,4.4c-16.8,3-33.9,8.6-51.4,17c-17.5,8.4-32.3,19.2-44.6,32.5c-12.3,13.3-22.2,31.3-30.1,53.9C83.9,280.3,80,306.4,80,335.9c0,61.2,34.1,126,102.3,194.2L500,836.3l317.2-305.7C885.7,462.1,920,397.2,920,335.9z"></path></g>
</svg><!--?xml version="1.0" encoding="iso-8859-1"?-->
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg class="icon added icon-solidheart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 512 512"
     style="enable-background:new 0 0 510 510;" xml:space="preserve">
<path
    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
</path>
</svg>

  </button>
  <button type="button" aria-label="Add to compare" class="cm-link btn--status" button-compare=""
          data-product-handle="copy-of-amet-massa-tincidunt"><svg class="icon icon-compare not-added" version="1.0"
                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                  width="512.000000pt" height="512.000000pt"
                                                                  viewBox="0 0 512.000000 512.000000"
                                                                  preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2336 4830 c-593 -53 -1152 -350 -1519 -805 -143 -178 -267 -383
-267 -442 1 -52 35 -110 79 -132 95 -49 160 -16 237 118 193 336 475 602 819
771 306 150 660 219 982 192 372 -32 677 -142 976 -354 111 -79 268 -225 361
-337 255 -307 412 -701 433 -1091 l6 -115 -70 67 c-39 37 -83 72 -97 78 -125
47 -243 -71 -195 -197 12 -32 400 -427 441 -449 15 -8 49 -14 77 -14 64 0 91
21 322 256 189 192 209 222 195 298 -9 48 -62 102 -109 111 -72 14 -105 -1
-189 -83 l-78 -75 0 80 c0 187 -58 481 -135 688 -254 682 -843 1208 -1545
1378 -220 54 -507 76 -724 57z"></path>
<path d="M423 2961 c-26 -21 -127 -119 -224 -217 -189 -192 -209 -222 -195
-298 9 -48 62 -102 109 -111 72 -14 105 1 189 83 l78 75 0 -80 c0 -118 27
-309 65 -458 199 -788 816 -1407 1601 -1604 197 -50 326 -65 544 -65 208 1
297 10 480 50 564 125 1053 463 1373 949 76 116 127 217 127 252 -1 52 -35
110 -79 132 -95 49 -160 16 -237 -118 -151 -264 -346 -473 -598 -642 -537
-361 -1220 -426 -1811 -174 -341 146 -643 397 -849 705 -184 276 -296 608
-312 930 l-6 115 63 -61 c35 -34 78 -69 96 -78 121 -61 251 62 202 191 -12 32
-400 427 -441 449 -15 8 -49 14 -77 14 -42 0 -56 -5 -98 -39z"></path>
</g>
</svg><!--?xml version='1.0' encoding='iso-8859-1'?-->
<svg class="icon added icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"
     xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
  <path
      d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"></path>
</svg>

  </button><div class="quick-view-button"><a class="quick-view cm-link btn--status"
                                             data-handle="copy-of-amet-massa-tincidunt" data-pavailable="true"
                                             href="javascript:void(0);"><svg class="icon  fa-eye fa-w-18" version="1.0"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="512.000000pt" height="512.000000pt"
                                                                             viewBox="0 0 512.000000 512.000000"
                                                                             preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2370 4184 c-589 -70 -1135 -342 -1715 -855 -203 -179 -537 -540
-623 -674 -36 -56 -36 -134 0 -190 46 -72 240 -297 378 -438 493 -508 1042
-864 1560 -1012 225 -64 339 -79 590 -79 251 0 365 15 590 79 607 174 1274
647 1806 1283 146 174 158 195 158 262 0 67 -12 88 -158 262 -529 631 -1194
1105 -1796 1280 -202 59 -336 78 -555 82 -110 3 -216 2 -235 0z m435 -349
c471 -71 984 -348 1477 -799 151 -137 448 -454 448 -477 0 -3 -34 -46 -77 -94
-582 -666 -1244 -1089 -1848 -1180 -128 -19 -362 -19 -490 0 -435 66 -899 303
-1360 694 -167 141 -565 551 -565 581 0 4 34 47 77 95 578 661 1240 1086 1839
1179 122 19 375 19 499 1z"></path>
<path d="M2420 3564 c-433 -79 -741 -361 -846 -774 -27 -106 -27 -354 0 -460
97 -380 376 -659 756 -756 106 -27 354 -27 460 0 380 97 659 376 756 756 15
58 19 110 19 230 0 120 -4 172 -19 230 -95 375 -366 650 -741 752 -68 19 -323
33 -385 22z m300 -350 c187 -42 358 -179 445 -359 52 -107 68 -189 63 -325 -5
-129 -30 -216 -90 -318 -42 -72 -158 -188 -230 -230 -211 -124 -485 -124 -696
0 -72 42 -188 158 -230 230 -124 211 -124 485 0 696 42 72 158 188 230 230
151 89 328 116 508 76z"></path>
</g>
</svg></a></div>
      <div data-js-product="" data-product-handle="copy-of-amet-massa-tincidunt"
           data-product-variant-id="40357262295092">
      </div>
    </div>
  </div>


  <div class="card-information">
    <div class="card-information__wrapper"><div class="rating" role="img" aria-label=" out of  stars">
          <span aria-hidden="true" class="rating-star-empty color-icon-text"
                style="--rating: 0; --rating-max: ; --rating-decimal: ;"></span>
        <p class="rating-count">
          <span class="visually-hidden">()</span>
          <span aria-hidden="true">( No reviews)</span>
        </p>
        </div><span class="card-information__text h5">
        <a href="/products/copy-of-amet-massa-tincidunt?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017386036&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform">
          New iphone 13 Pro Max Pink Rose
        </a>
      </span>


<div class="price ">
  <dl><div class="price__regular">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd>
        <span class="price-item price-item--regular">
          $240.00
        </span>
      </dd>
    </div>
    <div class="price__sale">
      <dt>
        <span class="visually-hidden visually-hidden--inline">Sale price</span>
      </dt>
      <dd>
        <span class="price-item price-item--sale">
          $240.00
        </span>
      </dd>
      <dt class="price__compare">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
      </dt>
      <dd class="price__compare">
        <s class="price-item price-item--regular">

        </s>
      </dd>
    </div>
    <small class="unit-price caption hidden">
      <dt class="visually-hidden">Unit price</dt>
      <dd>
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </dd>
    </small>
  </dl>
    <!----></div>



      <span class="caption-large">Elegant and comfy, this embroidered A-line dress which has a round neck, and three-quarter sleeves is all you need to ensure your wardrobe is up...</span>



      <product-form class="product-form"><form method="post" action="/cart/add" id="RecommendedProductDrop"
                                               accept-charset="UTF-8" class="form" enctype="multipart/form-data"
                                               novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden"
                                                                                                           name="form_type"
                                                                                                           value="product"><input
                  type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="40357262295092">
        <div class="product-form__buttons">

          <a href="/products/copy-of-amet-massa-tincidunt?pr_prod_strat=collection_fallback&amp;pr_rec_id=27ac25290&amp;pr_rec_pid=6847017386036&amp;pr_ref_pid=6847018893364&amp;pr_seq=uniform"
             class="product-form__submit button select-button" title="Select option">
            Select option
          </a>

        </div></form></product-form>
    </div>
  </div>
</div>

            </span>
                                </li>

                            </ul>

                            <div class="slider-buttons no-js-hidden">
                                <button type="button" class="slider-button slider-button--prev" name="previous"
                                        aria-label="Slide left">
                                    <svg class="icon icon-caret" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 979.95 531.49">
                                        <path
                                            d="M22.14,246a40.74,40.74,0,0,0-.3,57.6l445.9,450a40.68,40.68,0,0,0,57.6.3c.2-.1.2-.3.4-.5.7-.6,1.6-.8,2.3-1.5L977.94,306a40.77,40.77,0,1,0-57.4-57.9l-423.3,419.5L79.74,246.24a40.83,40.83,0,0,0-57.6-.2Z"
                                            transform="translate(-10.07 -234.26)"></path>
                                    </svg>
                                </button>
                                <button type="button" class="slider-button slider-button--next" name="next"
                                        aria-label="Slide right">
                                    <svg class="icon icon-caret" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 979.95 531.49">
                                        <path
                                            d="M22.14,246a40.74,40.74,0,0,0-.3,57.6l445.9,450a40.68,40.68,0,0,0,57.6.3c.2-.1.2-.3.4-.5.7-.6,1.6-.8,2.3-1.5L977.94,306a40.77,40.77,0,1,0-57.4-57.9l-423.3,419.5L79.74,246.24a40.83,40.83,0,0,0-57.6-.2Z"
                                            transform="translate(-10.07 -234.26)"></path>
                                    </svg>
                                </button>
                            </div>
                        </slider-component>

                    </product-recommendations>


                </section>
            </div>
        </div>
    </main>
</x-head>
