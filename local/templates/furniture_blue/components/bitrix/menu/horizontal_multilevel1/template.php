<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
<div class="nv_topnav">
    <ul>
        <li><a href="/" class="menu-img-fon" style="background-image: url(<?=$templateFolder?>/images/nv_home.png);"><span></span></a></li>
    <?php
    $previousLevel = 0;
    foreach($arResult as $arItem):?>

        <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
            <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?php endif?>

        <?php if ($arItem["IS_PARENT"]):?>

                <li>
                    <a href="<?=$arItem["LINK"]?>"><?= ($arItem["DEPTH_LEVEL"] === 1) ? "<span>" . $arItem["TEXT"] .  "</span>" :  $arItem["TEXT"] ?></span></a>
                    <ul>

        <?php else:?>

                <li>
                    <a href="<?=$arItem["LINK"]?>"><?= ($arItem["DEPTH_LEVEL"] === 1) ? "<span>" . $arItem["TEXT"] .  "</span>" :  $arItem["TEXT"] ?></a>
                </li>

        <?php endif?>

        <?php $previousLevel = $arItem["DEPTH_LEVEL"];?>

    <?php endforeach?>

        <?php if ($previousLevel > 1)://close last item tags?>
        <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
        <?php endif?>
        <div class="clearboth"></div>
    </ul>
</div>

<?php endif?>