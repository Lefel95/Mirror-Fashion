<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap-flatly.css">
    <style>
        .navbar
        {
            margin: 0;
        }
    </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-header">
          <a href="index.php" class="navbar-brand">Mirror Fashion</a>
          <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
              menu
          </button>
      </div>
      <ul class="nav navbar-nav collapse navbar-collapse">
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="#">Ajuda</a></li>
          <li><a href="#">Perguntas Frequentes</a></li>
          <li><a href="#">Entre em contato</a></li>
      </ul>
  </nav>
   <div class="jumbotron">
       <div class="container">
            <h1>Ótima escolha!</h1>
            <p> 
                Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.
            </p>
       </div>
   </div>
   <div class="container">
          <div class="row">
              <div class="col-sm-4">
                  <div class="panel panel-success">
                        <div class="panel-heading">
                            <h2 class="panel-title">Sua Compra</h2>
                        </div>
                    <div class="panel-body">
                       <img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive">
                        <dl>
                            <dt>Cor</dt>
                            <dd><?= $_POST['cor'] ?><dd>
                            <dt>Tamanho</dt>
                            <dd><?= $_POST['tamanho'] ?></dd>
                            <dt>Produto</dt>
                            <dd><?= $_POST['nome'] ?></dd>
                            <dt>Preço</dt>
                            <dd><?= $_POST['preco'] ?></dd>
                        </dl>
                    </div>
                </div>
              </div>
              <div class="col-sm-8">
                  <form action="">
                    <div class="row">
                        <fieldset class="col-md-6">
                        <legend>Dados Pessoais</legend>
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Felipe Paulo Braz Gomes" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                        </div>
                        <div class="checkbox">
                           <label>
                               <input type="checkbox" value="sim" name="spam" checked>
                               Quero receber spam da Mirror Fashion 
                           </label>

                        </div>
                        </fieldset>
                        <fieldset class="col-md-6">
                            <legend>Cartão de crédito</legend>
                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <input type="text" class="formcontrol" id="numero-cartao" name="numero-cartao"> 
                            </div>
                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">VISA</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" class="formcontrol" id="validade-cartao" name="validade-cartao">
                            </div>
                        </fieldset>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg pull-right">
                       <span class="glyphicon glyphicon-thumbs-up"></span>
                        Confirmar Pedido
                    </button>
                </form>
              </div>
          </div>
           
        
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    </body>
</html>