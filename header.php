<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=768, minimum-scale=0, maximum-scale=1.0, user-scalable=no,  shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header">
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-login-wrap" id="modal-login">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="article-title-wrap-for-pseudo-100">
                    <div class="article-title-wrap">
                        <span>Вход</span>
                    </div>
                </div>
                <form class="login-form" id="login-form">
                    <div class="control-group">
                        <div class="controls login-input-wrap">
                            <input type="email" class="form-control" placeholder="Введите E-mail*" id="login-input">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="password" class="form-control" placeholder="Введите пароль*">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label class="custom-checkbox">
                                Запомнить меня
                                <input type="checkbox" class="gui-form-checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="pass-recovery-wrapper">
                            <button type="button" class="btn-pass-recovery">Забыли пароль?</button>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="subscribe-btn" id="login-btn">Войти</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="position-fixed header-wrap" id="header-wrap">
        <div class="login-top-bar-wrap position-relative">
            <div class="container login-top-bar">
                <div class="row justify-content-between">
                    <div class="col-lg-9 col-xl-8 col">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-2 d-lg-none pl-0">
                                <div id="nav-icon1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-lg-auto col-5 exchange-rates">usd <span>28.17</span></div>
                            <div class="col-auto d-none d-lg-flex schedule-wrap">
                                <i class="icon-clock schedule-icon-clock"></i>
                                <div class="schedule"><span>Пн-Пт. 8:00-21:00</span></div>
                                <div class="schedule"><span>Сб. 9:00-20:00</span></div>
                                <div class="schedule"><span>Вс. 10:00-19:00</span></div>
                            </div>
                            <div class="col-auto d-none d-lg-flex phone-wrap align-items-baseline">
                                <div class="">
                                    <img src="<?php echo get_template_directory_uri()?>/img/Phone.png" alt="">
                                </div>
                                <div class="">
                                    <a href="tel:0-800-338-571" title="Позвонить нам по номеру: 0-800-338-571" class="phone">0-800-338-571</a>
                                    <span class="d-block">Бесплатно по Украине</span>
                                </div>
                            </div>
                            <div class="col-5 d-lg-none mobile-purchases-wrap align-items-center d-flex justify-content-between">
                                <div><i class="icon-search mobile-purchases-icon"></i></div>
                                <a href=""><i class="icon-compare mobile-purchases-icon"></i></a>
                                <a href=""><i class="icon-basket mobile-purchases-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 login-wrap d-none d-lg-flex align-items-center justify-content-end">
                        <div class="login align-items-center d-flex">
                            <img class="login-img" src="<?php echo get_template_directory_uri()?>/img/login.png" alt="">
                            <button type="button" class="" data-toggle="modal" data-target="#exampleModalCenter">Вход</button>
                            <span>/</span>
                            <a href="">Регистрация</a>
                        </div>
                        <div class="language-selector position-relative">
                            <a href="" class="current-language d-flex align-items-center"><div>Ru</div><div class="current-language-arrow-wrap d-flex align-items-center"><i class="icon-down"></i></div></a>
                            <div class="language-list-wrap">
                                <ul class="language-list">
                                    <li><a class="language-list-item" href="">RU</a></li>
                                    <li><a class="language-list-item" href="">UA</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-mobile w-100 position-absolute">
                <form class="d-flex position-relative container">
                    <input class="search-input w-100" name="s" placeholder="Введите для поиска" type="search" aria-label="Search">
                    <button class="search-button h-100 d-flex align-items-center" type="submit">Поиск</button>
                </form>
            </div>
        </div>
        <div class="mobile-menu w-100 d-flex d-lg-none flex-column position-fixed">
            <div class="language-mobile-wrap d-flex justify-content-center">
                <ul class="language-mobile pl-0 mb-0 d-inline-flex">
                    <li><a class="language-list-item active" href="">RU</a></li>
                    <li><a class="language-list-item" href="">UA</a></li>
                </ul>
            </div>
            <div class="login justify-content-center d-flex align-items-center">
                <a href="">Вход</a>
                <span>/</span>
                <a href="">Регистрация</a>
            </div>

            <!--КАТАЛОГ-MOBILE-НАЧАЛО-->
            <div class="catalog-button-mobile-wrap position-relative">
                <div class="d-flex align-items-center mr-0 catalog-button">
                    <div class="nav-icon">
                        <div class=""></div>
                    </div>
                    <span class="catalog-button-text">Каталог товаров</span>
                </div>
                <ul class="catalog-menu pl-0 mb-0 overflow-hidden">
                    <li class="catalog-menu-item-wrap">
                        <a href="" class="catalog-menu-item mobile-menu-item-wrap">
                            <div class="catalog-menu-item-text m-0 mobile-menu-item">Электроинструмент</div>
                        </a>
                    </li>
                    <li class="catalog-menu-item-wrap">
                        <a href="" class="catalog-menu-item mobile-menu-item-wrap">
                            <div class="catalog-menu-item-text no-border m-0 mobile-menu-item">Аккумуляторный инструмент</div>
                        </a>
                    </li>
                    <li class="catalog-menu-item-wrap">
                        <a href="" class="catalog-menu-item mobile-menu-item-wrap">
                            <div class="catalog-menu-item-text no-border m-0 mobile-menu-item">Садовый инструмент</div>
                        </a>
                    </li>
                    <li class="catalog-menu-item-wrap">
                        <a href="" class="catalog-menu-item mobile-menu-item-wrap">
                            <div class="catalog-menu-item-text no-border m-0 mobile-menu-item">Оборудование</div>
                        </a>
                    </li>
                    <li class="catalog-menu-item-wrap">
                        <a href="" class="catalog-menu-item mobile-menu-item-wrap">
                            <div class="catalog-menu-item-text no-border m-0 mobile-menu-item">Запчасти</div>
                        </a>
                    </li>
                    <li class="catalog-menu-item-wrap">
                        <a href="" class="catalog-menu-item mobile-menu-item-wrap">
                            <div class="catalog-menu-item-text no-border m-0 mobile-menu-item">Акции</div>
                        </a>
                    </li>
                    <li class="catalog-menu-item-wrap">
                        <a href="" class="catalog-menu-item mobile-menu-item-wrap">
                            <div class="catalog-menu-item-text no-border m-0 mobile-menu-item">Уценённые товары</div>
                        </a>
                    </li>
                    <li class="catalog-menu-border position-relative"></li>
                </ul>
            </div>

            <a href="" class="mobile-menu-item-wrap">
                <span class="mobile-menu-item">Доставка и оплата</span>
            </a>
            <a href="" class="mobile-menu-item-wrap">
                <span class="mobile-menu-item">Новости</span>
            </a>
            <a href="" class="mobile-menu-item-wrap">
                <span class="mobile-menu-item">Видео</span>
            </a>
            <a href="" class="mobile-menu-item-wrap">
                <span class="mobile-menu-item">Контакты</span>
            </a>

        </div>
        <!--КАТАЛОГ-MOBILE-КОНЕЦ-->
        <div class="container">
            <div class="top-nav-wrap">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-auto col-lg-3 col-6 logo d-flex align-items-center flex-column">
                        <a href="http://starttools/" title="StartTools">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/Logo.png" alt="">
                        </a>
                        <div class="logo-description">Официальный сайт компании</div>
                    </div>
                    <div class="col-6 d-lg-none phone-wrap mobile-phone-wrap d-flex justify-content-end">
                        <div class="d-flex align-items-center flex-column">
                            <a href="tel:0-800-338-571" class="footer-nav-telephone mobile-phone d-inline-flex" title="Позвонить нам по номеру: 0-800-338-571">0-800-338-571</a>
                            <span class="">Бесплатно по Украине</span>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand col d-none d-lg-flex position-relative">
                        <ul class="navbar-nav d-flex justify-content-between w-100">
                            <li class="nav-item col-auto">
                                <a href="" class="top-nav-menu-item">Доставка и оплата</a>
                            </li>
                            <li class="nav-item col-auto position-relative top-nav-menu-item-with-sub-menu">
                                <a href="" class="top-nav-menu-item">Блог<i class="icon-down icon-down-header-nav"></i></a>
                                <div class="sub-menu-wrap">
                                    <ul class="sub-menu">
                                        <li><a href="" class="sub-menu-item">Новости</a></li>
                                        <li><a href="" class="sub-menu-item">Видео</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item col-auto">
                                <a href="" class="top-nav-menu-item">Контакты</a>
                            </li>
                            <li class="nav-item col-auto position-relative top-nav-menu-item-with-sub-menu">
                                <a href="" class="top-nav-menu-item">Помощь<i class="icon-down icon-down-header-nav"></i></a>
                                <div class="sub-menu-wrap">
                                    <ul class="sub-menu">
                                        <li><a href="" class="sub-menu-item">Сервисное обслуживание</a></li>
                                        <li><a href="" class="sub-menu-item">Условия сотрудничества</a></li>
                                        <li><a href="" class="sub-menu-item">Задать вопрос</a></li>
                                        <li><a href="" class="sub-menu-item">Справочные материалы</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div class="col-3 d-lg-block d-none">
                        <a href="" class="additional-guarantee text-center">Дополнительная гарантия</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid catalog-wrap-border d-lg-block d-none"></div>
        <div class="container position-relative d-lg-block d-none">
            <div class="row">
                <div class="col-3 position-static p-0 catalog-button-wrap">
                    <a href="http://starttools/catalog/" class="d-flex catalog-button">
                        <div class="nav-icon">
                            <div class=""></div>
                        </div>
                        <span class="catalog-button-text">Каталог товаров</span>
                    </a>
                    <div class="catalog-wrap">
                        <ul class="catalog-menu pl-0 d-block">
                            <li class="catalog-menu-item-wrap">
                                <a href="" class="catalog-menu-item">
                                    <i class="icon-grinder catalog-menu-icon"></i>
                                    <div class="catalog-menu-item-text">Электроинструмент</div>
                                    <span class="catalog-arrow-wrap text-center">
                                        <i class="icon-right-open-big"></i>
                                    </span>
                                </a>
                                <div class="catalog-sub-menu-item-wrap position-absolute">
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                </div>
                            </li>
                            <li class="catalog-menu-item-wrap">
                                <a href="" class="catalog-menu-item">
                                    <i class="icon-drill catalog-menu-icon"></i>
                                    <div class="catalog-menu-item-text">Аккумуляторный инструмент</div>
                                    <span class="catalog-arrow-wrap text-center">
                                        <i class="icon-right-open-big"></i>
                                    </span>
                                </a>
                                <div class="catalog-sub-menu-item-wrap position-absolute">
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                </div>
                            </li>
                            <li class="catalog-menu-item-wrap">
                                <a href="" class="catalog-menu-item">
                                    <i class="icon-chainsaw catalog-menu-icon"></i>
                                    <div class="catalog-menu-item-text">Садовый инструмент</div>
                                    <span class="catalog-arrow-wrap text-center">
                                        <i class="icon-right-open-big"></i>
                                    </span>
                                </a>
                                <div class="catalog-sub-menu-item-wrap position-absolute">
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                </div>
                            </li>
                            <li class="catalog-menu-item-wrap">
                                <a href="" class="catalog-menu-item">
                                    <i class="icon-spares catalog-menu-icon"></i>
                                    <div class="catalog-menu-item-text">Оборудование</div>
                                    <span class="catalog-arrow-wrap text-center">
                                        <i class="icon-right-open-big"></i>
                                    </span>
                                </a>
                                <div class="catalog-sub-menu-item-wrap position-absolute">
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                </div>
                            </li>
                            <li class="catalog-menu-item-wrap">
                                <a href="" class="catalog-menu-item">
                                    <i class="icon-equipment catalog-menu-icon"></i>
                                    <div class="catalog-menu-item-text">Запчасти</div>
                                    <span class="catalog-arrow-wrap text-center">
                                        <i class="icon-right-open-big"></i>
                                    </span>
                                </a>
                                <div class="catalog-sub-menu-item-wrap position-absolute">
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                </div>
                            </li>
                            <li class="catalog-menu-item-wrap">
                                <a href="" class="catalog-menu-item">
                                    <i class="icon-stock catalog-menu-icon"></i>
                                    <div class="catalog-menu-item-text">Акции</div>
                                    <span class="catalog-arrow-wrap text-center">
                                        <i class="icon-right-open-big"></i>
                                    </span>
                                </a>
                                <div class="catalog-sub-menu-item-wrap position-absolute">
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                </div>
                            </li>
                            <li class="catalog-menu-item-wrap">
                                <a href="" class="catalog-menu-item">
                                    <i class="icon-stock-array catalog-menu-icon"></i>
                                    <div class="catalog-menu-item-text no-border">Уценённые товары</div>
                                    <span class="catalog-arrow-wrap text-center">
                                        <i class="icon-right-open-big"></i>
                                    </span>
                                </a>
                                <div class="catalog-sub-menu-item-wrap position-absolute">
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                    <a href="" class="catalog-sub-menu-item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cum
                                        cumque dolores dolorum earum esse et expedita illo minima odio odit
                                        optio pariatur qui quisquam, quos repellat, sint, voluptatibus!
                                    </a>
                                </div>
                            </li>
                            <li class="catalog-menu-border position-relative"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-7 ">
                    <div class="d-flex search-wrap h-100 w-100">
                        <form class="d-flex w-100 position-relative">
                            <input class="search-input w-100" name="s" placeholder="Введите для поиска" type="search" aria-label="Search">
                            <button class="search-button h-100 position-absolute d-flex align-items-center" type="submit"><i class="icon-search lg-icon-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center">
                    <div class="d-flex justify-content-end">
                        <a href="" class="compare-wrap">
                            <i class="icon-compare header-icon-compare"></i>
                            <span class="compare-bascket-text">сравнить</span>
                        </a>
                        <a href="" class="bascket-wrap">
                            <i class="icon-basket header-icon-basket"></i>
                            <span class="compare-bascket-text">корзина</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid catalog-wrap-border d-lg-block d-none"></div>
    </div>
</header>
<script>
    let headerHeight = document.getElementById('header-wrap').offsetHeight;
    document.getElementById('header').style.height = headerHeight + 'px';
</script>