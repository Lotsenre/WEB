// Получаем кнопку прокрутки вверх
const scrollToTopBtn = document.getElementById('scrollToTopBtn');

// Функция для плавной прокрутки вверх
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

// Показываем или скрываем кнопку в зависимости от положения прокрутки
function toggleScrollButton() {
    if (window.scrollY > 300) {
      scrollToTopBtn.classList.add('visible');
    } else {
      scrollToTopBtn.classList.remove('visible');
    }
  }
  
  // Добавляем обработчик события прокрутки
  window.addEventListener('scroll', toggleScrollButton);
  
  // Добавляем обработчик клика на кнопку
  scrollToTopBtn.addEventListener('click', scrollToTop);