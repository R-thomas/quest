$(document).ready(function(){
	if(window.screen.width>=982){
    $('.img1').addClass("hidden0").viewportChecker({
    classToAdd: 'visible animated2 fadeInUp',
    offset: 100
    });
        
    $('.img2').addClass("hidden0").viewportChecker({
    classToAdd: 'visible animated3 fadeInUp',
    offset: 100
    });
    
    $('.img3').addClass("hidden0").viewportChecker({
    classToAdd: 'visible animated4 fadeInUp',
    offset: 100
    });

    
    $('.img_pres').addClass("hidden0").viewportChecker({
    classToAdd: 'visible animated1 fadeInLeft',
    offset: 100
    });
    
    $('.feedback').addClass("hidden0").viewportChecker({
    classToAdd: 'visible animated1 fadeInDown',
    offset: 100
    });
    
    
}
    if(window.screen.width<768){
    $('.carousel').carousel({
    interval: false
    })
    
    }
    
    
});