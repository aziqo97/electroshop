<?php

use App\Models\Category;

$cat = Category::all();
?>
<style>
    .header__submenu .header__menu-item a {
    color: #147f67;
    font-size: 14px;
    margin-bottom: 10px;
    position: relative;
}
</style>
<nav class="header__inline-menu">
    <ul id="header-nav" class="list-menu list-menu--inline" role="list">
        <li><a href="/"
               class="header__menu-item header__menu-item list-menu__item link link--text focus-inset"
               aria-current="page">
                <span class="header__active-menu-item">Home</span>
            </a></li>
        <li>
            <summary class="header__menu-item list-menu__item link focus-inset">
                        <span>
                                                    <a href="https://electshop-codezeel.myshopify.com/collections/electronics">
                        Kataloglar
                        </a>
                    </span>
            </summary>
            <div class="sub-mega">
                <ul class="header__submenu list-menu list-menu--disclosure caption-large motion-reduce"
                    role="list" tabindex="-1">
                    @foreach($cat as $categ)
                        <li>
                            <summary class="header__menu-item link link--text list-menu__item focus-inset">
                                <a href="/cat/{{ $categ->id }}">
                                    {{ $categ->name }}
                                </a>
                            </summary>
                            <ul class="header__submenu list-menu motion-reduce">
                                @foreach($categ->podcategorys as $podcats)
                                    <li>
                                        <a href="/podcat/{{ $podcats->id }}"
                                           class="header__menu-item list-menu__item link link--text focus-inset">
                                            {{ $podcats->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach


                </ul>
            </div>
        </li>
        <li><a href="/todayselled"
               class="header__menu-item header__menu-item list-menu__item link link--text focus-inset">
                <span>Bugun sotilgan maxsulotlar</span>
            </a></li>
        <li><a href="/sales"
               class="header__menu-item header__menu-item list-menu__item link link--text focus-inset">
                <span>Aksiyalar</span>
            </a></li>
        <li><a href="/mostselled"
               class="header__menu-item header__menu-item list-menu__item link link--text focus-inset">
                <span>Eng ko'p sotilgan maxsulotlar</span>
            </a></li>
    </ul>
</nav>
