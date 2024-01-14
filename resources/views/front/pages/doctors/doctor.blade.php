@extends('front.layout.app')
@section('title','Doctors')
@section('content')
<div class="page-wrapper">

    <div class="container">
      <nav
        style="--bs-breadcrumb-divider: '>'"
        aria-label="breadcrumb"
        class="fw-bold my-4 h4"
      >
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="{{route('home.index')}}">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-decoration-none" href="{{route('doctor.index')}}">doctors</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            doctor name
          </li>
        </ol>
      </nav>
      <div class="d-flex flex-column gap-3 details-card doctor-details">
        <div class="details d-flex gap-2 align-items-center">
          <img
            src="{{asset('front')}}/assets/images/major.jpg"
            alt="doctor"
            class="img-fluid rounded-circle"
            height="150"
            width="150"
          />
          <div class="details-info d-flex flex-column gap-3">
            <h4 class="card-title fw-bold">{{$doctors->Name}}</h4>
            <h6 class="card-title fw-bold">
              {{$doctors->bio}}
            </h6>
          </div>
        </div>
        <hr />
        <form class="form" action="{{route('booking.store')}}" method="Post">
            @csrf
            @if(Session::has('message'))
            <div class="alert alert-info">
                    {{Session::get('message')}}
            </div>
            @endif
          <div class="form-items">
            <div class="mb-3">
              <label class="form-label required-label" >Name</label>
              <input type="text" class="form-control" name="name" required />
            </div>
            {{-- <div class="mb-3">
                <label class="form-label required-label" type="hidden" >User_id</label>
                <input type="hidden" name="user_id" class="form-control"value={{$user}} required />
              </div> --}}
            <div class="mb-3">
              <label class="form-label required-label" for="phone"
                >Phone</label
              >
              <input type="tel" class="form-control" name="phone" required />
            </div>
            <div class="mb-3">
              <label class="form-label required-label"
                >Email</label
              >
              <input type="email" class="form-control" name="email" required />
            </div>
          </div>
          <div>
          <input value="{{$doctors->id}}" type="hidden" class="form-control" name="doctor_id" required />
        </div>
          <button type="submit" class="btn btn-primary">
            Confirm Booking
          </button>


        </form>
      </div>
    </div>
  </div>
@endsection
