<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

:root{
    --orange:#ff7800;
    --black:#130f40;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
    --border:.2rem solid rgba(0,0,0,.1);
    --outline:.1rem solid rgba(0,0,0,.1);
    --outline-hover:.2rem solid var(--black);
  

}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body{
    background:#eee;
}

section{
    padding:2rem 9%;
}

.heading{
    text-align: center;
    padding:2rem 0;
    padding-bottom: 3rem;
    font-size: 3.5rem;
    color:var(--black);
}

.heading span{
    background: var(--orange);
    color:#fff;
    display: inline-block;
    padding:.5rem 3rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border:.2rem solid var(--black);
    color:var(--black);
    cursor: pointer;
    background: none;
}

.btn:hover{
    background: var(--orange);
    color:#fff;
    transition: .6s;
    font-size: 1.9rem;
}
.features .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.features .box-container .box{
    padding:3rem 2rem;
    background: #fff;
    outline: var(--outline);
    outline-offset: -1rem;
    text-align: center;
    box-shadow: var(--box-shadow);
}

.features .box-container .box:hover{
    outline: var(--outline-hover);
    outline-offset: 0rem;
}

.features .box-container .box img{
    margin:1rem 0;
    height: 15rem;
    
}

.features .box-container .box h3{
    font-size: 2.5rem;
    line-height: 1.8;
    color:var(--black);
}

.features .box-container .box p{
    font-size: 1.5rem;
    line-height: 1.8;
    color:var(--light-color);
    padding:1rem 0;
}
.features .box-container .box .read-more-text{
    display: none;
}

.features .box-container .box .read-more-btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border:.2rem solid var(--black);
    color:var(--black);
    cursor: pointer;
    background: none;
}

.features .box-container .box .read-more-btn:hover{
    background: var(--orange);
    color:#fff;
     transition: .6s;
    font-size: 1.9rem; 
}

.features .box-container .box .read-more-text--show{
    display: inline;
}

</style>
<body>
<section class="features" id="features">

        <h1 class="heading"> Wall <span> decor</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="fish.jpg" alt="">
                <h3>Coloured fish handmade and decorative wall hanging</h3>
                <p>As a female it is near impossible to get by without some sort of bag holding 
                    <span class="read-more-text">my everyday essentials whether  a clutch, or in my case a purse. They come in many different sizes and many different brands which is why my purse stands . understood that very well from a young age.  My purse is a tote which means it can carry everything I will ever need and then some. The brand is Michael Kors which is sought after by women everywhere because of the high price and quality material. These bags are supposed to be meant to last, unlike many other brands that will make cheap bags but because they can shell them out at a cheap price the consumer does not mind. My purse is more than just a bag to carry all of my things in whether it be my make up, some snacks throughout the long day at school or even a blanket for the colder days at work. 
</span>
</p>
                    <span class="read-more-btn">Read more...</span>
            </div>

            <div class="box">
                <img src="il_fullxfull.2186331617_lz90.avif" alt="">
                <h3>Embroidery wall</h3>
                <p>Embroidery is the craft of decorating fabric or other materials using a needle to apply thread or yarn. 
                    <span class="read-more-text"> 


                    Embroidery may also incorporate other materials such as pearls, beads, quills, and sequins. In modern days, embroidery is usually seen on caps, hats, coats, overlays, blankets, dress shirts, denim, dresses, stockings, and golf shirts. Embroidery is available in a wide variety of thread or yarn colour.

Some of the basic techniques or stitches of the earliest embroidery are chain stitch, buttonhole or blanket stitch, running stitch, satin stitch, and cross stitch.[1] Those stitches remain the fundamental techniques of hand embroidery today.</span>
                </p>
                <span class="read-more-btn">Read more...</span>

            </div>
           

            

            <div class="box">
                <img src="0b04f81fde52e39d2edb7f879ac8d61a.jpg" alt="">
                <h3>Kite shape cotton home decor</h3><p> A kite is a tethered heavier-than-air or lighter-than-air craft with wing surfaces that 
                    <span class="read-more-text"> react against the air to create lift and drag forces.[2] A kite consists of wings, tethers and anchors. Kites often have a bridle and tail to guide the face of the kite so the wind can lift it.[3] Some kite designs don’t need a bridle; box kites can have a single attachment point. A kite may have fixed or moving anchors that can balance the kite. The name derives from its resemblance to a hovering bird.The lift that sustains the kite in flight is generated when air moves around the kite's surface, producing low pressure above and high pressure below the wings.[5] The interaction with the wind also generates horizontal drag along the direction of the wind.
</span></p>
                <span class="read-more-btn">Read more...</span>
            </div>

        </div>

    </section>
    <script>
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

    </script>

</body>
</html>