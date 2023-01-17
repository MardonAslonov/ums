@extends('layouts.app')
@section('content')
<br>
<h2 class="text-center"> update Mardon </h2>
<br>
<a href="/1bet"><button type="submit" class="btn btn-success">home</button></a>
<br>
<br>
<div class="row">
    <div class="col-md-6">
        <form method="post" action="{{ route('updateUserMardonTable',$mard->id)}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$mard->name}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$mard->address}}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{$mard->phone}}">
            </div>
           <button type="submit" class="btn btn-success">save</button>
        </form>
    </div>
</div>
@endsection

