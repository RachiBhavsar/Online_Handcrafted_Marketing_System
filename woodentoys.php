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

        <h1 class="heading">Wooden <span> toys</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="Wooden-Caterpillar-wooden-stacking-toy.jpg" alt="">
                <h3>Wooden caterpillar</h3>
                <p>caterpillar, larva of a  moth (Lepidoptera). Most caterpillars have cylindrical bodies
                    <span class="read-more-text">

                    consisting of multiple segments, with three pairs of true legs on the thorax and several pairs of short, fleshy prolegs on the abdomen. The head has six small eyes (stemmata) on each side that function in light detection but not in image formation. They have short segmented antennae and strong jaws. Many caterpillars within the order Lepidoptera are called worms, such as the measuring worm, silkworm, and armyworm.

Observe a caterpillar munching on leaves
Observe a caterpillar munching on leavesSee all videos for this article
Caterpillars are known for their voracious appetites. 

</span>
</p>
                    <span class="read-more-btn">Read more...</span>
            </div>

            <div class="box">
                <img src="marble charlott.jpg" alt="">
                <h3>Cycle Wooden toys</h3><p>While enterprising entrepreneur-manufacturers are trying to revive the export market, 
                    <span class="read-more-text">  the demand for Channapatna toys in India, as well as their superior quality and safe construction, has enabled them to withstand competition from other types of toys and from poor imitations, especially from China. Channapatna toys are largely made out of mechanised units use non-toxic, non-chemical colours, which they make themselves. This ensures that the toys are safe for children of all ages. Channapatna — which has earned the sobriquet ‘Land of Toys’ — is a small town about half way between Bengaluru and what was formerly the princely city of Mysuru.
</span>
                </p>
                <span class="read-more-btn">Read more...</span>

            </div>
           

            

            <div class="box">
                <img src="wooden-toys category.jpg" alt="">
                <h3>Effigies wooden toys</h3><p>Channapatna Toys, an Indian, artisan-made, eco-friendly toy brand passionate about 
                    <span class="read-more-text"> making playtime safe, sustainable, and skill-building for children everywhere — newborn babies and older infants, toddlers, preschoolers, and primary schoolgoers. These age-appropriate wooden toys to support early development, musical toys, games and educational activities are designed by expert in-house artisans and handcrafted using natural wood, polished with beeswax or almond oil for safe mouthing. Even the paints are lead-free, water-based, and completely non-toxic, to reduce the burden of plastic and batteries on our planet.
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