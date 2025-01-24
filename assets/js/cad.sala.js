// Inicializa os ícones Feather quando o DOM estiver completamente carregado
document.addEventListener('DOMContentLoaded', function () {
    feather.replace(); // Substitui os ícones com Feather Icons
    console.log('Ícones Feather inicializados.');
});

// Validação do Formulário
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formCadastro');

    form.addEventListener('submit', function (event) {
        // Verifica se o formulário é válido
        if (!form.checkValidity()) {
            event.preventDefault(); // Impede o envio do formulário
            event.stopPropagation(); // Impede a propagação do evento
            console.log('Formulário inválido.');
        } else {
            console.log('Formulário válido e enviado com sucesso.');
        }

        // Adiciona classes Bootstrap para mostrar validação
        form.classList.add('was-validated');
    });
});