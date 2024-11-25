const handleSubmit = (event) => {
    event.preventDefault();

    // Coleta dos inputs do formulário
    const email = document.querySelector('#email').value;
    const nome = document.querySelector('#nome').value;
    const mensagem = document.querySelector('#mensagem').value;

    // Endpoint do SheetDB
    fetch('https://sheetdb.io/api/v1/dv5ty56tj6g1s', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            data: { nome, email, mensagem }
        })
    })
    .then((response) => response.json())
    .then((data) => {
        alert('Mensagem enviada com sucesso!');
        console.log(data);
        // Limpa o formulário após envio
        document.querySelector('form').reset();
    })
    .catch((error) => {
        alert('Ocorreu um erro ao enviar a mensagem.');
        console.error('Erro:', error);
    });
};

// Evento de submissão do formulário
document.querySelector('form').addEventListener('submit', handleSubmit);
