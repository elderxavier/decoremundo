<?php
    header('Content-type: text/css; charset: UTF-8');
    header('Cache-Control: must-revalidate');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
    $url = $_REQUEST['url'];
?>

.mobilemenu>li.first {
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
	behavior: url(<?php echo $url; ?>css/css3.htc);
	position: relative;
}
.mobilemenu>li.last {
	-webkit-border-radius:0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
	behavior: url(<?php echo $url; ?>css/css3.htc);
	position: relative;
}
#Example_F {
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px#888;
	box-shadow: 0 0 5px 5px #888;
}

.select-lang:before {
width: 18px;
height: 18px;
background: #fff url(../images/select_lang.png) no-repeat scroll 50% 50%;
content: "";
display: block;
position: absolute;
top: 2px;
right: 0;
pointer-events: none;
}
.select-sortby:before {
width: 18px;
height: 18px;
background: #fff url(../images/select_lang.png) no-repeat scroll 50% 50%;
content: "";
display: block;
position: absolute;
top: 6px;
right: 26px;
pointer-events: none;
}
.select-limiter:before {
width: 18px;
height: 18px;
background: #fff url(../images/select_lang.png) no-repeat scroll 50% 50%;
content: "";
display: block;
position: absolute;
top: 6px;
right: 6px;
pointer-events: none;
}

.header .form-search button.button span, .header .form-search button.button:hover span, .products-grid .item-inner, .onsaleproductslider-item .item-inner, button.button span, button.button:hover span, .pager .view-mode span a, .products-list li.item, .ma-thumbnail-container .flex-direction-nav a{
    transition: 0.5s ease-out;
    -webkit-transition: 0.5s ease-out;
    -moz-transition: 0.5s ease-out;
}

.pt_custommenu div.popup{
    box-shadow: 0 2px 5px #ccc;
    -webkit-box-shadow: 0 2px 5px #ccc;
    -moz-box-shadow: 0 2px 5px #ccc;
}

.products-grid .actions .add-to-links li a, .products-grid .actions button.button span, .ma-onsaleproductslider-container .flex-direction-nav a, .onsaleproductslider-item .actions .add-to-links li a, .onsaleproductslider-item .actions button.button span, .ma-brand-slider-contain .flex-direction-nav a, .footer .footer-static3 a, .pager .pages .current, .pager .pages a, .ma-upsellslider-container .flex-direction-nav a, #back-top {
    border-radius: 50px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    transition: 0.5s ease-out;
    -webkit-transition: 0.5s ease-out;
    -moz-transition: 0.5s ease-out;
}

.toolbar-bottom .pager .pages a, .toolbar-bottom .pager .pages .current{
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
}

.block-layered-nav .block-content #search button.button span{
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}

.product-image:hover img, .home-banner-bottom .banner-box a:hover img, .banner-static-contain .banner-box a:hover img, .block-banner-left a:hover img, .custom-menu-bottom a:hover img, .blockright a:hover img, .static_block_custom_menu .static-menu-img a:hover img{
    opacity: 0.8;
    -webkit-opacity: 0.8;
    -moz-opacity: 0.8;
}