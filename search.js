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

let result = [];
inputBox.onkeyup = function(){
    
    let input = inputBox.value;
    if (input.length){
        result = products.filter((keyword)=> {
           return keyword.toLocaleLowerCase().includes(input.toLocaleLowerCase());
        });
        console.log(result);
    }
    display(result);
    displayProducts(result);
    
    if(!result.length){
        result.innerHTML = '';
    }
}

function display(result){
    
    const items = result.map((list)=>{

        
        return "<li onclick=selectInput(this)>" + list + "</li>";
    })
    myResults.innerHTML = "<ul>" + items.join('') + "</ul";

}

function displayProducts(result){    
    let html =``;

    result.map((list)=>{
       html += `<div class="nosugar-coke"><label class="drink-check">
        <p class="drink-labels">
        ${list}
        </p>
        <input type="checkbox" class="checkbox" >
        <span class="checkmark"></span>
    </label>
    <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button></div><vl></vl>`;
        // return html;
    });
    productsResult.innerHTML = html;
}

function selectInput(list){
    inputBox.value = list.innerHTML;
    myResults.innerHTML = '';
}
// result.addEventListern("click", display)

// inputBox.addEventListener((e) => {
//     myResults = e.target.value;
//     result
// })

// function subFunction(){
//     myResults.innerHTML = result;
// }

// mybtn.addEventListener("click", subFunction);
