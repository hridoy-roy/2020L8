@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-7 mx-auto my-0 bg-light mt-3 p-4 rounded">
        @if (session('state'))
        <div class="m-5">
           <p class="border border-danger alert alert-danger ml-3"> {{ session('state') }}  </p>    
        </div>    
        @endif
        <form action="{{ route('login') }}" method="post" class="row g-3 ">
            @csrf
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
            <div class="col-10 mx-auto my-5">
              <button type="submit" class="btn btn-primary w-100">Log in</button>
            </div>
          </form>
    </div>
</div>
@endsection