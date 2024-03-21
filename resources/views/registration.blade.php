@extends('layout')
@section('title', 'registration')
@section('content')
    <div class="container">
        <form action="{{route('registration.post')}}" method="POST" class="mx-auto mt-3" style="width:500px">
            @csrf
            <div class="mb-3">
              <label class="form-label">Full name</label>
              <input type="text" class="form-control" placeholder="name" name="name">
            </div>
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