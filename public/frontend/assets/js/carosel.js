var current_img = 0;

function showImage(n) {
    var image_stack = document.querySelectorAll(".main-preview .preview-img");
    var mini_image_stack = document.querySelectorAll(".mini-preview .img-container .mini-preview-img");

    // Hide all images and reset opacity for mini images
    for (let i = 0; i < image_stack.length; i++) {
        image_stack[i].style.display = "none";
        mini_image_stack[i].classList.remove("active");
        mini_image_stack[i].style.opacity = "0.5";
    }

    // Show the current image and highlight the corresponding mini image
    if (n >= 0 && n < image_stack.length) {
        image_stack[n].style.display = "block";
        mini_image_stack[n].classList.add("active");
        mini_image_stack[n].style.opacity = "1";
    }

}

function changeImage(n) {
    var image_stack = document.querySelectorAll(".main-preview .preview-img");

    // Update current_img index
    current_img += n;

    // Loop around if out of bounds
    if (current_img >= image_stack.length) {
        current_img = 0;
    } else if (current_img < 0) {
        current_img = image_stack.length - 1;
    }

    showImage(current_img);
}

function setImage(n) {
    current_img = n;
    showImage(current_img);
}

// Add event listeners to mini-preview images
document.querySelectorAll('.mini-preview .img-container .mini-preview-img').forEach((img, index) => {
    img.addEventListener('click', () => setImage(index));
});

// Initialize the slideshow
showImage(current_img);
