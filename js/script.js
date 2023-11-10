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
        sliderProjects.style.transform = `translateX(-66%)`;
    }
});

projectPrev.addEventListener('click', () => {
    if (sliderPos < -25) {
        sliderPos += 100/3;
        sliderProjects.style.transform = `translateX(${sliderPos}%)`;
        console.log(sliderPos);
    }
});