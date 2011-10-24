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

Validator = function(selectorsJson){
    
    for(selector in selectorsJson)
    {
        var validationFunction =selectorsJson[selector];
        if(validationFunction instanceof Function)
        {
            
            var result = validationFunction(selector);
            if(!result.valid)
                return false;
        }
          
    }
    return true;
   
}

noEmpty = function(selector)
{
    
    var element = $(selector);
    var response = {
        valid: false,
        message:'valor vacío.'
    };
    
    if(element.val())
    {
        response = {
            valid:true
        };
        return response;
    }
    else
    {
        
        element.addClass('javascript-validation-wrong');
        $('<p class="error">Valor vacío.</p>').insertAfter(element);
        return response;
    }
    
    
        
}


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


newsletterSubscribeteClick = function(event){
    event.preventDefault();
    var value = $('#newsletter-input').val();
    if(value && value != 'tu email aquí')
    {
        var data = {
            "email" : $('#newsletter-input').val()
        }
        $.post('/includes/ajax/subscribete.php', data, jsonMessageBox,'json');
    
    }
    else
        alert('Entre un valor');
    
}

jsonMessageBox= function(data){
   
    var width = data.width? data.width : 400;
    var height = data.height? data.height : 139;
    var xPosition = ($(window).width()-width)/2;
    var yPosition = ($(window).height()-height)/2;
    $('#main').prepend('<div id="message-box"><h2>'+data.header+'</h2><p>'+data.body+'</p><a href="#javascript" id="message-box-close">Cerrar</a></div>').children('#message-box').css({
        width: width, 
        height: height, 
        top: yPosition, 
        left: xPosition
    }).children('#message-box-close').click(function(){
        
        $(this).parent().hide();
    });
    
    
}

setPortafolioProyectoMouseOverEvent = function()
{
   
    $('.portafolio-proyecto').hover(function() {
        var element = $(this);
        $('.portafolio-descripcion').stop(false,true);
        element.find('.portafolio-descripcion').slideDown('slow');
        
    }, function() {
        $(this).find('.portafolio-descripcion').slideUp('slow');
    });
    
  
}

enviarMensajeClick = function()
{
    var selectorAndValidationFunction = {
        '#contacto-nombre' : noEmpty, 
        '#contacto-email' : noEmpty,
        '#contacto-empresa' : noEmpty,
        '#contacto-mensaje' : noEmpty
    };
    if(Validator(selectorAndValidationFunction))
    {
        var nombre = $('#contacto-nombre').val();
        var email = $('#contacto-nombre').val();
        var empresa = $('#contacto-nombre').val();
        var mensaje = $('#contacto-nombre').val();
    }
    $.post('/includes/ajax/contacto-mensaje.php',{
        nombre: nombre, 
        email: email, 
        empresa: empresa, 
        mensaje: mensaje
    },jsonMessageBox,'json');
   
};
getActiveService = function(){
    
    var servicio = $('a.servicio-activo').attr('value');
   
    $.post('/includes/ajax/serviciosService.php',{servicio: servicio},mostrarServicioSeleccionado,'json');
}

mostrarServicioSeleccionado = function (data){
 $('#servicios-descripcion').html(data.descripcion);
 var puntosClaves = '';
 for(i=0; i<data.puntosClaves.length; i++)
  {
      puntosClaves += '<li>' + data.puntosClaves[i] + '</li>';
  }
     
 $('#servicios-puntos-claves').html(puntosClaves);
 $('#servicios-puntos-claves-intro').html(data.puntosClavesIntro);

 
}

setServiciosClickEvents =function ()
{
    $('a.servicios-servicio').click(function(){
        $('.servicio-activo').removeClass('servicio-activo');
        var servicioClicked = $(this);
        var servicioAndTitle= servicioClicked.add(servicioClicked.children('span.servicios-titulo'));
      
        servicioAndTitle.addClass('servicio-activo');
        getActiveService();
    });
    
    
    
    
}


$(document).ready(function(){
    

    var ultimosProyectos = $('.cliente-ultimos-proyectos');

    
    $('#ultimos-proyectos-slides').cycle({ 
        fx:     'fade', 
        speed:  'fast', 
        timeout: 3000, 
        pager:  '#ultimos-proyectos-nav',
        cleartype: true,
        cleartypeNoBg: true,
        pagerEvent:    'click',
        activePagerClass: 'ultimos-proyectos-active-selector',
        pagerAnchorBuilder: function (idx, slide){
            return '<span class="ultimos-proyectos-selector"></span>';
           
        }
    });
        
    /*Servicios*/
        getActiveService();
        setServiciosClickEvents();
    /*Servicios END*/
    $('#newsletter-subscribe-button').click(newsletterSubscribeteClick);    
    $('#contacto-enviar-button').click(enviarMensajeClick);
    
    setPortafolioProyectoMouseOverEvent();


        
    setInputsDefaultText();
    if($('#ubication-map').length > 0)
    {
        drawGoogleMap();
    }
   

       
       
    
    
});