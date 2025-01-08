<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />    
    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>KUGOO – Тест-драйв</title>    
    <script>
      !(function (n, e, s) {
        function o(n, e) {
          return typeof n === e;
        }
        function a() {
          var n, e, s, a, i, l, r;
          for (var c in f)
            if (f.hasOwnProperty(c)) {
              if (
                ((n = []),
                (e = f[c]),
                e.name &&
                  (n.push(e.name.toLowerCase()),
                  e.options && e.options.aliases && e.options.aliases.length))
              )
                for (s = 0; s < e.options.aliases.length; s++)
                  n.push(e.options.aliases[s].toLowerCase());
              for (
                a = o(e.fn, "function") ? e.fn() : e.fn, i = 0;
                i < n.length;
                i++
              )
                (l = n[i]),
                  (r = l.split(".")),
                  1 === r.length
                    ? (Modernizr[r[0]] = a)
                    : (!Modernizr[r[0]] ||
                        Modernizr[r[0]] instanceof Boolean ||
                        (Modernizr[r[0]] = new Boolean(Modernizr[r[0]])),
                      (Modernizr[r[0]][r[1]] = a)),
                  t.push((a ? "" : "no-") + r.join("-"));
            }
        }
        function i(n) {
          var e = r.className,
            s = Modernizr._config.classPrefix || "";
          if ((c && (e = e.baseVal), Modernizr._config.enableJSClass)) {
            var o = new RegExp("(^|\\s)" + s + "no-js(\\s|$)");
            e = e.replace(o, "$1" + s + "js$2");
          }
          Modernizr._config.enableClasses &&
            ((e += " " + s + n.join(" " + s)),
            c ? (r.className.baseVal = e) : (r.className = e));
        }
        var t = [],
          f = [],
          l = {
            _version: "3.6.0",
            _config: {
              classPrefix: "",
              enableClasses: !0,
              enableJSClass: !0,
              usePrefixes: !0,
            },
            _q: [],
            on: function (n, e) {
              var s = this;
              setTimeout(function () {
                e(s[n]);
              }, 0);
            },
            addTest: function (n, e, s) {
              f.push({ name: n, fn: e, options: s });
            },
            addAsyncTest: function (n) {
              f.push({ name: null, fn: n });
            },
          },
          Modernizr = function () {};
        (Modernizr.prototype = l), (Modernizr = new Modernizr());
        var r = e.documentElement,
          c = "svg" === r.nodeName.toLowerCase();
        a(), i(t), delete l.addTest, delete l.addAsyncTest;
        for (var u = 0; u < Modernizr._q.length; u++) Modernizr._q[u]();
        n.Modernizr = Modernizr;
      })(window, document);
    </script>
    
  </head>
  <body>
    <!-- HEADER START -->
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <div class="header__links">
            <div class="header__links--service-and-colaboration">
              <a href="#">Сервис</a>
              <a href="#">Сотрудничество</a>
              <a href="#">Заказать звонок</a>
            </div>
            <div class="header__links--messengers">
              <a href="#">
                <svg class="viber">
                  <use href="./img/sprite.svg#viber"></use>
                </svg>
              </a>
              <a href="#">
                <svg class="whatsapp">
                  <use href="./img/sprite.svg#whatsapp"></use>
                </svg>
              </a>
              <a href="#">
                <svg class="telegram">
                  <use href="./img/sprite.svg#telegram"></use>
                </svg>
              </a>
            </div>
          </div>
          <a class="header__phone" href="tel:+78005055461"
            >+7 (800) 505-54-61</a
          >
        </div>
      </div>
      <div class="seporator"></div>
    </header>
    <!-- HEADER END -->

    <main class="main">
      <div class="mobile__section-controls">
        <div class="container">
          <div class="section-controls__wrapper">
            <div class="logo section-search--logo">
              <a href="#">Kugoo</a>
            </div>
            <div class="mobile__controls">
              <div class="balance-img">
                <a href="#" title="Сравнить товары">
                  <svg class="balance-icon">
                    <use href="./img/sprite.svg#balance"></use>
                  </svg>
                </a>
              </div>
              <div class="favorite-img">
                <a href="#" title="Перейти в Избранное">
                  <svg class="favorite-icon-header">
                    <use href="./img/sprite.svg#heart"></use>
                  </svg>
                </a>
              </div>
              <div class="cart-link__wrapper">
                <a href="#" class="cart-link" title="Перейти в Корзину">
                  <svg class="cart-icon">
                    <use href="./img/sprite.svg#shopping-cart"></use>
                  </svg>
                  <span class="cart-link__text">Корзина</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile__section-search">
        <div class="container">
          <div class="section-search__wrapper">
            <a href="#" class="button button-burger">
              <div class="toggle-burger">
                <div class="toggle-burger__line"></div>
                <div class="toggle-burger__line"></div>
                <div class="toggle-burger__line"></div>
              </div>
              <span class="button-burger__text">Каталог</span>
            </a>
            <div class="search-box">
              <input
                class="search-input"
                type="text"
                placeholder="Искать самокат KUGO"
              />
              <button class="search-button" aria-label="Поиск">
                <svg class="search-icon" width="16" height="16">
                  <use href="./img/sprite.svg#search"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- section-search START -->
      <nav class="section-search">
        <div class="container">
          <div class="section-search__wrapper">
            <div class="logo section-search--logo">
              <a href="#">Kugoo</a>
            </div>
            <a href="#" class="button button-burger">
              <div class="toggle-burger">
                <div class="toggle-burger__line"></div>
                <div class="toggle-burger__line"></div>
                <div class="toggle-burger__line"></div>
              </div>
              <span class="button-burger__text">Каталог</span>
            </a>
            <div class="search-box">
              <input
                class="search-input"
                type="text"
                placeholder="Искать самокат KUGO"
              />
              <button class="search-button" aria-label="Поиск">
                <svg class="search-icon" width="16" height="16">
                  <use href="./img/sprite.svg#search"></use>
                </svg>
              </button>
            </div>

            <div class="section-search__wrapper--controls">
              <div class="balance-img">
                <a href="#" title="Сравнить товары">
                  <svg class="balance-icon">
                    <use href="./img/sprite.svg#balance"></use>
                  </svg>
                </a>
              </div>
              <div class="favorite-img">
                <a href="#" title="Перейти в Избранное">
                  <svg class="favorite-icon-header">
                    <use href="./img/sprite.svg#heart"></use>
                  </svg>
                </a>
              </div>
              <div class="cart-link__wrapper">
                <a href="#" class="cart-link" title="Перейти в Корзину">
                  <svg class="cart-icon">
                    <use href="./img/sprite.svg#shopping-cart"></use>
                  </svg>
                  <span class="cart-link__text">Корзина</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- section-search END -->

      <!-- section-search START -->
      <section class="main-section">
        <div class="bg main-section--bg">
          <div class="container">
            <div class="main-section__wrapper-content">
              <div class="main-section__wrapper-content--info">
                <div class="pin-image">
                  <svg class="pin-icon" width="15" height="15">
                    <use href="./img/sprite.svg#pin"></use>
                  </svg>
                </div>
                <address class="main-section__wrapper-content--address">
                  Восточно-Кругликовская улица, 86
                </address>
                <span class="timing">Вт - Сб 10:00 - 20:00</span>
              </div>
              <h1 class="main-section--title">
                Запишитесь на бесплатный тест-драйв электросамокатов
              </h1>
              <p class="main-section--description">
                в Москве без ограничения по времени
              </p>
              <div class="benifits__wrapper">
                <div class="benifit">
                  <div class="benifit-img">
                    <svg class="scooter-icon">
                      <use href="./img/sprite.svg#scooter-svg"></use>
                    </svg>
                  </div>
                  <p class="benifit-text">Поймете, какая модель вам подходит</p>
                </div>
                <div class="benifit">
                  <div class="benifit-img">
                    <svg class="enegry-icon">
                      <use href="./img/sprite.svg#energy-svg"></use>
                    </svg>
                  </div>
                  <p class="benifit-text">Проверите лучшие самокаты в деле</p>
                </div>
              </div>
              <button type="submit" class="button button-sign-up" data-toggle="modal" data-target="#preorder-modal" aria-label="Записаться">Записаться</button>
            </div>
          </div>
        </div>
      </section>
      <!-- section-search END -->

      <!-- section-test-drive-practice START -->
      <section class="bg section-test-drive-practice">
        <div class="container">
          <div class="section-test-drive-practice__content">
            <div class="test-drive-practice__image">
              <picture class="test-drive-practice__picture">
                <source type="image/webp" srcset="./img/E-Scooters_Thumb.webp" />
                <source type="image/jpg" srcset="/img/E-Scooters_Thumb.jpg" />
                <img src="E-Scooters_Thumb.jpg" alt="E-Scooters_Thumb" />
              </picture>
            </div>
            <h2 class="section-title section-test-drive-practice__title">
              Определите максимально подходящую вам модель не теоретически, а на
              практике
            </h2>

            <p class="section-test-drive-practice__text">Тест-драйв поможет:</p>

            <ul class="test-drive-practice__list">
              <li class="test-drive-practice__item">
                <svg class="check-icon">
                  <use href="./img/sprite.svg#checkcircle"></use>
                </svg>
                <span class="item-bold">Понять</span>&nbsp;подходит ли вам
                конкретная модель;
              </li>
              <li class="test-drive-practice__item">
                <svg class="check-icon">
                  <use href="./img/sprite.svg#checkcircle"></use>
                </svg>
                <span class="item-bold">Испытать</span>&nbsp;самокат в «реальной
                жизни»;
              </li>
              <li class="test-drive-practice__item">
                <svg class="check-icon">
                  <use href="./img/sprite.svg#checkcircle"></use>
                </svg>
                <span class="item-bold">Оценить</span>&nbsp;удобство хранения и
                эксплуатации;
              </li>
              <li class="test-drive-practice__item">
                <svg class="check-icon">
                  <use href="./img/sprite.svg#checkcircle"></use>
                </svg>
                <span class="item-bold">Узнать</span>&nbsp;реальные
                характеристики и возможности модели.
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- section-test-drive-practice END -->

      <!-- section-learn START -->
      <section class="bg section-learn">
        <div class="container">
          <div class="section-learn__wrapper">
            <div class="section-learn__content">
              <div class="learn__image">
                <picture class="learn__picture">
                  <source
                    type="image/webp"
                    srcset="./img/E-Scooters_Thumb_Women.webp"
                  />
                  <source
                    type="image/jpg"
                    srcset="/img/E-Scooters_Thumb_Women.jpg"
                  />
                  <img src="E-Scooters_Thumb_Women.jpg" alt="E-Scooters_Thumb_Women" />
                </picture>
              </div>
              <h2 class="section-title section-learn__title">
                Научим правильной и безопасной езде в городе вас или вашего
                ребенка
              </h2>

              <p class="section-learn__text">
                На обучении специалист расскажет:
              </p>

              <ul class="learn__list">
                <li class="learn__item">
                  <svg class="check-icon">
                    <use href="./img/sprite.svg#checkcircle"></use>
                  </svg>
                  Как подготовить самокат к поездке;
                </li>
                <li class="learn__item">
                  <svg class="check-icon">
                    <use href="./img/sprite.svg#checkcircle"></use>
                  </svg>
                  Как «завести» самокат;
                </li>
                <li class="learn__item">
                  <svg class="check-icon">
                    <use href="./img/sprite.svg#checkcircle"></use>
                  </svg>
                  Как вести себя во время поездки и обезопасить себя и
                  окружающих;
                </li>
                <li class="learn__item">
                  <svg class="check-icon">
                    <use href="./img/sprite.svg#checkcircle"></use>
                  </svg>
                  Как складывать и раскладывать электросамокат;
                </li>
                <li class="learn__item">
                  <svg class="check-icon">
                    <use href="./img/sprite.svg#checkcircle"></use>
                  </svg>
                  Как ухаживать за своим девайсом.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- section-learn END -->

      <!-- section-scooter-versions START -->
      <section class="section-scooter-versions">
        <div class="container">
          <div class="wrapper-title">
            <h2 class="section-title scooter-versions__title">
              Сейчас для тест-драйва и обучения доступны следующие модели
            </h2>
          </div>

          <div class="scooter-versions__cards">
            <div class="scooter-versions__card">
              <div class="scooter-versions__card--image">
                <div class="card-image__items">
                  <div class="badge-hit">ХИТ</div>
                    <svg class="compare-icon" aria-label="Добавить в сравнение">
                      <use href="./img/sprite.svg#balance"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="scooter-versions__card--content">
                <h3 class="scooter-versions__card--title">Kugoo Kirin M4</h3>
                <div class="scooter-versions__card--info">
                  <ul class="scooter-versions__card--specification-list">
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#accumulator"></use>
                      </svg>
                      2000 mAh
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#speedometer"></use>
                      </svg>
                      60 км/ч
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#power"></use>
                      </svg>
                      1,2 л.с.
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#timer"></use>
                      </svg>
                      5 часов
                    </li>
                  </ul>
                  <div class="scooter-versions__card--controls">
                    <div class="scooter-versions__card--prices">
                      <p class="old-price">39 900 ₽</p>
                      <p class="current-price">29 900 ₽</p>
                    </div>
                    <div class="buttons-wrapper">
                      <button class="scooter-versions__card--button" aria-label="Корзина">
                        <svg class="cart-icon-2">
                          <use href="./img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                      </button>
                      <button class="scooter-versions__favorite--button" aria-label="Избранное">
                        <svg class="favorite-icon">
                          <use href="./img/sprite.svg#heart"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <button type="submit" class="button card-button-sign-up" data-toggle="modal" data-target="#preorder-modal" aria-label="Записаться на тест-драйв">
                    Записаться на тест-драйв
                  </button>
                </div>
              </div>
            </div>

            <div class="scooter-versions__card">
              <div class="scooter-versions__card--image">
                <div class="card-image__items">
                  <div class="badge-new">Новинка</div>
                  <button class="add-to-compare-button" aria-label="Добавить в сравнение">
                    <svg class="compare-icon">
                      <use href="./img/sprite.svg#balance"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="scooter-versions__card--content">
                <h3 class="scooter-versions__card--title">Kugoo Kirin M4</h3>
                <div class="scooter-versions__card--info">
                  <ul class="scooter-versions__card--specification-list">
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#accumulator"></use>
                      </svg>
                      2000 mAh
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#speedometer"></use>
                      </svg>
                      60 км/ч
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#power"></use>
                      </svg>
                      1,2 л.с.
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#timer"></use>
                      </svg>
                      5 часов
                    </li>
                  </ul>
                  <div class="scooter-versions__card--controls">
                    <div class="scooter-versions__card--prices">
                      <p class="old-price">39 900 ₽</p>
                      <p class="current-price">29 900 ₽</p>
                    </div>
                    <div class="buttons-wrapper">
                      <button class="scooter-versions__card--button" aria-label="Добавить в корзину">
                        <svg class="cart-icon-2">
                          <use href="./img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                      </button>
                      <button class="scooter-versions__favorite--button" aria-label="Добавить в избранное">
                        <svg class="favorite-icon">
                          <use href="./img/sprite.svg#heart"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <button type="submit" class="button card-button-sign-up" data-toggle="modal" data-target="#preorder-modal" aria-label="Записаться на тест-драйв">
                    Записаться на тест-драйв
                  </button>
                </div>
              </div>
            </div>

            <div class="scooter-versions__card">
              <div class="scooter-versions__card--image">
                <div class="card-image__items">
                  <div class="badge-hit">ХИТ</div>
                  <button class="add-to-compare-button" aria-label="Добавить в сравнение">
                    <svg class="compare-icon">
                      <use href="./img/sprite.svg#balance"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="scooter-versions__card--content">
                <h3 class="scooter-versions__card--title">Kugoo Kirin M4</h3>
                <div class="scooter-versions__card--info">
                  <ul class="scooter-versions__card--specification-list">
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#accumulator"></use>
                      </svg>
                      2000 mAh
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#speedometer"></use>
                      </svg>
                      60 км/ч
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#power"></use>
                      </svg>
                      1,2 л.с.
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#timer"></use>
                      </svg>
                      5 часов
                    </li>
                  </ul>
                  <div class="scooter-versions__card--controls">
                    <div class="scooter-versions__card--prices">
                      <p class="old-price">39 900 ₽</p>
                      <p class="current-price">29 900 ₽</p>
                    </div>
                    <div class="buttons-wrapper">
                      <button class="scooter-versions__card--button" aria-label="Добавить в корзину">
                        <svg class="cart-icon-2">
                          <use href="./img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                      </button>
                      <button class="scooter-versions__favorite--button" aria-label="Добавить в избранное">
                        <svg class="favorite-icon">
                          <use href="./img/sprite.svg#heart"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <button type="submit" class="button card-button-sign-up" data-toggle="modal" data-target="#preorder-modal" aria-label="Записаться на тест-драйв">
                    Записаться на тест-драйв
                  </button>
                </div>
              </div>
            </div>

            <div class="scooter-versions__card">
              <div class="scooter-versions__card--image">
                <div class="card-image__items">
                  <div class="badge-new">Новинка</div>
                  <button class="add-to-compare-button" aria-label="Добавить в сравнение">
                    <svg class="compare-icon">
                      <use href="./img/sprite.svg#balance"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="scooter-versions__card--content">
                <h3 class="scooter-versions__card--title">Kugoo Kirin M4</h3>
                <div class="scooter-versions__card--info">
                  <ul class="scooter-versions__card--specification-list">
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#accumulator"></use>
                      </svg>
                      2000 mAh
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#speedometer"></use>
                      </svg>
                      60 км/ч
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#power"></use>
                      </svg>
                      1,2 л.с.
                    </li>
                    <li class="specification-item">
                      <svg class="specification-icon">
                        <use href="./img/sprite.svg#timer"></use>
                      </svg>
                      5 часов
                    </li>
                  </ul>
                  <div class="scooter-versions__card--controls">
                    <div class="scooter-versions__card--prices">
                      <p class="old-price">39 900 ₽</p>
                      <p class="current-price">29 900 ₽</p>
                    </div>
                    <div class="buttons-wrapper">
                      <button class="scooter-versions__card--button" aria-label="Добавить в корзину">
                        <svg class="cart-icon-2">
                          <use href="./img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                      </button>
                      <button  class="scooter-versions__favorite--button" aria-label="Добавить в избранное">
                        <svg class="favorite-icon">
                          <use href="./img/sprite.svg#heart"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <button type="submit" class="button card-button-sign-up" data-toggle="modal" data-target="#preorder-modal" aria-label="Записаться на тест-драйв">                     
                    Записаться на тест-драйв
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section-scooter-versions END -->

      <!-- section-cta START -->
      <section class="section-cta">
        <div class="section-cta-bg">
          <div class="container">
            <div class="section-cta-wrapper">
              <form                 
                action="phone-handler.php"
                method="POST"
                class="section-cta__form">
              		<h2 class="section-title section-cta__form--title">
                  Нет нужной модели, которую хотите протестировать?
                </h2>
                <p class="section-cta__form--text">
                  Оставьте заявку, и менеджер подберет нужный самокат
                </p>
                <div class="input-box section-cta__input-box">
                  <input
                    id="userphone"
                    type="tel"
                    name="user_phone"                    
                    class="input phone-mask"
                    placeholder="+7 (___) __ - __ - __"
                  />
                  <button type="submit"
                    class="button card-button-sign-up card-button-sign-up-cta" aria-label="Оставить заявку на тест-драйв"
                  >
                    Оставить заявку на тест-драйв
                  </button>
                </div>
                <div id="checkbox-agreement" class="checkbox-agreement__wrapper">
                  <input
                    class="input-checkbox"
                    id="input-checkbox"
                    type="checkbox"
                    name="agree"
                    value="yes"
                    aria-label="checkbox"
                    checked
                    required
                  />
                  <label for="input-checkbox"></label>
                  <p class="checkbox-agreement__wrapper--text">
                    Нажимая на кнопку, вы соглашаетесь на обработку персональных
                    данных и
                    <a href="#" class="link-to-policy"
                      >политикой конфиденциальности</a
                    >
                  </p>
                </div>
              </form>
              <div class="section-cta__form__image">
                <picture class="section-cta__form__picture">
                  <source
                    type="image/webp"
                    srcset="./img/portrait-cheerful.webp"
                  />
                  <source
                    type="image/jpeg"
                    srcset="./img/portrait-cheerful.jpg"
                  />
                  <img src="./img/portrait-cheerful.jpg" alt="portrait-cheerful" />
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section-cta END -->

      <!-- section-discount-offer START -->
      <section class="section-discount-offer">
        <div class="section-discount-offer__bg">
          <div class="container">
            <form 
              id="email-form"
              action="email-handler.php"
              method="POST"
              class="section-discount-offer__form">
                <h3 class="section-discount-offer__form--title">
                  Оставьте свою почту и станьте первым, кто получит скидку на
                  новые самокаты
                </h3>
                <div class="input-email__box">
                  <input  
                    id="user-email"
                    type="email"
                    name="user_email"
                    class="input input-email"
                    placeholder="Введите Ваш email">
                  <button 
                    type="submit" 
                    class="button button-sign-up button-submit-by-email"
                    aria-label="Подписаться" 
                    >
                    Подписаться
                  </button>
                </div>
            </form>
          </div>
        </div>
      </section>
      <!-- section-discount-offer END -->
    </main>

    <footer class="footer">
      <!-- footer-top START -->
      <div class="mobile__footer-top">
        <div class="container">
          <div class="footer-top__wrapper">
            <div class="goods-catalogue__wrapper">
              <h4 class="footer-top--title goods-catalogue__wrapper--title">
                Каталог товаров
              </h4>
              <ul class="footer-top__list goods-catalogue__wrapper--list">
                <li
                  class="footer-top__list--item goods-catalogue__wrapper--item"
                >
                  <a href="#">Электросамокаты</a>
                </li>
                <li
                  class="footer-top__list--item goods-catalogue__wrapper--item"
                >
                  <a href="#">Электроскутеры</a>
                </li>
                <li
                  class="footer-top__list--item goods-catalogue__wrapper--item"
                >
                  <a href="#">Электровелосипеды</a>
                </li>
                <li
                  class="footer-top__list--item goods-catalogue__wrapper--item"
                >
                  <a href="#">Электровелосипеды</a>
                </li>
              </ul>
            </div>

            <div class="for-purchases__wrapper">
              <h4 class="footer-top--title for-purchases__wrapper--title">
                Покупателям
              </h4>
              <ul class="footer-top__list for-purchases__wrapper--list">
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Сервисный центр</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Доставка и оплата</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Рассрочка</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Тест-драйв</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Блог</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Сотрудничество</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Контакты</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Акции</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="contacts__box">
            <div class="contacts__wrapper">
              <h4 class="footer-top--title contacts__wrapper--title">
                Контакты
              </h4>
              <div class="contacts-info__wrapper">
                <div class="contacts-info__inner">
                  <p class="contacts-info__inner--text">Call-центр</p>
                  <a href="tel:+78005055461" class="contacts-info__inner--phone"
                    >+7 (800) 505-54-61</a
                  >
                  <span class="contacts-info__inner--timing"
                    >Пн-Вс 10:00 - 20:00</span
                  >
                </div>
                <div class="contacts-info__inner">
                  <p class="contacts-info__inner--text">Сервисный центр</p>
                  <a href="tel:+74993507692" class="contacts-info__inner--phone"
                    >+7 (499) 350-76-92</a
                  >
                  <span class="contacts-info__inner--timing"
                    >Пн-Вс 10:00 - 20:00</span
                  >
                </div>
              </div>
            </div>
            <div class="order-call-link">
              <a href="#" class="order-call">Заказать звонок</a>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-top">
        <div class="container">
          <div class="footer-top__wrapper">
            <div class="goods-catalogue__wrapper">
              <h4 class="footer-top--title goods-catalogue__wrapper--title">
                Каталог товаров
              </h4>
              <ul class="footer-top__list goods-catalogue__wrapper--list">
                <li
                  class="footer-top__list--item goods-catalogue__wrapper--item"
                >
                  <a href="#">Электросамокаты</a>
                </li>
                <li
                  class="footer-top__list--item goods-catalogue__wrapper--item"
                >
                  <a href="#">Электроскутеры</a>
                </li>
                <li
                  class="footer-top__list--item goods-catalogue__wrapper--item"
                >
                  <a href="#">Электровелосипеды</a>
                </li>
                <li
                  class="footer-top__list--item goods-catalogue__wrapper--item"
                >
                  <a href="#">Электровелосипеды</a>
                </li>
              </ul>
            </div>

            <div class="for-purchases__wrapper">
              <h4 class="footer-top--title for-purchases__wrapper--title">
                Покупателям
              </h4>
              <ul class="footer-top__list for-purchases__wrapper--list">
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Сервисный центр</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Доставка и оплата</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Рассрочка</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Тест-драйв</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Блог</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Сотрудничество</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Контакты</a>
                </li>
                <li class="footer-top__list--item for-purchases__wrapper--item">
                  <a href="#">Акции</a>
                </li>
              </ul>
            </div>

            <div class="contacts__wrapper">
              <h4 class="footer-top--title contacts__wrapper--title">
                Контакты
              </h4>
              <div class="contacts-info__wrapper">
                <div class="contacts-info__inner">
                  <p class="contacts-info__inner--text">Call-центр</p>
                  <a href="tel:+78005055461" class="contacts-info__inner--phone"
                    >+7 (800) 505-54-61</a
                  >
                  <span class="contacts-info__inner--timing"
                    >Пн-Вс 10:00 - 20:00</span
                  >
                </div>
                <div class="contacts-info__inner">
                  <p class="contacts-info__inner--text">Сервисный центр</p>
                  <a href="tel:+74993507692" class="contacts-info__inner--phone"
                    >+7 (499) 350-76-92</a
                  >
                  <span class="contacts-info__inner--timing"
                    >Пн-Вс 10:00 - 20:00</span
                  >
                </div>
              </div>
            </div>
            <div class="order-call-link">
              <a href="#" class="order-call">Заказать звонок</a>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-top END -->

      <div class="container">
        <div class="seporator"></div>
      </div>

      <!-- footer-middle START -->
      <div class="footer-middle">
        <div class="container">
          <div class="footer-middle__wrapper">
            <div class="logo footer-middle--logo">
              <a href="#">Kugoo</a>
            </div>
            <div class="footer-middle__mobile-stores--buttons">
              <a href="#" class="mobile-store-button googleplay-button">
                <img src="./img/icons/google-play.svg" alt="google-play" />                
              </a>
              <a href="#" class="mobile-store-button apple-store-button">
                <img src="./img/icons/apple-store.svg" alt="apple-store" />                
              </a>
            </div>
            <div class="footer-middle__sociales--buttons">
              <a href="#" class="social-button vk-botton">
                <div class="social-image">
                  <svg class="vk-icon">
                    <use href="./img/sprite.svg#vk"></use>
                  </svg>
                </div>
                <div class="social-button-description">
                  <span class="social-button--text">Вконтакте</span>
                  <span class="social-button--text-number">3 300</span>
                </div>
              </a>
              <a href="#" class="social-button youtube-botton">
                <div class="social-image">
                  <svg class="youtube-icon">
                    <use href="./img/sprite.svg#youtube"></use>
                  </svg>
                </div>
                <div class="social-button-description">
                  <span class="social-button--text">YouTube</span>
                  <span class="social-button--text-number">3 603</span>
                </div>
              </a>
              <a href="#" class="social-button telegram-botton">
                <div class="social-image">
                  <svg class="telegram-icon">
                    <use href="./img/sprite.svg#telegram-2"></use>
                  </svg>
                </div>
                <div class="social-button-description">
                  <span class="social-button--text">Telegram</span>
                  <span class="social-button--text-number">432</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-middle END -->

      <div class="container">
        <div class="seporator"></div>
      </div>

      <!-- footer-bottom START -->
      <div class="footer-bottom">
        <div class="container">
          <div class="footer-bottom__wrapper">
            <div class="details-and-policy__box">
              <a href="#" class="details">Реквизиты</a>
              <a href="#" class="policy">Политика конфиденциальности</a>
            </div>

            <div class="payment-methods__box">
              <ul class="payment-methods__list">
                <li class="payment-methods__item">
                  <svg class="payment-icon">
                    <use href="./img/sprite.svg#googlepay"></use>
                  </svg>
                </li>
                <li class="payment-methods__item">
                  <svg class="payment-icon">
                    <use href="./img/sprite.svg#applepay"></use>
                  </svg>
                </li>
                <li class="payment-methods__item">
                  <svg class="payment-icon">
                    <use href="./img/sprite.svg#visa-logo"></use>
                  </svg>
                </li>
                <li class="payment-methods__item">
                  <svg class="payment-icon">
                    <use href="./img/sprite.svg#mastercard"></use>
                  </svg>
                </li>
                <li class="payment-methods__item">
                  <svg class="payment-icon">
                    <use href="./img/sprite.svg#maestro"></use>
                  </svg>
                </li>
                <li class="payment-methods__item">
                  <svg class="payment-icon">
                    <use href="./img/sprite.svg#webmoney"></use>
                  </svg>
                </li>
                <li class="payment-methods__item">
                  <svg class="payment-icon">
                    <use href="./img/sprite.svg#qiwi"></use>
                  </svg>
                </li>
              </ul>
            </div>

            <div class="online-chat__box">
              <span class="online-chat__text">Online чат:</span>

              <div class="footer__links--messengers">
                <a href="#">
                  <svg class="viber">
                    <use href="./img/sprite.svg#viber"></use>
                  </svg>
                </a>
                <a href="#">
                  <svg class="whatsapp">
                    <use href="./img/sprite.svg#whatsapp"></use>
                  </svg>
                </a>
                <a href="#">
                  <svg class="telegram">
                    <use href="./img/sprite.svg#telegram"></use>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-bottom END -->
    </footer>

    <!-- modal START -->
    <div class="modal" id="preorder-modal">
      <div class="modal-dialogue">
        <div class="close-button">
        <a
          href="#"
          class="modal-close"
          data-toggle="modal" 
          data-target="#preorder-modal"       
        >
          <svg class="close-icon">
            <use href="./img/sprite.svg#close"></use>
          </svg>
        </a>
      </div>
      <div class="modal-container">
        <div class="modal-content">
          <div class="modal-dialog__top">
            <h3 class="modal-title">Запишитесь натест-драйв электросамоката</h3>
            <p class="modal-subtitle">и подберите модель для себя</p>
            <p class="modal-text">
              Менеджер свяжется с вами в течение 5 минут, чтобы согласовать
              время.
            </p>
          </div>

          <div class="modal-dialog__bottom">
            <p class="modal-text-question">Как с вами удобнее связаться?</p>

            <form action="phone-handler.php" method="POST" class="modal-form" id="modal-form">
              <div class="input-box-wrapper">
                <div class="input-box modal-input-box">
                  <input
                    id="modal-user-phone"
                    type="tel"
                    name="user_phone"
                    class="input modal-input phone-mask"                    
                    placeholder="+7 (___) __ - __ - __"
                  />
                </div>
              </div>

              <div class="modal-form-footer">
                <button type="submit" class="button modal-form-button" aria-label="Оформить предзаказ">
                  Оформить предзаказ
                </button>
                <div
                  class="checkbox-agreement__wrapper modal-checkbox-agreement__wrapper"
                >
                  <input
                    class="input-checkbox"
                    id="modal__input-checkbox"
                    type="checkbox"
                    name="agree"
                    value="yes"
                    aria-label="checkbox"
                    checked
                    required
                  />
                  <label for="modal__input-checkbox"></label>
                  <p class="checkbox-agreement__wrapper--text">
                    Нажимая на кнопку, вы соглашаетесь на обработку персональных
                    данных и
                    <a href="#" class="link-to-policy modal__link-to-policy"
                      >политикой конфиденциальности</a
                    >
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-image">
          <picture class="modal-picture">
            <source type="image/webp" srcset="img/modal-image.webp" />
            <source type="image/jpeg" srcset="img/modal-image.jpg" />
            <img src="img/modal-image.jpg" alt="modal-image" />
          </picture>
        </div>
      </div>
      </div>
    </div>
    <!-- modal END -->

    <!-- modal-success START -->
     <div class="modal modal-success" id="success-modal">
      <div class="modal-dialogue">
        <div class="close-button">
          <a
            href="#"
            class="modal-close"
            data-target="#success-modal"
            data-toggle="modal"          
          >
            <svg class="close-icon">
              <use href="./img/sprite.svg#close"></use>
            </svg>
          </a>
        </div>
      <div class="modal-container">
        <div class="modal-content">
          <div class="modal-dialog__top">
            <h3 class="modal-title">Спасибо за заявку!</h3>
            <p class="modal-text">
              Менеджер свяжется с вами в течение 5 минут.
            </p>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- modal-success END -->
    
    <script src="./js/just-validate.production.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
