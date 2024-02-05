// var carts = document.querySelectorAll('.cart-btn');

// for (let i=0; i < carts.length; i++){
//     carts[i].addEventListener('clicks', ()=> {
//         console.log("added to cart");
//     })
// }
console.log("yessss");
var carts = document.querySelectorAll('.cart-btn');
console.log(carts);
function addingCart(){
    console.log('added to cart')
}
addingCart();
for (const theCart of carts){
    theCart.addEventListener('click', addingCart);
    console.log("finally");
}

    
