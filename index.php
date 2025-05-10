<?php
require 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Easy Tech Solutions - Product Landing Page</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Product Landing Page" name="keywords">
        <meta content="Product Landing Page" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400|Quicksand:500,600,700&display=swap" rel="stylesheet">

        <!-- Remix Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/checkout.css" rel="stylesheet">

        <style>
            .container {
                max-width: 1600px;
            }
            #success-box {
                margin: auto;
                text-align: center;
                font-size: 20px;
                font-weight: 500;
                padding: 20px;
                color: #0A3622;
                background: #D1E7DD;
            }
            #testimonials .testimonial-item img {
                margin: 0 auto;
                max-width: 100%;
                max-height: 100%;
                border: 1px solid rgba(0, 0, 0, .1);
                border-radius: 5px;
            }
        </style>

    </head>

    <body>
    <?php
        if (isset($_GET['or_msg'])) {
            echo '<div style="z-index: 9999; position: fixed; width: 100%;" id="success-box">Order Successfully Placed...</div>';
        }
    ?>
        <!-- Nav Start -->
        <!-- <div id="nav">
            <div class="container-fluid" style="display: flex; align-items: center; justify-content: center;">
                <div id="logo" class="text-center">
                    <a href="index.php"><img style="width: 300px; height: 300px;" src="img/logo.png" alt="Logo" /></a>
                </div>
                <div>
                    <a class="px-3 bg-success text-light " href="admin-panel/login.php" target="_blank">
                        <b>Admin Panel</b>
                    </a>
                </div>
            </div>
        </div> -->
        <!-- Nav End -->
        
        <!-- Header Start-->
        <div id="header" style="margin-top: 0;">
            <div class="container">
                <div id="logo" class="pb-5" style="display: flex; align-items: center; justify-content: space-between;">
                    <a href="index.php"><img style="width: 200px;" src="img/logo.png" alt="Logo" /></a>
                    <a style="background: #98BC62; border-radius: 5px;" class="px-5 py-3 text-light" href="admin-panel/login.php" target="_blank">
                        <b>Admin Panel</b>
                    </a>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="header-content">
                        <?php
                        $sql = "SELECT * FROM home_text";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        if ($row > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {

                                $home_title = $data['home_title'];
                                $home_des = $data['home_description'];

                            }
                        }
                        ?>

                            <h2><span>
                                <?php echo $home_title; ?>
                            </span></h2>

                            <!-- <ul class="fa-ul">
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i>
                                </span><?php echo $home_des; ?></li>
                            </ul> -->

                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Android and iOS Support</li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>GPS & Health Tracker</li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Read & reply to messages</li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Compatible with all devices</li>
                            </ul>

                            <a class="btn" href="#products">Order Now</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <?php
                            $sql = "SELECT home_image FROM images";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_num_rows($result);
                            if ($row > 0) {
                                while ($data = mysqli_fetch_assoc($result)) {
                                $home_img = $data['home_image'];
                                }
                            }
                        ?>
                        <div class="header-img">
                            <img src="uploads/<?php echo $home_img; ?>" alt="Product Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End-->
        
        <!-- Feature Start-->
        <div id="feature">
            <div class="container">
                <div class="section-header">
                    <h2>Product Features</h2>
                    <p>
                        Our product has many features. Here are some of the features of our product. You can check out the features below.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4">
                    <!-- fetch first 3 -->
                    <?php
                        $sql = "SELECT * FROM features LIMIT 3";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        if ($row > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                                $ft_title = $data['feature_title'];
                                $ft_des = $data['feature_description'];

                                echo '
                                    <div class="product-feature">
                                        <div class="product-content">
                                            <h2>'.$ft_title.'</h2>
                                            <p>'.$ft_des.'</p>
                                        </div>
                                        <div class="product-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                ';
                            }
                        }
                    ?>
                    </div>

                    <?php
                        $sql = "SELECT feature_image FROM images";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        if ($row > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                               $ftr_img = $data['feature_image'];
                            }
                        }
                    ?>
                    <div class="col-md-4">
                        <div class="product-img">
                            <img src="uploads/<?php echo $ftr_img; ?>" alt="Product Image">
                        </div>
                    </div>

                    <div class="col-md-4">
                    <!-- fetch last 3 -->
                    <?php
                        $sql = "SELECT * FROM features ORDER BY feature_id DESC LIMIT 3";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                        if ($row > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                                $ft_title = $data['feature_title'];
                                $ft_des = $data['feature_description'];

                                echo '
                                    <div class="product-feature">
                                        <div class="product-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="product-content">
                                            <h2>'.$ft_title.'</h2>
                                            <p>'.$ft_des.'</p>
                                        </div>
                                    </div>
                                ';
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->
        
        
        <!-- Products Start -->
        <div id="products">
            <div class="container">
                <div class="section-header">
                    <h2>Get Your Products</h2>
                    <p>
                        Choose your favorite product from our collection. Here is our product collection.
                    </p>
                </div>
                <div class="row align-items-center">
                    <!-- Product List -->

                    <?php 
                        
                        $sql = "SELECT * FROM product_info";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);

                        if ($row > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                                $productId = $data['product_id'];
                                $productName = $data['product_title'];
                                $productPrice = $data['product_price'];
                                $productQuantity = $data['available_stock'];
                                $productImg = $data['product_img1'];

                                echo '
                                    <div class="col-md-3">
                                        <div class="product-single" product-id="'.$productId.'" product-name="'.$productName.'" product-img="img/'.$productImg.'" product-price="'.$productPrice.'" product-quantity="1">
                                            <div class="product-img">
                                                <img src="img/'.$productImg.'" alt="Product Image">
                                            </div>
                                            <div class="product-content">
                                                <h2>'.$productName.'</h2>
                                                <h3>৳ '.$productPrice.'</h3>
                                                <button class="btn" onclick="addToCart(this)">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                ';

                            }
                        }

                    ?>

                </div>
            </div>
        </div>
        <!-- Products End -->


        <!-- Testimonials Start -->
        <div id="testimonials">
            <div class="container">
                <div class="section-header">
                    <h2>100% Customer Satisfaction</h2>
                    <p>
                        Here are some of the reviews from our customers. We are happy to serve you.
                    </p>
                </div>
                <div class="owl-carousel testimonials-carousel">

                <?php
                    $sql = "SELECT * FROM reviews";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_num_rows($result);
                    if ($row > 0) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            $reviewImg = $data['review_image'];

                            echo '
                                <div class="testimonial-item">
                                    <img src="uploads/'.$reviewImg.'" alt="">
                                </div>
                            ';
                        }
                    }
                ?>

                </div>
            </div>
        </div>
        <!-- Testimonials End -->


        <!-- Checkout Start -->
        <div id="checkout">
            <div class="container" id="products">
                <div class="section-header">
                    <h2>Checkout</h2>
                    <p>
                        Place your order now and get a discount. Hurry up! Limited time offer.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="product-single">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <h4>Billing Address</h4>
                                    <br>
                                    <div class="content">

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    // Default Value
    $payment_method = "Cash On Delivery";
    $oder_status = "Pending";
    $order_visibility = "Show";


    // Generate a unique invoice number
    function generateInvoiceNo() {
        // Get the current timestamp in microseconds
        $timestamp = microtime(true) * 10000; // More digits by multiplying
        // Convert timestamp to a unique string
        $uniqueString = 'INV-' . strtoupper(base_convert($timestamp, 10, 36));
        return $uniqueString;
    }
    $invoice_no = generateInvoiceNo();



    // Cart Info
    $cartData = json_decode($_POST['carts'], true);
    
    foreach ($cartData as $product) {
        $product_id = $product['id'];
        $product_title = $product['name'];
        $product_quantity = $product['quantity'];
        $total_price = $product['price'] * $product_quantity;

        // Insert order into the database
        $sql = "INSERT INTO order_info (user_first_name, user_last_name, user_phone, user_email, user_address, city_address, invoice_no, product_id, product_title, product_quantity, total_price, payment_method, order_status, order_visibility) VALUES ('$firstName', '$lastName', '$phone', '$email', '$address', '$city', '$invoice_no', '$product_id', '$product_title', '$product_quantity', '$total_price', '$payment_method', '$oder_status', '$order_visibility')";

        if (mysqli_query($conn, $sql)) {
            echo "Order placed successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    }

}
?>



                                        <!-- input form -->
                                        
                                            <div class="user-details full-input-box">
                                                <!-- Input for First Name -->
                                                <div class="input-box form-group">
                                                    <span class="details">First Name<i class="text-danger">*</i></span>
                                                    <input class="form-control" name="firstName" type="text" placeholder="Enter your first name" required="">
                                                </div>
                                                <!-- Input for Last Name -->
                                                <div class="input-box form-group">
                                                    <span class="details">Last Name<i class="text-danger">*</i></span>
                                                    <input class="form-control" name="lastName" type="text" placeholder="Enter your last name" required="">
                                                </div>
                                                <!-- Input for Phone Number -->
                                                <div class="input-box form-group">
                                                    <span class="details">Phone Number<i class="text-danger">*</i></span>
                                                    <input class="form-control" minlength="11" name="phone" type="text" placeholder="Enter your number" required="">
                                                </div>
                                                <!-- Input for Email -->
                                                <div class="input-box form-group">
                                                    <span class="details">Email</span>
                                                    <input class="form-control" name="email" type="email" placeholder="Enter your email">
                                                </div>
                                                <!-- Input for Address -->
                                                <div class="input-box form-group">
                                                    <span class="details">Address<i class="text-danger">*</i></span>
                                                    <input class="form-control" name="address" type="text" placeholder="Enter your address" required="">
                                                </div><br>
                                                <!-- Input for City -->
                                                <div class="radio-input-box form-group">
                                                    <span class="details">Choose Your Delivery Location<i class="text-danger">*</i></span>
                                                    <br>
                                                    <input name="city" type="radio" id="dhaka" value="Inside Dhaka" checked="">
                                                    <label for="dhaka">Inside Dhaka</label>
                                                    <br>
                                                    <input name="city" type="radio" id="outside" value="Outside Dhaka">
                                                    <label for="outside">Outside Dhaka</label>
                                                    <br><br>
                                                    <i>
                                                        <p class="text-muted">* Delivery Charge Inside Dhaka 80 ৳</p>
                                                        <p class="text-muted">* Delivery Charge Outside Dhaka 150 ৳</p>
                                                    </i>
                                                </div>
                                            </div>
                                            <!-- <button type="submit" class="btn btn-primary">Place Order</button> -->
                                        

                                    </div>
                                </div>
                                <div class="col-md-6 text-left">
                                    <div>
                                        <h4>Your Order</h4>
                                        <br>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="order-list">
                                                    <div class="order-titles">
                                                        <h5>Products</h5>
                                                        <h5>Subtotal</h5>
                                                    </div><hr>
                                                    <div class="order-items" id="order-items">
                                                        <!-- Cart item will add dynamically -->

                                                    </div>
                                                    
                                                    <div class="subtotal">
                                                        <div class="subtotal-title">Subtotal</div>
                                                        <div class="subtotal-price amount" id="subtotal-price">৳ </div>
                                                    </div><br>
                                                    <div class="shipping">
                                                        <div class="shipping-title">Shipping</div>
                                                        <div class="shipping-price amount" id="shipping-price">৳ </div>
                                                    </div>
                                                    <hr>
                                                    <div class="total-product-price">
                                                        <div class="total-product-price-title">Total</div>
                                                        <div class="total-product-price-price amount" id="total-price">৳ </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div>
                                        <h4>Payment Method</h4>
                                        <br>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="payment-method">
                                                    <div class="payment-method-title">
                                                        <h5>Choose Your Payment Method</h5><br>
                                                        <!-- <p>We Accept Cash On Delivery & Mobile Banking.</p> -->
                                                        <p>We Accept Cash On Delivery Only</p>
                                                    </div>
                                                    <div class="payment-method-list">
                                                        <!-- <input type="radio" id="bkash" name="payment" value="bkash" checked="">
                                                        <label for="bkash">bKash</label><br>
                                                        <input type="radio" id="rocket" name="payment" value="rocket">
                                                        <label for="rocket">Rocket</label><br>
                                                        <input type="radio" id="nagad" name="payment" value="nagad">
                                                        <label for="nagad">Nagad</label><br> -->

                                                        <input type="radio" id="cash-on-delivery" name="payment" value="cash-on-delivery" checked>
                                                        <label for="cash-on-delivery">Cash on Delivery</label><br>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="checkout-btn">
                                                    <button type="submit" class="btn btn-primary">Place Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
    
        
        <!-- FAQ Start -->
        <div id="faqs">
            <div class="container">
                <div class="section-header">
                    <h2>Get in Touch</h2>
                    <p>
                    You can contact with us through the following methods. We are here to help you.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="contact-info">
                            <h3><i class="fa fa-map-marker"></i>67/B, ADDL Tower, 1st Floor Dhanmondi 15/A, Dhaka</h3>
                            <h3><i class="fa fa-envelope"></i>easytechsolutionx@gmail.com</h3>
                            <h3><i class="fa fa-phone"></i>+880 1580-741616</h3>
                            <a class="btn" href="#">Contact Us</a>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Start -->


        <!-- Footer Start -->
        <div id="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <p>&copy; Copyright <a href="https://www.easytechx.com/" target="_blank">Easy Tech Solutions</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/menuspy/menuspy.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src="js/cart_calculation.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const shippingPriceElement = document.getElementById("shipping-price");
                const totalPriceElement = document.getElementById("total-price");
                const subtotalPriceElement = document.getElementById("subtotal-price");

                // Function to update shipping price dynamically
                function updateShippingPrice() {
                    const selectedCity = document.querySelector('input[name="city"]:checked').value;
                    let shippingPrice = 0;

                    if (selectedCity === "Inside Dhaka") {
                        shippingPrice = 80;
                    } else if (selectedCity === "Outside Dhaka") {
                        shippingPrice = 150;
                    }

                    // Update the shipping price in the DOM
                    shippingPriceElement.textContent = `৳ ${shippingPrice}`;

                    // Update the total price
                    const subtotal = parseInt(subtotalPriceElement.textContent.replace("৳", "").trim());
                    const totalPrice = subtotal + shippingPrice;
                    totalPriceElement.textContent = `৳ ${totalPrice}`;
                }

                // Add event listeners to the radio buttons
                const cityRadios = document.querySelectorAll('input[name="city"]');
                cityRadios.forEach(radio => {
                    radio.addEventListener("change", updateShippingPrice);
                });

                // Initialize the shipping price on page load
                updateShippingPrice();
            });


            // Send product data from the localstora to the server
            document.addEventListener('DOMContentLoaded', () => {
                const form = document.querySelector('form');
                form.addEventListener('submit', (event) => {
                    event.preventDefault();

                    const carts = JSON.parse(localStorage.getItem('carts')) || [];
                    const formData = new FormData(form);

                    // Add cart data to form data
                    formData.append('carts', JSON.stringify(carts));

                    // Send the form data to the server
                    fetch(form.action, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        document.body.innerHTML = data;
                        localStorage.clear();
                        window.location.href = "index.php?or_msg='successful'";
                    })
                    .catch(error => console.error('Error:', error));
                });
            });

        </script>

    </body>
</html>
