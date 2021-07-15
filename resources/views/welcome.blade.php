
@extends('layout.app')

@section('container')
<div class="ui-theme-settings" style="float: right;">
    <button type="button" id="TooltipDemo" class="btn-open-options btn-warning">
        <a href="{{ route('login') }}" style="color: black;"><i class="fas fa-sign-in-alt fa-2x"></i></a>
    </button>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3 class="text-center mb-4"><img src="{{ url('/img/logodebotani.png') }}"></h3>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3"><a href="{{ url('/tabungan/jenis') }}" style="color: #fff;">Tabungan</a></button>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3"><a href="#popup1" style="color: #fff;">Deposito</a></button>
                    </div>


                    <div id="popup1" class="overlay">
                        <div class="popup">
                            <br><a class="close" href="#">&times;</a>
                            <div class="content">
                                <div class="form-group text-center">
                                    <i class="fas fa-exclamation-circle fa-7x"></i><br><br>
                                    Harus Memiliki Tabungan

                                </div>
                                <div class="form-group text-center">
                                    <a href="{{ url('/deposito/jenis') }}" class="btn btn-primary rounded submit center px-3">OK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
