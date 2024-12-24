@extends('layouts.parent')
@section('title')
    <title>Личный кабинет</title>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('css\mainpage\style.css') }}">
@endsection




@section('main')



    <div class="pers-acc">
        <div class="container">
            <div class="pers-acc__content">
                <p class="pers__title"><span class="gold-text">личный кабинет</p>
                <div class="pers-acc__data">
                    <div class="data__line">
                        <img class="pers__img" src=".\css\mainpage\img\Theatre Mask.svg" alt="">
                        <div class="data__col">
                            <div class="data__block">
                                <p class="data__lable">ФИО:</p>
                                <p class="data__meaning">{{ $user->name }}</p>
                            </div>
                            <div class="data__block">
                                <p class="data__lable">E-mail:</p>
                                <p class="data__meaning">{{ $user->email }}</p>
                            </div>
                            <div class="data__block">
                                <p class="data__lable">мобильный:</p>
                                <p class="data__meaning">{{ $user->phone }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- новое --}}
                    @if (auth()->check())
                        @if (auth()->user()->role_id == '0')
                            @foreach ($tickets as $ticket)
                                <div class="ticket">
                                    <div class="ticket__col">
                                        <div class="ticket__order-info">
                                            <div class="ticket__order-num">
                                                <p class="order-num__label">номер заказа</p>
                                                <p class="order-num__value">{{ $ticket->id }}</p>
                                            </div>
                                            <div class="ticket__order-owner">
                                                <p class="order-owner__label">
                                                    владелец:
                                                </p>
                                                <p class="order-owner__value">{{ $ticket->user->name }}</p>

                                            </div>
                                        </div>
                                        <p class="ticket__performance-name">{{ $ticket->performance->name }}</p>
                                        <div class="ticket__order-info">
                                            <div class="place">
                                                <div class="seat">
                                                    <p class="seat__label">ряд:</p>
                                                    <p class="seat__value">{{ $ticket->row }}</p>
                                                </div>
                                                <div class="seat">
                                                    <p class="seat__label">место:</p>
                                                    <p class="seat__value">{{ $ticket->seat }}</p>
                                                </div>
                                            </div>
                                            <div class="ticket__status">
                                                <p class="status__label">статус заказа:</p>
                                                <p class="status__value">{{ $ticket->status }}</p>
                                            </div>
                                            <div class="ticket__price">
                                                <p class="price__label">цена:</p>
                                                <p class="price__value">{{ $ticket->performance->price }} ₽</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ticket__col" style="align-items: flex-end;">
                                    <img class="ticket__img" src=".\css\mainpage\img\ticket.png" alt="">
                                    <div class="ticket__btns">

                                        <a href="{{ route('ticket.edit', $ticket->id) }}"><button class="btn3">изменить
                                                статус</button></a>

                                        <form action="{{ route('ticket.destroy', $ticket->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn3">Отменить заказ</button>
                                        </form>
                                    </div>
                                </div>
                                </div>    
                @endforeach
            @else
                @foreach ($tickets as $ticket)
                    @if ($ticket->user_id == Auth::id())
                        <div class="ticket">
                            <div class="ticket__col">
                                <div class="ticket__order-info">
                                    <div class="ticket__order-num">
                                        <p class="order-num__label">номер заказа</p>
                                        <p class="order-num__value">{{ $ticket->id }}</p>
                                    </div>
                                    <div class="ticket__order-owner">
                                        <p class="order-owner__label">
                                            владелец:
                                        </p>
                                        <p class="order-owner__value">{{ $ticket->user->name }}</p>

                                    </div>
                                </div>
                                <p class="ticket__performance-name">{{ $ticket->performance->name }}</p>
                                <div class="ticket__order-info">
                                    <div class="place">
                                        <div class="seat">
                                            <p class="row__label">ряд:</p>
                                            <p class="row__value">{{ $ticket->row }}</p>
                                        </div>
                                        <div class="seat">
                                            <p class="seat__label">место:</p>
                                            <p class="seat__value">{{ $ticket->seat }}</p>
                                        </div>
                                    </div>
                                    <div class="ticket__status">
                                        <p class="status__label">статус заказа:</p>

                                        <p class="status__value">{{ $ticket->status }}</p>
                                    </div>
                                    <div class="ticket__price">
                                        <p class="price__label">цена:</p>
                                        <p class="price__value">{{ $ticket->performance->price }} ₽</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket__col" style="align-items: flex-end;">
                                <img class="ticket__img" src=".\css\mainpage\img\ticket.png" alt="">
                                <div class="ticket__btns">
                                    <form action="{{ route('ticket.destroy', $ticket->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn3">Отменить заказ</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @endif
                @endif




                <div class="data__col">
                    <div class="data__block">
                        <p class="data__support">Обратиться в поддержку</p>
                        <p class="data__support">часто задаваемые вопросы </p>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn">выход</button>
                </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
@endsection
