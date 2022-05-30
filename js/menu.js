$(document).ready(function(){  // proverka na zagruzku documenta
    let link = $('.menu-link');  // sozdal peemenuy pomestil element
    let link_active = $('.menu-link_active');
    let nav = $('.nav');
    let nav_link = $('.nav-link');
    link.click(function(){
        link.toggleClass('menu-link_active');
        nav.toggleClass('nav_active');
    });
    nav_link.click(function(){
        link.toggleClass('menu-link_active');
        nav.toggleClass('nav_active');
    });
});