<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HandCrafted</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="logo">
            <a href="index.php">
                <h3>Hand<span id ="logo"> Crafted</span>
    </h3>
            </a>
        </div>

        <nav class="navbar">
        <a href="index.php">home</a>
            <a href="#features">Features</a>
            <a href="categories.php">Categories</a>
            <a href="products.php">Product</a>
            <a href="review.php">review</a>
          
            <a href="contact.php">Contact Us</a>
            <a href="register.php">SignUp</a>
        </nav>

        <!-- register form -->
        <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <form class="modal-content" action="/action_page.php">
                <div class="container">
                    <h1>Sign Up</h1> -->
                    <!-- <p>Please fill in this form to create an account.</p> -->
                    <!-- <hr>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>


                    
                    <label for="psw"><b>Password</b></label>
                    <input type="password" value="" id="myInput">
<input type="checkbox" onclick="myFunction()">Show Password
<br>
<br>
<br>


                  

                   
                   
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" value="" id="myInput">

                 
                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
                    </p>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'"
                            class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div> -->



        <div class="icons">
            <a href="#">
                <div class="fas fa-bars" id="menu-btn"></div>
            </a>
            <a href="#">
                <div class="fas fa-user" id="login-btn"></div>
            </a>
            <a href="#">
                <div class="fas fa-search" id="search-btn"></div>
            </a>
            <a href="#">
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
            </a>

        </div>

        <form action="/action_page.php" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
         </form>


        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="unique gifts.jpg" alt="" >
                <div class="content">
                    <h3>Unique gifts</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="na-na-vings-circlel-handmade-choker-vings-feel-it-original-imagfcngub3x4fxu.webp" alt="">
                <div class="content">
                    <h3>Jewellaries</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="wall decor 1.jpg" alt="">
                <div class="content">
                    <h3>Wall decore</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="total"> total : $19.69/- </div>
            <a href="checkout.php" class="btn">checkout</a>
        </div>

        <form action="/action_page.php" class="login-form">
            <h3>login now</h3>
            <input type="name" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">

            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <input type="submit" value="login now" class="btn">
        </form>
        








    </header>

    <!-- header section ends -->

    <!-- section contact us -->
    <div id ="contact">
    <h3 class ="heading">Contact<span>Us</span></h3>

<div class="container">
  <form action="/action_page.php">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder=" Write Your name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder=" Write Your email">

    <label for="phone">Phone no.</label>
    <input type="phone" id="phone" name="phone" placeholder=" Write Your phone no.">


    <!-- <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select> -->

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
    <button type='submit' class='submit-btn'>Submit</button>
  </form>
</div>
  
    <!-- section contact us ends -->


    
   
               <!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3> Hand <span> Crafted</span></h3>
        <p>Social media is a collective term for websites and applications that focus on communication.</p>
        <div class="share">
            <a href="http://Facebook.com" class="fab fa-facebook-f"></a>
            <a href="http://twitter.com" class="fab fa-twitter"></a>
            <a href="http://instagram.com" class="fab fa-instagram"></a>
            <a href="http://linkedin.com" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <h3>contact <span>info</span></h3>
        <a href="http://tel:+123-456-7890" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
        <a href="http://tel:+111-222-33335" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
        <a href="http://mailto:rachibhavsar9@gmail.com" class="links"> <i class="fas fa-envelope"></i>
            Handcrafted@gmail.com </a>
        <a href="http://location:mumbai" class="links"> <i class="fas fa-map-marker-alt"></i> mumbai, india -
            400104 </a>
    </div>

    <div class="box">
        <h3>quick <span>links</span></h3>
        <a href="index.php" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
                <a href="categories.php" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
                <a href="products.php" class="links"> <i class="fas fa-arrow-right"></i> product </a>
                
                <a href="review.php" class="links"> <i class="fas fa-arrow-right"></i> review </a>
                 <a href="contact.php" class="links"> <i class="fas fa-arrow-right"></i> contact us</a>
                 <!-- <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a> -->
    </div>

    <div class="box">
    <!-- <form action="/action_page.php">
                <h3>news<span>letter</span></h3>
             

                <div class="container">
    <h2>Subscribe for latest updates</h2>
   
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form> -->
        <!-- <p>subscribe for latest updates</p>
        <input type="email" placeholder="your email" class="email">
        <input type="submit" value="subscribe" class="btn"> -->
        <!-- <a data-count="100" class="subscribe-button">
        <svg>
            <g>
                <react class="plus_line1" width="2" height="12" x="5" y="0"></react>
                <react class="plug_line2" width="12" height="2" x="0" y="5"></react>
                </g>
                </svg> -->
        <img src="image/payment.png" class="payment-img" alt="">
    </div>

</div>

<!-- <div class="credit"> created by <span> mr. web designer </span> | all rights reserved </div> -->

</section>

<!-- footer section ends -->

















    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script>
        let searchForm = document.querySelector('.search-form');

        document.querySelector('#search-btn').onclick = () => {
            searchForm.classList.toggle('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
            navbar.classList.remove('active');
        }

        let shoppingCart = document.querySelector('.shopping-cart');

        document.querySelector('#cart-btn').onclick = () => {
            shoppingCart.classList.toggle('active');
            searchForm.classList.remove('active');
            loginForm.classList.remove('active');
            navbar.classList.remove('active');
        }

        let loginForm = document.querySelector('.login-form');

        document.querySelector('#login-btn').onclick = () => {
            loginForm.classList.toggle('active');
            searchForm.classList.remove('active');
            shoppingCart.classList.remove('active');
            navbar.classList.remove('active');
        }

        let navbar = document.querySelector('.navbar');

        document.querySelector('#menu-btn').onclick = () => {
            navbar.classList.toggle('active');
            searchForm.classList.remove('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
        }

        window.onscroll = () => {
            searchForm.classList.remove('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
            navbar.classList.remove('active');
        }

        var swiper = new Swiper(".product-slider", {
            loop: true,
            spaceBetween: 20,
            autoplay: {
                delay: 7500,
                disableOnInteraction: false,
            },
            centeredSlides: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1020: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper = new Swiper(".review-slider", {
            loop: true,
            spaceBetween: 20,
            autoplay: {
                delay: 7500,
                disableOnInteraction: false,
            },
            centeredSlides: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1020: {
                    slidesPerView: 3,
                },
            },
        });


        // read more

        const parentHeading = document.querySelector('.features');

        parentHeading.addEventListener('click', event => {

            const current = event.target;

            const isReadMoreBtn = current.className.includes('read-more-btn');

            if (!isReadMoreBtn) return;

            const currentText = event.target.parentNode.querySelector('.read-more-text');

            currentText.classList.toggle('read-more-text--show');

            current.textcontent = current.textcontent.includes('Read More') ?

                "Read Less..." : "Read More...";

        })

        // register


        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


        function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}





        // search box
        // function search-form(){
        //     Let filter = document.getElementBy('find').value.toUpperCae();

        //     Let item = document.querySelectorAll('.box');

        //     Let l = document.getElementsByTagName('h3')

        //     for(var i = 0;i<=1.length;i++){
        //         Let a =item[i].getElementsByTagName('h3')[0];
        //         Let vlaue = a.innerHTML || a.innerhtml || a.textContent;

        //         if(value.toUpperCase().indexOf(filter) > -1){
        //             item[i].style.display="";

        //         }
        //         else{
        //             item[i].style.display="none";

        //         }
        //     }
        // }
    </script>




</body>

</html>















