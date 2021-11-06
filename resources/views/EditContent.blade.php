@extends('main_view')

@section('page_title')

@section('main_content')
    <div class="mt-4 p-5 ">
        <form action="{{ route('ShowContent.update', $content['id']) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <label for="inputProjectName" class="form-label">Nama: </label>
            <input id="name" name="name" type="text" class="form-control">

            <label for="inputJenis" class="form-label">Jenis: </label>
            <input id="jenis" name="jenis" type="text" class="form-control">

            <label for="durasi" class="form-label">Durasi: </label>
            <input id="durasi" name="durasi" type="text" class="form-control">

            <label for="youtuber" class="form-label">Nama Youtuber: </label>

            <select class="form-control" name="youtuber">
                @foreach ($youtuber as $y)
                    <option value="{{ $y['code'] }}">{{ $y['name'] }}</option>
                @endforeach
            </select>
            <br>
            <br>
            <button type="submit" class="btn bg-success ">Submit</button>
        </form>


    </div>
@endsection
