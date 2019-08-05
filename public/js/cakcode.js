


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