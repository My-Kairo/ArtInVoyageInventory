var carts = document.querySelectorAll('.products-results');
import MyCart from "./addFactory";
var cartInstant = MyCart(result);
const countInsta = document.querySelector('.counter');

let list;
let cartInstant = myCart(list);

for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('clicks', ()=> {
        console.log("added to cart");
    })
    addingCart();
}


function addingCart(){ 
    var selectedItem = document.querySelector('.product-results').value;
    selectedItem = carts;
    console.log(selectedItem);
}
addingCart();

countInsta.innerHTML = cartInstant.theCounter();



// for (const theCart of carts){
//     theCart.addEventListener('click', addingCart);
//     console.log("finally");
// }


//    const cartCounter = document.querySelector('.icon-button_badge');
//    const cartItems = document.querySelector('.nosugar-coke');
//    const cartBtn = document.querySelector('.cart-btn');


//    cartBtn.forEach(btn => {
//     let parentElement = btn.parentElement;
//     console.log(parentElement.querySelector('.drink-check').innerHTML);
//    })
