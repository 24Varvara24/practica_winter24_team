@extends('layouts.parent')
@section('title') 
<title>Афиша</title>
@endsection
@section('style')
{{-- /*бутстрап не работает здесь допилить! */ --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
<link rel="stylesheet" href="{{asset('css/afisha/index.css')}}" >
@endsection
@section('main')
<main>
        <form action="{{ route('afisha.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3" style="color: white">
        <label for="exampleInputEmail1" class="form-label">Название постановки</label>
        <input type="text" placeholder='Название' name="name" class="form-control">
    </div>
    <div class="mb-3" style="color: white">
        <label for="exampleInputEmail1" class="form-label">Описание постановки</label>
        <input type="text" placeholder='Описание' name="description" class="form-control">
    </div>
    <div class="mb-3" style="color: white">
        <label for="exampleInputEmail1" class="form-label">Аннотация</label>
        <input type="text" placeholder='Описание' name="annotation" class="form-control">
    </div>
    <div class="mb-3" style="color: white">
        <label for="exampleInputEmail1" class="form-label">Начало показа</label>
        <input type="time" name="begin" class="form-control">
    </div>
    <div class="mb-3" style="color: white">
        <label for="exampleInputEmail1" class="form-label">Дата показа</label>
        <input type="date" name="date" class="form-control">
    </div>
    <div class="mb-3" style="color: white">
        <label for="exampleInputEmail1" class="form-label">Длительность</label>
        <input type="text" placeholder='Описание' name="duration" class="form-control">
    </div>
    <div class="mb-3" style="color: white">
        <label for="exampleInputEmail1" class="form-label">Цена</label>
        <input type="text" placeholder='Описание' name="price" class="form-control">
    </div>
    <div class="mb-3" style="color: white">
        <label for="exampleInputEmail1" class="form-label">Добавьте фото маленькое</label>  
        <input type="file"  name="image_small" class="form-control">
    </div>
    <div class="mb-3" style="color: white">
        <label for="exampleInputEmail1" class="form-label">Добавьте фото большое</label>  
        <input type="file"  name="image_big" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</main>
@endsection