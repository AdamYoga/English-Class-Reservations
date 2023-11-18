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