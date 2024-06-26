@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="font-weight: bold;color:rgb(234,81,70);">
                        INGRESE SUS CREDENCIALES A CONTINIACIÓN
                    </div>

                    <div class="card-body" style="background-color: rgb(43,51,60)">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"
                                    style="color:rgb(251,199,0)">
                                    EMAIL
                                </label>
                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="correo@mail.com"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end"
                                    style="color:rgb(251,199,0)">
                                    PASSWORD
                                </label>
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="**********"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 offset-md-12">


                                    <a class="btn btn-link" href="#">
                                        Olvidé mi password
                                    </a>
                                    <button type="submit" class="btn btn-primary"
                                        style="background-color: rgb(234,81,70);float:right;">
                                        ACCEDER
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{--  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1>Por el momento la continuidad de este sistema se encuentra bajo evaluación...</h1>
                </div>
            </div>
        </div>
    </div>  --}}
@endsection
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>
{{--  <script>
    $(document).ready(function() {
        $('#exampleModalLong').modal('show');
    });
</script>  --}}
