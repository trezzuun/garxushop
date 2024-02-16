function openGallery() {
    window.location.href = "gallery.html";
}

function openDiscord() {
    // Replace "YOUR_DISCORD_INVITE_LINK" with your actual Discord server invite link
    window.open("https://discord.gg/garxu", "_blank");
}

// Disable image dragging
var images = document.getElementsByTagName('img');

for (var i = 0; i < images.length; i++) {
    images[i].addEventListener('dragstart', function (e) {
        e.preventDefault();
    });
}

// STOP PEOPLE FROM STEALING
document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
  });
  
  document.onkeydown = function (e) {
    if (event.keyCode == 123) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
      return false;
    }
  };