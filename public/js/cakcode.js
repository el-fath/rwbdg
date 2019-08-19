
$(document).ready(function(){
    function formatAmountNoDecimals( number ) {
        var rgx = /(\d+)(\d{3})/;
        while( rgx.test( number ) ) {
            number = number.replace( rgx, '$1' + '.' + '$2' );
        }
        return number;
    }
    
    function formatAmount( number ) {

        // remove all the characters except the numeric values
        number = number.replace( /[^0-9]/g, '' );
    
        // set the default value
        if( number.length == 0 ) number = "";
        else if( number.length == 1 ) number = "" + number;
        else if( number.length == 2 ) number = "" + number;
        else number = number.substring( 0, number.length - 2 ) + '.' + number.substring( number.length - 2, number.length );
    
        // set the precision
        // number = new Number( number );
        // number = number.toFixed( 2 );    // only works with the "."
    
        // change the splitter to ","
        // number = number.replace( /\./g, ',' );
    
        // format the amount
        x = number.split( ',' );
        x1 = x[0];
        x2 = x.length > 1 ? ',' + x[1] : '';
    
        return formatAmountNoDecimals( x1 ) + x2;
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