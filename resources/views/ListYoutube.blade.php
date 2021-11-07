@extends('main_view')

    @section('page_title','')

    @section ('main_content')
    <div class="mt-1 p-3">
            <br>
            <br>
            <table class="table table-striped border border-2 border-secondary">
                
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        <td>Salary</td>
                        <td>Description</td>
                        {{-- <td>Code Content</td> --}}
                        <td colspan="2" align="center">Action</td>
                    </tr>

                

        @foreach ($youtube as $y)
                <tr>
                    <td>{{ $loop -> index+1 }}</td>
                    <td><a href="{{route("ListYoutube.show", $y['code'])}}">{{$y['name']}}</a></td>
                    <td>{{ $y ['salary'] }}</td>
                    <td>{{ $y ['description'] }}</td>
                    {{-- <td>{{ $y ['code'] }}</td> --}}
                    <td> 
                        
                        <a href="{{route("ListYoutube.edit", $y['code'])}}">
                            <button type="submit" class="btn btn-outline-primary">Edit</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{route("ListYoutube.destroy", $y['code'])}}" method="POST">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
        @endforeach

            </table>

            <br>
            <br>
            <a href="{{route("ListYoutube.create")}}" class="btn btn-outline-success d-flex p-3 bd-highlight mx-auto text-uppercase justify-content-center ">Add New List</a>
        </div>
    @endsection