@extends('app')

@section('content')
        <!--Main Slider-->
<section id="main-slider" class="owl-carousel owl-theme">
    <div class="item">
        <img src="/img/tmp/main-slide-1.jpg"/>

        <div class="container">
            <div class="promo">
                <h2>Более 10000 частных объявлений</h2>

                <p>о покупке и продаже <br/> сельскохозяйственных животных и <br/> продуктов</p>

                <p class="big hidden-xs">Разместить объявление</p>
                <a class="button hidden-xs" href="#">Купить</a>
                <a class="button hidden-xs" href="#">Продать</a>
            </div>

        </div>

    </div>
    <div class="item">
        <img src="/img/tmp/main-slide-2.jpg"/>

        <div class="container">
            <div class="promo">
                <h2>Молочная продукция</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/>
                    Amet, aperiam consectetur dignissimos eius eligendi eos <br/> eum ex expedita explicabo
                    facilis fuga fugiat, iure iusto laboriosam molestias non <br/> pariatur qui tempora!</p>
            </div>
        </div>

    </div>
    <div class="item">
        <img src="/img/tmp/main-slide-3.jpg"/>

        <div class="container">
            <div class="promo">
                <h2>Хрюшки</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br/>
                    Amet, aperiam consectetur dignissimos eius eligendi eos eum ex expedita explicabo <br/>
                    facilis fuga fugiat, iure iusto laboriosam molestias non pariatur qui tempora!</p>

                <p class="big hidden-xs">Разместить объявление</p>
                <a class="button hidden-xs" href="#">Продать</a>
                <a class="button hidden-xs" href="#">Купить</a>
            </div>
        </div>
    </div>
</section>
<!--/Main Slider-->

<!--Search-->
<section class="search hidden-xs">
    <div class="container">
        <div class="row">
            <ul>
                <li class="hidden-sm">Я хочу</li>
                <li>
                    <select id="businessFunction" class="form-control">
                        <option value="buy">Купить</option>
                        <option value="sell">Продать</option>
                    </select>
                </li>
                <li>
                    <select id="category" class="form-control">
                        <option value="" disabled selected>В категории</option>
                        <option value="pigs">Хрюшки</option>
                        <option value="cows">Коровы</option>
                        <option value="goats">Козы</option>
                    </select>
                </li>
                <li>
                    <select id="offer" class="form-control">
                        <option value="" disabled selected>Товар или услугу</option>
                        <option value="item">Товар</option>
                        <option value="service">Услугу</option>
                    </select>
                </li>
                <li>
                    <select id="location" class="form-control">
                        <option value="" disabled selected>В регионе</option>
                        <option value="TSAO">ЦФО</option>
                        <option value="TSAO">ЗФО</option>
                        <option value="TSAO">ЮФО</option>
                    </select>
                </li>
                <li>
                    <button class="btn btn-success">
                        <i class="icon-search"></i>
                        Поиск
                    </button>
                </li>
                <li class="additional">
                    <span>Расширенный <br/> поиск</span>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<!--/Search-->

<!--Additional search-->
<!--noindex-->
<div class="additional-search">
    <div class="container">
        <div class="row">
            <div class="additional-search-wrapper col-lg-10 col-lg-offset-1 col-md-10 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <select id="location" class="form-control">
                            <option value="" disabled selected>Производительность</option>
                            <option value="TSAO">Высокая</option>
                            <option value="TSAO">Средняя</option>
                            <option value="TSAO">Низкая</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <select id="location" class="form-control">
                            <option value="" disabled selected>Порода</option>
                            <option value="TSAO">Черепашковая</option>
                            <option value="TSAO">Красный мрамор</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <select id="location" class="form-control">
                            <option value="" disabled selected>Пол и возраст</option>
                            <option value="TSAO">< 5 лет</option>
                            <option value="TSAO">< 10 лет</option>
                            <option value="TSAO">> 10 лет </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="additional-search-price col-lg-6 col-md-6 col-sm-6">
                            <input id="minPrice" class="form-control" type="text" placeholder="цена от"/>
                        </div>
                        <div class="additional-search-price-bottom col-lg-6 col-md-6 col-sm-6">
                            <input id="maxPrice" class="form-control" type="text" placeholder="цена до"/>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <select id="location" class="form-control">
                            <option value="" disabled selected>за период</option>
                            <option value="TSAO">2013</option>
                            <option value="TSAO">2014</option>
                            <option value="TSAO">2015</option>
                        </select>
                    </div>
                    <div class="additional-search-selector col-lg-4 col-md-4 col-sm-4">
                        <ul>
                            <li>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> с фото
                                </label>
                            </li>
                            <li>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> только <b>PRO</b>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/noindex-->
<!--/Additional search-->

<main class="base">

    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Категории</h2>

                    <!--Nav tabs-->
                    <div class="nav-wrapper">
                        <ul class="nav nav-tabs pull-right hidden-sm hidden-xs">
                            <li class="active">
                                <a href="#popular" data-toggle="tab">Популярные</a>
                            </li>
                            <li>
                                <a href="#bird" data-toggle="tab">Птица</a>
                            </li>
                            <li>
                                <a href="#items" data-toggle="tab">Продукты</a>
                            </li>
                            <li>
                                <a href="#fish" data-toggle="tab">Рыба</a>
                            </li>
                            <li>
                                <a href="#down" data-toggle="tab">Пушные звери</a>
                            </li>
                            <li>
                                <a href="#additional" data-toggle="tab">Прочие животные</a>
                            </li>
                            <li>
                                <a href="#service" data-toggle="tab">Товары и услуги</a>
                            </li>
                            <li>
                                <a href="/catalog" >Все</a>
                            </li>
                        </ul>

                        <!--noindex-->
                        <div class="dropdown visible-sm visible-xs pull-right">
                            <button class="btn dropdown-toggle" type="button" id="categoryMobile" data-toggle="dropdown">
                                Популярные
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="categoryMobile">
                                <li class="active">
                                    <a href="#popular" data-toggle="tab">Популярные</a>
                                </li>
                                <li>
                                    <a href="#bird" data-toggle="tab">Птица</a>
                                </li>
                                <li>
                                    <a href="#items" data-toggle="tab">Продукты</a>
                                </li>
                                <li>
                                    <a href="#fish" data-toggle="tab">Рыба</a>
                                </li>
                                <li>
                                    <a href="#down" data-toggle="tab">Пушные звери</a>
                                </li>
                                <li>
                                    <a href="#additional" data-toggle="tab">Прочие животные</a>
                                </li>
                                <li>
                                    <a href="#service" data-toggle="tab">Товары и услуги</a>
                                </li>
                                <li>
                                    <a href="/catalog" >Все</a>
                                </li>
                            </ul>
                        </div>
                        <!--/noindex-->

                    </div>





                    <div class="clearfix"></div>

                    <?
                    $animalsPopular = [
                            [
                                    'name' => 'Овцы',
                                    'img' => '/img/category/sheep.jpg'
                            ],
                            [
                                    'name' => 'Свиньи',
                                    'img' => '/img/category/pig.jpg'
                            ],
                            [
                                    'name' => 'Коровы',
                                    'img' => '/img/category/cow.jpg'
                            ],
                            [
                                    'name' => 'Козы',
                                    'img' => '/img/category/goat.jpg'
                            ],
                            [
                                    'name' => 'Лошади',
                                    'img' => '/img/category/horse.jpg'
                            ],
                            [
                                    'name' => 'Кролики',
                                    'img' => '/img/category/rabbit.jpg'
                            ],
                            [
                                    'name' => 'Пчелы',
                                    'img' => '/img/category/bee.jpg'
                            ]
                    ];

                    $animalsBird = [
                            [
                                    'name' => 'Куры',
                                    'img' => '/img/category/chicken.jpg'
                            ],
                            [
                                    'name' => 'Гуси',
                                    'img' => '/img/category/goose.jpg'
                            ],
                            [
                                    'name' => 'Голуби',
                                    'img' => '/img/category/dove.jpg'
                            ],
                            [
                                    'name' => 'Утки',
                                    'img' => '/img/category/duck.jpg'
                            ],
                            [
                                    'name' => 'Перепела',
                                    'img' => '/img/category/quail.jpg'
                            ],
                            [
                                    'name' => 'Страусы',
                                    'img' => '/img/category/ostrich.jpg'
                            ],
                            [
                                    'name' => 'Индюки',
                                    'img' => '/img/category/turkey.jpg'
                            ],
                            [
                                    'name' => 'Павлины',
                                    'img' => '/img/category/peacock.jpg'
                            ],
                            [
                                    'name' => 'Лебеди',
                                    'img' => '/img/category/swan.jpg'
                            ],
                            [
                                    'name' => 'Фазаны',
                                    'img' => '/img/category/pheasant.jpg'
                            ]
                    ];

                    $animalsItems = [
                            [
                                    'name' => 'Цельно-молочные',
                                    'img' => '/img/category/milk.jpg'
                            ],
                            [
                                    'name' => 'Мясо',
                                    'img' => '/img/category/meat.jpg'
                            ],
                            [
                                    'name' => 'Мед',
                                    'img' => '/img/category/honey.jpg'
                            ],
                            [
                                    'name' => 'Яйца',
                                    'img' => '/img/category/eggs.jpg'
                            ],
                            [
                                    'name' => 'Рыба',
                                    'img' => '/img/category/fish.jpg'
                            ],
                            [
                                    'name' => 'Полуфабрикаты',
                                    'img' => '/img/category/half-food.jpg'
                            ],
                            [
                                    'name' => 'Шкуры',
                                    'img' => '/img/category/skins.jpg'
                            ],
                            [
                                    'name' => 'Шерсть',
                                    'img' => '/img/category/wool.jpg'
                            ],
                            [
                                    'name' => 'Пух',
                                    'img' => '/img/category/feathers.jpg'
                            ],
                            [
                                    'name' => 'Жир',
                                    'img' => '/img/category/fat.jpg'
                            ]
                    ];

                    $animalsFish = [
                            [
                                    'name' => 'Взрослая рыба',
                                    'img' => '/img/category/big-fish.jpg'
                            ],
                            [
                                    'name' => 'Мальки',
                                    'img' => '/img/category/small-fish.jpg'
                            ]
                    ];

                    $animalsDown = [
                            [
                                    'name' => 'Хорьки',
                                    'img' => '/img/category/ferret.jpg'
                            ],
                            [
                                    'name' => 'Норки',
                                    'img' => '/img/category/mink.jpg'
                            ],
                            [
                                    'name' => 'Нутрии',
                                    'img' => '/img/category/nutria.jpg'
                            ],
                            [
                                    'name' => 'Шиншилы',
                                    'img' => '/img/category/chinchilla.jpg'
                            ],
                            [
                                    'name' => 'Горностаи',
                                    'img' => '/img/category/ermine.jpg'
                            ],
                            [
                                    'name' => 'Соболя',
                                    'img' => '/img/category/sable.jpg'
                            ],
                            [
                                    'name' => 'Песцы',
                                    'img' => '/img/category/artic-fox.jpg'
                            ],
                            [
                                    'name' => 'Сурки',
                                    'img' => '/img/category/marmot.jpg'
                            ],
                            [
                                    'name' => 'Лисицы',
                                    'img' => '/img/category/fox.jpg'
                            ],
                            [
                                    'name' => 'Куницы',
                                    'img' => '/img/category/marten.jpg'
                            ]
                    ];

                    $animalsAdditional = [
                            [
                                    'name' => 'Ослы',
                                    'img' => '/img/category/donkey.jpg'
                            ],
                            [
                                    'name' => 'Верблюды',
                                    'img' => '/img/category/camel.jpg'
                            ],
                            [
                                    'name' => 'Ламы',
                                    'img' => '/img/category/lama.jpg'
                            ],
                            [
                                    'name' => 'Буйволы',
                                    'img' => '/img/category/buffalo.jpg'
                            ],
                            [
                                    'name' => 'Олени',
                                    'img' => '/img/category/deer.jpg'
                            ],
                            [
                                    'name' => 'Шелкопряды',
                                    'img' => '/img/category/silkworm.jpg'
                            ],
                            [
                                    'name' => 'Пони',
                                    'img' => '/img/category/pony.jpg'
                            ]
                    ];

                    $animalsService= [
                            [
                                    'name' => 'Ветеренарные препараты',
                                    'img' => '/img/category/vet.jpg'
                            ],
                            [
                                    'name' => 'Транспортные услуги',
                                    'img' => '/img/category/transport.jpg'
                            ],
                            [
                                    'name' => 'Корма',
                                    'img' => '/img/category/food.jpg'
                            ],
                            [
                                    'name' => 'Оборудование',
                                    'img' => '/img/category/equipment.jpg'
                            ]
                    ];
                    ?>

                            <!--Tab panes-->
                    <div class="tab-content">

                        <div class="tab-pane active" id="popular">

                            @foreach ($animalsPopular as $animal)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <a class="title" href="#">{{ $animal['name'] }}</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Покупка (10)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Продажа (10)</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ $animal['img'] }}" alt="demo"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="tab-pane" id="bird">

                            @foreach ($animalsBird as $animal)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="title" href="#">{{ $animal['name'] }}</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Покупка (10)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Продажа (10)</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ $animal['img'] }}" alt="demo"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="tab-pane" id="items">

                            @foreach ($animalsItems as $animal)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="title" href="#">{{ $animal['name'] }}</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Покупка (10)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Продажа (10)</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ $animal['img'] }}" alt="demo"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="tab-pane" id="fish">

                            @foreach ($animalsFish as $animal)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="title" href="#">{{ $animal['name'] }}</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Покупка (10)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Продажа (10)</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ $animal['img'] }}" alt="demo"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="tab-pane" id="down">

                            @foreach ($animalsDown as $animal)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="title" href="#">{{ $animal['name'] }}</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Покупка (10)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Продажа (10)</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ $animal['img'] }}" alt="demo"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="tab-pane" id="additional">

                            @foreach ($animalsAdditional as $animal)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="title" href="#">{{ $animal['name'] }}</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Покупка (10)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Продажа (10)</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ $animal['img'] }}" alt="demo"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="tab-pane" id="service">

                            @foreach ($animalsService as $animal)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="title" href="#">{{ $animal['name'] }}</a>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">Покупка (10)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Продажа (10)</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ $animal['img'] }}" alt="demo"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="recommend-ads">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Рекомендуемые объявления</h2>
                    <div class="btn-wrapper">
                        <div class="btn btn-blue pull-right">Добавить объявление</div>
                    </div>
                    <div class="clearfix"></div>

                    <div id="recommend-ads-slider" class="owl-carousel owl-theme">
                        @for($i = 0; $i<20; $i++)
                            <div class="item">
                                <a href="#">
                                    <div class="img-wrapper">
                                        <img class="img-responsive" src="/img/tmp/cow-sl.jpg" alt="demo">
                                        <!--noindex-->
                                    <span class="hover-zoom">
                                        <span class="zoom"></span>
                                    </span>
                                        <!--/noindex-->
                                    </div>
                                </a>
                                <a class="name" href="#">
                                    Продажа коров
                                </a>
                                <a class="price" href="#">
                                    50 000р
                                </a>
                                <a class="city" href="#">
                                    г.Москва
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="private-ads">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xs-12">
                    <h2>Частные объявления</h2>

                    <!--Tab panes-->
                    <div class="nav-wrapper">
                        <ul class="nav nav-tabs hidden-xs pull-right">
                            <li class="active">
                                <a href="#private-sell" data-toggle="tab">Продам</a>
                            </li>
                            <li>
                                <a href="#private-buy" data-toggle="tab">Куплю</a>
                            </li>
                            <li>
                                <a href="#private-all" data-toggle="tab">Все</a>
                            </li>
                            <li>
                                <a href="#">Добавить</a>
                            </li>
                        </ul>
                        <!--noindex-->
                        <div class="dropdown visible-xs pull-right">
                            <button class="btn dropdown-toggle" type="button" id="padsMobile" data-toggle="dropdown">
                                Популярные
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="padsMobile">
                                <li class="active">
                                    <a href="#private-sell" data-toggle="tab">Продам</a>
                                </li>
                                <li>
                                    <a href="#private-buy" data-toggle="tab">Куплю</a>
                                </li>
                                <li>
                                    <a href="#private-all" data-toggle="tab">Все</a>
                                </li>
                                <li>
                                    <a href="#">Добавить</a>
                                </li>
                            </ul>
                        </div>
                        <!--/noindex-->
                    </div>

                    <!--Nav tabs-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="private-sell">

                            <table class="table-responsive table-condensed">
                                <tbody>
                                @for($i = 0; $i < 8; $i++)
                                    <tr>
                                        <td>
                                            01.04.15
                                        </td>
                                        <td>
                                            Москва
                                        </td>
                                        <td class="price">
                                            <a href="#">
                                                Продам корову Шортгонской породы
                                            </a>
                                        </td>
                                        <td class="count">
                                            30 000 рублей
                                        </td>
                                        <td>
                                            <a class="info" href="#"></a>
                                        </td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="private-ads-banner">
                        <a href="#" class="hidden-md hidden-sm hidden-xs">
                            <img class="img-responsive" src="/img/tmp/private-banner.jpg" alt="demo">
                        </a>
                        <!--noindex-->
                        <a href="#" class="hidden-lg col-xs-12">
                            <img class="img-responsive" src="/img/tmp/bottom-banner.jpg" alt="demo">
                        </a>
                        <!--/noindex-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--PRO-ads-->
    <section class="pro-ads">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8">
                    <div class="main-pro-ads">
                        <h2>Предложения профессионалов</h2>

                        <div class="nav-wrapper">
                            <div class="nav pull-right">
                                <a href="#private-sell">Создать PRO аккаунт</a>
                            </div>
                        </div>

                        <div class="row">
                            @for($i = 0; $i < 4; $i++)
                                <div class="col-lg-6 col-md-6 col-md-offset-0 col-sm-12 col-xs-10 col-xs-offset-1">
                                    <div class="row">
                                        <div class="item">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <img class="img-responsive" src="/img/tmp/sunflower.jpg" alt="demo">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <h4>ООО "Подсолнух"</h4>
                                                <span class="geo">Московская область</span>
                                                <span class="desc">
                                                    Продажа коров мясных пород, овец, коз. Лучшие цены.
                                                    Доставка в регионы.
                                                </span>
                                                <a href="#">подробнее</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="additional-pro-ads">
                        <h2>Новые ПРО</h2>
                        @for($i = 0; $i < 3; $i++)
                            <div class="row">
                                <div class="item">
                                    <div class="col-lg-5 col-md-4 col-sm-12 col-xs-6">
                                        <a href="#">
                                            <img  class="img-responsive img-circle" src="/img/tmp/sunflower.jpg" alt="demo">
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-6">
                                        <h4>ООО "Трактор"</h4>
                                        <span class="geo">г.Москва</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/PRO-ads-->

    <!--Tenders-->
    <section class="tenders">
        <div class="container">
            <div class="row tenders-nav">
                <div class="col-xs-12">
                    <h2>Актуальные тендеры</h2>

                    <div class="nav-wrapper">
                        <div class="nav pull-right">
                            <a href="#" class="active">Добавить тендер</a>
                            <a href="#">Все текущие тендеры</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row tenders-items">
                <div class="items">
                    @for($i = 0; $i < 8; $i++)
                        <? $class = '' ?>
                        @if($i > 5)
                            <? $class = 'hidden-md hidden-sm' ?>
                        @endif

                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 <?= $class ?>">
                            <article class="item">
                                <header>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>Закупка кроликов</h5>
                                        </div>
                                        <div class="col-lg-5">
                                            <span class="price">100 000 руб.</span>
                                        </div>
                                    </div>
                                </header>
                                <main>
                                    <span class="name">ООО "Морковка"</span>
                                    <span class="date">01.04.2015</span>
                                    <span class="geo">Москвоская область</span>
                                    <a href="#" class="pull-right">
                                        <i class="info"></i>
                                    </a>
                                    <div class="clearfix"></div>
                                </main>
                            </article>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
    <!--/Tenders-->

    <!--Bottom banner-->
    <div class="bottom-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1">
                    <img class="img-responsive" src="/img/tmp/bottom-banner.jpg" alt="demo">
                </div>
            </div>
        </div>
    </div>
    <!--/Bottom banner-->

    <!--Blogs-->
    <section class="blogs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Блоги</h2>

                    <!--Tab panes-->
                    <div class="nav-wrapper">
                        <ul class="nav nav-tabs pull-right">
                            <li class="active">
                                <a href="#blog-new" data-toggle="tab">Новое</a>
                            </li>
                            <li>
                                <a href="#blog-popular" data-toggle="tab">Популярное</a>
                            </li>
                            <li>
                                <a href="#blog-all" data-toggle="tab">Все</a>
                            </li>
                        </ul>
                    </div>

                    <!--Nav tabs-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="blog-new">
                            @for($i = 0; $i < 4; $i++)
                                <? $class = '' ?>
                                @if($i > 2)
                                    <? $class = 'hidden-md hidden-sm' ?>
                                @endif
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 <?= $class ?>">
                                    <article class="item">
                                        <img class="img-responsive" src="/img/tmp/blog-image.jpg" alt="demo">
                                        <header class="author">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                                                    <div class="avatar">
                                                        <img class="img-responsive img-circle" src="/img/tmp/blog-user.jpg" alt="demo">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6">
                                                    <div class="name">
                                                        Иван Иванов
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <main>
                                            <h4>Современное животноводство</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab at
                                                consectetur deleniti dolor doloremque dolores enim ...
                                            </p>
                                        </main>
                                        <footer>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                                                    <div class="date pull-left">10 апреля 2015</div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                                                    <div class="socials pull-right">
                                                <span class="comments">
                                                    <i class="comments-icon"></i>
                                                    10
                                                </span>
                                                <span class="like">
                                                    <i class="like-icon"></i>
                                                    3
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </footer>
                                    </article>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Blogs-->

    <!--Register bottom-->
    <section class="register-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="col-lg-5 col-md-4">
                        <div class="title">
                            <h3>Не нашли то, что у нас искали ?</h3>
                            <span>Зарегистрируйтесь сейчас и получайте обновления.</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <input type="text" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <div class="btn btn-blue center-block">
                            <i class="icon-register"></i>
                            Регистрация
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Register bottom-->

    <!--noindex-->
    <div class="overlay"></div>
    <!--/noindex-->
</main>
@endsection