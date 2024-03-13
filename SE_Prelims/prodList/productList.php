<?php
session_start();

// Check if a success message exists
if (isset($_SESSION['success_message'])) {
    echo "<script>alert('{$_SESSION['success_message']}');</script>";
    unset($_SESSION['success_message']); // Remove the success message after displaying
}
?>
<DOCTYPE>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tool and Die Shop</title>
            <link rel="stylesheet" href="homepage.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        </head>
        <body class="">


            <div class="container">
                <header>
                    <div class="title">PRODUCT LIST</div>
                    <div class="icon-cart">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 4c0-.6.4-1 1-1h1.5c.5 0 .9.3 1 .8L7.9 6H19a1 1 0 0 1 1 1.2l-1.3 6a1 1 0 0 1-1 .8h-8l.2 1H17a3 3 0 1 1-2.8 2h-2.4a3 3 0 1 1-4-1.8L5.7 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                          </svg>
                          <span>0</span>
                          
                    </div>
                </header>
                <div class="ListProduct">
                    <div class="item">
                        <img src="gears2.png" alt="">
                        <h2>GEAR</h2>
                        <div class="price">36.5$</div>
                        <div class="addCart">
                            <button>
                                Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cartTab">
               
                <h1>Shopping Cart</h1>
                <div class="listCart">
                    <div class="item">
                        <img src="gears2.png" alt="">

                    </div>
                    <div class="name">
                        GEAR
                    </div>
                    <div class="totalPrice">
                        $36.5
                    </div>
                    <div class="quantity">
                        <span class="minus"><</span>
                        <span>1</span>
                        <span class="plus">></span>
                    </div>

                </div>
                
                 <div class="btn">
                    <button class="close">CLOSE</button>
                    <button class="checkOut">CHECK Out</button>
                </div> 
                  
                
                
               
            </div>
            
            <script src="app.js"></script>
       
        </body>
    </html>
</DOCTYPE>
