@extends('front.layout.app')
@section('title','VerfiyEmail')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route("home.index")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Verfiy Code </li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">
        <form class="form" method="post" action="{{route('submitverfiy.index')}}" >
            @csrf

            <div class="mb-3">
                <label class="form-label required-label" for="code">Code</label>
                <input type="code" class="form-control" id="code">
            </div>
            @error('code')
            {{$message}}

            @enderror
            {{-- <div class="mb-3">
                <label class="form-label required-label" for="password">password</label>
                <input type="password" class="form-control" id="password" required>
            </div> --}}
            <button type="submit" class="btn btn-primary">Verfiy code</button>
        </form>

    </div>

</div>
@endsection
