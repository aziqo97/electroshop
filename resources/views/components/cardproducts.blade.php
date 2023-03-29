

                                <div class="cart_content">
                                    <div class="cart-block-content">
                                        <ul class="cart_content-block">
@foreach ($data as $datas)
    <?php

        $yubor[] = $datas['product_price'];


        ?>
                                            <li class="tm_cart_block">
                                                <div class="tm-cart-image-block">
                                                    <a href="/products/{{ $datas['product_id'] }}">
                                                      <?php
                                    $a = json_decode($datas['product_photos']);
                                foreach ($a as $fotos){
                                    $split = explode(".png", $fotos);
                                    ?>

                                                        <img class="cart__image"
                                                             src="/product-photos/{{ $split[0] }}.png"
                                                             alt="Beats Solo3 Wireless Headphones Beats" width="70"
                                                             height="72" loading="lazy">
                                                        <?php
                                }
                                    ?>
                                                    </a>
                                                </div>
                                                <div class="tm-productdetails">
                                                    <div class="product-item__title">
                                                        <a href="/products/{{ $datas['product_id'] }}">
                                                            {{ $datas['product_name'] }}
                                                        </a>
                                                        <div class="product-item__price">
                                                            <span class="quantity">{{ $datas['product_price'] }} Sum</span>
                                                        </div>
                                                    </div>
                                                    <a class="item_remove_btn" href="/delcart/{{ $datas['product_id'] }}"
                                                       onclick="Shopify.removeItem(40357264752692,1)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                             aria-hidden="true" focusable="false" role="presentation"
                                                             class="icon icon-remove">
                                                            <path
                                                                d="M14 3h-3.53a3.07 3.07 0 00-.6-1.65C9.44.82 8.8.5 8 .5s-1.44.32-1.87.85A3.06 3.06 0 005.53 3H2a.5.5 0 000 1h1.25v10c0 .28.22.5.5.5h8.5a.5.5 0 00.5-.5V4H14a.5.5 0 000-1zM6.91 1.98c.23-.29.58-.48 1.09-.48s.85.19 1.09.48c.2.24.3.6.36 1.02h-2.9c.05-.42.17-.78.36-1.02zm4.84 11.52h-7.5V4h7.5v9.5z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M6.55 5.25a.5.5 0 00-.5.5v6a.5.5 0 001 0v-6a.5.5 0 00-.5-.5zM9.45 5.25a.5.5 0 00-.5.5v6a.5.5 0 001 0v-6a.5.5 0 00-.5-.5z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </a>
                                                </div>

                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>

                                    <div class="cart-summary">
                                        <div class="cart-total">
                                            <div class="cart-total-title">
                                                <span class="cart__subtotal-title">Jami</span>
                                            </div>
                                            <div class="cart-product-count">
                                                <span>{{ count($_COOKIE['tovar']) }}</span>
                                            </div>
                                        </div>
                                        <div class="subtotal">
                                            <span class="cart__subtotal-title">Umumiy summa</span>
                                            <span class="cart__subtotal">                                    <?php
 echo array_sum($yubor);
  ?></span>
                                        </div>
                                    </div>
                                    <div class="cart-viewcart">
                                        <a href="/cardlistall"
                                           class="dropdown-site-header__cart cart button button--full-width">Savatchani o'liq ko'rish</a>
                                        <a href="/order"
                                           class="dropdown-site-header__cart checkout button button--full-width">Buyurtma berish</a>
                                    </div>

                                </div>

