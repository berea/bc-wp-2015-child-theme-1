<!-- Parent theme homepage slider -->

<!-- This is the homepage slider -->

<style>
.video-main {
    width:100%;
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
}

.video-text-container{

	
}


h1.gb-c-hero-home__title
{
width:auto;  
border-bottom: 0px !important;
color: white !important; 
font-size: 3em; 
text-shadow: 0 0 10px #000;
}


@media only screen and (max-width: 400px){
h1.gb-c-hero-home__title
{
font-size: 2em;
}
}

.hero-nav-videotext
{
    list-style-type: none;
    padding: 0;
    margin: 0;
    overflow: hidden;
    padding: 0 20px;
    padding-top: 20px;
    margin: 0 auto;
    color: #FFFFFE;
    font-size: 1.2em;
    font-weight: bold;

}


.hero-nav-wrapper-videotext
{
    position:absolute;
    top: 0px;
    left: 0px;
    width:100%;
    height:100%;
    background-color:rgba(34,34,34,0.2);

}

.hero-nav-item-videotext
{
    background-color: transparent;
    position: absolute;
    bottom: 15%;
    right:5%;
}

.homepageslider-videotext
{
text-align: right;
    color: #FFFFFE;
    text-shadow: 0 0 10px #000;
    padding-bottom: 0px;
    border-bottom: none;
    font-size: 4em;
    line-height: 1.3em;
}

.homepageslider h1
{
font-size:2em;
}

</style>


<div class="homepage-slider homepage-slider-sizing-aspect-ratio ratio_1024x440">


<div class="homepage-slider-background" style="bottom: 0px !important; ">

<div class="homepage-video">

    
      
     <?php 

//echo do_shortcode('[videojs_video url="http://d3fbrw1lypbzv6.cloudfront.net/bcCover-9.mp4" webm="http://d3fbrw1lypbzv6.cloudfront.net/bcCover-webmhd.webm"]'); 
     //echo do_shortcode('[fvplayer src="rtmp://s3qtfh0q6d6acq.cloudfront.net/bcCover-9.mp4"]');  

     ?> 
     
 


<video class="video-main" autoplay muted loop playsinline poster="placeholder.jpg" id="bgvideo" width="x" height="y">
    <!--<source src="http://d3fbrw1lypbzv6.cloudfront.net/bcCover-webmhd.webm" type="video/webm">
    <source src="http://d3fbrw1lypbzv6.cloudfront.net/bcCover-9.mp4" type="video/mp4"> -->
    <source src="https://video-berea.s3.amazonaws.com/bcHomepagecCover.webm" type="video/webm">
    <source src="https://video-berea.s3.amazonaws.com/bcHomepagecCover.mp4" type="video/mp4">
</video>




</div>

</div>

    <div class="hero-nav-wrapper-videotext">
        <div class="hero-nav-videotext">
        	<div class="video-text-container">
            <div class="hero-nav-item-videotext">
            	<h1 class="gb-c-hero-home__title gb-u-type-alpha">A College Like No Other</h1>
                    <div class="gb-c-hero-home__intro gb-u-type-p--xlarge">
						<p aria-hidden="true" style="letter-spacing: -0.001em;font-size:1.4em; margin-top: -20px; text-shadow: 0 0 10px #000;color: white !important; text-align:right !important;">#ThisIsBerea</p>
					</div>
                    
            </div>
        </div>
        </div>
    </div>



</div><!-- .homepage-slider -->

