 <?php
use App\Models\Category;
$cat = Category::all();

?>

 <nav class="menu-drawer__navigation">
                                        <ul class="menu-drawer__menu list-menu" role="list">
                                            <li><a href="https://electshop-codezeel.myshopify.com/"
                                                   class="menu-drawer__menu-item list-menu__item link link--text focus-inset menu-drawer__menu-item--active"
                                                   aria-current="page">
                                                    Bosh saxifa
                                                </a></li>
                                            <li>
                                                <details>
                                                    <summary
                                                        class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                                                        role="button" aria-expanded="false"
                                                        aria-controls="link-Electronics">
                                                        <a href="https://electshop-codezeel.myshopify.com/collections/electronics">
                                                            Kategoriyalar
                                                        </a>
                                                        <svg viewBox="0 0 14 10" fill="none" aria-hidden="true"
                                                             focusable="false" role="presentation"
                                                             class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                                                  fill="currentColor">
                                                            </path>
                                                        </svg>

                                                        <svg class="icon icon-caret" data-name="Layer 1"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 979.95 531.49">
                                                            <path
                                                                d="M22.14,246a40.74,40.74,0,0,0-.3,57.6l445.9,450a40.68,40.68,0,0,0,57.6.3c.2-.1.2-.3.4-.5.7-.6,1.6-.8,2.3-1.5L977.94,306a40.77,40.77,0,1,0-57.4-57.9l-423.3,419.5L79.74,246.24a40.83,40.83,0,0,0-57.6-.2Z"
                                                                transform="translate(-10.07 -234.26)"></path>
                                                        </svg>
                                                    </summary>
                                                    <div id="link-Electronics"
                                                         class="menu-drawer__submenu motion-reduce" tabindex="-1">

                                                        <div class="menu-drawer__inner-submenu">
                                                            <button
                                                                class="menu-drawer__close-button link link--text focus-inset"
                                                                aria-expanded="true">

                                                                <svg viewBox="0 0 14 10" fill="none" aria-hidden="true"
                                                                     focusable="false" role="presentation"
                                                                     class="icon icon-arrow"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                          d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                                                          fill="currentColor">
                                                                    </path>
                                                                </svg>

                                                                Kategoriyalar

                                                            </button>
                                                            <ul class="menu-drawer__menu list-menu" role="list"
                                                                tabindex="-1">
                                                                @foreach($cat as $categ)
                                                                <li>
                                                                    <details>
                                                                        <summary
                                                                            class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                                                            role="button" aria-expanded="false"
                                                                            aria-controls="childlink-Headphone">
                                                                            <a href="https://electshop-codezeel.myshopify.com/collections/electronics">
                                                                                {{ $categ->name }}
                                                                            </a>
                                                                            <svg viewBox="0 0 14 10" fill="none"
                                                                                 aria-hidden="true" focusable="false"
                                                                                 role="presentation"
                                                                                 class="icon icon-arrow"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                      clip-rule="evenodd"
                                                                                      d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                                                                      fill="currentColor">
                                                                                </path>
                                                                            </svg>

                                                                            <svg class="icon icon-caret"
                                                                                 data-name="Layer 1"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 979.95 531.49">
                                                                                <path
                                                                                    d="M22.14,246a40.74,40.74,0,0,0-.3,57.6l445.9,450a40.68,40.68,0,0,0,57.6.3c.2-.1.2-.3.4-.5.7-.6,1.6-.8,2.3-1.5L977.94,306a40.77,40.77,0,1,0-57.4-57.9l-423.3,419.5L79.74,246.24a40.83,40.83,0,0,0-57.6-.2Z"
                                                                                    transform="translate(-10.07 -234.26)"></path>
                                                                            </svg>
                                                                        </summary>
                                                                        <div id="childlink-Headphone"
                                                                             class="menu-drawer__submenu motion-reduce">
                                                                            <button
                                                                                class="menu-drawer__close-button link link--text focus-inset"
                                                                                aria-expanded="true">
                                                                                <svg viewBox="0 0 14 10" fill="none"
                                                                                     aria-hidden="true"
                                                                                     focusable="false"
                                                                                     role="presentation"
                                                                                     class="icon icon-arrow"
                                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                                    <path fill-rule="evenodd"
                                                                                          clip-rule="evenodd"
                                                                                          d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                                                                          fill="currentColor">
                                                                                    </path>
                                                                                </svg>

                                                                                {{ $categ->name }}
                                                                            </button>
                                                                            <ul class="menu-drawer__menu list-menu"
                                                                                role="list" tabindex="-1">
                                                                                @foreach($categ->podcategorys as $podcats)
                                                                                <li>
                                                                                    <a href="https://electshop-codezeel.myshopify.com/collections/tablet"
                                                                                       class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                                                                        {{ $podcats->name }}
                                                                                    </a>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </details>
                                                                </li>
                                                                @endforeach


                                                            </ul>
                                                        </div>
                                                    </div>
                                                </details>
                                            </li>

                                        </ul>
                                    </nav>
