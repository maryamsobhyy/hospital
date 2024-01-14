<nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a class="fw-bold text-white m-0 text-decoration-none h3" href="{{route("home.index")}}">VCare</a>
        </div>
        <div class="navbar-brand">
            <h1
            >{{auth()->user()->name ?? null}}</h1>
        </div>
        <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                <a type="button" class="btn btn-outline-light navigation--button" href="{{route("home.index")}}">Home</a>
                <a type="button" class="btn btn-outline-light navigation--button"
                    href="{{route("majors.index")}}">majors</a>
                <a type="button" class="btn btn-outline-light navigation--button"
                    href="{{route("doctor.index")}}">Doctors</a>
                    {{-- <a type="button" class="btn btn-outline-light navigation--button"
                    href="{{route("admin.index")}}">Dashboard</a> --}}
                @auth

    <form action="{{ route("logout") }}" method="post" class="d-flex gap-3 flex-wrap justify-content-center">
        @csrf
        <button type="submit" class="btn btn-outline-light navigation--button">Logout</button>
    </form>


                {{-- <form action="{{route("logout")}}" method="post">
                    @csrf
                    <input type="submit" value="logout">

                </form> --}}
                <a type="button" class="btn btn-outline-light navigation--button"
                 href="{{route("reservation")}}">reservations List </a>


                @endauth
                @guest
                <a type="button" class="btn btn-outline-light navigation--button"
                 href="{{route("login.index")}}">login</a>


                @endguest
            </div>
        </div>
    </div>
</nav>
