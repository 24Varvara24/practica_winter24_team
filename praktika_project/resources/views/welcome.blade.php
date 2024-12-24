@extends('layouts.parent')
@section('title') 
<title>Главная</title>
@endsection
@section('style')
<link rel="stylesheet" href=".\css\mainpage\style.css" >
@endsection
@section('main')
<main>
    <div class="block_main_performans">
<div class="performans-desc">
    <div class="performans-date">12 декабря 2024 -  20 января 2025</div>
    <div class="performans-title">Чародейка</div>
    <form action="\afisha">
        <button class="btn1">купить билет</button>
    </form>
</div>
    </div>

    <div class="about-theatre">
        <div class="container">
            <div class="about-theatre__content">
                <p class="about-theatre__title"><span class="gold-font">о </span>театре</p>
                <div class="about-theatre__main">
                    <div class="about-theatre__column">
                        <p class="about-theatre__cubmain">Самый лучший театр россии</p>
                        <p class="about-theatre__text">
                            Как свидетельствуют архивные документы, первое каменное здание Большого театра начали
                            возводить в 1775 году по проекту Антонио Ринальди. В дальнейшем, после того как Ринальди
                            упал с лесов и не мог лично наблюдать за ходом работ, Екатерина II поручила немецкому
                            театральному декоратору и архитектору Людвигу Филиппу Тишбейну создать новый проект театра,
                            который и был воплощён архитекторами Ф. В. фон Бауром и М. А. Деденёвым. Открытие его
                            состоялось в 1783 году, хотя, основываясь на других свидетельствах, годом открытия можно
                            считать 1784 год.
                        </p>
                    </div>
                    <div class="about-theatre__column">
                        <p class="about-theatre__cubmain">немного о цифрах</p>
                        <div class="about-theatre__nums">
                            <div class="about-theatre__nums-block">
                                <img class="nums-block__icon" src=".\css\mainpage\img\armchair 1.svg" alt="">
                                <p class="nums-block__text">
                                    <span class="gold-font">1600 </span>
                                    посадочный мест
                                </p>
                            </div>
                            <div class="about-theatre__nums-block">
                                <img class="nums-block__icon" src=".\css\mainpage\img\theater 1.svg" alt="">
                                <p class="nums-block__text">
                                    <span class="gold-font">350 </span>
                                    лет истории
                                </p>
                            </div>
                        </div>
                    </div>
                    <img class="nums-block__img"  src=".\css\mainpage\img\Rectangle 12.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="critic"></section>
        <section class="partners">
            <h1 class="title"><span class="yellow">партнеры</span> театра</h1>
            <div class="partners__img">
                <img src=".\css\mainpage\img\gasp.svg" alt="" class="partner">
                <img src=".\css\mainpage\img\gum.svg" alt="" class="partner">
                <img src=".\css\mainpage\img\ingoss.svg" alt="" class="partner">
                <img src=".\css\mainpage\img\tbank_logo.svg" alt="" class="partner">
            </div>
        </section>
        <section class="where">
            <h1 class="title"><span class="yellow">как</span> нас найти?</h1>
            <div class="where__info">
                <div class="where__info__texts">
                    <span class="where__info__texts__text">г. Москва, Театральная площадь, 1</span>
                    <span class="where__info__texts__text">Станция Театральная</span>
                    <span class="where__info__texts__text">Остановка “Театральная площадь”</span>
                </div>
                <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aabd5b0ff07542aa585639e979c5622683d748b222a2c41a4609c9cb0cd1273c2&amp;width=600&amp;height=473&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </section>
</main>
@endsection


