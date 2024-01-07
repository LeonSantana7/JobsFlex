let conversationState = 0;

function sendMessage() {
    const messageInput = document.getElementById('message');
    const userMessage = messageInput.value.trim();
    if (userMessage !== '') {
        appendMessage('Você:', userMessage, 'sent');
        messageInput.value = '';
        handleUserMessage(userMessage);
    }
}

function handleUserMessage(userMessage) {
    switch (conversationState) {
        case 0:
            simulateReply('Olá! Como posso ajudar?');
            conversationState++;
            break;
        case 1:
            simulateReply('Você pode descrever o seu problema?');
            conversationState++;
            break;
        case 2:
            simulateReply('Obrigado pela descrição do problema. Um agente de suporte irá entrar em contato!');
            // Optionally, reset the conversation state for a new interaction
            conversationState = 0;
            break;
        default:
            break;
    }
}

function simulateReply(reply) {
    setTimeout(function() {
        appendMessage('Suporte:', reply, 'received');
    }, 1000);
}

function appendMessage(user, message, type) {
    const chatBox = document.getElementById('chat-box');
    const messageElement = document.createElement('div');

    messageElement.classList.add('message', type);
    messageElement.innerHTML = `<strong>${user}</strong>: ${message}`;
    chatBox.appendChild(messageElement);
    chatBox.scrollTop = chatBox.scrollHeight;
}
