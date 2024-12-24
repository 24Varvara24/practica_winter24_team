@extends('layouts.parent')
@section('title') 
<title>Главная</title>
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css\mainpage\style.css')}}" >

<!-- <link rel="stylesheet" href=".\css\mainpage\style.css" > -->
@endsection
@section('main')
<section class="contacts">
    <h1 class="title">контакты</h1>
    <div class="where__info">
        <div class="where__info__texts">
            <div class="contacts__text">
                <span class="contacts__title">Адрес</span>
                <span class="contacts__info">Театральная площадь, 1</span>
            </div>
            <div class="contacts__text">
                <span class="contacts__title">Кассы</span>
                <a href="tel:74954555555" class="contacts__info decoration">+7 495 455-55-55</a>
                <a href="mailto:sales@bolshoi.ru" class="contacts__info decoration">sales@bolshoi.ru</a>
            </div>
            <div class="contacts__text">
                <span class="contacts__title">Для обращений зрителей</span>
                <a href="mailto:referent@bolshoi.ru" class="contacts__info decoration">referent@bolshoi.ru</a>
            </div>
        </div>
        <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aabd5b0ff07542aa585639e979c5622683d748b222a2c41a4609c9cb0cd1273c2&amp;width=600&amp;height=473&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</section>
<section class="mecenat">
    <h1 class="title"><span class="yellow">стать</span> меценатом</h1>
    <div class="mecenat__block">
        <div class="mecenat__supp">
            <a href="tel:78121234555" class="mecenat__supp__info decoration">+7 (812) 123-45-55</a>
            <a href="tel:78121234566" class="mecenat__supp__info decoration">+7 (812) 123-45-66</a>
            <a href="mailto:info@bolshoi.ru" class="mecenat__supp__info decoration">info@bolshoi.ru</a>
            <span class="mecenat__supp__info">г. москва, театральная площадь, 1</span>
        </div>
        <div class="mecenat__info">
            <div class="mecenat__info__inputs">
                <div class="inputswidth">
                    <input type="text" placeholder="Имя" class="inputs">
                    <input type="tel" placeholder="Компания" class="inputs">
                    <input type="text" placeholder="Телефон" class="inputs">
                    <input type="email" placeholder="E-mail" class="inputs">
                </div>
                <textarea class="inputs" id="textarea" placeholder="Сообщение"></textarea>
            </div>
            <div class="mecenat__info__send">
                <span class="mecenat__info__send__text">* Ваши данные не будут переданы третьим лицам, 100%
                    вероятность. Конфиденциальность мы гарантируем, и защищаем персональные данные согласно
                    законку
                    ФЗ-52.</span>
                <button class="btn1">отправить</button>
            </div>
        </div>
    </div>
</section>
@endsection