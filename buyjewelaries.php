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

        <h1 class="heading">  <span>Jewellaries</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="blue neclace.jpg" alt="">
                <h3>Neclace set</h3>
                <p>‘The Necklace’ is a satire that gives a strong message on human values. 
                    <span class="read-more-text">The very first thing that this lesson. One should live within one’s means or else he invites unnecessary problems, anxieties, and confusion in life. The most important message we should be what we are.  There is a facade among most of the individuals that they just want to be like someone who they are not so that they can be liked by people. But all individuals need to learn the fact that you can't change what your policy doesn't even need to be like someone. You are best as you are and you are unique in your own way. Every individual has his/ her own style and if you change that also, then what will make you unique from others will not be there anymore. So you just need to accept yourself and move forward to improve yourself by inculcating good qualities in yourself. </span>
                </p>
                <span class="read-more-btn">Read more...</span>
            </div>

            <div class="box">
                <img src="bracelet.jpg" alt="">
                <h3>Bracelet</h3>
                <p>A bracelet is an article of jewellery that is worn around the wrist.
                    <span class="read-more-text">Bracelets may serve different uses, such as being worn as an ornament. When worn as ornamen. Medical and identity information are marked on some bracelets, such as allergy bracelets, hospital patient-identification tags, and bracelet tags for newborn babies. Bracelets may be worn to signify a certain phenomenon, such as breast cancer awareness, or for religious/cultural purposes.

If a bracelet is a single, inflexible loop, it is often called a bangle. A boot bracelet is used to decorate boots. Bracelets can be manufactured from metal, leather, cloth, plastic, bead or other materials, and jewelry bracelets sometimes contain jewels, rocks, wood, shells, crystals, metal, or plastic hoops, pearls and many more materials.</span>
                </p>
                <span class="read-more-btn">Read more...</span>

            </div>
           

            

            <div class="box">
                <img src="handrings.jpg" alt="">
                <h3>Handrings</h3><p> A ring is a round band, usually made of metal, worn as ornamental jewelry. 
                    <span class="read-more-text">The term "ring" by itself always denotes jewellery worn on the finger; when worn as an ornament elsewhere, the body part is  arm rings, and toe rings. Rings always fit snugly around or in the part of the body they ornament, so bands worn loosely, like a bracelet, are not rings. Rings may be made of almost any hard material: wood, bone, stone, metal, glass, gemstone or plastic. They may be set with gemstones (diamond, ruby, sapphire or emerald) or with other types of stone or glass.

Although some people wear rings as mere ornaments or as conspicuous displays of wealth, rings have symbolic functions respecting marriage, exceptional achievement, high status or authority, membership in an organization, and the like.</span></p>
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