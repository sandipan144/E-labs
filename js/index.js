
//for bar
var toggle = true;
            function myclick(x) {
                x.classList.toggle("change");
                if(toggle){
                   openNav();
                }else{
                   closeNav();
                }
                toggle = !toggle;
            
            }

//for single scroll function
var mousewheelevt=(/Firefox/i.test(navigator.userAgent))? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x
            if (document.attachEvent) //if IE (and Opera depending on user setting)
                document.attachEvent("on"+mousewheelevt, 
                     function(e){
                        window.alert(e.detail)
                })
            else if (document.addEventListener) //WC3 browsers
                document.addEventListener(mousewheelevt, 
                    function(e){
                        if(e.wheelDelta==-120){
                            $('html, body').animate({
                                scrollTop: $("#mainpart").offset().top
                            }, 500);
                        }
                        else if(e.wheelDelta==120){
                            $('html, body').animate({
                                scrollTop: $("#maincarousel").offset().top
                            }, 500);
                    }
                        
                    
                }, true)
//for open and close of navbar
function openNav() {
                document.getElementById("mySidenav").style.width= "250px";
                document.getElementById("bar").style.marginRight= "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("bar").style.marginRight= "0";
            }

//for backgroung colouring
