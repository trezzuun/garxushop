const roleAdd = document.querySelectorAll(".role-add");
const input = document.querySelectorAll(".message input");
const modal = document.querySelector(".modal-container");
const helpBtn = document.querySelector(".help-btn");
const feedbackInput = document.querySelector("#feedback-input");

const cursor = document.createElement("div");
cursor.className = "custom-cursor";
document.body.appendChild(cursor);

document.addEventListener("mousemove", (e) => {
  const x = e.clientX;
  const y = e.clientY;

  cursor.style.left = `${x}px`; // Set left position
  cursor.style.top = `${y}px`; // Set top position
});

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

function navigateTo(page) {
  window.location.href = `${page}.html`;
}


// You can customize the error code and message
const errorCode = 404;
const errorMessage = "Page Not Found";

// Display error information on the 404 page
document.addEventListener("DOMContentLoaded", function () {
    const errorCodeElement = document.querySelector(".error-code");
    const errorMessageElement = document.querySelector(".error-message");

    errorCodeElement.textContent = errorCode;
    errorMessageElement.textContent = errorMessage;
});

// You can add more functionality, such as redirecting to the home page
document.querySelector(".errorPage__button").addEventListener("click", function () {
    window.location.href = "index.html";
});

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function filterSelection(category) {
  var galleryItems = document.querySelectorAll('.gallery img');
  galleryItems.forEach(function(item) {
      if (category === 'all' || item.classList.contains(category)) {
          item.style.display = 'block';
      } else {
          item.style.display = 'none';
      }
  });
}

// Disable image dragging
var images = document.getElementsByTagName('img');

for (var i = 0; i < images.length; i++) {
    images[i].addEventListener('dragstart', function (e) {
        e.preventDefault();
    });
}