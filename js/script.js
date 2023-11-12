const menu = document.querySelectorAll('.menu');
const burguerButton = document.querySelector('.menu__button');

const projectNext = document.querySelector('.next__project');
const projectPrev = document.querySelector('.prev__project');
const sliderProjects = document.querySelector('.slider__projects')
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
        sliderPos -= 31;
        sliderProjects.style.transform = `translateX(${sliderPos}%)`;
        console.log(sliderPos);
    } else {
        sliderPos = -52.5;
        sliderProjects.style.transform = `translateX(${sliderPos}%)`;
    }
});

projectPrev.addEventListener('click', () => {
    if (sliderPos < -25) {
        sliderPos += 31;
        sliderProjects.style.transform = `translateX(${sliderPos}%)`;
        console.log(sliderPos);
    } else if (sliderPos > -25) {
        sliderPos = 0;
        sliderProjects.style.transform = `translateX(${sliderPos}%)`;
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