@extends('layout')
@section('title', 'login')
@section('content')
    <div class="container">
        <form class="mx-auto mt-3" style="width:500px" action="{{route('login.post')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="email" name="email">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection