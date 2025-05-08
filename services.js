// document.addEventListener("DOMContentLoaded", () => {
//     const buttons = document.querySelectorAll(".btn-primary");
  
//     buttons.forEach(button => {
//       button.addEventListener("click", () => {
//         const service = button.dataset.service; // Получаем название услуги
//         const phone = button.dataset.phone; // Получаем номер телефона
  
//         // Формируем ссылку на WhatsApp
//         const message = `Здравствуйте! Хочу узнать подробнее об услуге: ${service}`;
//         const encodedMessage = encodeURIComponent(message); // Кодируем текст
//         const whatsappUrl = `https://wa.me/${phone}?text=${encodedMessage}`;
  
//         // Перенаправляем пользователя
//         window.open(whatsappUrl, "_blank");
//       });
//     });
//   });
  
  document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const serviceCards = Array.from(document.querySelectorAll(".card.h-100"));

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const priceFilter = form.querySelector('[aria-label="Сортировка по цене"]').value;
        const popularityFilter = form.querySelector('[aria-label="Сортировка по популярности"]').value;
        const timeFilter = form.querySelector('[aria-label="Сортировка по времени"]').value;

        let filteredCards = [...serviceCards];

        // Сортировка по цене
        if (priceFilter === "1") {
            filteredCards.sort((a, b) => a.dataset.price - b.dataset.price);
        } else if (priceFilter === "2") {
            filteredCards.sort((a, b) => b.dataset.price - a.dataset.price);
        }

        // Сортировка по популярности
        if (popularityFilter === "1") {
            filteredCards.sort((a, b) => b.dataset.popularity - a.dataset.popularity);
        }

        // Сортировка по времени
        if (timeFilter === "1") {
            filteredCards.sort((a, b) => a.dataset.time - b.dataset.time);
        }

        // Обновляем порядок карточек
        const container = document.querySelector(".row.g-4");
        container.innerHTML = "";
        filteredCards.forEach(card => container.appendChild(card.parentNode));
    });
});
