<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Teste Vaga PHP</title>
  
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header" id="barraMenu" >
                <button type="button" class="pull-left navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Teste Vaga PHP</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <!--
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                   
                </ul>-->
<!--
                <ul class="nav navbar-nav navbar-right" >
                    <div class="col-sm-3 col-md-3 pull-right">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Busca rápida" name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </ul>
-->
            </div>
        </div>
    </nav>
    <!-- Header Section -->
    <header>
        <div class="container" id="cima">
            <div class="row">
                <div role="main">

                </div>
            </div>
        </div>
    </header>
    <!-- Principal Section -->
    <div class="container" id="meio">
        <div class="row">
            <div style="min-height:20px"></div>
            <div role="main">
                <form style="padding-left:0.7cm;" class="form-horizontal" method="GET" role="form" id="frmBuscar" name="frmBuscar">
                    <div class="form-group">
                        <label class="control-label" for="nome">Digite o Nome de Usuário</label>
                        <!--<div class="col-sm-10">-->
                            <input style="max-width:250px;" type="text"  class="form-control" id="nome" name="nome">
                        <!--</div>-->
                    </div>
		
                    <button class="btn btn-success" type="submit" id="buscar">Buscar</button>		
                </form>

                <table class="table table-inverse">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Repositórios</th>
                        </tr>
                    </thead>
                   	<tbody id="grid">
                        <tr>
                        </tr>
                        <tr id="imagem">
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <div class="container" id="baixo">
            <div class="row">
                <div role="main">
                    <h1>COPYRIGHT MIZAEL 2016</h1>
                </div>
            </div>
        </div>
    </footer>
  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-toggle.min.js"></script>
  <script src="js/client.js"></script>
  <script src="js/jquery-ui.js"></script>

</body>
</html>
