document.addEventListener("DOMContentLoaded", function() {
    registerEventListeners();
});

function registerEventListeners() {
    const petImages = document.querySelectorAll(".petImg");
    petImages.forEach(function(img) {
        img.addEventListener("click", function() {
            togglePopupImage(img);
        });
    });
}

function togglePopupImage(img) {
    const existingPopup = img.nextElementSibling;

    if (existingPopup && existingPopup.classList.contains("petImg-popup")) {
        existingPopup.remove();
    } 
    else {
        const overlay = document.createElement("div");
        overlay.className = "petImg-popup";

        const popupImg = document.createElement("img");
        popupImg.src = img.src.replace("_small", "_large");
        popupImg.alt = img.alt;
        popupImg.className = "popup-image";

        overlay.appendChild(popupImg);
        overlay.addEventListener("click", function() {
            overlay.remove();
        });

        document.body.appendChild(overlay);
    }
}