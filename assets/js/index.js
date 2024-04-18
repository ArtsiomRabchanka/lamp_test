$(function() {
    var cookieBanner = $(".cookie-popup");
    if(window.localStorage) {
        var cookiesAccepted = localStorage.getItem( 'cookiesAccepted');
        if(!cookiesAccepted){
            $(".cookie-popup").removeClass("d-none");
            $(".cookie-close").on("click", function(){
                cookieBanner.addClass("d-none");
            });
            $(".cookie-accept").on("click", function(){
                cookieBanner.addClass("d-none");
                var expires = new Date();
                expires = expires.setHours(expires.getHours() + 0);
                localStorage.setItem('cookiesAccepted', expires);
            });
        } else {

        }
    }
    
});