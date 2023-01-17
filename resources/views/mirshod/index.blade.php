@extends('layouts.app')
@section('content')
    <br>
    <h2 class="text-center">Bu Mirshodning tashkilotlari</h2>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/create1"><button type="button" class="btn btn-success">creat</button></a>
        <a href="/1bet"><button type="button" class="btn btn-success">Home</button></a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>T/R</th>
                <th class="col-md-2">Tashkilot nomi</th>
                <th>Tashkilot manzili</th>
                <th class="col-md-1">Action</th>
                {{-- <td>Amallar</td> --}}
            </tr>
        </thead>

        <body>
            @foreach ($mirshod as $mir)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $mir->name }}</td>
                    <td>{{ $mir->address }}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('editMirshod', $mir->id) }}"><button class="btn btn-primary me-md-2"
                                    type="button">update</button></a>
                            <a href="{{ route('deleteMirshod', $mir->id) }}"><button class="btn btn-danger"
                                    type="button">delete</button></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
    {{ $mirshod->links() }}
@endsection
