function slidesPlugin(activeSlide = 4) { //По умолчанию активен 4 слайд

        const slides = document.querySelectorAll('.slide') //В строковом формате получаем каждый из слайдов

        slides[activeSlide].classList.add('active')

        for (const slide of slides) {
        slide.addEventListener('click', () => { //При клике выполнить стрел.ф.
            clearActiveClasses() // вызов функции

            slide.classList.add('active') // Получится что при клике даст этому элементу класс active
        })
    }

    function clearActiveClasses() {
        slides.forEach((slide) => {
            slide.classList.remove('active')
        })
    } // Берет все элементы массива и уберет класс active
}

slidesPlugin()
