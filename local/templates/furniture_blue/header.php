<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf8">
    <?php $APPLICATION->ShowHead();?>
    <title><?php $APPLICATION->ShowTitle()?></title>
<!--    <link rel="stylesheet" href="--><?php //=SITE_TEMPLATE_PATH?><!--/template_styles.css"/>-->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/functions.js"></script>
    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
    <div id="panel"><?php $APPLICATION->ShowPanel();?></div>
    <div class="wrap">
        <div class="hd_header_area">
            <div class="hd_header">
                <table>
                    <tr>
                        <td rowspan="2" class="hd_companyname">
                            <h1><a href="">Мебельный магазин</a></h1>
                        </td>
                        <td rowspan="2" class="hd_txarea">
                            <span class="tel">8 (495) 212-85-06</span>	<br/>
                            время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>
                        </td>
                        <td style="width:232px">
                            <form action="">
                                <div class="hd_search_form" style="float:right;">
                                    <input placeholder="Поиск" type="text"/>
                                    <input type="submit" value=""/>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Войти на сайт</span>
								<form name="" method="" action="">

									<input placeholder="Логин"  type="text">
									<input  placeholder="Пароль"  type="password">
									<a href="/" class="hd_forgotpassword">Забыли пароль</a>

									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
									</div>
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Закрыть</span>
							</div>
							</span><br>
                            <a href="" class="hd_signup">Зарегистрироваться</a>
                        </td>
                    </tr>
                </table>
                <?php CJSCore::Init(array('jquery'));?>
                <?php $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel1", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "Y",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel1",
		"MENU_THEME" => "site"
	),
	false
);?>
            </div>
        </div>

        <!--- // end header area --->
        <div class="bc_breadcrumbs">
            <ul>
                <li><a href="">Каталог</a></li>
                <li><a href="">Мебель</a></li>
                <li><a href="">Выставки и события</a></li>
            </ul>
            <div class="clearboth"></div>
        </div>
        <div class="main_container page">
            <div class="mn_container">
                <div class="mn_content">
                    <div class="main_post">
                        <div class="main_title">
                            <h1><?php $APPLICATION->ShowTitle()?></h1>
                        </div>