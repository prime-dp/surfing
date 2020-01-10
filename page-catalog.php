<?php
/**
 * Template name: Каталог
 */

get_header();
?>

<article>
    <section class="catalog-section-wrap">
        <div class="container">
            <div class="page-title">
                <a href="http://starttools/" class="main-page-link">Главная</a><span>/</span>Каталог товаров
            </div>
            <div class="article-title-wrap-for-pseudo-100">
                <div class="article-title-wrap">
                    <h3>Каталог</h3>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-lg-3 col-12 catalog-product-item-wrap">
                    <a href="" class="catalog-product-item">
                        <span class="img-wrap">
                            <picture>
                                <source media="(max-width: 991px") srcset="<?php echo get_template_directory_uri()?>/img/grinder-catalog-575.png">
                                <img src="<?php echo get_template_directory_uri()?>/img/grinder-catalog.png" alt="" class="img-fluid">
                            </picture>
                        </span>
                        <span class="catalog-product-item-title">Электроинструмент</span>
                    </a>
                </div>
                <div class="col-lg-3 col-12 catalog-product-item-wrap">
                    <a href="" class="catalog-product-item">
                        <span class="img-wrap">
                            <picture>
                                <source media="(max-width: 991px") srcset="<?php echo get_template_directory_uri()?>/img/screwdriver-catalog-575.png">
                                <img src="<?php echo get_template_directory_uri()?>/img/screwdriver-catalog.png" alt="" class="img-fluid">
                            </picture>
                        </span>
                        <span class="catalog-product-item-title">Аккумуляторный<br>инструмент</span>
                    </a>
                </div>
                <div class="col-lg-3 col-12 catalog-product-item-wrap">
                    <a href="" class="catalog-product-item">
                        <span class="img-wrap">
                            <picture>
                                <source media="(max-width: 991px") srcset="<?php echo get_template_directory_uri()?>/img/saw-catalog-575.png">
                                <img src="<?php echo get_template_directory_uri()?>/img/saw-catalog.png" alt="" class="img-fluid">
                            </picture>
                        </span>
                        <span class="catalog-product-item-title">Садовый инструмент</span>
                    </a>
                </div>
                <div class="col-lg-3 col-12 catalog-product-item-wrap">
                    <a href="" class="catalog-product-item">
                        <span class="img-wrap">
                            <picture>
                                <source media="(max-width: 991px") srcset="<?php echo get_template_directory_uri()?>/img/equipment-catalog-575.png">
                                <img src="<?php echo get_template_directory_uri()?>/img/equipment-catalog.png" alt="" class="img-fluid">
                            </picture>
                        </span>
                        <span class="catalog-product-item-title">Оборудование</span>
                    </a>
                </div>
                <div class="col-lg-3 col-12 catalog-product-item-wrap">
                    <a href="" class="catalog-product-item">
                        <span class="img-wrap">
                            <picture>
                                <source media="(max-width: 991px") srcset="<?php echo get_template_directory_uri()?>/img/spares-catalog-575.png">
                                <img src="<?php echo get_template_directory_uri()?>/img/spares-catalog.png" alt="" class="img-fluid">
                            </picture>
                        </span>
                        <span class="catalog-product-item-title">Запчасти</span>
                    </a>
                </div>
                <div class="col-lg-3 col-12 catalog-product-item-wrap">
                    <a href="" class="catalog-product-item">
                        <span class="img-wrap">
                            <picture>
                                <source media="(max-width: 991px") srcset="<?php echo get_template_directory_uri()?>/img/promotions-catalog-575.png">
                                <img src="<?php echo get_template_directory_uri()?>/img/promotions-catalog.png" alt="" class="img-fluid">
                            </picture>
                        </span>
                        <span class="catalog-product-item-title">Акции</span>
                    </a>
                </div>
                <div class="col-lg-3 col-12 catalog-product-item-wrap">
                    <a href="" class="catalog-product-item">
                        <span class="img-wrap">
                            <picture>
                                <source media="(max-width: 991px") srcset="<?php echo get_template_directory_uri()?>/img/promotions-catalog-575.png">
                                <img src="<?php echo get_template_directory_uri()?>/img/promotions-catalog.png" alt="" class="img-fluid">
                            </picture>
                        </span>
                        <span class="catalog-product-item-title">Уценённые<br>товары</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</article>

<?php
get_footer();

