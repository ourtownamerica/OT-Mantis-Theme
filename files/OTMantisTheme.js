
const OT_THEME_SCRIPT_URL = document.scripts[document.scripts.length-1].src;

$(function(){
	var logourl = (new URL(OT_THEME_SCRIPT_URL)).searchParams.get("logourl");
	$(".navbar-brand").html(`<img src='${logourl}' style='height: 26px;'>`);
});