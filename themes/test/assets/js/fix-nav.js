window.onload = () => {
	const nav = document.getElementById('nav');
	const header = document.getElementById('header');
	const heightHeader = header.offsetHeight;
	const navHeight = nav.offsetHeight;
	const main = document.getElementById('main');

	window.onscroll = () => {
		if(window.scrollY > heightHeader && nav.style.display !== 'none') {
			nav.classList.add('fixed', 'top-0');
			main.style.marginTop = navHeight + 'px';
		} else {
			nav.classList.remove('fixed', 'top-0');
			main.style.marginTop = '0';
		}
	}
}