@extends('app')

@section('content')
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
                            <option value="TSAO">> 10 лет</option>
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

<main class="base catalog">

    <section class="categories">
        <div class="container">

            <!--Popular-->
            <div class="row">
                <div class="col-xs-12">

                    <!--Nav tabs-->
                    <div class="nav-wrapper pull-left">
                        <p>Популярные</p>
                    </div>

                    <div class="clearfix"></div>

                    <!--Tab panes-->
                    <div class="tab-content">
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

                </div>
            </div>
            <!--/Popular-->

            <!--Birds-->
            <div class="row">
                <div class="col-xs-12">

                    <!--Nav tabs-->
                    <div class="nav-wrapper pull-left">
                        <p>Птицы</p>
                    </div>

                    <div class="clearfix"></div>

                    <!--Tab panes-->
                    <div class="tab-content">
                        @foreach ($animalsBird as $animal)
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

                </div>
            </div>
            <!--/Birds-->

            <!--Items-->
            <div class="row">
                <div class="col-xs-12">

                    <!--Nav tabs-->
                    <div class="nav-wrapper pull-left">
                        <p>Продукция</p>
                    </div>

                    <div class="clearfix"></div>

                    <!--Tab panes-->
                    <div class="tab-content">
                        @foreach ($animalsItems as $animal)
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

                </div>
            </div>
            <!--/Items-->

            <!--Fish-->
            <div class="row">
                <div class="col-xs-12">

                    <!--Nav tabs-->
                    <div class="nav-wrapper pull-left">
                        <p>Рыба</p>
                    </div>

                    <div class="clearfix"></div>

                    <!--Tab panes-->
                    <div class="tab-content">
                        @foreach ($animalsFish as $animal)
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

                </div>
            </div>
            <!--/Fish-->

            <!--Down-->
            <div class="row">
                <div class="col-xs-12">

                    <!--Nav tabs-->
                    <div class="nav-wrapper pull-left">
                        <p>Пушные звери</p>
                    </div>

                    <div class="clearfix"></div>

                    <!--Tab panes-->
                    <div class="tab-content">
                        @foreach ($animalsDown as $animal)
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

                </div>
            </div>
            <!--/Down-->

            <!--Additional-->
            <div class="row">
                <div class="col-xs-12">

                    <!--Nav tabs-->
                    <div class="nav-wrapper pull-left">
                        <p>Прочие животные</p>
                    </div>

                    <div class="clearfix"></div>

                    <!--Tab panes-->
                    <div class="tab-content">
                        @foreach ($animalsAdditional as $animal)
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

                </div>
            </div>
            <!--/Additional-->

            <!--Service-->
            <div class="row">
                <div class="col-xs-12">

                    <!--Nav tabs-->
                    <div class="nav-wrapper pull-left">
                        <p>Товары и услуги</p>
                    </div>

                    <div class="clearfix"></div>

                    <!--Tab panes-->
                    <div class="tab-content">
                        @foreach ($animalsService as $animal)
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

                </div>
            </div>
            <!--/Service-->

        </div>
    </section>

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