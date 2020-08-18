function valida(){
    var senha = document.getElementById("senha1").value;
    var confsenha = document.getElementById("senha2").value;
    
    if(senha != confsenha){
        alert("Senhas não Coincidem");
        document.getElementById("senha2").value = "";
    }
    
}
    

function valida(){
    var senha = document.getElementById("senha1").value;
    var confsenha = document.getElementById("senha2").value;
    
    if(senha != confsenha){
        alert("Senhas não Coincidem");
        document.getElementById("senha2").value = "";
        if(confsenha == ""){
            alert("Confirme a Senha Por Favor");
        }
    }
}

/*
// expressão regular para verificar se a String so tem letras eibir uma mensagem para o usuário se tiver caractees especiais
// https://metring.com.br/expressoes-regulares-em-javascript
var myString = "felipe";

var onlyLetters = /^[a-zA-Z]*$/.test(myString);

console.log(onlyLetters);

*/