function burgerToggle() {
    document.querySelector('.burger').classList.toggle('active_menu');
    document.querySelector('.mobile-menu').classList.toggle('hidden');
    console.log('work')
}

document.querySelector('.burger').onclick = burgerToggle;



let car = document.querySelectorAll('.carousel-item');
console.log(car.length); // 4 кол-во слайдов

// вывести кол-во слайдов  на страницу
// document.querySelector('.carousel__count').innerHTML = car.length;


function showModal() {
    document.querySelector('.modal').classList.add('show');
}

document.querySelector('.btn-success.btn-sign-up').onclick = showModal;


function closeModal() {
    document.querySelector('.modal').classList.remove('show');
}

document.querySelector('.modal__close').onclick = closeModal;