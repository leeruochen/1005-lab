document.addEventListener("DOMContentLoaded", function() {
    // executes function registerEventListeners when content is loaded
    registerEventListeners();
});

function registerEventListeners() { 
    // registers click event listeners on all pet images
    // this finds all elements with the class "petImg" and adds a click event listener to each
    const petImages = document.querySelectorAll(".petImg"); 
    // querySelectorAll selects all elements with the class "petImg"
    petImages.forEach(function(img) {
        // loops through the list of images and adds a click event listener to each
        // the list finds elements with the class "petImg", and only <img> elements should have this class
        img.addEventListener("click", function() {
            togglePopupImage(img);
        });
    });
}

function togglePopupImage(img) {
    // toggles the popup image for the clicked pet image
    const existingPopup = img.nextElementSibling;
    if (existingPopup && existingPopup.classList.contains("petImg-popup")) { 
        // removes existing popup
        existingPopup.remove();
    } 
    else { 
        // creates a div overlay in memory with the larger image
        // with class "petImg-popup", which is styled in CSS
        const overlay = document.createElement("div");
        overlay.className = "petImg-popup";

        // creates an img element for the larger image
        // sets the source to the larger version of the image by replacing "_small" with "_large"
        // with class "popup-image" for styling
        const popupImg = document.createElement("img");
        popupImg.src = img.src.replace("_small", "_large");
        popupImg.alt = img.alt;
        popupImg.className = "popup-image";

        // appends the popup image to the overlay
        overlay.appendChild(popupImg);
        // adds click event listener to overlay to remove it when clicked
        overlay.addEventListener("click", function() {
            overlay.remove();
        });

        // attaches the overlay to the body of the document
        document.body.appendChild(overlay);
    }
}