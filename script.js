const timeEl = document.getElementById('time');
const dateEl = document.getElementById('date');
const realtimeWeatherMeasureEl = document.getElementById ('realtime-weather-measure');
const timezone = document.getElementById('time-zone');
const countryEl = document.getElementById('country');
const weatherForecastEl = document.getElementById('weather-forecast');
const realtimeTempEl = document.getElementById('realtime-temp');

const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
const API_KEY = 'f94b58b6b8b7ba195ae3b2593cf6a710';
setInterval (() => {
const time = new Date();
const month = time.getMonth();

const date = time.getDate();
const day = time.getDay();
const hour = time.getHours();
const hoursIn12HrFormat = hour >= 13 ? hour %12: hour
const minutes = time.getMinutes();
const ampm = hour >=12 ? 'PM' : 'AM'
timeEl.innerHTML = hoursIn12HrFormat + ':' + minutes+ ' ' + `<span id="am-pm"> ${ampm}
</span>`
dateEl.innerHTML = days[day] + ', ' + date + ' ' + months[month]
},1000);
getWeatherData ()
function getWeatherData ()
{
navigator.geolocation.getCurrentPosition((success) =>{
let {latitude, longitude} = success.coords;
fetch (
`api.openweathermap.org/data/2.5/forecast?lat=${latitude}&lon=${longitude}&excludehourly,min
utely&appid=${API_KEY}`).then (res => res.json()).then(data => {
console.log(data)
showWeatherData(data)
})
})
}