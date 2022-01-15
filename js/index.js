$(document).ready(function(){
    $('#nav_logo').click(function(){
        window.scroll({
            top:0,
            behavior: 'smooth'
        })
    })
    $('#nav_pricing_').click(function(){
        window.scroll({
            top:1000,
            behavior: 'smooth'
        })
    }) 
    $('.card-deck').hide()          
})
$(document).scroll(function(){
  if(window.scrollY <= 317)
    $('.card-deck').slideUp(500)
  else  $('.card-deck').slideDown(500)
})