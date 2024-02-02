<?php include 'components/header.php' ?>   
<div class="main-home">
    <div class="div-majt-home">
        <div class="divMajtKontenti">
        <link rel="Stylesheet" href="style.css" />
            <div class="divfoto"><img id="divMajtFoto" src="images/thth.jpg"> </div>
            <div class="divtext">
                <p>Ne jemi nje faqe online ku qellimi yne eshte te ju ndihmoj per te ofruar qe te gjeni punen tuaj te preferuar. </p>
            </div>
            <div class="divMbuttoni">
                <a href="job.php">Shiko tani </a>
            </div>
        </div>
    </div>
    <div class="div-djatht-home">
        <div class="djathkontenti">
            <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
            <div class="slide">
                <img src="images/th.jpg">
            </div>
            <div class="slide">
                <img src="images/thh.jpg" >
            </div>
            <div class="slide">
                <img src="images/thhh.jpg" >
            </div>
            <button class="next" onclick="plusSlides(1)">&#10095;</button>
        </div>
        <br>
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
</div>
<?php include 'components/footer.php' ?>