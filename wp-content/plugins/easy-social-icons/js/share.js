jQuery(document).ready(function($) {
	$("#myLink").click(function(){  
        copyCurrentUrlToClipboard();       
    });
    // $('#myPrint').click(function () {
    //     window.print();
    //     return false;
    // });
});

function copyCurrentUrlToClipboard() {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(() => {
        console.log('URL copied to clipboard');
    }).catch(err => {
        console.error('Failed to copy: ', err);
    });
}      
