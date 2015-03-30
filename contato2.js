function cadastro(form){

if (form.nome.value=="") {
alert("Não nos mande uma mensagem vazia!");
form.texto.focus();
return false;
}

    else {
     alert("Recebemos sua mensagem!");
        form.texto.focus();
        return true;
    }
    
}



