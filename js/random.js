function generateOrderNumber() {
    return Math.floor(Math.random() * 200) + 1;
}

document.addEventListener("DOMContentLoaded", function () {
    const orderNumberElement = document.getElementById("orderNumber");
    if (orderNumberElement) {
        orderNumberElement.innerText = generateOrderNumber();
    }
});
