@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-7 mx-auto my-0 bg-light mt-3 p-4 rounded">
        <form action="{{ route('register') }}" method="post" class="row g-3 ">
            @csrf
            <div class="col-10 mx-auto my-0">
                <label class="form-label">Your Name</label>
                <input name="full_name" type="text" class="form-control border @error('full_name') border-danger @enderror" placeholder="Your Name" value="{{ old('full_name') }}">
                @error('full_name')
                    <div class=" mt-2 p-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-10 mx-auto my-0">
                <label class="form-label">Username</label>
                <input name="username" type="text" class="form-control border @error('full_name') border-danger @enderror" placeholder="username" value="{{ old('username') }}">
                @error('username')
                    <div class=" mt-2 p-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-10 mx-auto my-0">
              <label for="inputEmail4" class="form-label">Email</label>
              <input name="email" type="email" class="form-control border @error('full_name') border-danger @enderror" placeholder="Email" value="{{ old('email') }}">
              @error('email')
                    <div class=" mt-2 p-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-10 mx-auto my-0">
              <label  class="form-label">Password</label>
              <input name="password" type="password" class="form-control border @error('full_name') border-danger @enderror" placeholder="password">
              @error('password')
                    <div class=" mt-2 p-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-10 mx-auto my-0 pb-5">
                <label  class="form-label">Confirm Password</label>
                <input name="confirm_password" type="password" class="form-control border @error('full_name') border-danger @enderror" placeholder="Confirm password">
                @error('confirm_password')
                    <div class=" mt-2 p-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-10 mx-auto my-0">
              <button type="submit" class="btn btn-primary w-100">Register</button>
            </div>
          </form>
    </div>
</div>
@endsection