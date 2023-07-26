@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">You are logged in!</h1>
    </div>
    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
        <div class="info-box-content" style= "; ">
          <span class="info-box-text">Messages</span>
          <span class="info-box-number">1,410</span>
        </div>
      </div>
      <div class="info-box bg-success">
        <span class="info-box-icon"><i class="far fa-flag"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Bookmarks</span>
          <span class="info-box-number">410</span>
        </div>
      </div>
      <div class="info-box bg-gradient-warning">
        <span class="info-box-icon"><i class="far fa-copy"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Uploads</span>
          <span class="info-box-number">13,648</span>
        </div>
      </div>

      

      

   

@endsection
