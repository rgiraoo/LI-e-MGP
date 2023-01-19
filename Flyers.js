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


// Check if submit is disabled on change of select
$('select').on('change', function () {
    if ($(':submit').is(':disabled'))
    {
      $(':submit').prop('disabled',false);
    }
    $(".valid").remove();
  });
  // Check value of select on submit
  $(":submit").click(function (event) {
    if ($("#select option:selected").val()=='')
    {
      event.preventDefault();
      $("#select").focus();
      $(".form").append('<p class="valid"><em>Please Select something</em></p>');
      $(":submit").prop("disabled", true);
    }
  });

  function webpage() {
    location.replace("https://www.w3schools.com")
  }
