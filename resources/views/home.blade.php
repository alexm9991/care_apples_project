@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<style>
    body{
       background-color:#c6b6e1;
    }
    .btn-whatsapp {
        display:block;
        width:70px;
        height:70px;
        color#fff;
        position: fixed;
        right:20px;
        bottom:20px;
        border-radius:50%;
        line-height:80px;
        text-align:center;
        z-index:999;
}
.padre {
  display: flex;
  justify-content: space-evenly;
  
}
.padre div img{
    width:400px;
    height:200px ;
    margin-top: 80px
}
</style>
<h1 style="padding: 4px; text-align:center; background-color:none">Bienvenido, ¿Qué vas a gestionar hoy?</h1>
<div class="btn-whatsapp">
    <a href="https://api.whatsapp.com/send?phone=5199999999" target="_blank""><img src="https://th.bing.com/th/id/R.1f3b468b69f9fe5098641e95f0a09046?rik=0Mo9d7sSD75QcQ&pid=ImgRaw&r=0" alt="boton w" width="50"></a>
</div>
<div class="padre">
    <div><img src="images/img1.jpg" alt="" ></div>
    <div><img src="images/img2.jpeg" alt="" ></div>
    <div><img src="images/img3.jpg" alt="" ></div>
    </div>

@endsection
