let LoginDulu = document.querySelector('.BGLogin1');

document.querySelector('#coba').onclick = () =>{
    LoginDulu.classList.toggle('Tampilkan');
}

let TutupLogin = document.querySelector('.BGLogin1');

document.querySelector('.CloseLogin1').onclick = () =>{
    TutupLogin.classList.remove('Tampilkan');
}
