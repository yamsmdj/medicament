let tourniquet = document.querySelector('.tournini')
let trait = document.createElement('hypnose$');

tourniquet.appendChild(trait)

    for (i=1; i < 40 ; i++) { 
        trait[i].classList('hypnose1')
        trait[i].style.animationDelay = '{i}s';
    }
    document.body.insertBefore(trait, tourniquet)