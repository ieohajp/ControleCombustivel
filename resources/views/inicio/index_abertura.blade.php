@extends('layouts.simple')
@section('content')

<!-- Hero -->

<div class="bg-image">
    <div class="hero bg-white overflow-hidden">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1 class="display-4 font-w600 mb-3 invisible" data-toggle="appear" data-class="animated fadeInDown">
                    <br>
                    <br>
                    <br>
                    <img id="logomarca" class="img" src="{{ URL::asset('img/logopeq.png') }}"><br>
                    Eticons <span class="font-w300">Sistema de Tributos</span><br>
                </h1>
                <h2 class=" font-w200 text-muted mb-3 invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="600">
                    Bem vindos ao sistema de Tributos
                </h2>

                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                    <div class="row row-deck">

                        <div class="shadow-lg p-3 mb-10 bg-white rounded col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                            <a class="block block-link-pop" href="#">
                                <div class="block block-rounded block-fx-pop">
                                    <div class="block-content block-content-full ">
                                        <div class="py-4">
                                            <i class="fa fa-4x fa-address-card text-modern"></i>
                                        </div>
                                        <h4 class="mb-2">Solicitar Acesso</h4>
                                        <p class="font-size-sm text-muted text-center">
                                            Solicitação de Credenciamento para Emissão de Nota Fiscal
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="shadow-lg p-3 mb-10 bg-white rounded col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                            <a class="block block-link-pop" href="#">
                                <div class="block block-rounded block-fx-pop">
                                    <div class="block-content block-content-full">
                                        <div class="py-4">
                                            <i class="fa fa-4x fa-file-signature text-flat"></i>
                                        </div>
                                        <h4 class="mb-2">Verificar Autenticidade</h4>
                                        <p class="font-size-sm text-muted text-center">
                                            Verificar autenticiade da Nota Fiscal
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="shadow-lg p-3 mb-10 bg-white rounded col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                            <a class="block block-link-pop" href="#">
                                <div class="block block-rounded block-fx-pop">
                                    <div class="block-content block-content-full">
                                        <div class="py-4">
                                            <i class="fa fa-4x fa-barcode text-Dark Header"></i>
                                        </div>
                                        <h4 class="mb-2">Gerar DAM Avulsa</h4>
                                        <p class="font-size-sm text-muted text-center">
                                            Emitir DAM avulso
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="shadow-lg p-3 mb-10 bg-white rounded col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                            <a class="block block-link-pop" href="{{route('telasenha', $instituicao)}}">
                                <div class="block block-rounded block-fx-pop">
                                    <div class="block-content block-content-full">
                                        <div class="py-4">
                                            <i class="fa fa-4x fa-file-invoice text-city"></i>
                                        </div>
                                        <h4 class="mb-2">Emitir Nota Fiscal Eletrônica</h4>
                                        <p class="font-size-sm text-muted text-center">
                                            Acessar o sistema de emissão de NFSe
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                </span>
            </div>

            <!-- <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                <a class="btn btn-alt-success px-4 py-2" href="/dashboard">
                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Solicitar Acesso -->

        </div>
    </div>
</div>
</a>
</span>
</div>
</div>
</div>
</div>
<!-- END Hero -->
@endsection