@extends('front.layout.app')
@section('title','Contacts')
@section('content')
@if(Session::has('message'))
<div class="alert alert-info">
        {{Session::get('message')}}
</div>
@endif
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">contact</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form class="form" action="{{route('contact.store')}}" method="Post">
            @csrf
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" >Name</label>
                    <input type="text" class="form-control"  name="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" >Phone</label>
                    <input type="tel" class="form-control" name="phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" >Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" >subject</label>
                    <input type="text" class="form-control" name="subject" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" >message</label>
                    <textarea class="form-control" name="message" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

</div>
@endsection
