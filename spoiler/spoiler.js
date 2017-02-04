/**
LORSQUE JE clique sur le boutton dans .spoiler
ALORS 
    J'ajoute la classe .visible à l'élement suivant

var button = document.querySelector('.spoiler button')
button.addEventListener('click', function () {
    this.nextElementSibling.classList.add('visible')
    this.parentNode.removeChild(this)
})
**/

var elements = document.querySelectorAll('.spoiler')

var createSpoilerButton = function (element) {
    
    // On crée la span.spoiler-content
    var span = document.createElement('span')
    span.className = 'spoiler-content'
    span.innerHTML = element.innerHTML
    
    // On crée le bouton 
    var button = document.createElement('button')
    button.textContent = 'Afficher le spoiler'
    
    // On ajoute les élément au DOM
    element.innerHTML = ''
    element.appendChild(button)
    element.appendChild(span)
    
    // On met l'écouteur au click
    button.addEventListener('click', function () {
        button.parentNode.removeChild(button)
        span.classList.add('visible')
    })
}

for(var i = 0; i < elements.length; i++){
    createSpoilerButton(elements[i])
}