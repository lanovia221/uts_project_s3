@extends('main_view')

@section('page_title')

@section('main_content')

<div class="mt-4 p-5 ">
    <form action="{{route('ListYoutube.update', $youtube['code'])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        
        <div class="mb-3 form-group" >
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
            <select>
                <option value="food">Food</option>
                <option value="game">Game</option>
                <option value="daily">Daily</option>
            </select> --}}

            <br>
            <br>
            <button type="submit" class="btn bg-success justify-content-center" >Submit</button>
        </div>

    </form>
</div>

@endsection