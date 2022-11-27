'use strict';

const formCad = document.getElementById("formCad")
formCad.addEventListener('submit',gravar);

function gravar(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const searchParams = new URLSearchParams();

    for(const par of formData) {
        searchParams.append(par[0],par[1],par[2],par[3]);
    }

    fetch('../php/cadastroUser.php', {
        method:'POST',
        body:formData
    }).then(function(response) {
        document.getElementById('email').value="";
        document.getElementById('senha').value="";
        document.getElementById('endereco').value="";
        localStorage.setItem('email', "");
        localStorage.setItem('password', "");
        localStorage.setItem('userType', 0);
        return alert('Dados gravados com sucesso!');
    }).catch(function(error) {
        console.log(error);
    });
}