/**
 * Created by wouter on 26-3-15.
 */
$(document).ready(function(){
    $('#login-trigger').click(function(){
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');


    })
})