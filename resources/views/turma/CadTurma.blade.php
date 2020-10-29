@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Criar Turma') }}</div>
        <div class="form">
            <form method="POST" action="{{ action('TurmaController@store') }}">
                @csrf
                <div class="input">
                    <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao"
                        value="{{ old('descricao') }}" autocomplete="descricao" autofocus required placeholder="Descrição">

                    @error('descricao')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    <input id="vagas" type="int" class="form-control @error('vagas') is-invalid @enderror"
                        name="vagas" value="{{ old('vagas') }}" autocomplete="vagas" autofocus required placeholder="Quantidade de vagas">

                    @error('vagas')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    <input id="professor" type="text" class="form-control @error('professor') is-invalid @enderror"
                        name="professor" value="{{ old('professor') }}" autocomplete="professor" autofocus required placeholder="Nome Professor">

                    @error('vagas')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                   
                    <button type="submit">
                        {{ __('Registrar') }}
                    </button>
                </div>
                
            </form>
        </div>
    </div>
</div>



@endsection
