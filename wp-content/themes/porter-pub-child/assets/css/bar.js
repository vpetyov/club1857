(function() {
   // your page initialization code here
   // the DOM will be available here
	var prod = document.querySelectorAll('.product a');
	prod.forEach(e=>{e.href='#';})
})();

jQuery(document).ready(function(){
    var body = jQuery('body');
    var cmsmasters_menu_price_wrap = body.find('.cmsmasters_menu_price_wrap');
    var cmsmasters_menu_currency = cmsmasters_menu_price_wrap.find('.cmsmasters_menu_price_wrap');
    var current_lang = document.documentElement.lang;
    var tribe_events_calendar = body.find('.tribe-events-calendar');
    var tribe_events_calendar_header = tribe_events_calendar.find('thead');
    var tribe_events_calendar_day = tribe_events_calendar_header.find('tr > th');

    var social_icons = body.find('.social_icon');

    // var cmsmasters_social_icon_viber = body.find('.cmsmasters-icon-chat-empty');

    if(current_lang == "bg-BG"){
        cmsmasters_menu_price_wrap.prepend('<span class="cmsmasters_menu_currency_lv"> лв.</span>');
        social_icons.attr("href", "https://api.whatsapp.com/send?phone=+359876001857&text=За резервация, моля попълнете:%0aДата:%0aЧас:%0aБрой хора:%0aИме:%0aTелефон:");
    }else{
        cmsmasters_menu_price_wrap.prepend('<span class="cmsmasters_menu_currency_lv"> BGN</span>');
        social_icons.attr("href", "https://api.whatsapp.com/send?phone=+359876001857&text=To make a reservation, please complete:%0aDate:%0aTime:%0aPeople:%0aName:%0aTelephone:");
    }


    var today= new Date();
    var day = today.getDay();
    // var today_tribe_event = tribe_events_calendar_header[0].cells[day-1];
    tribe_events_calendar_day.eq(day-1).addClass('calendar-today-week-day');

});