const items = document.querySelectorAll('.item');

items.forEach(item => {
    item.addEventListener('click', () => {
        // Adicione aqui o código para executar uma ação quando o item for clicado
        console.log('Item clicado:', item.textContent);
    });
});

const btnVoltar = document.querySelector('.btn-voltar');

btnVoltar.addEventListener('click', () => {
  // Aqui você coloca o código para executar a ação desejada ao clicar no botão
  // Por exemplo, para voltar para a página anterior:
  window.history.back();
});

function goBack() {
  window.history.back();
};