document.getElementById('loadIframeButton').addEventListener('click', function() {
	this.remove();

	const iframe = document.createElement('iframe');
	iframe.className = 'w-full rounded-lg';
	iframe.height = '256';
	iframe.frameBorder = '0';
	iframe.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
	iframe.allowFullscreen = true;
	iframe.src = 'https://www.youtube-nocookie.com/embed/EyFEA-E1rf0?autoplay=1';

	document.querySelector('.preview-video').appendChild(iframe);
});