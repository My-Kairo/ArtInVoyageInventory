<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styel.css" >
    <script src="./cart.js"></script>
</head>
<body>
    <div class="container">
        <div class="notification">
            <button type="button" class="icon-button">
                <span class="material-icons">&#x1F6D2</span>
                <span class="icon-button__badge">2</span>
            </button>
        </div>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for item..." autocomplete="off">
            <span class="input-group-btn">
                <button class="btn-search" type="button">
                    <i class="fa fa-search fa-fw">
                    </i>
                    Search
                </button>
            </span>
            <div class="myresults"></div>
            </div>
    
            <div class="products-results">

            </div>
        <div class="row1">
            <!-- <form id="myitems"> -->
          
            <div class="nosugar-coke">
                
                <label class="drink-check" onclick="display();">
                    <p class="drink-labels">
                    Coke - No sugar 330ml 
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();" >ADD : &#x1F6D2</button>
            </div>

          

        
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Coke - No sugar 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Coke - No sugar 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Coke - Original 330ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div>
            
            <!-- </form>  -->

        </div>
        <div class="row2">
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Coke - Original 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Fanta-pine 330ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Fanta-pine 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Fanta-pine 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div>
            

        </div>
        <div class="row2">
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Coke - Original 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Irone-brew 330ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Iron-brew 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Iron-brew 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div>
            

        </div>

        <div class="row2">
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                    Creem-soda 330ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>

            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                        Spring water 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                        Spring water 750ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                        Sparkling water 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div>
            

        </div>
        <div class="row2">
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                        Sparkling water 750ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                        Creem-soda 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" onclick="displayProducts();">
                    <p class="drink-labels">
                        Creem-soda 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit" onclick="addingCart();">ADD : &#x1F6D2</button>
            </div>
        </div>






                <!-- <label class="drink-check">440 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">500 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                
            </div><vl></vl>
            <div class="orig-coke">
                <p class="drink-labels">
                    Coke - Original
                </p>
                <label class="drink-check">330 ml
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">440 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">500 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="stoney">
                <p class="drink-labels">
                    Stoney
                </p>
                <label class="drink-check">330 ml
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">440 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">500 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="creemsoda">
                <p class="drink-labels">
                    Creem-Soda
                </p>
                <label class="drink-check">330 ml
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">440 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">500 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="iron-brew">
                <p class="drink-labels">
                    Iron-Brew
                </p>
                <label class="drink-check">330 ml
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">440 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">500 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>
        </div>
        <hr class="horizontal">
        <div class="row2">
            <div class="still-water">
                <p class="drink-labels">
                    Still-water
                </p>
                <label class="drink-check">330 ml
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">440 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">500 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="spark-water">
                <p class="drink-labels">
                    Spark-water
                </p>
                <label class="drink-check">330 ml
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">440 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">500 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="lemon-twist">
                <p class="drink-labels">
                    Lemon-twist
            </p>
            <label class="drink-check">330 ml
                <input type="checkbox" class="checkbox" >
                <span class="checkmark"></span>
            </label>
            <label class="drink-check">440 ml
                <input type="checkbox" class="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="drink-check">500 ml
                <input type="checkbox" class="checkbox">
                <span class="checkmark"></span>
            </label>
            <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
        </div><vl></vl>
            <div class="fanta-orange">
                <p class="drink-labels">
                    Fanta-orange
                </p>
                <label class="drink-check">330 ml
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">440 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">500 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="fanta-pine">
                <p class="drink-labels">
                    Fanta-pine
                </p>
                <label class="drink-check">330 ml
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">440 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="drink-check">500 ml
                    <input type="checkbox" class="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>
        </div> -->
        <div class="footer">
            <h4>FOOTER</h4>
        </div>

    </div>
    
    <script src="search.js"></script>
    <script src="cart.js"></script>
</body>
</html>