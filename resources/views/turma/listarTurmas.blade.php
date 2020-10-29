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
                            <th>Descrição</th>
                            <th>Vagas</th>
                            <th>Professor</th>
                            
                        </tr>
                    </thead>
                </thead>
                    <tbody>
                        @foreach ($turmas as $t)
                            
                        @endforeach
                   <tr>
                        <td>{{$t->id}}</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                           
                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
