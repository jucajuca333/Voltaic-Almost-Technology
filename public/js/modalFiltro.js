let btn = document.getElementById("btnFiltro");
let modal = document.getElementById("modalFiltro");
let closeModal = document.getElementById("closeModal");

btn.addEventListener('click', (event) => {
    modal.style.display = 'flex';
});

closeModal.addEventListener('click', (event) => {
    modal.style.display = 'none';
});
