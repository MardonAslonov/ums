@extends('layouts.app')
@section('content')
<br>
<a href="/1bet"><button type="submit" class="btn btn-success">Asosiy</button></a>
<br>
<h2 class="text-center"> Bu create sahifa Mirshod </h2>
<div class="row">
    <div class="col-md-6">
        <form method="post" action="/store1">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tashkilot nomi</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Tashkilot manzili</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            {{-- <div class="mb-3">
                <label for="phone" class="form-label">Telefon raqami </label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div> --}}
           <button type="submit" class="btn btn-success">Qo'shish</button>
        </form>
    </div>
</div>
@endsection
