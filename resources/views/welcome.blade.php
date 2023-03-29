<x-head>
    <main class="main-content" id="MainContent" role="main" tabindex="-1">

        <div class="contents">


            <div class="main-container medium-up--three-quarters without-sidebar-main-container">
                <x-top-slider></x-top-slider>
                <section id="shopify-section-template--15107347939380__1626172657e8a64879"
                         class="shopify-section spaced-section subbanners-section spaced-section--full-width">
                    <link href="./css/section-tm-subbanners.css" rel="stylesheet" type="text/css" media="all">

                    <div class="tm-banners">
                        <div class="page-width page-width-desktop">
                            <x-banner></x-banner>
                        </div>
                    </div>


                </section>
                <section id="shopify-section-template--15107347939380__1642049290d388f08e"
                         class="shopify-section spaced-section service-section">
                    <link href="./css/section-tm_service.css" rel="stylesheet" type="text/css" media="all">
                    <div class="service-block" data-section-id="template--15107347939380__1642049290d388f08e"
                         data-section-type="services-section">
                        <div class="page-width page-width-desktop">
                            <x-qulyliklar></x-qulyliklar>
                        </div>
                    </div>


                </section>
                <section id="shopify-section-template--15107347939380__1642049895a001e45a"
                         class="shopify-section spaced-section">
                    <link rel="stylesheet" href="./css/component-slider.css" media="all"
                          onload="this.media=&#39;all&#39;">
                    <link rel="stylesheet" href="./css/component-price.css" media="all"
                          onload="this.media=&#39;all&#39;">
                    <link rel="stylesheet" href="./css/component-badge.css" media="all"
                          onload="this.media=&#39;all&#39;">
                    <link rel="stylesheet" href="./css/template-collection.css" media="all"
                          onload="this.media=&#39;all&#39;">

                    <link href="./css/component-card.css" rel="stylesheet" type="text/css" media="all">
                    <link href="./css/component-rating.css" rel="stylesheet" type="text/css" media="all">

                    <div data-section-id="template--15107347939380__1642049895a001e45a"
                         data-section-type="product_tab-section">
                        <div class="product_tab-block">
                            @foreach($data as $datas)
                                <div class="page-width">

                                    <div class="collection-header-text">
                                        <ul class="tabs">


                                            <li><a>{{ $datas['category']['name'] }}</a></li>

                                        </ul>
                                    </div>


                                    <div class="tabs-holder">


                                        <div id="tab--1" class="tabs-content">
                                            <div class="product-collection-tab-slider">
                                                <div class="collection">
                                                    <slider-component class="slider-mobile-gutter">
                                                        <ul class="grid grid--2-col grid--3-col-tablet grid--one-third-max grid--4-col-desktop grid--5-col-desktop grid--quarter-max slider slider--tablet negative-margin"
                                                            role="list">


                                                            @foreach($datas['products'] as $products)
                                                                <li class="grid__item slider__slide">
                                                            <span class="products">
                                                                <div class="card-wrapper">
                                                                    <div class="card-img">
                                                                        <a href="/product/{{ $products->id }}"
                                                                           class="full-unstyled-link">
                                                                            <div class="card card--product">
                                                                                <div
                                                                                    class="media media--transparent media--adapt media--hover-effect"
                                                                                    style="padding-bottom: 102.7749229188078%;">
                                                                                    <?php
                                                                                        $a = json_decode($products->photos);
                                                                                    foreach ($a as $fotos){
                                                                                        $split = explode(".png",
                                                                                            $fotos);
                                                                                        ?>
                                                                                    <img
                                                                                        src="/product-photos/{{ $split[0] }}.png"
                                                                                        alt="J{{ $products->name }}"
                                                                                        class="motion-reduce">
                                                                                    <?
                                                                                    }
                                                                                        ?>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="card-information">
                                                                        <div class="card-information__wrapper"><span
                                                                                class="card-information__text h5">
                                                                                <a href="/products/{{ $products->id }}">
                                                                                    {{ $products->name }}
                                                                                </a>
                                                                            </span>



                                                                            <div class="price">
                                                                                <div class="price__regular">
                                                                                    <span
                                                                                        class="price-item price-item--regular">
                                                                                        {{ $products->price }}
                                                                                    </span>
                                                                                </div>
                                                                                <!---->
                                                                            </div>
                                                                            <?
                                                                            if (isset($_COOKIE['tovar'][$products->id])) {
                                                                                ?>
                                                                            <button
                                                                                class="product-form__submit button select-button">Savatchaga qoshildi</button>
                                                                            <?
                                                                            }else{
                                                                                ?>
                                                                            <div onclick="changeText(this)">
                                                                                <button
                                                                                    onclick="incrementclicks('{{ $products->id }}');"
                                                                                    class="product-form__submit button select-button"
                                                                                    type="button" button-wishlist=""
                                                                                    data-product-handle="{{ $products->id }}">Savatchaga
                                                                                </button></div>
                                                                            <?
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                            </span>
                                                                </li>

                                                            @endforeach

                                                        </ul>
                                                        <div class="slider-buttons">
                                                            <button type="button"
                                                                    class="slider-button slider-button--prev"
                                                                    name="previous" aria-label="Slide left">
                                                                <svg class="icon icon-caret" data-name="Layer 1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 979.95 531.49">
                                                                    <path
                                                                        d="M22.14,246a40.74,40.74,0,0,0-.3,57.6l445.9,450a40.68,40.68,0,0,0,57.6.3c.2-.1.2-.3.4-.5.7-.6,1.6-.8,2.3-1.5L977.94,306a40.77,40.77,0,1,0-57.4-57.9l-423.3,419.5L79.74,246.24a40.83,40.83,0,0,0-57.6-.2Z"
                                                                        transform="translate(-10.07 -234.26)"></path>
                                                                </svg>
                                                            </button>
                                                            <button type="button"
                                                                    class="slider-button slider-button--next"
                                                                    name="next" aria-label="Slide right">
                                                                <svg class="icon icon-caret" data-name="Layer 1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 979.95 531.49">
                                                                    <path
                                                                        d="M22.14,246a40.74,40.74,0,0,0-.3,57.6l445.9,450a40.68,40.68,0,0,0,57.6.3c.2-.1.2-.3.4-.5.7-.6,1.6-.8,2.3-1.5L977.94,306a40.77,40.77,0,1,0-57.4-57.9l-423.3,419.5L79.74,246.24a40.83,40.83,0,0,0-57.6-.2Z"
                                                                        transform="translate(-10.07 -234.26)"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </slider-component>
                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <script>
                            //====================== collection tab =======================//
                            $(document).ready(function () {
                                $('.product_tab-block ul.tabs').each(function () {
                                    var active, content, links = $(this).find('a');
                                    active = links.first().addClass('active');
                                    content = $(active.attr('href'));
                                    links.not(':first').each(function () {
                                        $($(this).attr('href')).hide();
                                    });
                                    $(this).find('a').click(function (e) {
                                        active.removeClass('active');
                                        content.hide();
                                        active = $(this);
                                        content = $($(this).attr('href'));
                                        active.addClass('active');
                                        content.show();
                                        return false;
                                    });
                                });
                            });
                        </script>


                    </div>
                </section>
                <section id="shopify-section-template--15107347939380__16563287185575c6c4"
                         class="shopify-section spaced-section cms_info-section spaced-section--full-width">
                    <link href="./css/tm_cms_info.css" rel="stylesheet" type="text/css" media="all">

                    <style>
                        .cms_info {
                            background-color: #129cb8;
                        }
                    </style>
                    <div class="page-width page-width-desktop">
                        <div class="cms_info" data-section-id="template--15107347939380__16563287185575c6c4"
                             data-section-type="info-section">

                            <h2 class="title">About Our Store</h2>
                            <div class="left-block">

                            </div>

                            <div class="info-wrapper">
                                <div class="cms_information">
                                    <div class="info_service info_service-1">
                                        <div class="info-block info-block-1">
                                            <div class="info-icon info-iconf070f877-41f7-470f-a439-9f44497d0a9d"></div>
                                            <div class="info-description">
                                                <div class="info-title">Bepul yetkazib berish</div>
                                            </div>
                                            <div class="info-subdescription">
                                                <div class="info-subtitle">2 000 000 sumdan balandroq narxdagi
                                                    maxsulotlarni sotib oling biz esa bepul yetkazib beramiz

                                                </div>
                                            </div>
                                            <div class="info-btn">Faqat 2 000 000</div>
                                        </div>
                                    </div>

                                    <style>
                                        .info-iconf070f877-41f7-470f-a439-9f44497d0a9d {
                                            background-image: url('https://cdn.shopify.com/s/files/1/0601/1351/8644/files/free-shipping_65x37.png?v=1656328819');
                                        }
                                    </style>


                                </div>
                            </div>

                        </div>
                    </div>


                </section>
                <section id="shopify-section-template--15107347939380__1656314555ef05366d"
                         class="shopify-section spaced-section">
                    <link href="./css/section-collection-list.css" rel="stylesheet" type="text/css" media="all">
                    <link rel="stylesheet" href="./css/component-slider.css" media="all"
                          onload="this.media=&#39;all&#39;">

                    <noscript>
                        <link
                            href="https://cdn.shopify.com/s/files/1/0601/1351/8644/t/2/assets/component-slider.css?v=160588671735488219961658744308"
                            rel="stylesheet" type="text/css" media="all"/>
                    </noscript>
                    <style>
                        .collection-list-wrapper {
                            background: url('https://cdn.shopify.com/s/files/1/0601/1351/8644/files/category-bg-img_0f1dbce9-c3d4-4d03-8983-db477727c34d_1920x1080.jpg?v=1656580886') no-repeat fixed center;
                        }
                    </style>
                    <link href="./css/component-card.css" rel="stylesheet" type="text/css" media="all">
                    <div class="collection-list-wrapper">
                        <div class="page-width page-width-desktop">
                            <h2 class="title-wrapper-with-link">Collections</h2>

                            <slider-component class="slider-mobile-gutter">
                                <ul class="collection-list grid grid--1-col grid--3-col-tablet slider slider--tablet grid--peek collection-list--8-items"
                                    id="Slider-template--15107347939380__1656314555ef05366d" role="list">
                                    @foreach($cat as $cat)
                                    <li class="collection-list__item grid__item slider__slide">
                                        <a href="/podcat/{{ $cat->id }}"
                                           class="card animate-arrow link card--media card--light-border">
                                        </a>
                                        <div class="card--stretch card-colored"><a
                                                href="/podcat/{{ $cat->id }}"
                                                class="card animate-arrow link card--media card--light-border">
                                                <div class="category-image">
                                                    <div>

                                                        <div
                                                            class="media media--square media--hover-effect overflow-hidden">

                                                            <img src="./category-photos/{{ $cat->photo }}" alt="Speaker"
                                                                 height="93" width="94" loading="lazy"
                                                                 class="motion-reduce">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="collection_linklist description"><a
                                                    href="/cat/{{ $cat->id }}"
                                                    class="card animate-arrow link card--media card--light-border">
                                                    <div
                                                        class="card__text card__text-spacing card-colored card__text-hover">
                                                        <div class="overlay-card"></div>
                                                        <h3>{{ $cat->name }}</h3>
                                                    </div>

                                                </a><a class="text-button"
                                                       href="/cat/{{ $cat->id }}">
                                                    <div class="button cms__btn">
                                                        To'liq ko'rish
                                                    </div>
                                                </a>

                                            </div>
                                        </div>

                                    </li>
                                    @endforeach



                                </ul>
                                <div class="slider-buttons no-js-hidden">
                                    <button type="button" class="slider-button slider-button--prev" name="previous"
                                            aria-label="Slide left">


                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="icon icon-caret"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000"
                                             xml:space="preserve">

                                            <g>
                                                <path
                                                    d="M978.3,256.4c-15.5-15-40.7-15-56.3,0L500,662.4L77.9,256.4c-15.5-15-40.8-15-56.3,0c-15.5,14.9-15.5,39.2,0,54.1l450.2,433c15.5,15,40.7,15,56.3,0l450.2-433C993.9,295.6,993.9,271.3,978.3,256.4z">
                                                </path>
                                            </g>
                                        </svg>
                                    </button>
                                    <button type="button" class="slider-button slider-button--next" name="next"
                                            aria-label="Slide right">


                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="icon icon-caret"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000"
                                             xml:space="preserve">

                                            <g>
                                                <path
                                                    d="M978.3,256.4c-15.5-15-40.7-15-56.3,0L500,662.4L77.9,256.4c-15.5-15-40.8-15-56.3,0c-15.5,14.9-15.5,39.2,0,54.1l450.2,433c15.5,15,40.7,15,56.3,0l450.2-433C993.9,295.6,993.9,271.3,978.3,256.4z">
                                                </path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </slider-component>
                        </div>
                    </div>


                </section>
                <section id="shopify-section-template--15107347939380__1656388810705a733f"
                         class="shopify-section bestseller-products spaced-section">
                    <link rel="stylesheet" href="./css/component-slider.css" media="all"
                          onload="this.media=&#39;all&#39;">
                    <link rel="stylesheet" href="./css/component-price.css" media="all"
                          onload="this.media=&#39;all&#39;">
                    <link rel="stylesheet" href="./css/component-badge.css" media="all"
                          onload="this.media=&#39;all&#39;">
                    <link rel="stylesheet" href="./css/template-collection.css" media="all"
                          onload="this.media=&#39;all&#39;">



                    <link href="./css/section-bestseller-collection.css" rel="stylesheet" type="text/css" media="all">
                    <link href="./css/component-card.css" rel="stylesheet" type="text/css" media="all">
                    <link href="./css/component-rating.css" rel="stylesheet" type="text/css" media="all">


                    <div class="collection page-width">
                        <div class="">
                            <h2 class="title">Eng yangi maxsulotlar</h2>
                        </div>
                        <slider-component class="slider-mobile-gutter">
                            <ul class="grid grid--2-col grid--4-col-desktop grid--4-col-tablet grid--one-third-max grid--4-col-desktop grid--quarter-max negative-margin--small"
                                role="list">

@foreach($engyangi as $engyangi)
                                <li class="grid__item">
                                    <span class="products">
                                        <div class="card-wrapper">
                                            <div class="card-img">
                                                <a href="/product/{{ $engyangi->id }}"
                                                   class="full-unstyled-link">
                                                    <span class="visually-hidden">{{ $engyangi->name }}</span>
                                                    <div class="card card--product" tabindex="-1">
                                                        <div class="card__inner">
                                                            <div>
                                                                <div
                                                                    class="media media--transparent media--adapt media--hover-effect"
                                                                    style="padding-bottom: 102.7749229188078%;">
                                                                    <?php
                                                                                        $a = json_decode($engyangi->photos);
                                                                                    foreach ($a as $fotos){
                                                                                        $split = explode(".png",
                                                                                            $fotos);
                                                                                        ?>
                                                                    <img
                                                                        src="/product-photos/{{ $split[0] }}.png"
                                                                        alt="Rose Gold Apple Smart Watch Series 2"
                                                                        loading="lazy" class="motion-reduce" width="973"
                                                                        height="1000">
                                                                </div>
                                                                <?
                                                                }
                                                                                    ?>
                                                            </div>
                                                            <div class="grid-product__on-sale card__badge">

                                                                <span class="badge badge--bottom-left"
                                                                      aria-hidden="true">-13%</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </a>

                                            </div>



                                            <div class="card-information">
                                                <div class="card-information__wrapper">
                                                    <div class="rating" role="img" aria-label="5.0 out of 5.0 stars">
                                                        <span aria-hidden="true" class="rating-star color-icon-text"
                                                              style="--rating: 5; --rating-max: 5.0; --rating-decimal: 0;"></span>
                                                    </div><span class="card-information__text h5">
                                                        <a
                                                            href="/product/{{ $engyangi->id }}">
                                                            {{ $engyangi->name }}
                                                        </a>
                                                    </span>
                                                    <div class="price  price--on-sale ">
                                                        <dl>
                                                            <div class="price__regular">
                                                                <dt>
                                                                    <span
                                                                        class="visually-hidden visually-hidden--inline">{{ $engyangi->price }}</span>
                                                                </dt>
                                                                <dd>
                                                                    <span class="price-item price-item--regular">
                                                                        {{ $engyangi->price }}
                                                                    </span>
                                                                </dd>
                                                            </div>
                                                            <div class="price__sale">
                                                                <dt>
                                                                    <span
                                                                        class="visually-hidden visually-hidden--inline">Sale
                                                                        price</span>
                                                                </dt>
                                                                <dd>
                                                                    <span class="price-item price-item--sale">
                                                                        {{ $engyangi->price }}
                                                                    </span>
                                                                </dd>
                                                                <dt class="price__compare">
                                                                    <span
                                                                        class="visually-hidden visually-hidden--inline">Regular
                                                                        price</span>
                                                                </dt>
                                                                <dd class="price__compare">
                                                                    <s class="price-item price-item--regular">
                                                                        ${{ $engyangi->price }}
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
                                                        <!---->
                                                    </div>



                                                    <?
                                                                            if (isset($_COOKIE['tovar'][$products->id])) {
                                                                                ?>
                                                                            <button
                                                                                class="product-form__submit button select-button">Savatchaga qoshildi</button>
                                                                            <?
                                                                            }else{
                                                                                ?>
                                                                            <div onclick="changeText(this)">
                                                                                <button
                                                                                    onclick="incrementclicks('{{ $products->id }}');"
                                                                                    class="product-form__submit button select-button"
                                                                                    type="button" button-wishlist=""
                                                                                    data-product-handle="{{ $products->id }}">Savatchaga
                                                                                </button></div>
                                                                            <?
                                                                            }
                                                                            ?>

                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </li>
                            @endforeach
                            </ul>
                        </slider-component>
                    </div>


                </section>

                <section id="shopify-section-template--15107347939380__164204962712e23f20"
                         class="shopify-section spaced-section subbanners-section spaced-section--full-width">
                    <link href="./css/section-tm-subbanners.css" rel="stylesheet" type="text/css" media="all">

                    <div class="tm-banners">
                        <div class="page-width page-width-desktop">
                            <div class="page-width-inner two-banner">
                                <div class="sub-banner banner-1">
                                    <a href="https://electshop-codezeel.myshopify.com/#">
                                        <div class="banner-inner">

                                            <img src="./all_files/cms-banner-1.jpg" itemprop="banner">

                                        </div>
                                        <div class="subbanner-description">
                                            <div class="subbanner-custom">
                                                <div class="cms-banner-title-three">Flat 20% Discount</div>
                                                <div class="cms-banner-subtitle-three"> Gamer Holding
                                                    <br>Black
                                                </div>

                                                <div class="text-button">
                                                    <div class="button cms__btn">
                                                        Shop Now
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="sub-banner banner-2">
                                    <a href="https://electshop-codezeel.myshopify.com/#">
                                        <div class="banner-inner">

                                            <img src="./all_files/cms-banner-2.jpg" itemprop="banner">

                                        </div>
                                        <div class="subbanner-description">
                                            <div class="subbanner-custom">
                                                <div class="cms-banner-title-three">Flat 30% Discount</div>
                                                <div class="cms-banner-subtitle-three">Tablet Lenovo <br>Yoga Tab</div>

                                                <div class="text-button">
                                                    <div class="button cms__btn">
                                                        Shop Now
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>




                <section id="shopify-section-template--15107347939380__1626176787d5514a31"
                         class="shopify-section brand-section spaced-section">
                    <link href="./css/tm-logo-bar.css" rel="stylesheet" type="text/css" media="all">
                    <div class="tm-logo">
                        <div class="page-width page-width-desktop">

                            <ul class="logo-bar owl-carousel owl-loaded owl-drag">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-2420px, 0px, 0px); transition: all 0.25s ease 0s; width: 3832px;">
                                        <div class="owl-item cloned" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/2@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/3@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/10@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/5@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/1@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/12@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/9@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/2@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/3@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/10@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/5@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/1@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/12@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned active" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/9@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned active" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/2@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned active" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/3@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned active" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/10@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned active" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/5@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 201.667px;">
                                            <li class="logo-bar__item">

                                                <a href="https://electshop-codezeel.myshopify.com/#"
                                                   class="logo-bar__link">


                                                    <img src="./all_files/1@2x.png" class="logo-bar__image">


                                                </a>

                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev"><span
                                            aria-label="Previous">‹</span></button>
                                    <button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </ul>


                        </div>
                    </div>

                    <script>
                        $(document).ready(function () {
                            $('.logo-bar').owlCarousel({
                                loop: !0,
                                nav: !1,
                                dots: !1,
                                autoplay: !0,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    320: {
                                        items: 2
                                    },
                                    600: {
                                        items: 3
                                    },
                                    750: {
                                        items: 4
                                    },
                                    990: {
                                        items: 5
                                    },
                                    1270: {
                                        items: 6
                                    }
                                }
                            })

                        });
                    </script>


                </section>
            </div>
        </div>
    </main>

    <section id="shopify-section-newsletter" class="shopify-section spaced-section spaced-section--full-width">
        <link href="./css/component-newsletter.css" rel="stylesheet" type="text/css" media="all">
        <link href="./css/newsletter-section.css" rel="stylesheet" type="text/css" media="all">

        <style>
            .newsletter {
                background-color: #129cb8;
            }
        </style>
        <div class="newsletter center">
            <div class="page-width page-width-desktop">

                <div class="newsletter__wrapper">
                    <div class="newsletter-left">
                        <!--?xml version="1.0" standalone="no"?-->

                        <svg class="icon icon-mail" version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                             preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M1463 3845 c-62 -27 -63 -35 -63 -435 0 -406 1 -414 67 -445 46 -22
    103 -7 132 34 19 26 21 46 23 264 l3 235 493 -436 493 -436 -488 -488 c-268
    -268 -491 -488 -495 -488 -5 0 -8 171 -8 381 l0 381 -34 34 c-39 39 -77 44
    -127 18 -41 -21 -59 -68 -59 -154 l0 -70 -272 0 c-150 0 -290 -3 -311 -7 -23
    -3 -50 -18 -68 -35 -56 -57 -29 -156 49 -178 21 -6 157 -10 320 -10 l282 0 0
    -326 c0 -269 3 -332 15 -358 31 -66 -117 -61 1825 -64 1262 -2 1776 0 1803 8
    25 7 45 22 57 43 19 31 20 60 20 1240 0 1310 2 1251 -52 1287 -33 22 -3555 27
    -3605 5z m3435 -1202 c1 -546 -1 -993 -5 -993 -12 0 -963 954 -962 965 0 5
    158 143 350 305 193 162 364 310 380 328 22 24 29 43 29 72 0 83 -95 136 -165
    92 -16 -11 -306 -254 -644 -541 -338 -287 -618 -520 -622 -519 -10 4 -1424
    1255 -1440 1274 -10 12 211 14 1532 12 l1544 -3 3 -992z m-1908 -354 c225
    -199 225 -199 269 -199 46 0 44 -1 290 208 l204 174 489 -489 c268 -268 488
    -491 488 -495 0 -5 -661 -8 -1470 -8 -808 0 -1470 3 -1470 7 0 5 221 229 492
    500 485 485 493 492 513 474 11 -10 99 -87 195 -172z"></path>
                                <path d="M263 3416 c-83 -37 -87 -153 -6 -197 21 -11 107 -14 472 -14 416 0
    449 1 475 18 35 23 58 76 50 116 -3 16 -19 42 -36 58 l-29 28 -447 2 c-365 2
    -453 0 -479 -11z"></path>
                                <path d="M86 2810 c-69 -21 -101 -90 -72 -152 32 -67 -37 -63 1021 -66 1079
    -3 1010 -7 1049 71 16 34 17 42 5 74 -8 20 -27 45 -42 57 -28 21 -29 21 -980
    23 -524 1 -965 -2 -981 -7z"></path>
                                <path d="M83 1763 c-32 -6 -72 -51 -79 -88 -7 -41 11 -81 49 -109 28 -20 40
    -21 446 -24 452 -3 477 -1 514 49 25 34 25 94 0 128 -36 48 -58 50 -498 49
    -226 0 -420 -3 -432 -5z"></path>
                            </g>
                        </svg>
                        <h2 class="h1">Connected with our email updates</h2>
                        <form method="post" action="https://electshop-codezeel.myshopify.com/contact#contact_form"
                              id="contact_form" accept-charset="UTF-8" class="newsletter-form"><input type="hidden"
                                                                                                      name="form_type"
                                                                                                      value="customer"><input
                                type="hidden" name="utf8" value="✓">
                            <input type="hidden" name="contact[tags]" value="newsletter">
                            <div class="newsletter-form__field-wrapper">
                                <div class="field">
                                    <input id="NewsletterForm--newsletter" type="email" name="contact[email]"
                                           class="field__input" value="" aria-required="true" autocorrect="off"
                                           autocapitalize="off" autocomplete="email" placeholder="Your email"
                                           required="">
                                    <label class="field__label" for="NewsletterForm--newsletter">
                                        Your email
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="newsletter__button button" name="commit">
                                <svg class="icon-send" aria-hidden="true" focusable="false" data-prefix="fas"
                                     data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                          d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <ul class="footer__list-social list-unstyled list-social" role="list">
                        <li class="list-social__item">
                            <a href="https://electshop-codezeel.myshopify.com/#"
                               class="link link--text list-social__link" aria-describedby="a11y-external-message">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter"
                                     viewBox="0 0 18 15">
                                    <path
                                        d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Twitter</span>
                            </a>
                        </li>
                        <li class="list-social__item">
                            <a href="https://electshop-codezeel.myshopify.com/#"
                               class="link link--text list-social__link" aria-describedby="a11y-external-message">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook"
                                     viewBox="0 0 18 18">
                                    <path
                                        d="M16.42.61c.27 0 .5.1.69.28.19.2.28.42.28.7v15.44c0 .27-.1.5-.28.69a.94.94 0 01-.7.28h-4.39v-6.7h2.25l.31-2.65h-2.56v-1.7c0-.4.1-.72.28-.93.18-.2.5-.32 1-.32h1.37V3.35c-.6-.06-1.27-.1-2.01-.1-1.01 0-1.83.3-2.45.9-.62.6-.93 1.44-.93 2.53v1.97H7.04v2.65h2.24V18H.98c-.28 0-.5-.1-.7-.28a.94.94 0 01-.28-.7V1.59c0-.27.1-.5.28-.69a.94.94 0 01.7-.28h15.44z">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Facebook</span>
                            </a>
                        </li>
                        <li class="list-social__item">
                            <a href="https://electshop-codezeel.myshopify.com/#"
                               class="link link--text list-social__link" aria-describedby="a11y-external-message">
                                <svg aria-hidden="true" focusable="false" role="presentation"
                                     class="icon icon-pinterest" viewBox="0 0 17 18">
                                    <path
                                        d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Pinterest</span>
                            </a>
                        </li>
                        <li class="list-social__item">
                            <a href="https://electshop-codezeel.myshopify.com/#"
                               class="link link--text list-social__link" aria-describedby="a11y-external-message">
                                <svg aria-hidden="true" focusable="false" role="presentation"
                                     class="icon icon-instagram" viewBox="0 0 18 18">
                                    <path
                                        d="M8.77 1.58c2.34 0 2.62.01 3.54.05.86.04 1.32.18 1.63.3.41.17.7.35 1.01.66.3.3.5.6.65 1 .12.32.27.78.3 1.64.05.92.06 1.2.06 3.54s-.01 2.62-.05 3.54a4.79 4.79 0 01-.3 1.63c-.17.41-.35.7-.66 1.01-.3.3-.6.5-1.01.66-.31.12-.77.26-1.63.3-.92.04-1.2.05-3.54.05s-2.62 0-3.55-.05a4.79 4.79 0 01-1.62-.3c-.42-.16-.7-.35-1.01-.66-.31-.3-.5-.6-.66-1a4.87 4.87 0 01-.3-1.64c-.04-.92-.05-1.2-.05-3.54s0-2.62.05-3.54c.04-.86.18-1.32.3-1.63.16-.41.35-.7.66-1.01.3-.3.6-.5 1-.65.32-.12.78-.27 1.63-.3.93-.05 1.2-.06 3.55-.06zm0-1.58C6.39 0 6.09.01 5.15.05c-.93.04-1.57.2-2.13.4-.57.23-1.06.54-1.55 1.02C1 1.96.7 2.45.46 3.02c-.22.56-.37 1.2-.4 2.13C0 6.1 0 6.4 0 8.77s.01 2.68.05 3.61c.04.94.2 1.57.4 2.13.23.58.54 1.07 1.02 1.56.49.48.98.78 1.55 1.01.56.22 1.2.37 2.13.4.94.05 1.24.06 3.62.06 2.39 0 2.68-.01 3.62-.05.93-.04 1.57-.2 2.13-.41a4.27 4.27 0 001.55-1.01c.49-.49.79-.98 1.01-1.56.22-.55.37-1.19.41-2.13.04-.93.05-1.23.05-3.61 0-2.39 0-2.68-.05-3.62a6.47 6.47 0 00-.4-2.13 4.27 4.27 0 00-1.02-1.55A4.35 4.35 0 0014.52.46a6.43 6.43 0 00-2.13-.41A69 69 0 008.77 0z">
                                    </path>
                                    <path
                                        d="M8.8 4a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.43a2.92 2.92 0 110-5.85 2.92 2.92 0 010 5.85zM13.43 5a1.05 1.05 0 100-2.1 1.05 1.05 0 000 2.1z">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Instagram</span>
                            </a>
                        </li>
                        <li class="list-social__item">
                            <a href="https://electshop-codezeel.myshopify.com/#"
                               class="link link--text list-social__link" aria-describedby="a11y-external-message">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube"
                                     viewBox="0 0 100 70">
                                    <path
                                        d="M98 11c2 7.7 2 24 2 24s0 16.3-2 24a12.5 12.5 0 01-9 9c-7.7 2-39 2-39 2s-31.3 0-39-2a12.5 12.5 0 01-9-9c-2-7.7-2-24-2-24s0-16.3 2-24c1.2-4.4 4.6-7.8 9-9 7.7-2 39-2 39-2s31.3 0 39 2c4.4 1.2 7.8 4.6 9 9zM40 50l26-15-26-15v30z">
                                    </path>
                                </svg>
                                <span class="visually-hidden">YouTube</span>
                            </a>
                        </li>
                        <li class="list-social__item--placeholder">Follow us on social media!</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

</x-head>
