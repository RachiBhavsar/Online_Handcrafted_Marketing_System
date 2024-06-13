<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

        :root {
            --orange: #ff7800;
            --black: #130f40;
            --light-color: #666;
            --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            --border: .2rem solid rgba(0, 0, 0, .1);
            --outline: .1rem solid rgba(0, 0, 0, .1);
            --outline-hover: .2rem solid var(--black);


        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: all .2s linear;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 7rem;
        }

        body {
            background: #eee;
        }

        .section h2{
            text-align: center;
            padding: 2rem 0;
            padding-bottom: 3rem;
            font-size: 6rem;
            color: var(--black);
           
        }

        .section h2::after{
    content:"";
    height: 5px;
    width: 350px;
    background-color: var(--orange); 
    border-radius: 25px;
    display: block;
    margin:auto;
}

        .section h2:hover{
        color:var(--orange); 
        transition:.6s;

        
       
        }



        .heading {

            text-align: center;
            padding: 2rem 0;
            padding-bottom: 3rem;
            font-size: 3.5rem;
            color: var(--black);
        }


        .heading span{
    background: var(--orange);
    color:#fff;
    display: inline-block;
    padding:.5rem .7rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
}

        .section {
            width: 100%;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;

        }

        .section .container {
            width: 80%;
            display: block;
            margin: 0px auto;
            padding: 50px 0px;
        }

        .container .title {
            width: 100%;
            text-align: center;
            margin-bottom: 50px;
            margin-top: 80px;

        }

        /* .container .title  h1{
    text-transform: uppercase;
    font-size: 35px;
    color:#88941e
}

.container .title  h1::after{
    content:"";
    height: 5px;
    width: 100px;
    background-color:#f9004d;
    border-radius: 25px;
    display: block;
    margin:auto;
} */

        .content {
            float: left;
            width: 55%;
        }

        .content .article h5 {
            color: black;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }
.content .article h5::after{
    content:"";
    height: 5px;
    width: 120px;
    background-color: var(--orange); 
    border-radius: 25px;
    display: block;
    margin:auto;
}

        .content .article p {
            margin-top: 20px;
            font-size: 18px;
            line-height: 1.5;
            color: rgb(45, 41, 41);
            text-align: center;
        }

        /* .content .article button {
            background: #f9004d;
            color: black;
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 13px 30px;
            border-radius: 30px;
            transition: .4s;
            margin-top: 20px;
        }

        .content .article button:hover {
            background: transparent;
            border: 2px solid #f9004d;
            cursor: pointer;
        } */


        @media screen and (max-width: 768px){
    .section .container{
        width: 80%;
        display: block;
        margin: auto;
    }
    .content{
        float: none;
        width:100%;
        display: block;
        margin: auto;
    }

        .image-section{
            float: none;
        width:100%;
        display: block;
        margin: auto;

        }
    


}
        
    </style>
</head>

<body>
    <div class="section">
        <h2>Hand Crafted</h2>
        <div class="container">
            <div class="title">
                <h1 class="heading">About <span>Us<span></h1>
            </div>
            <div class="content">
                <div class="article">
                    <h5>
                        Jewellary
                        </h5>
                    <p>ornamental pieces (such as rings, necklaces, earrings, and bracelets) that are made of materials which may or may not be precious (such as gold, silver, glass, and plastic), are often set with genuine or imitation gems, and are worn for personal adornment. a collection of valuable jewelry. a jewelry store.Everyone has Jewellery that is old and the thought of selling it is obvious. Some lucky ones think of remodeling and take the giant step of coming to us and get remodeled Jewellery. At times it doesn't even have to be a cherished Jewellery. It can be some diamond earrings you purchased a few years back. Now the design looks boring. Be it any Jewellery, it is not meant to be kept in a box. It should be worn so it can be admired.


                    </p>
                    <!-- <button type="button">Read More</button>
                         -->






                </div>
            </div>
            <div class="image-section">
                <img src="earings.webp" alt="" width="500" height="400">
            </div>


        </div>
    </div>

   






    <div class="section">
        <div class="container">
            <div class="title">
                <!-- <h1>About Us</h1> -->
            </div>


            <div class="content">
                <div class="article">
                    <h5>Wooden toys</h5>
                    <p>Wood carving in Orissa or Odisha has been around for ages. Idols of lord Jagannath and wooden toys is a very ancient and traditional art form of Odisha. In most Jagannath temples the idols that are used are the once which are made out of wood.A lot of colorful wooden handmade toys are made and sold on a daily basis. The colors that were used in the past were all made out of vegetables and fruits but watercolors are being used instead as they are more easily accessible and not too expensive. These toys are very colorfully and brightly painted which makes kids get attracted to it. Many different types of toys are created such as horses and elephants in many different poses. Some are sold with wheels as an attachment at the bottom with a rope attached so it can be pulled. 

                       </p>
                    <!-- <button type="button">Read More</button>
                         -->






                </div>
            </div>
            <div class="image-section">
                <img src="wooden-toys category.jpg" alt=""
                    width="500" height="400">
            </div>


        </div>
    </div>

   



    <div class="section">
        <div class="container">
            <div class="title">
                <!-- <h1>About Us</h1> -->
            </div>
            <div class="content">
                <div class="article">
                    <h5>Bags and purses</h5>
                    <p>
                        We will never get tired of repeating it: each handmade bag is a unique item and it will never be the same as any other. The reason behind this is that they are produced at the hands of an artisan and not a machine. The latter mass-produces each object in very little time, the former dedicates many hours, passion and, above all, manual craftsmanship to each item.

                     
                        
                        There is another very important detail: a person who has a real passion for creating objects will never use poor-quality materials. Indeed, he or she will pay special attention precisely to their choice to ensure the product has a long life.
                        
                        Behind each handmade bag, apart from the artisan, there are designers that apply a unique and distinct product, different from all the rest.
                        
                        
                        
                        
                    </p>



                </div>
            </div>
            <div class="image-section">
                <img src = "categories bags.jpg" alt="" width="500" height="400">
            </div>


        </div>
    </div>

</body>

</html>