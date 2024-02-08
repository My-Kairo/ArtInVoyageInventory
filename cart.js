var carts = document.querySelectorAll('.products-results');

for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('clicks', ()=> {
        console.log("added to cart");
    })
    addingCart();
}
console.log("yessss");
var carts = document.querySelectorAll('.nosugar-coke');
console.log(carts);
function addingCart(){  
    console.log('added to cart')
}
addingCart();
for (const theCart of carts){
    theCart.addEventListener('click', addingCart);
    console.log("finally");
}


// function selected(){

//     var selectedItem = document.querySelector('.nosugar-coke').value;
//     console.log(selectedItem);

// }
// selected();   
