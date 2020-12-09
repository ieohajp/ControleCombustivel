@extends('layouts.backend')

@section('content')

<!-- <div class="bg-body-light"> -->
<div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-sm-fill h3 my-2">
            Inserir Novo Usuário
        </h1>
    </div>
</div>
<!-- </div> -->
<div class="content" style="color:black;">
    <form method="POST" action="{{route('usuario.insert')}}">
        @csrf                  
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="" name="email" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required>
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInput">Instituição</label>
                    <select class="form-control" id="instituicao" name="instituicao">
                        <option value='0'>Não definido</option>
                        <?php

                        use App\Models\instituicao;

                        $tabela = instituicao::all();
                        ?>
                        @foreach ($tabela as $item)
                        <option value='{{$item->instituicao}}'>{{$item->instituicao}}</option>
                        @endforeach
                        }
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInput">Nível Usuário</label>
                    <select class="form-control" id="nivel" name="nivel">
                        <option value='1'>Administrador</option>
                        <option value='2'>Usuário</option>
                    </select>
                </div>
            </div>
        </div>


        <p align="right">
            <input type="button" value="Cancelar" class="btn btn-danger" onclick="history.back();" />
            <button type="submit" class="btn btn-primary">Salvar</button>
        </p>

</div>
</form>

<!-- </div> -->
<!-- </div> -->
<!-- END Your Block -->

@endsection