@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="container-fluid no-padding table-responsive-sm">
            <table class="table table-striped nowrap" style="width:100%" id="exemplo">
                <thead center>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                            <th>Sexo</th>
                            <th>Cidade</th>
                            <th>Bairro</th>
                            <th>Rua</th>
                            <th>Número</th>
                            <th>Complemento</th>
                        </tr>
                    </thead>
                </thead>
                    <tbody>
                       @foreach ($Alunos as $aluno)
                        <tr>
                        <td>{{$aluno->id}}</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
