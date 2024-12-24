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
    <main style="display: flex; flex-direction:column;">
        <img src="{{ asset('css\afisha\img\stage.png') }}" alt="" width="400px" height="260px"
            style="display: flex; align-self:center;">
       
        <form action="{{ route('ticket.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                
                <input hidden value="{{ auth()->user()->id }}" name="user_id">
            </div>
            <div class="mb-3">
                <!-- неявно передаем айдишник перформанса -->
                <input hidden value="{{ $performance_id }}" name="performance_id">
            </div>
            <div class="mb-3" style="color: white">
                <label for="exampleInputEmail1" class="form-label">Ряд</label>
                <select name="row" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                </select>
            </div>
            <div class="mb-3" style="color: white">
                <label for="exampleInputEmail1" class="form-label">Место</label>
                <select name="seat" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                    <option>32</option>
                    <option>33</option>
                    <option>34</option>
                    <option>35</option>
                    <option>36</option>
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                    <option>40</option>
                </select>
            </div>
            <div class="mb-3" style="color: white">
                <label for="exampleInputEmail1" class="form-label">Статус</label>
                <!-- перебор статусов -->
                <select name="status_id" id="">
                    @foreach ($statuses as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Заказать</button>
        </form>
    </main>
@endsection
