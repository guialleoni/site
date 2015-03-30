function cadastro(form){

if (form.nome.value=="") {
alert("Preencha o nome corretamente.");
form.nome.focus();
return false;
}

var filtro_mail = /^.+@.+\..{2,3}$/
if (!filtro_mail.test(form.email.value) || form.email.value=="") {
alert("Preencha o e-mail corretamente.");
form.email.focus();
return false;
}

if (form.sexo[0].checked==false && form.sexo[1].checked==false) {
alert("Selecione o sexo.");
return false;
}

form.nome.value="";

alert("Dados cadastrados com sucesso");
return false;



}



