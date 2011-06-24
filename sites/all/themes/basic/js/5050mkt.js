/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var roundCornersSelectors = new Array(".round-corners");
var showingSlide = 1;
var slideshowInterval = "";
var inputsSelectorDefaultText= {
    "#newsletter-input":"tu email aquí"
};

var slidersPagerLock = false;



setRoundCorners = function(){
    
    for(i=0; i<roundCornersSelectors.length; i++)
    {
        var selector = roundCornersSelectors[i];
        $(selector).corner("round 3px");
    }
};


changeSlideshowPhoto = function(callback){
    if(!slidersPagerLock)
    {
        slidersPagerLock = true;
        var slideshowPhotos = $(".screenshots-ultimos-proyectos");
        var previousSlideNumber = showingSlide;
        var selectorForChangingSlideElements = new Array("#screenshots-ultimos-proyectos","#categorias-ultimos-proyectos","#cliente-ultimos-proyectos","#logo-ultimos-proyectos","#ultimos-proyectos-descripcion");
        var selectorStringForElementsToHide = selectorForChangingSlideElements.join(previousSlideNumber + ",");
        selectorStringForElementsToHide += '' + previousSlideNumber;
    
        $('.ultimos-proyectos-selector').removeClass('slide-show-selector-on').addClass('slide-show-selector-off');  
   
        showingSlide = showingSlide < slideshowPhotos.length? showingSlide+1 : 1;     
    
        var selectorStringForElementsToShow = selectorForChangingSlideElements.join(showingSlide + ",");
        selectorStringForElementsToShow += '' + showingSlide;
 
        $('#ultimos-proyectos-selector' + showingSlide).addClass('slide-show-selector-on');

        $('#ultimos-proyectos-selector' + showingSlide).removeClass('slide-show-selector-off');
        var realCallback;
        if(callback instanceof Function)
            realCallback = callback;
        else
            realCallback = function(){
                slidersPagerLock = false;
            };
    
        if($(selectorStringForElementsToHide).is(":visible"))
            $(selectorStringForElementsToHide).fadeOut(900,function(){
                $(selectorStringForElementsToShow).fadeIn(900,realCallback);
      
            });
        
        else
            $(selectorStringForElementsToShow).fadeIn(900,realCallback);   
    
        return true;
    }
    
    return false;
   
   
};



setPagerClickEvents = function(){

    $('.ultimos-proyectos-selector').click(function(){
        clearInterval(slideshowInterval);
        
        
//        var item = $(this);
//        var id = item.attr('id');
//        var idLength = 'ultimos-proyectos-selector'.length;
//         
//        showingSlide = id.substring(idLength,id.length);
//        showingSlide = showingSlide-1 <= 0 ? $('.ultimos-proyectos-selector').length: showingSlide-1;
//        showingSlide = parseInt(showingSlide);
//        slideshowInterval = setInterval(changeSlideshowPhoto, 4000, function(){showingSlide++;});
//        
     
       

    });

};



setInputsDefaultText = function (){
    
    
    for(selector in inputsSelectorDefaultText) 
    {
       
        var element = $(selector);
        element.val(inputsSelectorDefaultText[selector]);
        
        
        element.click(function(event){
            if(element.val()== inputsSelectorDefaultText[selector])
                $(element).val("");
            
        });
                
                
        element.blur(function(event){
            if($(event.target).val() == "")
            {
                $(event.target).val(inputsSelectorDefaultText[selector]);
            }
        });
    }

 

    
}

drawGoogleMap = function(){
    var latlng = new google.maps.LatLng(19.459418, -70.676318);
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("ubication-map"), myOptions);
    
    var marker = new google.maps.Marker({
        position: latlng, 
        map: map, 
        title:"5050mkt"
    });   
    
    
    
    
};

$(document).ready(function(){
    
    
    Cufon.replace('.museo-font');
    Cufon.now();
    var ultimosProyectos = $('.cliente-ultimos-proyectos');
    
    
    $('#prueba').cycle(
        { 
        fx:     'fade', 
        speed:  'fast', 
        timeout: 3000, 
        pager:  '#prueba-nav',
        cleartype: true,
        cleartypeNoBg: true,
        after: function(){$('.comilla-inicio, .comilla-final').removeAttr("filter");},

        pagerAnchorBuilder: function (idx, slide){
            return '<span class="ultimos-proyectos-selector"></span>';
           
        }
        
        
        }

    );
    

        
    setInputsDefaultText();
    if($('#ubication-map').length > 0)
    {
        drawGoogleMap();
    }
   

       
       
    
    
});