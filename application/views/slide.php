<link rel = "stylesheet" type = "text/css" 
	href = "<?php echo base_url(); ?>css/cssNew.css">
<div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="<?php echo base_url(); ?>img/p2.jpg">1366X768
            <p class="captionText"></p>
        </div>
        <div class="imageHolder">
            <img src="<?php echo base_url(); ?>img/p3.jpg">
            <p class="captionText"></p>
        </div>
        <div class="imageHolder">
            <img src="<?php echo base_url(); ?>img/p4.jpg">
            <p class="captionText"></p>
        </div>
        <div class="imageHolder">
            <img src="<?php echo base_url(); ?>img/p5.jpg">
            <p class="captionText"></p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div>
<!--script-->
<script src="<?php echo base_url(); ?>js/myScript.js"></script>