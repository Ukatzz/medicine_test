document.querySelectorAll('.slider-container').forEach((container) => {
	initializeSlider(container);
});

function initializeSlider(container) {
	const slider = container.querySelector('.slider');
	const prevButton = container.querySelector('.prev-button');
	const nextButton = container.querySelector('.next-button');

	const slides = Array.from(slider.querySelectorAll('.element-slider'));
	const slideCount = slides.length;
	let slideIndex = 1; // Начинаем с 1, т.к. первый элемент будет клоном последнего

	// Клонируем первый и последний слайд
	const firstClone = slides[0].cloneNode(true);
	const lastClone = slides[slides.length - 1].cloneNode(true);
	slider.appendChild(firstClone);
	slider.insertBefore(lastClone, slides[0]);

	// Задаем начальный сдвиг
	slider.style.transform = `translateX(-100%)`;

	prevButton.addEventListener('click', showPrev);
	nextButton.addEventListener('click', showNext);

	function showPrev() {
		slideIndex--;
		updateSlider();
	}

	function showNext() {
		slideIndex++;
		updateSlider();
	}

	function updateSlider() {
		slider.style.transition = 'transform 0.5s ease-in-out';
		slider.style.transform = `translateX(${-slideIndex * 100}%)`;

		// Если достигаем клона первого слайда (при листании влево)
		if (slideIndex === 0) {
				setTimeout(() => {
					slider.style.transition = 'none';
					slideIndex = slideCount;
					slider.style.transform = `translateX(${-slideIndex * 100}%)`;
				}, 500); // Время должно совпадать с временем transition
		}

		// Если достигаем клона последнего слайда (при листании вправо)
		if (slideIndex === slideCount + 1) {
				setTimeout(() => {
					slider.style.transition = 'none';
					slideIndex = 1;
					slider.style.transform = `translateX(${-slideIndex * 100}%)`;
				}, 500); // Время должно совпадать с временем transition
		}
	}
}