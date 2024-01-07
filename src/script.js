function sendMessage() {
    const messageInput = document.getElementById('message');
    const message = messageInput.value.trim();
    if (message !== '') {
        appendMessage('Você:', message, 'sent');
        messageInput.value = '';
        simulateReply();
    }
}

function simulateReply() {
    setTimeout(function() {
        const reply = 'Olá! Como posso ajudar?';
        appendMessage('Usuário:', reply, 'received');
    }, 1000); // Simula uma resposta após 1 segundo
}

function appendMessage(user, message, type) {
    const chatBox = document.getElementById('chat-box');
    const messageElement = document.createElement('div');

    messageElement.classList.add('message', type);
    messageElement.innerHTML = `<strong>${user}</strong>: ${message}`;
    chatBox.appendChild(messageElement);
    chatBox.scrollTop = chatBox.scrollHeight;
}
