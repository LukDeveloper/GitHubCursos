<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link rel="icon" href= "img/logotipo.png">
    <title>Carros Auto Esporte</title>

    <style type="text/css">
        html,
        body 
        {
            height: 100%;
        }
        
        html 
        {
            display: table;
            margin: auto;
        }
        
        body 
        {
            display: table-cell;
            vertical-align: middle;
        }
        
        .margin 
        {
            margin: 0 !important;
        }
    </style>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="light-green lighten-5">

    <div class="cabecalhoLogin">
    <div class="nav-wrapper container">
    <a id="logo-container" class="brand-logo"><b> <img src="img/logotipo.png"> </b></a>

    <ul class="right hide-on-med-and-down">
       
    <div class="col s8 right-align">
            <a href="http://localhost/carros2/principal.php"> Página Inicial</a>
    </div>
   
    </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <form class="login-form" method="post" action="login.php">
                    <div class="card">
                        <div class="card-image">
                            <img src="imgsLogin/fundo-login-cadeado.jpeg">
                            <span class="card-title">
                            <h2> <font color="#151515"><b>Acesso</b></h2>
                            <h6><font color="#151515"><b>Carros Auto Esporte</b></h6>
                        </span>
                        </div>
                        <div class="card-content">
                            <div class="input-field">
                                <input class="validate" id="email" type="email" name="cxemail">
                                <label for="email">Email</label>
                            </div>

                            <div class="row">
                                <div class="col s12 m8 l9">
                                    <div class="input-field">
                                        <input id="password" type="password" name="cxsenha">
                                        <label for="password">Senha</label>
                                    </div>
                                </div>
                                <div class="col s12 m4 l3">
                                    <div class="input-field">
                                        <input type="checkbox" id="remember-me" />
                                        <label for="remember-me">Lembrar</label>
                                    </div>
                                </div>
                                <p>
                            </div>
                            
                        <div class="container" class="center-align">
                           <div class="box"
                            <h6><font color="#151515"><b><center>&nbsp;&nbsp;&nbsp;Escolha o tipo de usuário</center></b></h6>
                              <div class="input-field">
                                <center>
                                <input name="group1" type="radio" id="cadUser" value="0" />
                                <label for="cadUser"><font color="#5FC6E7"><b>Usuário &nbsp;&nbsp;&nbsp;&nbsp;</b></label>

                                <input name="group1" type="radio" id="cadAdm" value="1"/>
                                <label for="cadAdm"><font color="#5FC6E7"><b>Administrador&nbsp;&nbsp;&nbsp;</b></label>
                                </center>
                                <br>  
                            </div>    
                            </div>
                        </div>     
                        </div>
                        <div class="card-action blue-grey lighten-3">
                            <div class="center-align">
                                <button onclick="verificarRadioButton()" href="login.php" class="btn blue-grey darken-1" type="submit" >
                                <i class="material-icons left" >vpn_key</i>Acessar</button>
                            </div>
                        </div>
                        <script>
                        function verificarRadioButton() 
                        {
                            var radio1 = document.getElementById('cadUser').checked;
                            var radio2 = document.getElementById('cadAdm').checked;

                            if ((radio1=="") && (radio2==""))
                            {
                                alert("Selecione um usuário!");   
                            }
                        }
                     </script>
                    </div>
                </form>
                <div class="row">
                    <div class="col s4">
                        <a href="http://localhost/carros2/registrarUsuario.php">Registrar-se</a>
                    </div>
                    <div class="col s8 right-align">
                        <a href="#" class="">Esqueci a senha</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>

</html>