const hamburger = document.querySelector('.hamburger');
const navLink = document.querySelector('.nav__link');

// allows the hamburger button to show the menu when it is clicked
hamburger.addEventListener('click', () => {
  navLink.classList.toggle('hide');
});
