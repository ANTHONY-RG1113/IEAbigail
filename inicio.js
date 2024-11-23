let currentIndex = 0;

function showCarouselItem(index) {
    const items = document.querySelectorAll('.carousel-item');
    if (index >= items.length) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = items.length - 1;
    }

    items.forEach((item, i) => {
        item.classList.remove('active');
        if (i === currentIndex) {
            item.classList.add('active');
        }
    });
}
function nextItem() {
    currentIndex++;
    showCarouselItem(currentIndex);
}

function prevItem() {
    currentIndex--;
    showCarouselItem(currentIndex);
}
setInterval(nextItem, 5000);

showCarouselItem(currentIndex);
