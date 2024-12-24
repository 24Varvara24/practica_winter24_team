@extends('layouts.parent')
@section('title')
    <title>Спектакль</title>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('css/afisha/show.css') }}">
@endsection
@section('main')
    @if (auth())
        @if (auth()->user()->role_id == 0)
            <main>
                <img src="{{ asset('/storage/' . $performance->image_big) }}" alt="" width="100%" height="600px">
                <div class="title">{{ $performance->name }}</div>
                <div class="desc">{{ $performance->description }}</div>
                <div class="block1">
                    <div class="charact">
                        <div class="text1"><span>Длительность:</span> {{ $performance->duration }} час</div>
                        <div class="text1"><span>Дата постановки:</span>{{ $performance->date }}</div>
                        <div class="text1"><span>Время начала:</span>{{ $performance->begin }}</div>
                        <div class="text1"><span>Цена:</span>{{ $performance->price }} ₽</div>
                    </div>
                    <a class="btn1" href="{{ route('ticket.create',['user_id' => auth()->user()->id,'performance_id' => $performance->id]) }}">купить</a>
                </div>
            </main>
        @else
            <main>
                <img src="{{ asset('/storage/' . $performance->image_big) }}" alt="" width="100%" height="600px">
                <div class="title">{{ $performance->name }}</div>
                <div class="desc">{{ $performance->description }}</div>
                <div class="block1">
                    <div class="charact">
                        <div class="text1"><span>Длительность:</span> {{ $performance->duration }} час</div>
                        <div class="text1"><span>Дата постановки:</span>{{ $performance->date }}</div>
                        <div class="text1"><span>Время начала:</span>{{ $performance->begin }}</div>
                        <div class="text1"><span>Цена:</span>{{ $performance->price }} ₽</div>
                    </div>
                    <a class="btn1" href="{{ route('ticket.create',['user_id' => auth()->user()->id,'performance_id' => $performance->id]) }}"> купить </a>
                </div>
            </main>
        @endif
        @else
            <main>
                <img src="{{ asset('/storage/' . $performance->image_big) }}" alt="" width="100%" height="600px">
                <div class="title">{{ $performance->name }}</div>
                <div class="desc">{{ $performance->description }}</div>
                <div class="block1">
                    <div class="charact">
                        <div class="text1"><span>Длительность:</span> {{ $performance->duration }} час</div>
                        <div class="text1"><span>Дата постановки:</span>{{ $performance->date }}</div>
                        <div class="text1"><span>Время начала:</span>{{ $performance->begin }}</div>
                        <div class="text1"><span>Цена:</span>{{ $performance->price }} ₽</div>
                    </div>

                </div>
            </main>
        @endif
    @endsection
