'use strict';

const formLogin = document.getElementById("formLogin")
formLogin.addEventListener('submit',gravar);

function gravar(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const searchParams = new URLSearchParams();

    for(const par of formData) {
        searchParams.append(par[0],par[1]);
    }

    fetch('../php/loginUser.php', {
        method:'POST',
        body:formData
    }).then(function(response) {
        console.log("enviado");
    }).catch(function(error) {
        console.log(error);
    });
}