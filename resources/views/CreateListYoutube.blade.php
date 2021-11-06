@extends('main_view')

@section('page_title')

@section('main_content')

<div class="mt-4 p-5 ">
    <form action="{{route('ListYoutube.store')}}" method="POST">
        @csrf
        
        <div class="form-group" >
            <label for="inputProjectName" class="form-label">Name: </label>
            <input id="name" name="name" type="text" class="form-control">

            <label for="inputDescrption" class="form-label">Description: </label>
            <input id="description" name="description"type="text" class="form-control">

            <label for="salary" class="form-label">Salary: </label>
            <input id="salary" name="salary" type="text" class="form-control">

            <label for="code" class="form-label">Code: </label>
            <input id="code" name="code" type="text" class="form-control">


            <br>
            {{-- <label for="inputJenis" class="form-label">Jenis Content: </label>
            
            <select class="form-control">
                @foreach ($content as $c )

                <option value="{{ $c['nama'] }}">{{ $c['nama'] }}</option>

                @endforeach
            </select> --}}

            <br>
            <br>

            <button type="submit" class="btn bg-success ">Submit</button>
        </div>

    </form>
</div>

@endsection