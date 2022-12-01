@extends('_layouts.app')

@section('content')
<section class="py-5">
<style>
        body{background-color: rgb(105, 194, 246);}
    </style>
    <div class="container bg-light p-5" style="border-radius: 20px;">
        
        <div class="row my-5">
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h2>Selamat Datang di Akun E-KMS !!</h2>
                    <p class="text-secondary"> Untuk membantu pelayanan peserta anda</p>
                    <a href="{{ url("user/register") }}" class="btn btn-primary"><b>Daftar Sekarang!</b></a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
                    <div class="carousel-indicators">

                    </div>
                    <div class="carousel-inner">
                            <img src="{{ asset('assets/images/ibu hamil.jpg') }}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
       
    </div>
</section>
@endsection