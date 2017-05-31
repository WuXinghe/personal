// Check namespace existance
var edu = edu || {};
    edu.uci = edu.uci || {};
    edu.uci.communications = edu.uci.communications || {};
    edu.uci.communications.weather = edu.uci.communications.weather || {};

/**
 * Callback for weather data load.
 *
 * @param weather Weather Data object of the form
 * {time : string(time of weather data),
 *   temp_f: int(fahrenheit temperature),
 *   temp_c: int(celsius temperature),
 *   cond: string(Current weather condition),
 *   condImg: string(NOAA weather condition image code)
 * }
 */
edu.uci.communications.weather.callback = edu.uci.communications.weather.callback || function(weatherData) {
	//console.log(weatherData);
	var markup = 'Orange County <span class="wi '+weatherData.cond_icon+'"></span> '+weatherData.temp_f+'&#176;';
	if (document.getElementById('weather-widget')) {
		document.getElementById('weather-widget').innerHTML = markup;
	}
};

//edu.uci.communications.weather.data = {"cache_time":"Sun, 28 Feb 16 12:15:02 -0800","noaa_time":"Sun, 28 Feb 16 11:53:00 -0800","temp_f":67,"temp_c":19,"cond":"Mostly Cloudy with Haze","cond_img":"bkn.png","cond_icon":"wi-day-cloudy"};
edu.uci.communications.weather.data = {"cache_time":"Wed, 31 May 17 03:15:01 -0700","noaa_time":"Wed, 31 May 17 02:53:00 -0700","temp_f":61,"temp_c":16,"cond":"Overcast","cond_img":"novc.png","cond_icon":"wi-cloudy"};
edu.uci.communications.weather.callback(edu.uci.communications.weather.data);