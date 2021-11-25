@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-7 mx-auto my-0 bg-light mt-3 p-4 rounded">
            <form action="{{ route('post') }}" method="post">
                @csrf
            <div class="mb-3">
              <label for="" class="form-label"></label>
              <textarea name="post_body" class="form-control" id="" rows="5" placeholder="Post body"></textarea>
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
@endsection