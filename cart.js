var carts = document.querySelectorAll('.products-results');
const countInsta = document.querySelector('.counter');

import {MyCart} from "./addFactory.js";
let list = [];
let cartInstant = MyCart(list);

for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('clicks', ()=> {
        console.log("added to cart");
    if(cartInstant.getItems() = true){
        countInsta++;
    }
    })
    
}


function addingCart(prod){
    for(let i = 0; i < list.length; i += 1){
        if(list[i].prod === prod){
            list[i].qty += 1 
            return 
            
        }
        console.log(list);
    }

    countInsta = {prod, qty: 1}
    list.push(countInsta);

    // var selectedItem = document.querySelector('.product-results');
    // selectedItem = carts;
    
}
addingCart(list)
// addingCart();

// countInsta.innerHTML = cartInstant.theCounter();



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
