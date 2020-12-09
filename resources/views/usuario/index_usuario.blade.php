@extends('layouts.backend')
@section('title','Sistema de Nota Fiscal de Serviço')

<!doctype html>
<html lang="pt-br">
@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">''
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/oneui.min.css') }}">

@endsection

@section('js_after')
<!-- Page JS Plugins -->

<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>



<script src="{{ asset('js/pages/be_tables_datatables.min.js') }}"></script>


@endsection

@section('content')


<div class="content">
    <div class="row">
        <div class="col-sm-6">
            <h2>Cadastro de Usuários</h2>
        </div>
        <div class="col-sm-6 text-right h1">
            <a class="btn btn-primary" href="{{route('usuario.inserir')}}"><i class="fa fa-plus"></i> Inserir Novo</a>
            <button type="button" class="btn btn-danger js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 85.5938px; width: 85.5938px; top: -13.7969px; left: 13.2031px;"></span>
                <i class="fa fa-fw fa-plus mr-1"></i fa-times> Fechar </button>
        </div>
    </div>
</div>

<body>
    <!-- <div class="content"> -->
    <div class="block">
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
            <table id="dtTabela" class="table table-bordered table-sm  table-vcenter js-dataTable-full">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Cód.</th>
                        <th style="width: 50%;">Nome</th>
                        <th>Email</th>
                        <th>Nível</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td class="text-center">{{$usuario->id}}</td>
                        <td class="font-w600">
                            <a href="javascript:void(0)">{{$usuario->nome}}</a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <em class="text-muted">{{$usuario->email}}</em>
                        </td>
                        <td class="text-center">
                            <?php
                            if ($usuario->nivel == '1') {
                                echo '<span class="badge badge-info">Adminstrador</span>';
                            } else if ($usuario->nivel == '2') {
                                echo '<span class="badge badge-success">Usuário</span>';
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#modal-block-normal" title="" data-original-title="Edit Client">
                                    <a href="{{route('usuario.edit_usuario',$usuario)}}"> <i class="fa fa-fw fa-pencil-alt"></i></a>
                                </button>
                                <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- </div> -->
>



    @endsection
</body>

</html>