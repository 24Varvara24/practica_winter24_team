@extends('layouts.parent')
@section('title') 
<title>Афиша</title>
@endsection
@section('style')
<link rel="stylesheet" href=".\css\afisha\index.css" >
@endsection
@section('main')
<main>

        @if(auth()->check())
            @if(auth()->user()->role_id=='0')
            @foreach ($performances as $performance)
        <a href="{{ route('afisha.show', ['afisha' => $performance->id]) }}" class="performans_a">
            <div class="performans">    
            <img src="{{ asset('/storage/' . $performance->image_small) }}" alt="" width="300px" height="180px">
            <div class="title">{{ $performance->name }}</div>
            <div class="date">{{ $performance->date }}</div>
            <div class="annotation">{{ $performance->annotation }}</div>
            <div class="price">
                <div class="cost">{{ $performance->price }} ₽</div>
                {{-- сюда вставить кнопку удалить, редактитовать, кнопку купить удалить --}}
                <a href="{{ route('afisha.edit', $performance->id) }}" class="btn btn-warning">Редактировать</a>
                <form action="{{ route('afisha.destroy', $performance->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Удалить</button>
              </form>
            </div>
        </div>
        </a>
    @endforeach
    <form action="{{ route('afisha.create') }}">
        <button class="btn2">Создать</button>
    </form>
    @else
    @foreach ($performances as $performance)
    <a href="{{ route('afisha.show', ['afisha' => $performance->id]) }}" class="performans_a">
        <div class="performans">    
        <img src="{{ asset('/storage/' . $performance->image_small) }}" alt="" width="300px" height="180px">
        <div class="title">{{ $performance->name }}</div>
        <div class="date">{{ $performance->date }}</div>
        <div class="annotation">{{ $performance->annotation }}</div>
        <div class="price">
            <div class="cost">{{ $performance->price }} ₽</div>
            <a href="{{ route('ticket.create',['user_id' => auth()->user()->id,'performance_id' => $performance->id]) }}">
                <button class="btn2">купить</button>
            </a>
        </div>
    </div>
    </a>
@endforeach
    @endif
@else
@foreach ($performances as $performance)
    <a href="{{ route('afisha.show', ['afisha' => $performance->id]) }}" class="performans_a">
    <div class="performans">    
    <img src="{{ asset('/storage/' . $performance->image_small) }}" alt="" width="300px" height="180px">
    <div class="title">{{ $performance->name }}</div>
    <div class="date">{{ $performance->date }}</div>
    <div class="annotation">{{ $performance->annotation }}</div>
    <div class="price">
        <div class="cost">{{ $performance->price }} ₽</div>
        <a href="{{ route('ticket.create',['user_id' => auth()->user()->id,'performance_id' => $performance->id]) }}">
            <button class="btn2">купить</button>
        </a>
    </div>
</div>
</a>
@endforeach


@endif
    

{{--     
    <a href="\" class="performans_a">
        <div class="performans">
            
        <img src="{{asset('css\afisha\img\perf2.png')}}" alt="">
        <div class="title">Чародейка</div>
        <div class="date">12 декабря 2024 -  20 января 2025</div>
        <div class="annotation">Спектакль Мариинского театра с участием солистов оперы, хора и оркестра Большого театра</div>
        <div class="price">
            <div class="cost">от 300 до 10000 ₽</div>
            <form action="#">
                <button class="btn2">купить</button>
            </form>
        </div>
    </div>
    </a> --}}
    


</main>
@endsection


