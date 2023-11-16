<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="estilo-index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <header>
      <div class="container-fluid">
         <div class="row">
            <div class="cabecalho-logado bg-secondary text-white">
               <h3>agend.ai</h3>
               <a class="botao-head btn btn-secondary" href="logout.php">sair</a>
            </div>
         </div>
      </div>
   </header>
   <br>
   <div 
         id="buscador" class="search-box">
         <input class="search-txt" type="text" name="" placeholder="Faça sua pesquisa">
         <i class="fas fa-search"></i>
   </div>
   <hr>
     <section>
        <div class="mapBox">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.840522373305!2d-49.27129682378274!3d-25.443594733431365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce55f637b1c71%3A0x4a1018a3817b6600!2sUniOpet%20Centro%20Universit%C3%A1rio!5e0!3m2!1spt-BR!2sbr!4v1697394717793!5m2!1spt-BR!2sbr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     </section>    
   
     <nav id="lojas">
      <div class="container-fluid loja1">

         <!-- Conteúdo da sua caixa aqui -->

         <div id="botao-drop" class="btn-group dropright">
            
            <button  type="button" class="btn btn-secondary loja-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loja 1</button>
                     <div class="dropdown-menu drop-option">
                     <img src="" alt="logo-empresa">
                     <h5>Nome da empresa</h5>
                     <p>Produto Principal</p>

               <hr>
               
                  <div id="infos-empresa">
                     <h5>Visão Geral</h5>
                     <p>
                        Endereço <br>
                        Horário de funcionamento <br>
                        Serviços e Valores <br>
                        Telefone <br>
                     </p>
                  </div>

               <hr>

                  <button class="btn btn-secondary" onclick="window.location.href='agenda.php'">Reserve seu horário</button>
            </div>
         </div>
      </div>
      <!-- Repita o mesmo padrão para as outras lojas -->

     </nav>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
</body>
</html>

