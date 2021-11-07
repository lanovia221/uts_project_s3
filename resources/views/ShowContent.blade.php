@extends('main_view')

@section('page_title')

@section('main_content')
<div class="mt-1 p-3">
    <br>
    <br>
    <table class="table table-striped border border-2 border-secondary">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis</td>
            <td>Durasi</td>
            <td>Youtuber</td>
            <td colspan="3" align="center">Action</td>

            @foreach ($content as $c)
                <tr>
                    <td>{{ $loop -> index+1 }}</td>
                    <td>{{$c['nama']}}</td>
                    <td>{{ $c ['jenis'] }}</td>
                    <td>{{ $c ['durasi'] }}</td>
                    <td>{{ $c->youtubers->name }}</td>
                    <td>
                        <a href="{{route("ShowContent.edit", $c['id'])}}">
                            <button type="submit" class="btn btn-outline-primary d-flex p-2 text-uppercase justify-content-center">Edit</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{route("ShowContent.destroy", $c['id'])}}" method="POST">
                         @csrf
                         @method('Delete')
                            <button type="submit" class="btn btn-outline-danger d-flex p-2 text-uppercase justify-content-center">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route("ShowContent.create")}}" class="btn btn-outline-success  d-flex p-2 mx-auto text-uppercase justify-content-center">Add</a>
                    </td>
                </tr>

            @endforeach
    </table>
    <br>
    <br>
            {{-- <a href="{{route("ShowContent.create")}}" class="btn btn-outline-success d-flex p-3 bd-highlight mx-auto text-uppercase justify-content-center">Add New List</a> --}}
</div>
@endsection