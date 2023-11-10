const menu = document.querySelectorAll('.menu');
const burguerButton = document.querySelector('.menu__button');

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