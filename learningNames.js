/**
 * @author Manuel Adams
 * @since 2019-01-19
 */

window.onload = function () {
    init();
};

function init() {
    addImageOnclickListener();
}

function addImageOnclickListener() {
    let imageContainer = document.getElementsByClassName("imageContainer");
    for (let i = 0; i < imageContainer.length; i++) {
        imageContainer[i].addEventListener("click", function () {
            checkClickedImage(this)
        });
    }
}

function checkClickedImage(event) {
    if (event.id === 'container1' || event.id === 'container2' || event.id === 'container3') {
        clearAll();
        document.getElementById(event.id).className += ' fail';
        document.getElementById('container4').className += ' showRight';
    }
    else if (event.id === 'container4') {
        clearAll();
        document.getElementById(event.id).className += ' success';
    }
}

function clearAll() {
    let imageContainer = document.getElementsByClassName("imageContainer");
    for (let i = 0; i < imageContainer.length; i++) {
        if (imageContainer[i].classList.contains('success')) {
            imageContainer[i].classList.remove('success')
        } else if (imageContainer[i].classList.contains('fail')) {
            imageContainer[i].classList.remove('fail');
        } else if (imageContainer[i].classList.contains('showRight')) {
            imageContainer[i].classList.remove('showRight');
        }
    }
}
