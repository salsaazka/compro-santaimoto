@extends('layouts.master')
@section('main')
<div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
  <span class="mask bg-gradient-dark opacity-6"></span>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 text-center mx-auto">
        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
        <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
      <div class="card z-index-0">
        <div class="card-header text-center pt-4">
          <h5>Log In</h5>
        </div>
        
        <div class="card-body">
          @if(Session::get('notAllowed'))
          <div class="alert alert-danger text-white">
            {{session('notAllowed')}}
          </div>
          @endif
          @if(Session::get('error'))
          <div class="alert alert-danger text-white">
            {{session('error')}}
          </div>
          @endif
      
          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li class="text-white">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form role="form" action="{{route('login.store')}}" method="post">
            @csrf
            <div class="mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
            </div>

            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
