if (!window.WebSocket) {
    document.body.innerHTML = 'WebSocket в этом браузере не поддерживается.';
}

// создать подключение
var socket = new WebSocket("ws://127.0.0.1:8081");

// отправить сообщение из формы publish
document.forms.publish.onsubmit = function () {
    var outgoingMessage = this.message.value;
    socket.send(outgoingMessage);
    return false;
};

// обработчик входящих сообщений
socket.onmessage = function (event) {
    var incomingMessage = event.data;
    showMessage(incomingMessage);
};

// показать сообщение в div#subscribe
function showMessage(message) {
    //var messageElem = document.getElementById('online_current_bid');
    var messageElem = document.createElement('div');

    //messageElem.innerHTML = '$' + message;
    messageElem.appendChild(document.createTextNode(message));
    document.getElementById('online_current_bid').appendChild(messageElem);
}
