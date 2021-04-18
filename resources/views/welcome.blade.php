
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

            <h3 class="text-center mb-4"><img src="{{ url('/img/logodebotani.png') }}"></h3>

            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3"><a href="{{ url('/tabungan/jenis') }}" style="color: #fff;">Tabungan</a></button>
            </div>

            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3"><a href="#popup1" style="color: #fff;">Deposito</a></button>
            </div>


            </form>
            <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Akun Tabungan?</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <div class="form-group">
                        <input type="text" class="form-control rounded-left" placeholder="No. Rekening">

                    </div>
                    <div class="form-group">
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
