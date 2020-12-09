<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{$instituicao->instituicao}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="layout" content="main"/>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script src="{{ asset('app-assets/js/jquery/jquery-1.8.2.min.js') }}" type="text/javascript" ></script>
    <link href="{{ asset('app-assets/css/customize-template.css') }}"   type="text/css" media="screen, projection" rel="stylesheet" />
    <style>
    </style>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" class="brand"><i class="icon-leaf">Sistema de Nota Fiscal Eletrônica</i></a>
                                      
                        <ul class="nav pull-right">
                            <li>
                                <a href="login.html">Sair do Sistema</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="body-container">
                    <div id="body-content">
            <div class='container'>
                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="container-signin">
                            <legend>Entre com o Usuário</legend>
                            <form action="{{ route('logar',$instituicao->id)}}" method="post" id='loginForm' class='form-signin' autocomplete='off'>
                            @csrf
                                <div class="form-inner">
                                    <div class="input-prepend">
                                        <span class="add-on" rel="tooltip" title="Username or E-Mail Address" data-placement="top"><i class="icon-envelope"></i></span>
                                    <input type='text' class='span4' id='login'name='login'/>
                                    </div> 
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-key"></i></span>
                                        <input type='password' class='span4' id='senha' name='senha'/>
                                    </div>
                                    <label class="checkbox" for='remember_me'>Esqueceu a senha
                                        <input type='checkbox' id='remember_me'
                                               />
                                    </label>
                                </div>
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" type='submit' id="submit" value='Entrar'/>
                                    <a class="btn btn-primary text-white"  href="{{route('telasenha', $instituicao)}}"><i class="fa fa-times" ></i> Voltar</a>
                                </footer>
                            </form>
                        </div>
                    </div>
                    <div class="span3"></div>
                </div>

            </div>

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>Tributos WEB</p>
                <div class="disclaimer">
                    <p>Sistema de Tributos. Todos os direitos reservados.</p>
                    <p>Copyright © E-ticons 2020</p>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            $(function(){
                document.forms['loginForm'].elements['j_username'].focus();
                $('body').addClass('pattern pattern-sandstone');
                $("[rel=tooltip]").tooltip();
            });
        </script>
        <script src="{{ asset('app-assets/js/bootstrap/bootstrap-transition.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrap/bootstrap-alert.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-modal.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-dropdown.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-scrollspy.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-tab.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-tooltip.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-popover.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-button.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-collapse.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-carousel.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-typeahead.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-affix.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/bootstrapbootstrap-datepicker.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/jquery/jquery-tablesorter.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/jquery/jquery-chosen.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('app-assets/js/jquery/virtual-tour.js') }}" type="text/javascript" ></script>
        

	</body>
</html>

