feather.replace(); // Inicializa os ícones Feather

// Validação do Formulário
document.getElementById('formCadastro').addEventListener('submit', function(event) {
    var form = event.target;
    if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
    }
    form.classList.add('was-validated');
});
