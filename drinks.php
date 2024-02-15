<?php

session_start();
   include('connection.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styel.css" >
  

</head>
<body>
    <div class="container">
        <div class="notification">
            <button type="button" class="icon-button">
                <span class="material-icons">&#x1F6D2</span>
                <span class="counter">0</span>
            </button>
        </div>
        <div class="input-group">
        <button class="btn-search" type="button" oclick="search()">
                    <i class="fa fa-search fa-fw">
                    </i>
                    Search
                </button>
            <input type="text" class="form-control" placeholder="Search for item..." autocomplete="off">
            <span class="input-group-btn">
                
            </span>
            <div class="myresults"></div>
            </div>
    
            <div class="products-results" >

            </div>
        <div class="row1">
            <!-- <form id="myitems"> -->
          
            <div class="nosugar-coke" >
                
                <label class="drink-check">
                    <p class="drink-labels">
                    Coke - No sugar 330ml 
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>

          

        
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Coke - No sugar 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Coke - No sugar 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Coke - Original 330ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>
            
            <!-- </form>  -->

        </div>
        <div class="row2">
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Coke - Original 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Fanta-pine 330ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Fanta-pine 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Fanta-pine 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>
            

        </div>
        <div class="row2">
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Coke - Original 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Irone-brew 330ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Iron-brew 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check" >
                    <p class="drink-labels">
                    Iron-brew 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>
            

        </div>

        <div class="row2">
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                    Creem-soda 330ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>

            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                        Spring water 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                        Spring water 750ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                        Sparkling water 500ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>
            

        </div>
        <div class="row2">
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                        Sparkling water 750ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                        Creem-soda 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div><vl></vl>
            <div class="nosugar-coke">

                <label class="drink-check">
                    <p class="drink-labels">
                        Creem-soda 440ml
                    </p>
                    <input type="checkbox" class="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <button class="cart-btn" type="submit" value="submit">ADD : &#x1F6D2</button>
            </div>
        </div>






              
        <div class="footer">
            <h4>FOOTER</h4>
        </div>

    </div>
    <!-- <script src="test.js"></script> -->
    <script src="./search.js" charset="utf-8" type="module"></script>
    <script src="./addFactory.js" charset="utf-8" type="module"></script>
    <!-- <script src="./cart.js" charset="utf-8"></script> -->
    <!-- <script scr="./cart.js"></script> -->

</body>
</html>