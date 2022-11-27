let emailInput = document.getElementById("emailInput");
let pswInput = document.getElementById("pswInput");
let btnPF = document.getElementById("btnContinuePF");
let btnPJ = document.getElementById("btnContinuePJ");
let btnPS = document.getElementById("btnContinuePS");

btnPF.addEventListener('click', getUserTypePF);
btnPJ.addEventListener('click', getUserTypePJ);
btnPS.addEventListener('click', getUserTypePS);

function getData() {
    localStorage.setItem('email', emailInput.value);
    localStorage.setItem('password', pswInput.value);
}

function getUserTypePF() {
    getData();
    localStorage.setItem('userType', 1);
}

function getUserTypePJ() {
    getData();
    localStorage.setItem('userType', 2);
}
function getUserTypePS() {
    getData();
    localStorage.setItem('userType', 3);
}