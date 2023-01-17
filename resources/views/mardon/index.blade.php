@extends('layouts.app')
@section('content')
    <br>
    <h2 class="text-center">Bu Mardonning tashkilotlari</h2>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/create"><button type="button" class="btn btn-success">creat</button></a>
        <a href="/1bet"><button type="button" class="btn btn-success">home</button></a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>T/R</th>
                <th class="col-md-2">Tashkilot nomi</th>
                <th>Tashkilot manzili</th>
                <th>Telefon raqami</th>
                <th class="col-md-1">Action</th>
                {{-- <td>Amallar</td> --}}
            </tr>
        </thead>

        <body>
            @foreach ($mardon as $mard)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $mard->name }}</td>
                    <td>{{ $mard->address }}</td>
                    <td>{{ $mard->phone }}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('edit', $mard->id) }}"><button class="btn btn-primary me-md-2"
                                    type="button">update</button></a>
                            <a href="{{ route('delete', $mard->id) }}"><button class="btn btn-danger"
                                    type="button">delete</button></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
    {{ $mardon->links() }}
@endsection
