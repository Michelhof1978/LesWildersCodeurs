const message = "Merci beaucoup pour votre contribution, le lien sera mis en ligne bientôt, après validation par notre équipe!";

document
  .getElementById("addLinkForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert(message);
  });