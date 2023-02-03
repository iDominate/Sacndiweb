const dvd = document.getElementById('DVD');
const furniture = document.getElementById('Furniture');
const book = document.getElementById('Book');
const productSelect = document.getElementById('productType');
const size = document.getElementById('size');
const width = document.getElementById('width');
const length = document.getElementById('length');
const height = document.getElementById('height');
const weight = document.getElementById('weight');
const price = document.getElementById('price');
const cancel = document.getElementById('cancel');
function showDVD() {
    dvd.style.display = 'block';
    furniture.style.display = 'none';
    book.style.display = 'none';
    size.required = true;
    width.required = false;
    length.required = false;
    height.required = false;
    weight.required = false
}

function showFurniture() {
    dvd.style.display = 'none';
    furniture.style.display = 'block';
    book.style.display = 'none';
    size.required = false;
    width.required = true;
    length.required = true;
    height.required = true;
    weight.required = false;
}

function showBook() {
    dvd.style.display = 'none';
    furniture.style.display = 'none';
    book.style.display = 'block';
    size.required = false;
    width.required = false;
    length.required = false;
    height.required = false;
    weight.required = true;
}

funcs = {
    'DVD': () => showDVD(),
    'Furniture': () => showFurniture(),
    'Book': () => showBook(),
}

productSelect.onchange = function () {
    const value = productSelect.value;
    if (!value) {
        return;
    }
    funcs[value]();
}
size.oninvalid = function () {
    if (!size.value) {
        size.setCustomValidity('field can\'t be empty');
    } else {
        size.setCustomValidity('only numbers are allowed');
    }
}

size.oninput = function () {
    size.setCustomValidity('');
}

height.oninvalid = function () {
    if (!height.value) {
        height.setCustomValidity('field can\'t be empty');
    } else {
        height.setCustomValidity('only numbers are allowed');
    }
}

height.oninput = function () {
    height.setCustomValidity('')
}

width.oninvalid = function () {
    if (!width.value) {
        width.setCustomValidity('field can\'t be empty');
    } else {
        width.setCustomValidity('only numbers are allowed');
    }
}

width.oninput = function () {
    width.setCustomValidity('');
}

length.oninvalid = function () {
    if (!length.value) {
        length.setCustomValidity('field can\'t be empty');
    } else {
        length.setCustomValidity('only numbers are allowed');
    }
}

length.oninput = function () {
    length.setCustomValidity('');
}

weight.oninvalid = function () {
    if (!weight.value) {
        weight.setCustomValidity('field can\'t be empty');
    } else {
        weight.setCustomValidity('only numbers are allowed');
    }
}

weight.oninput = function () {
    weight.setCustomValidity('');
}

price.oninvalid = function () {
    if (!price.value) {
        price.setCustomValidity('field can\'t be empty');
    } else {
        price.setCustomValidity('only numbers are allowed');
    }
}

price.oninput = function () {
    price.setCustomValidity('');
}

cancel.onclick = function () {
    document.location.href = '/product/all';
}











