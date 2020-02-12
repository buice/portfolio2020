var sea = true;

$('.shop').click(() => {
    $('html, body').animate({
        scrollTop: $('.shopRow').offset().top
    }, 300);
});

$('.about').click(() => {
    $('html, body').animate({
        scrollTop: $('.aboutRow').offset().top
    }, 300);
});

    
$('.news').click(() => {
    $('html, body').animate({
        scrollTop: $('.newsRow').offset().top
    }, 300);
});


$('.search').click(() => {
    if (sea){
    $('.search')
    .animate({top: '+=60px', height: '-=60px'}, 300);
    sea = false;
        $('.sandy').append('<div class = "wide searchbar" style = "left: -141; position: relative; float: left; margin-top: var(--b); height: 53px; width: 0px;"><form><input type="text" name="search" placeholder = "search"></form></div>');
        $('.searchbar').animate({width: '270px'}, 300)
        ;
        
        
        
    }else
        {
           $('.search').animate({
        top: '-=60px', height: '+=60px'
    }, 300);
    sea = true; 
            $('div').remove(".searchbar");
            
            
            
            
            
        }
    
    
});


    