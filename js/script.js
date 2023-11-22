const menu = document.querySelectorAll('.menu');
const burguerButton = document.querySelector('.menu__button');

const projectNext = document.querySelector('.next__project');
const projectPrev = document.querySelector('.prev__project');
const sliderProjects = document.querySelector('.slider__projects');
let projectTitle = document.querySelector('#project__title');
let sliderPos = 0;

burguerButton.addEventListener('click', () => {
    menu.forEach(list => {
        if (list.style.display != 'flex') {
            list.style.display = 'flex';
            list.style.animation = 'showMenu 0.5s linear';
        } else {

            list.style.animation = 'hideMenu 0.5s linear';
            setTimeout(() => {
                list.style.display = 'none';
            }, 490);
        }
    });
});


projectNext.addEventListener('click', () => {
    if (  sliderPos > -1) {
        sliderPos -= 100;
        sliderProjects.style.transform = `translateX(${sliderPos}vw)`;
        projectTitle.innerText = 'Proyecto Ajusco';
    } else if ( sliderPos < -1) {
        sliderPos = -200;
        sliderProjects.style.transform = `translateX(${sliderPos}vw)`;
        projectTitle.innerText = 'Proyecto 3';
    }
});

projectPrev.addEventListener('click', () => {
    if (sliderPos < -100) {
        sliderPos += 100;
        sliderProjects.style.transform = `translateX(${sliderPos}vw)`;
        projectTitle.innerText = 'Proyecto Ajusco'
    } else if (sliderPos > -200) {
        sliderPos = 0;
        sliderProjects.style.transform = `translateX(${sliderPos}%)`;
        projectTitle.innerText = 'Proyecto Hidalgo'
    }
});


const nextService = document.querySelector('.next__service');
const prevService = document.querySelector('.prev__service');
const servicesSlider = document.querySelector('.services__container');
servicesSlider.style.marginLeft = '0';

nextService.addEventListener('click', () => {
    if (servicesSlider.style.marginLeft === '0px') {
        servicesSlider.style.marginLeft = '-100%';
    } else  {
        servicesSlider.style.marginLeft = '-200%';
    }
});

prevService.addEventListener('click', () => {
    if (servicesSlider.style.marginLeft === '-200%') {
        servicesSlider.style.marginLeft = '-100%';
    } else {
        servicesSlider.style.marginLeft = '0';
    }
});