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