<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  
  // Check if the user is logged in
  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
      // Redirect the user to the login page
      header('Location: register.php');
      exit;
  }
  ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery List</title>
    <link rel="stylesheet" href="mysuper.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui-css@2.4.1/semantic.min.css">


</head>



<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">BesTCart</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index2.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="dashboard.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="flyers.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Flyers</span>
                </a></li>
                <li><a href="nearstores.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Near Stores</span>
                </a></li>
                <li><a href="mysuper.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">My Supermarket</span>
                </a></li>
                <li><a href="gcgc.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Grocery List</span>
                </a></li>
                
               
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>



    <section class="dashboard">
      <div class="top">
          <i class="uil uil-bars sidebar-toggle"></i>

          <div class="search-box">
              <i class="uil uil-search"></i>
              <input type="text" placeholder="Search here...">
          </div>
          
          <!--<img src="images/profile.jpg" alt="">-->
      </div>


    


    <div class="ui container">
        <!-- Segmento de Filtro -->
        <div class="ui segment">
          <p class="ui orange ribbon label">
            <i class="filter icon"></i> Filters
          </p>
  
          <div id="formFiltro" class="ui form">
            <div class="three fields">
              <div class="field">
                <label><i class="barcode icon"></i>Bar Code</label>
                <div id="filtroCodigoBarra" class="ui search">
                  <div class="ui input">
                    <input class="prompt" type="text" placeholder="Ex.: 7891031406014">
                  </div>
                  <div class="results"></div>
                </div>
              </div>
  
              <div class="field">
                <label><i class="box icon"></i>Product</label>
                <div id="filtroProduto" class="ui search">
                  <div class="ui input">
                    <input class="prompt" type="text" placeholder="Ex.: Cheese">
                  </div>
                  <div class="results"></div>
                </div>
              </div>
  
              <div class="field">
                <label><i class="tag icon"></i>Category</label>
                <div id="filtroCategorias" class="ui search">
                  <div class="ui input ">
                    <input class="prompt" type="text" placeholder="Ex.: Fruit">
                  </div>
                  <div class="results"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- FIM Segmento de Filtro -->
  
        <h1>Products</h1>
  
        <!-- Tabela de Produtos cadastrados -->
        <table class="ui table">
          <thead>
            <tr>
              <th>Bar Code</th>
              <th>Name</th>
              <th>Added by</th>
              <th>Price</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>7891031409404</td>
              <td>Ketchup Hemmer 320g</td>
              <td>Dad</td>
              <td>3,20€</td>
              <td>
                <button class="ui button basic green btnCadastro">
                  <i class="pencil alternative icon"></i> Edit
                </button>
                <button class="ui button basic red btnExcluir">
                  <i class="close icon"></i> Delete
                </button>
              </td>
            </tr>
            <tr>
              <td>7891031406014</td>
              <td>Jack Daniels 75cl</td>
              <td>Sister</td>
              <td>7,80€</td>
              <td>
                <button class="ui button basic green btnCadastro">
                  <i class="pencil alternative icon"></i> Edit
                </button>
                <button class="ui button basic red btnExcluir">
                  <i class="close icon"></i> Delete
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- FIM Tabela de Produtos cadastrados -->
  
        <button class="ui button right floated orange btnCadastro">New Product</button>
  
        <!-- Modal de CRUD de Produtos -->
        <div id="modalCadastro" class="ui modal">
          <i class="close icon"></i>
          <div class="header">
            Product Registration

          </div>
          <div class="content">
            <div class="ui form">
              <div class="equal width fields">
                <div class="field">
                  <label>Bar Code</label>
                  <input type="text" placeholder="Ex.: 7891031406014">
                </div>
                <div class="field">
                  <label>Name</label>
                  <input type="text" placeholder="Ex.: Cheese">
                </div>
              </div>
  
              <div class="equal width fields">
                <div class="field">
                  <label>Label</label>
                  <div id="dropdownMarcas" class="ui search selection dropdown">
                    <input name="inputMarcas" type="hidden">
                    <i class="dropdown icon"></i>
                    <div class="default text">Ex.: Lipton</div>
                    <div class="menu">
                      <div class="item" data-value="HL">Hellmanns</div>
                      <div class="item" data-value="HM">Hemmer</div>
                    </div>
                  </div>
                </div>
                <div class="field">
                  <label>Categry</label>
                  <div id="dropdownCategorias" class="ui multiple search selection dropdown">
                    <input name="inputCategorias" type="hidden">
                    <i class="dropdown icon"></i>
                    <div class="default text">Ex.: Fruit</div>
                    <div class="menu">
                      <div class="item" data-value="CO">Extras</div>
                      <div class="item" data-value="HA">Burguer</div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="equal width fields">
                <div class="field">
                  <label>Volume</label>
                  <input type="text" placeholder="Ex.: 200">
                </div>
                <div class="field">
                  <label>Medida</label>
                  <div id="dropdownMedida" class="ui search selection dropdown">
                    <input name="inputMedidas" type="hidden">
                    <i class="dropdown icon"></i>
                    <div class="default text">Ex.: Gramas</div>
                    <div class="menu">
                      <div class="item" data-value="GR">Gramas</div>
                      <div class="item" data-value="KG">Quilos</div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="field">
                <label>Observações</label>
                <textarea style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
              </div>
            </div>
          </div>
          <div class="actions">
            <div class="ui teal right labeled icon button">
              Salvar
              <i class="checkmark icon"></i>
            </div>
          </div>
        </div>
        <!-- FIM Modal de CRUD de Produtos -->
  
        <!-- Modal de Confirmação de Exclusão -->
        <div id="modalConfirmacaoExclusao" class="ui basic modal">
          <div class="ui icon header">
            <i class="archive icon"></i>
            Exclusão de Produto
          </div>
          <div class="content">
            <p>Tem certeza que deseja excluir o produto "Ketchup Hemmer Tradicional 320g"? Esta ação não pode ser revertida.</p>
          </div>
          <div class="actions">
            <div class="ui red basic cancel inverted button">
              <i class="remove icon"></i>
              Não
            </div>
            <div class="ui green ok inverted button">
              <i class="checkmark icon"></i>
              Sim
            </div>
          </div>
        </div>
        <!-- FIM Modal de Confirmação de Exclusão -->
      </div>

   











    <script src="mysuper.js"></script>


    
</body>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui-css@2.4.1/semantic.min.js"></script>

</html>