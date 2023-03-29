<section class="shopify-section spaced-section slideshow spaced-section--full-width">
    <link href="./css/section-slideshow.css" rel="stylesheet" type="text/css" media="all">
    <link href="./css/flexslider.css" rel="stylesheet" type="text/css" media="all">


    <div class="flexslider">
        <ul class="slides">
            <li class="flex-active-slide" data-thumb-alt=""
                style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                <img src="./all_files/main-banner-1_1903x.jpg" draggable="false">
                <div class="slideshow-text">
                    <div class="slideshow__slidetitle">
                        Aksiya 50%
                    </div>

                    <div class="slideshow__subheading">
                        Bunday imkoniyat bo'lmaydi
                    </div>


                    <div class="slideshow__btn-wrapper">
                        <a href="/#" class="btn slideshow__btn button">
                            Buyurtma berish
                        </a>
                    </div>

                    <style>
                        .btn.slideshow__btn.button {
                            background-color: #129cb8;
                            color: #ffffff;
                        }
                    </style>
                </div>
            </li>
            <li data-thumb-alt=""
                style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                class=""><img src="./all_files/main-banner-2_1903x.jpg" draggable="false">
                <div class="slideshow-text">
                    <div class="slideshow__slidetitle">
                        Aksiya 40%
                    </div>

                    <div class="slideshow__subheading">
                         Bunday imkoniyat bo'lmaydi
                    </div>


                    <div class="slideshow__btn-wrapper">
                        <a href="/#" class="btn slideshow__btn button">
                            Sotib olish
                        </a>
                    </div>

                    <style>
                        .btn.slideshow__btn.button {
                            background-color: #129cb8;
                            color: #ffffff;
                        }
                    </style>
                </div>
            </li>
        </ul>
        <ol class="flex-control-nav flex-control-paging">
            <li><a href="/#" class="flex-active">1</a></li>
            <li><a href="/#" class="">2</a></li>
        </ol>
        <ul class="flex-direction-nav">
            <li class="flex-nav-prev"><a class="flex-prev"
                    href="/#">Previous</a></li>
            <li class="flex-nav-next"><a class="flex-next" href="/#">Next</a>
            </li>
        </ul>
    </div>

    <script src="./js/jquery.flexslider.js" defer="defer"></script>

    <script type="text/javascript" charset="utf-8">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "fade",
                controlNav: true

            });
        });
    </script>


</section>
