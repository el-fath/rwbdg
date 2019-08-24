
$(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
    });



    function formatAmountNoDecimals( number ) {
        var rgx = /(\d+)(\d{3})/;
        while( rgx.test( number ) ) {
            number = number.replace( rgx, '$1' + '.' + '$2' );
        }
        return number;
    }
    
    function formatAmount( num ) {
        var str = num.toString().replace("$", ""), parts = false, output = [], i = 1, formatted = null;
        if(str.indexOf(".") > 0) {
            parts = str.split(".");
            str = parts[0];
        }
        str = str.split("").reverse();
        for(var j = 0, len = str.length; j < len; j++) {
            if(str[j] != ",") {
                output.push(str[j]);
                if(i%3 == 0 && j < (len - 1)) {
                    output.push(",");
                }
                i++;
            }
        }
        formatted = output.reverse().join("");
        return( formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    }
    
    $( '.CurrencyFormat' ).keyup( function() {
        $( this ).val( formatAmount( $( this ).val() ) );
    });
})

function blockMessage(element,message,color){
    jQuery(element).block({
            message: '<span class="text-semibold"><i class="icon-spinner4 spinner position-left"></i>&nbsp; '+message+'</span>',
            overlayCSS: {
                backgroundColor: color,
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: '10px 15px',
                color: '#fff',
                width: 'auto',
                '-webkit-border-radius': 2,
                '-moz-border-radius': 2,
                backgroundColor: '#333'
            }
        });
}

function redirect(url){
    window.location.href = url;
}


function showNotif(type,title,msg){
    var contentMsg = "";
    var headerTitle = "Notification";
    var typeNotif = "bg-slate-600";
    if(title){
        headerTitle = title;
    }

    if(msg){
        contentMsg = msg;
    }

    if(type == "error"){
        typeNotif = "alert-danger";
    }else if(type == "success"){
        typeNotif = "alert-success";
    }

    $.jGrowl(contentMsg, {
        header: headerTitle,
        theme: 'alert-bordered alert-styled-right '+typeNotif
    });
}