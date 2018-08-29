<!doctype html>
<html lang="pt-br">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
   <meta http-eqiv="X-UA-Compatible" content="IE=edge" />
   <link rel="stylesheet" type="text/css" href="css/cadastro.css">
   <link rel="shortcut icon" href="icone.png" />
   <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
   <title>HAME</title>
</head>
<body>
    <a href="index.php" id="logo"><img src="logo.png" width="15%"></a>
   <div class="row">
     <div class="col-md-6">
       <form id="msform" method="post" action="cad.php">
         <!-- progressbar -->
         <ul id="progressbar">
           <li class="active">Informações de Contato</li>
           <li>Informações de Envio e Cobrança</li>
           <li>Informações do Usuário</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
           <h2 class="fs-title">Informações de Contato</h2>
           <input type="text" placeholder="Nome Completo" name="nome">
           <input type="email" placeholder="Email" name="email">
           <input type="number" min='0' placeholder="Telefone Fixo" name="telefoneFixo">
           <input type="number" min='0' placeholder="Celular" name="telefoneCel">
           <input type="button" name="next" class="next action-button" value="Próximo" />
        </fieldset>

        <fieldset  method="get" action=".">
           <h2 class="fs-title">Informações de Envio e Cobrança</h2>
           <input type="number" min='0' placeholder="CEP" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
           onblur="pesquisacep(this.value);">
           <input type="text" placeholder="Estado" name="estado" id="estado">
           <input type="text" placeholder="Endereço" name="endereco" id="endereco">
           <input type="text" placeholder="Cidade" name="cidade" id="cidade">
           <input type="text" placeholder="Bairro" name="bairro" id="bairro">
           <input type="text" placeholder="Número" name="numero" id="numero">
           <input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
           <input type="button" name="next" class="next action-button" value="Próximo"/>

        </fieldset>

        <fieldset>
           <h2 class="fs-title">Informações do Usuário</h2>
           <input type="date"  placeholder="Data de Nascimento" name="dataNasc">
           <input type="number" min='0' placeholder="CPF" name="cpf">
           <input type="text"  placeholder="Nome de Usuário" name="usuario">
           <input type="password"  placeholder="Senha" name="senha">
           <input type="password"  placeholder="Comfirme sua Senha" onblur="conf()" id="csenha" name="consenha">
           <input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
           <input type="submit" name="submit" class="submit action-button" value="Cadastrar"/>
        </fieldset>
     </form>
     <!-- link to designify.me code snippets -->
     <div class="dme_link">
      <p><a href="#">Já sou Cadastrado</a></p>
   </div>
</div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="jquery/cadastro.js"></script>
</body>
</html>