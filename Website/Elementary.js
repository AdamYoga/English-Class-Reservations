let SubMateri = document.querySelector('.SubMateri');


let MenuPengguna = document.querySelector('.AccountBG');

let MenuNotifikasi = document.querySelector('.wrap');

document.querySelector('#Notifikasi').onclick = () =>{
    MenuNotifikasi.classList.toggle('Tampilkan');
    MenuPengguna.classList.remove('Tampilkan');
}
document.querySelector('#CloseNotifikasi').onclick = () =>{
    MenuNotifikasi.classList.remove('Tampilkan');
}


document.querySelector('#MenuPengguna').onclick = () =>{
    MenuPengguna.classList.toggle('Tampilkan');
    MenuNotifikasi.classList.remove('Tampilkan');
}
document.querySelector('#CloseAccountBG').onclick = () =>{
    MenuPengguna.classList.remove('Tampilkan');
}

window.onscroll = () =>{
    MenuPengguna.classList.remove('Tampilkan');

}




document.querySelector('#TombolBukaSubMateri1').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#TombolBukaSubMateri2').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#TombolBukaSubMateri3').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#TombolBukaSubMateri4').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#TombolBukaSubMateri5').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#TombolBukaSubMateri6').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#TombolBukaSubMateri7').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#TombolBukaSubMateri8').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#TombolBukaSubMateri9').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#TombolBukaSubMateri10').onclick = () => {
    SubMateri.classList.toggle('Tampilkan');
}

document.querySelector('#CloseSubMateri').onclick = () => {
    SubMateri.classList.remove('Tampilkan');
}