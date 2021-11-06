@extends('main_view')

@section('page_title', '')

@section('main_content')

    <div class="container mt-4 p-5 border border-2 border-info rounded " >
        <div class="row">
            <div class="col-sm ">
                <br>
                <br>
                <div class="cardShadow p-3 mb-5 bg-body rounded" >
                    <img src="{{ asset('image/69.jpg') }}" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center">Website</h5>
                        <p class="card-text" align="center">Welcome to my website this is my profile
                            click here!
                        </p>
                        <a href="https://bit.ly/llhomes" class="btn btn-outline-info d-flex p-3 bd-highlight mx-auto text-uppercase justify-content-center">Profile</a>
                    </div>
                </div>

            </div>


            <div class="col-sm">
                <br>
                <br>
                <div class="cardShadow p-3 mb-5 bg-body rounded">
                    <img src="{{ asset('image/68.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center">Youtube</h5>
                        <p class="card-text" align="center">Welcome to my youtube, this is one of my project
                            click here!
                        </p>
                        <a href="https://youtu.be/ZTiNWvKa12E" class="btn btn-outline-info p-3 bd-highlight text-uppercase d-flex justify-content-center" >Youtube</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm ">
                <br>
                <br>
                <div class="cardShadow p-3 mb-5 bg-body rounded" >
                    <img src="{{ asset('image/gmail.jpg') }}" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center">Gmail</h5>
                        <p class="card-text" align="center">Welcome to my gmail
                            click here!
                        </p>
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="btn btn-outline-info d-flex p-3 bd-highlight mx-auto text-uppercase justify-content-center">Gmail</a>
                    </div>
                </div>

            </div>


            <div class="col-sm">
                <br>
                <br>
                <div class="cardShadow p-3 mb-5 bg-body rounded">
                    <img src="{{ asset('image/ig.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center">Youtube</h5>
                        <p class="card-text" align="center">Welcome to my instagram
                            click here!
                        </p>
                        <a href="https://www.instagram.com/lanovial/" class="btn btn-outline-info p-3 bd-highlight text-uppercase d-flex justify-content-center" >Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
