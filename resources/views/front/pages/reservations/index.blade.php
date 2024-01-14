@extends('front.layout.app')
@section('title','Reservation')
@section('content')
<ul class="nav nav-tabs" id="myTabs">
    <li class="nav-item">
        <a class="nav-link active" id="tab1" data-bs-toggle="tab" href="#table1">current</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="tab2" data-bs-toggle="tab" href="#table2">history</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade show active" id="table1">

        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>Phone</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $X)
                    @if($X->status == 'pending')
                        <tr>
                            <td>{{$X->name}} </td>
                            <td>{{$X->email}}</td>
                            <td>{{$X->phone}}</td>
                            <td>{{$X->status}}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane fade show active" id="table2">

        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>Phone</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $X)
                @if($X->status == 'accepted' || $X->status == 'rejected')
                        <tr>
                            <td>{{$X->name}} </td>
                            <td>{{$X->email}}</td>
                            <td>{{$X->phone}}</td>
                            <td>{{$X->status}}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>

    $(document).ready(function () {
        $('#myTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    });
</script>
@endsection
