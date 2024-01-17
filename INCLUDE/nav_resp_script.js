document.addEventListener('DOMContentLoaded', function () {
    const navButton = document.getElementById('NavButton');
    const showLinks = document.querySelector('.show-links');

    // Funkcja do ukrywania show-links
    function hideShowLinks() {
        showLinks.classList.remove('visible');
        showLinks.style.height = '0';
    }

    // Funkcja obsługująca kliknięcie w przycisk NavButton
    function toggleShowLinks() {
        showLinks.classList.toggle('visible');

        // Dodajemy nasłuchiwanie na zakończenie animacji
        showLinks.addEventListener('transitionend', function () {
            if (!showLinks.classList.contains('visible')) {
                showLinks.style.height = '0';
            } else {
                showLinks.style.height = showLinks.scrollHeight + 'px';
            }
        });
    }

    // Dodajemy nasłuchiwanie na zdarzenie kliknięcia w przycisk NavButton
    navButton.addEventListener('click', toggleShowLinks);

    // Dodajemy nasłuchiwanie na zdarzenie zmiany rozmiaru okna
    window.addEventListener('resize', function () {
        const windowWidth = window.innerWidth;

        // Dostosuj próg szerokości, aby określić, kiedy ukryć show-links
        const thresholdWidth = 768; // Przykładowa wartość, dostosuj według potrzeb

        if (windowWidth >= thresholdWidth) {
            hideShowLinks();
        }
    });
});
