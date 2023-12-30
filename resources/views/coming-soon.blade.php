<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            {{ env('APP_ENV') != 'prod' ? '[DEV]' : '' }}
            Cipherport Creative Centre :: Coming Soon
        </title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <meta name="description" content="You are at the heart of Cipherport, and we are working behind the scenes to prepare an all-round unique experience for you. Please hang tight!">
        <meta name="author" content="Cipherport Creative Centre">
        <meta property="og:image" content="https://cipherportlab.com{{ asset('images/favicon/mstile-150x150.png') }}" />
        <meta property="og:image:width" content="250" />
        <meta property="og:image:height" content="250" />
    </head>
    <body>
        <div class="body-wrapper">
            <div class="body-overlay">
                <img class="logo" src="{{ asset('images/cipherport-logo-white.png') }}" alt="Cipherport">

                <h1>The Tech solution for you<br>coming soon</h1>

                <p>We have you in mind, and we are working behind the scenes to prepare an all-round unique experience for you. Please hang tight!</p>

                <div class="countdown" id="countdown" data-date="{{ strtotime('01 Jan 2024') }}">
                    <div class="countdown-item">
                        <div class="countdown-value" id="days">00</div>
                        <div class="countdown-unit">days</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-value" id="hours">00</div>
                        <div class="countdown-unit">hours</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-value" id="minutes">00</div>
                        <div class="countdown-unit">minutes</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-value" id="seconds">00</div>
                        <div class="countdown-unit">seconds</div>
                    </div>
                </div>

                <div class="contact">
                    <div class="contact-item">
                        <div class="contact-icon-set">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-value">+234 816 601 3639</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon-set">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="contact-value">info@cipherportlab.com</div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                counter = document.getElementById('countdown');
                if ( !counter ) {
                    return;
                }

                var unixtime = counter.getAttribute("data-date");
                var date = new Date(unixtime*1000);
                var countDownDate = new Date(date).getTime();
                console.log(countDownDate)

                var dayElement = document.getElementById("days");
                var hourElement = document.getElementById("hours");
                var minuteElement = document.getElementById("minutes");
                var secondElement = document.getElementById("seconds");

                var timerInt = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = countDownDate - now;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    if (days < 10) {
                        days = "0" + days;
                    }
                    if (hours < 10) {
                        hours = "0" + hours;
                    }
                    if (minutes < 10) {
                        minutes = "0" + minutes;
                    }
                    if (seconds < 10) {
                        seconds = "0" + seconds;
                    }
                    if (distance >= 0) {
                        dayElement ? dayElement.innerHTML = days : null;
                        hourElement ? hourElement.innerHTML = hours : null;
                        minuteElement ? minuteElement.innerHTML = minutes : null;
                        secondElement ? secondElement.innerHTML = seconds : null;
                    }
                }, 1000);

            });
        </script>
    </body>
</html>
