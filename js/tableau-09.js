var btnAfficher = document.querySelector("#btnAfficher");

btnAfficher.addEventListener("click", function(){
    var select = document.querySelector("#select");
    for (var i = 0; i < select.length; i++){
        if(select.children[i].selected === true){
            var para = document.querySelector("#afficherIci");
            para.innerHTML = "le mot de passe de " + select.children[i].innerHTML + " est " + select.children[i].value;
        }
    }
});
