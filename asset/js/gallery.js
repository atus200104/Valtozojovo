const thumbnails = document.querySelectorAll('.thumbnail');
	const lightbox = document.querySelector('.lightbox');
	const lightboxContent = document.querySelector('.lightbox-content');
	const closeButton = document.querySelector('.close1');
  
	thumbnails.forEach(thumbnail => {
	  thumbnail.addEventListener('click', event => {
		lightboxContent.firstElementChild.src = event.target.src;
		lightbox.classList.add('open');
	  });
	});
  
	closeButton.addEventListener('click', () => {
	  lightbox.classList.remove('open');
	});
  
	lightbox.addEventListener('click', event => {
	  if (event.target === lightbox) {
		lightbox.classList.remove('open');
	  }
	 });