<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section id="single-product-page">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-6 product-preview p-0">
        <div class="row">
          <div class="col-12 title">
            <h3><?=$arResult["NAME"]?></h3>
           
          </div>
		 
          <div class="col-12">
  <div class="slider slider-for">
  <div class="item"> 
  <img class="img"  src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"  alt="">
 </div>
 <div class="item">
 <img class="img" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
 </div>
 <div class="item">
 <img class="img"  src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
 </div>
  </div>
  <div class="col-12">
  <div class="slider slider-nav">
  
  <div class="item"> 
  <div class="center">
  <img class="img-small" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"  alt="">
 </div>
 </div>
 <div class="item">
 <div class="center">
 <img class="img-small" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
 </div>
</div>
 <div class="item">
 <div class="center">
 <img class="img-small" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
 </div>
</div>
  </div>
  </div>

</div>
         
        </div>
		
      </div>
      <div class="col-lg-6 product-info">
        <div class="top-info">
          <div class="row">
            <div class="col-lg-4 col-12">
				
              <div class="price">
                3880 ₽
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="old-price">
                5550 ₽
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="add-to-cart-single">
                <button class="minus">-</button>
                <input type="text" class="count" name="count" id="count" placeholder="0" value="0">
                <button class="plus">+</button>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="add-to-cart-btn-wrapper">
                <button class="add-to-cart">Добавить в корзину</button>
              </div>
            </div>
          </div>
        </div>
        <div class="properties">
          <ul>
            <li>
              Страна производства: <span><?=$arResult["DETAIL_TEXT"]?></span>
            </li>
            <li>
              Гарантия производителя: <span></span>
            </li>
            <li>
              Тип: <span></span>
            </li>
            <li>
              Потребляемая мощность: <span></span>
            </li>
            <li>
              Свойство: <span></span>
            </li>
            <li>
              Характеристика: <span></span>
            </li>
            <li>
              Страна производства: <span></span>
            </li>
            <li>
              Гарантия производителя: <span></span>
            </li>
            <li>
              Тип: <span></span>
            </li>
            <li>
              Потребляемая мощность: <span></span>
            </li>
            <li>
              Свойство: <span></span>
            </li>
            <li>
              Характеристика: <span></span>
            </li>
          </ul>
          <p class="all-properties show">Все характеристики</p>
          <p class="close-props">Скрыть характеристики</p>
        </div>

      </div>
    </div>
  </div>
</section>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"template4",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "2",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>