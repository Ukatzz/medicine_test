function Open(checkbox) {
	const navMobile = document.getElementById('mobile-nav');
	if (checkbox.checked) {
		navMobile.classList.add('w-1/2','md:w-1/3');
		navMobile.classList.remove('w-0');
	} else {
		navMobile.classList.remove('w-1/2','md:w-1/3');
		navMobile.classList.add('w-0');
	}
}