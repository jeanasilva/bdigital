@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pagina Principal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado!!
                    Acessar o chat agora

                    <form action="/chatbdigital">
                        <input type="submit" value="chat" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
