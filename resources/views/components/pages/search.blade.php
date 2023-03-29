<x-head>
    <main class="main-content" id="MainContent" role="main" tabindex="-1">
        <div id="shopify-section-template--15107347906612__product-grid"
             class="shopify-section spaced-section collection-grid-section">
            <link
                href="/podcat/template-collection.css?v=22882562366885724611658745933"
                rel="stylesheet" type="text/css" media="all">
            <link
                href="/podcat/component-loading-overlay.css?v=135534932159979988391656133556"
                rel="stylesheet" type="text/css" media="all">
            <link
                href="/podcat/tm-sidebar.css?v=151023185122051269191656668884"
                rel="stylesheet" type="text/css" media="all">

            <link rel="stylesheet"
                  href="/podcat/component-card.css?v=176760420587347110931658223113"
                  as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link rel="stylesheet"
                  href="/podcat/component-price.css?v=44201472094399127451656494868"
                  as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link rel="stylesheet"
                  href="/podcat/component-badge.css?v=178422458509255417231658223082"
                  as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link rel="stylesheet"
                  href="/podcat/component-rte.css?v=24370899783461399961656422194"
                  as="style" onload="this.onload=null;this.rel='stylesheet'">


            <div id="ProductGridContainer">
                <div class="collection page-width">
                    <div id="products" class="row list-group ">
                        <ul id="product-grid" data-id="template--15107347906612__product-grid" class="item grid grid--2-col
             grid--3-col-tablet grid--4-col-desktop  grid--one-third-max  grid--quarter-max
           negative-margin">

                            @foreach($products as $products)
                                <li class="grid__item">
                                    <span class="products">
                                        <div class="card-wrapper">
                                            <div class="card-img">
                                                <a href="/product/{{ $products->id }}"
                                                   class="full-unstyled-link">
                                                    <span class="visually-hidden">{{ $products->name }}</span>
                                                    <div class="card card--product" tabindex="-1">
                                                        <div class="card__inner">
                                                            <div>
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
                                                                        alt="Rose Gold Apple Smart Watch Series 2"
                                                                        loading="lazy" class="motion-reduce" width="973"
                                                                        height="1000">
                                                                </div>
                                                                <?
                                                                }
                                                                    ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </a>

                                            </div>



                                            <div class="card-information">
                                                <div class="card-information__wrapper"><span class="card-information__text h5">
                                                        <a
                                                            href="/product/{{ $products->id }}">
                                                            {{ $products->name }}
                                                        </a>
                                                    </span>
                                                    <div class="price  price--on-sale ">
                                                        <dl>
                                                            <div class="price__regular">
                                                                <dt>
                                                                    <span
                                                                        class="visually-hidden visually-hidden--inline">{{ $products->price }}</span>
                                                                </dt>
                                                                <dd>
                                                                    <span class="price-item price-item--regular">
                                                                        {{ $products->price }}
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
                                                                        {{ $products->price }}
                                                                    </span>
                                                                </dd>
                                                                <dt class="price__compare">
                                                                    <span
                                                                        class="visually-hidden visually-hidden--inline">Regular
                                                                        price</span>
                                                                </dt>
                                                                <dd class="price__compare">
                                                                    <s class="price-item price-item--regular">
                                                                        ${{ $products->price }}
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
{{ $productlist->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-head>
