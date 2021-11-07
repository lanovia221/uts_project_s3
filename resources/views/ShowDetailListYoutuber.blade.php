@extends('main_view')

@section ('title','ShowDetailListYoutuber')
@section('pagetitle','ShowDetailListYoutuber')

@section('main_content')
    <div class="mt-4 p-5 text-white rounded bg-warning">
        <h1>{{ $youtube['name'] }}</h1>
        <p>Code: {{ $youtube['code'] }}</p>
        <p>Salary: {{ $youtube['salary'] }} </p>
        <p>Description: {{ $youtube['description'] }}</p>

        <table class="table table-bordered border-primary table-hover">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Jenis</td>
                <td>Durasi</td>
                <td>Youtuber</td>
    
                @foreach ($youtube->contents as $c)
                    <tr>
                        <td>{{ $loop -> index+1 }}</td>
                        <td>{{$c['nama']}}</td>
                        <td>{{ $c ['jenis'] }}</td>
                        <td>{{ $c ['durasi'] }}</td>
                        <td>{{ $c->youtubers->name }}</td>

                    </tr>
    
                @endforeach
        </table>

    </div>
@endsection