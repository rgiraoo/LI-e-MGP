const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})





































$(function() {
  /* DataSources */
  var codigosBarra = [
    { title: '7891031409404' },
    { title: '7891031406014' }
  ];

  var produtos = [
    { title: 'Ketchup Hemmer Tradicional 320g' },
    { title: 'Mostarda Escura Hemmer Tipo Holandesa 200g' }
  ];

  var categorias = [
    { title: 'Condimento' },
    { title: 'Hamburguer' }
  ];
  /* FIM DataSources */

  /* Modais */
  $(".btnExcluir")
    .click(function(){
    $("#modalConfirmacaoExclusao")
      .modal('show');
  });

  $(".btnCadastro")
    .click(function(){
    $("#modalCadastro")
      .modal('show');
  });
  /* FIM Modais */

  /* Filtros */
  $('#filtroCodigoBarra')
    .search({
    source: codigosBarra
  })

  $('#filtroProduto')
    .search({
    source: produtos
  })

  $('#filtroCategorias')
    .search({
    source: categorias
  })
  /* FIM Filtros */

  /* DropDowns */
  $('#dropdownCategorias')
    .dropdown({
    allowAdditions: true
  });

  $('#dropdownMarcas')
    .dropdown({
    allowAdditions: true
  });

  $('#dropdownMedida')
    .dropdown();
  /* FIM DropDowns */
});

















































































