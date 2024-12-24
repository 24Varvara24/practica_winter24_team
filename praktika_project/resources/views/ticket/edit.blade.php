@extends('layouts.parent')
@section('title')
    <title>Афиша</title>
@endsection
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('css/afisha/index.css') }}">
@endsection
@section('main')
<div class='container-sm justfify-content-center mt-2'>
    <form action="{{ route('ticket.update', $ticket->id) }}" method="POST">
        @CSRF
        @method('PUT')
        <div class="mb-3" style="color: white">
            <label for="exampleInputEmail1" class="form-label">Статус</label>
            <select name="status_id" id="">
                @foreach ($statuses as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
