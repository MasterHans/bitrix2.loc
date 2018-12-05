<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html>
<head>
    <?php
    use \Bitrix\Main\Page\Asset;
        $APPLICATION->ShowHead();
    ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/bootstrap.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/nav.css');


    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/jquery.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/jquery.easydropdown.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/scripts.js');

    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
    Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>");
    ?>

</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<!-- header-section-starts -->
<div class="header" id="home">
    <div class="top-header">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/logo.png" alt="" /></a>
            </div>
            <div class="header-top-right">
                <!-- start search-->
                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        <form>
                            <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                        </form>
                    </div>
                </div>
                <!-- search-scripts -->
                <script src="<?=DEFAULT_TEMPLATE_PATH;?>/js/classie.js"></script>
                <script src="<?=DEFAULT_TEMPLATE_PATH;?>/js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!-- //search-scripts -->

                <a href="cart.html"><i class="cart"></i></a>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "main",
                    "USE_EXT" => "Y"
                )
            );?>
<!--            <div class="navigation">-->
<!--                <div>-->
<!--                    <label class="mobile_menu" for="mobile_menu">-->
<!--                        <span>Menu</span>-->
<!--                    </label>-->
<!--                    <input id="mobile_menu" type="checkbox">-->
<!--                    <ul class="nav">-->
<!--                        <li class="active"><a href="index.html">Home</a></li>-->
<!--                        <li class="dropdown1"><a href="#">Dresses</a>-->
<!--                            <ul class="dropdown2">-->
<!--                                <li><a href="products.html">Dress Materials</a></li>-->
<!--                                <li><a href="products.html">Kurta & Kurti</a></li>-->
<!--                                <li><a href="products.html">Sarees</a></li>-->
<!--                                <li><a href="products.html">Chudidars</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="dropdown1"><a href="#">Bags</a>-->
<!--                            <ul class="dropdown2">-->
<!--                                <li><a href="products.html">Latest</a></li>-->
<!--                                <li><a href="products.html">Leather Bags</a></li>-->
<!--                                <li><a href="products.html">Hand Bags</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        </li>-->
<!--                        <li class="dropdown1"><a href="#">Shoes</a>-->
<!--                            <ul class="dropdown2">-->
<!--                                <li><a href="products.html">Sports Shoes</a></li>-->
<!--                                <li><a href="products.html">Casual Shoes</a></li>-->
<!--                                <li><a href="products.html">Formal Shoes</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li><a href="contact.html">Contact US</a></li>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->



        </div>
    </div>
    <div class="banner">