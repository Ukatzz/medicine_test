document.addEventListener('DOMContentLoaded', function () {
	const modal = document.getElementById('image-modal');
	const modalImage = document.getElementById('modal-image');

	document.querySelectorAll('.swiper-slide img').forEach(img => {
		img.addEventListener('click', function () {
				modalImage.src = this.src;
				modal.classList.remove('hidden');
				modal.classList.add('flex');
		});
	});

	modal.addEventListener('click', function () {
		modal.classList.remove('flex');
		modal.classList.add('hidden');
	});
});