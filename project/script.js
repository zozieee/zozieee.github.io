const toggleButton =document.getElementByClassName('toggle-button')[0]
const navbarLinks =document.getElementByClassName('nav-links')[0]

toggleButton.addEventListener('click', () =>{
	navbarLinks.classList.toggle('active')
})