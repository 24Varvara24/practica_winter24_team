@extends('layouts.parent')
@section('title') 
<title>Редактировать</title>
@endsection
@section('style')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/afisha/index.css')}}" >
@endsection
@section('main')
<main>
    <div class='container-sm justfify-content-center mt-2'>
        <form action="{{ route('afisha.update', $performance->id) }}" method="POST" enctype="multipart/form-data">
            @CSRF
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название постановки</label>
                <input class="form-control" name="name" value="{{ $performance->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Описание</label>
                <input class="form-control" name="description" value="{{ $performance->description }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Аннотация</label>
                <input class="form-control" name="annotation" value="{{ $performance->annotation }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Длительность</label>
                <input class="form-control" name="duration" value="{{ $performance->duration }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Дата</label>
                <input class="form-control" name="date" value="{{ $performance->date }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Время</label>
                <input class="form-control" name="begin" value="{{ $performance->begin }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Цена</label>
                <input class="form-control" name="price" value="{{ $performance->price }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Изображение маленькое</label>
                <input type='file' class="form-control" name="image_small" value="{{ $performance->image_small }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Изображение большое</label>
                <input type='file' class="form-control" name="image_big" value="{{ $performance->image_big }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
@endsection