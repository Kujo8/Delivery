document.addEventListener('DOMContentLoaded', function () {
    // Находим все кнопки для переключения скидок
    const toggleButtons = document.querySelectorAll('.toggle-discount-btn');

    toggleButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Находим блок скидки рядом с кнопкой
            const discountWrapper = this.previousElementSibling;

            // Переключаем видимость блока скидки
            if (discountWrapper.style.display === 'none' || discountWrapper.style.display === '') {
                discountWrapper.style.display = 'block';
                this.textContent = 'Скрыть скидку';
            } else {
                discountWrapper.style.display = 'none';
                this.textContent = 'Показать скидку';
            }
        });
    });
});
