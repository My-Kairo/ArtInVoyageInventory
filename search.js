let products = ['Coke - No sugar 330ml', 'Coke - No sugar 440ml', 'Coke - No sugar 500ml',
'Coke - Original 330ml', 'Coke - Original 500ml', 'Fanta-pine 330ml', 'Fanta-pine 440ml', 
'Fanta-pine 500ml', 'Coke - Original 440ml', 'Irone-brew 330ml', 'Iron-brew 440ml', 
'Iron-brew 500ml', 'Creem-soda 330ml', 'Spring water 500ml', 'Spring water 750ml', 
'Sparkling water 500ml', 'Sparkling water 750ml', 'Creem-soda 440ml', 'Creem-soda 440ml', 
'Indomie Beef', 'Indomie Chicken', 'Indomie Cheese', 'Kellogs Beef', 'Kellogs Chicken', 
'Kellogs Cheese', 'Kellogs Cheese', 'Maggi Chicken', 'Maggi Chicken', 'Paradise Chicken 500g',
'Paradise Beef 500g', 'No name mixed 500g', 'Montagu 500g', 'Lays Smokey Beef 500g', 
'Lays Smokey Beef 750g', 'Lays Cheese & Onion 500g', 'Lays Cheese & Onion 750g', 
'Simba Beef 500g', 'Simba Beef 500g', 'Simba Fruit-chutney 500g', 'Simba Fruit-chutney 750g', 
'Pecan Raw 500g', 'Almonds Roasted & Slated 400g', 'TV Bar 100g', 'TV Bar 400g', 
'Lunch Bar 200g', 'Lunch Bar 400g', 'Energy Bar 100g', 'Energy Bar 400g', 'Kit-Kat 200g', 
'Kit-kat 400g', 'P.S 200g', 'P.S 400g', 'Maynards 30g', 'Maynards 75g', 'Mashmallow 250g', 
'Mashmallow 400g', 'Sour sweets 300g', 'Toffees 50g', 'Toffees 20g', 'Magnum 100g', 
'Magnum 250g', 'Sour sweets 150g'];

const inputBox = document.querySelector(".form-control");
const myResults = document.querySelector(".myresults");
const productsResult = document.querySelector('.products-results');
const mybtn = document.querySelector(".btn-search");
const loginbtn = document.querySelector(".logbut");
const myStock = document.querySelectorAll(".drink-check");
const theBox = document.querySelector('.nosugar-coke');
const mySearch = document.querySelector('.input-group');


import { detailsAdd } from "./logFactory.js";
import {MyCart} from "./addFactory.js";

let result = [];
var cartInstant = MyCart(result);
var addInstant = detailsAdd(result);


// inputBox.addEventListener('keyup', ()=>{
//     myResults.innerText = inputBox.value;
//     console.log(myResults);
    
// });
console.log(inputBox);
inputBox.addEventListener('keyup', (e) =>{
    // inputBox = e.target.value;
    
    let input = inputBox.value;
    if (input.length){
        result = products.filter((item)=> {
           return item.toLocaleLowerCase().includes(input.toLocaleLowerCase());
        });
        console.log(result);
    }
    display(result);
    displayProducts(result);
    
    if(!result.length){
        result.innerHTML = '';
    }
});

function display(result){
    
    const items = result.map((list)=>{

        return `<li>${list}</li>`;
    })
    myResults.innerHTML = "<ul>" + items.join('') + "</ul>";
}

function displayProducts(result){    
    let html ='';

    result.map((list)=>{
       html += `<div class="nosugar-coke"><label class="drink-check">
        <p class="drink-labels">
        ${list}
        </p>
        <input type="checkbox" class="checkbox" >
        <span class="checkmark"></span>
    </label>
    <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button></div><vl></vl>`;
        return html;
       
    });
    productsResult.innerHTML = html;
    
}



function displayItems(stock){
       productsResult.innerHTML = "";
       for(var i = 0; stock.length; i++){
        var getting = display.innerHTML = "";
        displayProducts = document.createTextNode(stock[i]);
        getting.appendChild(displayProducts());
        productsResult.appendChild(getting);
       }
}
displayItems(result)

let addingCart = (val)=>{
  

    if(cartInstant.puttingItems(inputBox.value)){
        let key = cartInstant.getItems()
        `<?phpinclude('connection.php');?>`.setItem(plates);
        displayItems(key)
    }
    else
    {
        return;
    }
}
addingCart(result);

mybtn.addEventListener('click', function addingCart(){
    alert('clicked');
myResults.forEach(function(result){
    result.addEventListener('click', function(){
        item = this.item;
        inputBox.value = item;
    })
})
})

// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||



// function selectingProducts (){
//     for( const input of myResults){
//         input.addEventListener('click', function myClick(){
//             alert('clicked');
//             console.log(e);
            
//         }, false);
//     }

// }



//     const mylist = document.createElement('ul');

//     for (let i = 0; i < result.length; i++) {
//         const li = document.createElement('li');
//         li.textContent = result[i];
//         li.onclick = () => selectInput(result[i]);
//         mylist.appendChild(li);
//     }

//     myResults.innerHTML = '';
//     myResults.appendChild(mylist);
// }


// function selectInput(list){
//     inputBox.value = list;
//     myResults.innerHTML = '';
//     console.log('test');
// }

// function selectInput(list){
//     inputBox.value = list.innerHTML;
//     myResults.innerHTML = '';
// }
// function yeske(){
// function yeske(){
// }

// loginbtn.addEventListern("click", yeske);

// inputBox.addEventListener((e) => {
//     myResults = e.target.value;
//     result
// })

// function subFunction(){
//     myResults.innerHTML = result;
// }

// mybtn.addEventListener("click", subFunction);
