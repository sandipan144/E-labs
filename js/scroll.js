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