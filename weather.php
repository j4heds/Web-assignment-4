<!DOCTYPE html>
<html lang="en">
<head>
<title>Weather Forecast</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8" />
<!--Initializing CSS file-->
<link rel="stylesheet" href="weather-style.css" />
<!--Font Awesome 5 CDN (5.15.4) Version-->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
<style>
@import
url('https://fonts.googleapis.com/css2?family=Poppins:wght@100,200,400,700&display=swap');
*
{
box-sizing: border-box;
margin: 0;
padding: 0;
}
body
{
font-family: 'Poppins', sans-serif;
background-image: url(weather.jpg);
background-repeat: no-repeat;
background-size: cover;
overflow: hidden;
height: 100vh;
font-family: 'Poppins', sans-serif ;
}
.container
{
padding: 20px;
color: white;
}

.realtime-info
{
display: flex;
justify-content: space-between;
flex-wrap: wrap;
}
.date-container
{
font-weight: 100;
}
.date-container .time
{
font-size: 70px;
}
.date-container #am-pm
{
font-size: 30px;
margin-left: 20px;
}
.date-container .date-container
{
font-size: 30px;
}
.place-box
{
text-align: end;
}
.place-box.time-zone
{
font-size: 30px;
font-weight: 100;
}
.place-box .country
{
font-size: 12px;
font-weight: 700;
}

.realtime-info .others
{
display: flex;
flex-direction: column;
background-color: rgba(24, 24, 27, 0.6);
padding: 20px;
border-radius: 10px;
margin: 10px 0;
border: 1px solid #eee;
}
.realtime-info .others .weather-measure
{
display: flex;
justify-content: space-between;
}
.future-forecast
{
background: rgba(24, 24, 27, 0.8);
color: white;
padding: 25px;
position: fixed;
bottom: 0;
display: flex;
width: 100%;
align-items: center;
justify-content: center;
}
.future-forecast .today
{
display: flex;
align-items: center;
justify-content: center;
}
.future-forecast .today .today
{
padding: 5px 15px;
background: #3c3c44;
border-radius: 50px;
text-align: center;
}

.future-forecast .today .temp
{
font-size: 40px;
padding-top: 15px;
}
.future-forecast .weather-forecast
{
display: flex;
}
.weather-forecast .weather-forecast-measure
{
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
margin: 0 10px;
border: 1px solid #eee;
border-radius: 10px;
padding: 15px;
}
.weather-forecast .weather-forecast-measure .today
{
padding: 5px 15pc;
background: #3c3c44;
border-radius: 50px;
text-align: center;
}
.weather-forecast .weather-forecast-measure .temp
{
font-weight: 100;
}
@media only screen and (max-width:730px)
{
.future-forecast
{
justify-content: start;
align-items: none;
overflow-y: scroll;

}
}
</style>
</head>
<body>
<div class="container">
<div class="realtime-info">
<div class="date-container">
<div class="time" id="time">
10:34 <span id="am-pm">PM</span>
</div>
<div class="date" id="date">
Monday, 24 May
</div>
<div class="others" id="realtime-weather-measure">
<div class="weather-measure">
<div>Humidity</div>
<div>84%</div>
</div>
<div class="weather-measure">
<div>Pressure</div>
<div>121</div>
</div>
<div class="weather-measure">
<div>Wind Speed</div>
<div>222</div>
</div>
</div>
</div>
<div class="place-box">
<div class="time-zone" id="time-zone">Dhaka</div>
<div class="country" id="country">BD</div>
</div>
</div>
</div>

<div class="future-forecast">
<div class="today" id="current-temp">
<img src=" https://openweathermap.org/img/wn/10d@2x.png" class="Weather-icon"
alt="Weather-icon" >
<div class="other">
<div class="day">Monday</div>
<div class="temp">Night - 25.6&#176</div>
<div class="temp">Day - 35.6&#176</div>
</div>
</div>
<div class="weather-forecast" id="weather-forecast">
<div class="weather-forecast-measure">
<div class="day">Tuesday</div>
<img src=" https://openweathermap.org/img/wn/10d@2x.png" class="Weather-icon"
alt="Weather-icon" >
<div class="temp">Night - 25.6&#176</div>
<div class="temp">Day - 35.6&#176</div>
</div>
<div class="weather-forecast-measure">
<div class="day">Thursday</div>
<img src=" https://openweathermap.org/img/wn/10d@2x.png" class="Weather-icon"
alt="Weather-icon" >
<div class="temp">Night - 25.6&#176</div>
<div class="temp">Day - 35.6&#176</div>
</div>
<div class="weather-forecast-measure">
<div class="day">Friday</div>
<img src=" https://openweathermap.org/img/wn/10d@2x.png" class="Weather-icon"
alt="Weather-icon" >
<div class="temp">Night - 25.6&#176</div>
<div class="temp">Day - 35.6&#176</div>
</div>
<div class="weather-forecast-measure">
<div class="day">Saturday</div>
<img src=" https://openweathermap.org/img/wn/10d@2x.png" class="Weather-icon"
alt="Weather-icon" >
<div class="temp">Night - 25.6&#176</div>
<div class="temp">Day - 35.6&#176</div>
</div>

<div class="weather-forecast-measure">
<div class="day">Sunday</div>
<img src=" https://openweathermap.org/img/wn/10d@2x.png" class="Weather-icon"
alt="Weather-icon" >
<div class="temp">Night - 25.6&#176</div>
<div class="temp">Day - 35.6&#176</div>
</div>

</div>
</div>

<script src="script.js"></script>
</body>
</html>