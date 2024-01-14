@extends('front.layout.app')
@section('title','Register')
@section('content')
<div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
    <form class="form" enctype="multipart/form-data" method="POST" action="{{route('register.submit')}}"  >
        <div class="form-items">
            @csrf
            <div class="mb-3">
                <label class="form-label required-label" for="name">Name</label>
                <input type="text" class="form-control" name="name" >
            </div>
            @error('name')
            {{$message}}

            @enderror
            <div class="mb-3">
                <label class="form-label required-label" for="phone">Phone</label>
                <input type="tel" class="form-control" name="phone">
            </div>
            @error('phone')
            {{$message}}

            @enderror
            <div class="mb-3">
                <label class="form-label required-label" for="email">Email</label>
                <input type="email" class="form-control" name="email" >
            </div>
            @error('email')
            {{$message}}

            @enderror
            <div class="mb-3">
                <label class="form-label required-label" for="password">password</label>
                <input type="password" class="form-control" name="password" >

            </div>
            @error('password')
            {{$message}}

            @enderror
            <div class="mb-3">
                <label class="form-label required-label" for="password"> confirmation password</label>
                <input type="password" class="form-control" name="password_confirmation" >

            </div>

            <div class="mb-3">
                <label class="form-label required-label" for="password">Image</label>
                <input type="file" class="form-control" name="image" >
            </div>
            @error('image')
            {{$message}}

            @enderror

        </div>
        <button type="submit" class="btn btn-primary">Create account</button>
    </form>
    <div class="d-flex justify-content-center gap-2">
        <span>already have an account?</span><a class="link" href="{{route("login.index")}}"> login</a>
    </div>
</div>
@endsection
