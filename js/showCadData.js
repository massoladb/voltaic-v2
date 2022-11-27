let previousEmail = localStorage.getItem('email');
let previousPsw = localStorage.getItem('password');
let previousUserType = localStorage.getItem('userType');

let emailField = document.getElementById("email");
let pswField = document.getElementById("senha");
let userTypeField = document.getElementById("tipo_usuario");

emailField.value = previousEmail;
pswField.value = previousPsw;
userTypeField.selectedIndex = previousUserType;