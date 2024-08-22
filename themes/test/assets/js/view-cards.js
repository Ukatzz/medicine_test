document.addEventListener('DOMContentLoaded', () => {
	const buttons = document.querySelectorAll('.toggle-button');

	buttons.forEach(button => {
		button.addEventListener('click', () => {
			document.querySelectorAll('.standart-container .wrap-standart').forEach(wrapper => {
				wrapper.classList.replace('hidden', 'flex');
			});
			document.querySelectorAll('.standart-container .wrap-standart + .wrap-standart').forEach(wrapper => {
				wrapper.classList.replace('flex', 'hidden');
			});

			const parentContent = button.closest('.standart-container');
			const [visibleWrapper, hiddenWrapper] = parentContent.querySelectorAll('.wrap-standart');

			visibleWrapper.classList.replace('flex', 'hidden');
			hiddenWrapper.classList.replace('hidden', 'flex');
		});
	});
});