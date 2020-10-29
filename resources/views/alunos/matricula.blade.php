@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Cadastrar Aluno') }}</div>
        <div class="form">
            <form method="POST" action="{{ action('AlunosController@store') }}">
                @csrf
                <div class="input">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" autocomplete="name" required autofocus placeholder="Nome">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                    <br>
                <form>
                        <h4>Sexo</h4>
                        <SELECT name="menu" SIZE=1 required>
                        <OPTION>Selecione
                        <OPTION>Masculino
                        <OPTION>Feminino
                        </SELECT>
                        </form>
                        <br>

                    <tr>
                        <h4>Data de Nascimento</h4>
                        <td><input type="date" name="data" required></td>
                    </tr>

                    <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade"
                        value="{{ old('cidade') }}" autocomplete="cidade"   autofocus placeholder="Cidade">

                    @error('cidade')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro"
                        value="{{ old('bairro') }}" autocomplete="bairro"  autofocus placeholder="Bairro">

                    @error('bairro')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua"
                        value="{{ old('rua') }}" autocomplete="rua"  autofocus placeholder="Rua">

                    @error('rua')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero"
                        value="{{ old('numero') }}" autocomplete="numero"   autofocus placeholder="Numero">

                    @error('numero')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento"
                        value="{{ old('complemento') }}" autocomplete="complemento" autofocus placeholder="Complemento">

                    @error('complemento')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    
                    <button type="submit">
                        {{ __('Cadastrar') }}
                    </button>
                </div>
                
            </form>
       
    
</div>
    </div>
</div>


@endsection
