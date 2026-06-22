const form = document.querySelector("form");

form.addEventListener("submit", function(e){

    const titulo =
        document.querySelector("[name='titulo']").value;

    if(titulo.trim() === ""){
        alert("Informe o título");
        e.preventDefault();
    }

});