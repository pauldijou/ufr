function prettyDate(time){
	var date = new Date((time || "").replace(/-/g,"/").replace(/[TZ]/g," ")),
		diff = (((new Date()).getTime() - date.getTime()) / 1000),
		day_diff = Math.floor(diff / 86400);
			
	if ( isNaN(day_diff) || day_diff < 0)
		return;
			
	return day_diff == 0 && (
			diff < 60 && "A l'instant." ||
			diff < 120 && "Il y a une minute." ||
			diff < 3600 && "Il y a " + Math.floor( diff / 60 ) + " minutes." ||
			diff < 7200 && "Il y a une heure." ||
			diff < 86400 && "Il y a " + Math.floor( diff / 3600 ) + " heures.")
			||
			day_diff == 1 && "Hier" ||
			day_diff == 2 && "Avant-hier" ||
			day_diff < 7 && "Il y a " + day_diff + " jours." ||
			day_diff >= 7 && "Le " + (date.getDate() < 10 ? "0" : "") + date.getDate() + "/" + (date.getMonth() < 10 ? "0" : "") + date.getMonth() + "/" + date.getFullYear() + " à " + (date.getHours() < 10 ? "0" : "") + date.getHours() + "h" + (date.getMinutes() < 10 ? "0" : "") + date.getMinutes() +".";
}

if ( typeof jQuery != "undefined" )
	jQuery.fn.prettyDate = function(){
		return this.each(function(){
			var date = prettyDate(this.title);
			if ( date )
				jQuery(this).text( date );
		});
	};