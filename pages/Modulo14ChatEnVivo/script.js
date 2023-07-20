document.addEventListener("DOMContentLoaded", () => {
    const chatOutput = document.getElementById("chat-output");
    const userInput = document.getElementById("user-input");
    const sendButton = document.getElementById("send-button");
  
    sendButton.addEventListener("click", sendMessage);
    userInput.addEventListener("keypress", (e) => {
      if (e.key === "Enter") {
        sendMessage();
      }
    });
  
    function sendMessage() {
      const userMessage = userInput.value.trim().toLowerCase();
      if (userMessage !== "") {
        appendMessage("user", userMessage);
        setTimeout(sendResponse, 500);
        userInput.value = "";
        chatOutput.scrollTop = chatOutput.scrollHeight;
      }
    }
  
    function sendResponse() {
      const userMessage = getLastUserMessage();
      if (userMessage === "hola") {
        responseMessage = "¡Hola! ¿Cómo puedo asistirte hoy?";
      }
      appendMessage("chatbot", responseMessage);
      chatOutput.scrollTop = chatOutput.scrollHeight;
    }
  
    function appendMessage(sender, message) {
      const messageElement = document.createElement("div");
      messageElement.classList.add("message", sender);
      messageElement.textContent = message;
      chatOutput.appendChild(messageElement);
    }
  
    function getLastUserMessage() {
      const messages = chatOutput.getElementsByClassName("user");
      if (messages.length > 0) {
        return messages[messages.length - 1].textContent.toLowerCase();
      }
      return "";
    }
  });
  