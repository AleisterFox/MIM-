const menu = document.querySelectorAll(".menu");
const burguerButton = document.querySelector(".menu__button");

const projectNext = document.querySelector(".next__project");
const projectPrev = document.querySelector(".prev__project");
const sliderProjects = document.querySelector(".slider__projects");
let projectTitle = document.querySelector("#project__title");
let sliderPos = 0;

let project = document.querySelector('.watch');

burguerButton.addEventListener("click", () => {
  if (this.innerWidth < 900) {
    menu.forEach((list) => {
      if (list.style.display != "flex") {
        list.style.display = "flex";
        list.style.animation = "showMenu 0.5s linear";
        list.style.background = "var(--blue)";
      } else {
        list.style.animation = "hideMenu 0.5s linear";
        setTimeout(() => {
          list.style.display = "none";
        }, 490);
      }
    });
  }
});
const headerBar = document.querySelector("#header");
const mainHero = document.querySelector(".mainHero");
const headerBarLinks = document.querySelectorAll(".top__link");

if (window.scrollY === 0 && headerBar.offsetTop === mainHero.offsetTop) {
  headerBar.style.background = "transparent";
}
window.addEventListener("scroll", function () {
  if (window.scrollY === 0 && headerBar.offsetTop === mainHero.offsetTop) {
    headerBar.style.background = "transparent";
    headerBarLinks.forEach((headerBarLink) => {
      headerBarLink.classList.add("top");
    });
  } else {
    headerBar.style.background = "var(--blue)";
    headerBarLinks.forEach((headerBarLink) => {
      headerBarLink.classList.remove("top");
    });
  }
});

projectNext.addEventListener("click", () => {
  if (sliderPos > -1) {
    sliderPos -= 100;
    sliderProjects.style.transform = `translateX(${sliderPos}vw)`;
    projectTitle.innerText = "Proyecto Ajusco";
  } else if (sliderPos < -1 && sliderPos > -200) {
    sliderPos = -200;
    sliderProjects.style.transform = `translateX(${sliderPos}vw)`;
    projectTitle.innerText = "Proyecto Naucalpan";
  } else if (sliderPos === -200) {
    sliderPos = 0;
    sliderProjects.style.transform = `translateX(${sliderPos}vw)`;
    projectTitle.innerText = "Proyecto Hidalgo";
  }
});

projectPrev.addEventListener("click", () => {
  if (sliderPos < -100) {
    sliderPos += 100;
    sliderProjects.style.transform = `translateX(${sliderPos}vw)`;
    projectTitle.innerText = "Proyecto Ajusco";
  } else if (sliderPos > -200 && sliderPos < -1) {
    sliderPos = 0;
    sliderProjects.style.transform = `translateX(${sliderPos}vw)`;
    projectTitle.innerText = "Proyecto Hidalgo";
  } else if (sliderPos > -1) {
    sliderPos -= 200;
    sliderProjects.style.transform = `translateX(${sliderPos}vw)`;
    projectTitle.innerText = "Proyecto Naucalpan";
  }
});

function autoSlide() {
  setInterval(() => {
    projectNext.click();
  }, 5000);
}

const nextService = document.querySelector(".next__service");
const prevService = document.querySelector(".prev__service");
const servicesSlider = document.querySelector(".services__container");
servicesSlider.style.marginLeft = "0";

nextService.addEventListener("click", () => {
  if (servicesSlider.style.marginLeft === "0px") {
    servicesSlider.style.marginLeft = "-100%";
  } else {
    servicesSlider.style.marginLeft = "-200%";
  }
});

prevService.addEventListener("click", () => {
  if (servicesSlider.style.marginLeft === "-200%") {
    servicesSlider.style.marginLeft = "-100%";
  } else {
    servicesSlider.style.marginLeft = "0";
  }
});
