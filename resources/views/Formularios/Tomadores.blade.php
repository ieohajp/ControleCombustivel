@extends('layouts.backend')
@section('title','Sistema de Nota Fiscal de Serviço')

<!doctype html>
<html lang="pt-br">
@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
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

<div class="content content-full">
</div>
<div class="row">
    <div class="col-sm-6">
        <h3>Cadastro de Tomadores</h3>
    </div>
    <div class="col-sm-6 text-right h1">
        <a class="btn btn-primary" href=""><i class="fa fa-plus"></i> Inserir Novo</a>
        <a class="btn btn-danger text-white" href=""><i class="fa fa-times"></i> Fechar</a>
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
                        <th class="text-center">Documento</th>
                        <th style="width: 50%;">nome</th>
                        <th>Fone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vUsuarios as $item)
                    <tr>
                        <td class="text-center">{{$item->id}}</td>
                        <td class="font-w600">
                            <a href="javascript:void(0)">{{$item->nome}}</a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <em class="text-muted">{{$item->email}}</em>
                        </td>
                        <td class="text-center">
                            <?php
                            if ($item->nivel == '1') {
                                echo '<span class="badge badge-info">Adminstrador</span>';
                            } else if ($item->nivel == '2') {
                                echo '<span class="badge badge-success">Usuário</span>';
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
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


</body>

</html>
</div>
</div>
</div>

<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese.json"></script>

<script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dtTabela').dataTable({
            "language": {
                "url": "dataTables.german.lang"
            }
        });
    });
</script>

@endsection
</body>

</html>