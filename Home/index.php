<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body,
html {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f06d06; /* Change background to reddish */
    background-image: linear-gradient(to right top, #f06d06, #f8a84a, #fdd026, #f99301, #f06d06); /* Orange, yellow, and red gradient */
    font-family: 'Comfortaa', cursive;
}

.squares li {
    position: absolute;
    display: block;
    list-style: none;
    background: rgba(255, 255, 255, 0.1);
    animation: animate 30s linear infinite;
    bottom: -165px;
    width: 25px;
    height: 25px;
}

.squares li:nth-child(1) {
    left: 26%;
    width: 90px;
    height: 90px;
    animation-delay: 0s;
}

.squares li:nth-child(2) {
    left: 8%;
    width: 5px;
    height: 5px;
    animation-delay: 5s;
    animation-duration: 5s;
}

.squares li:nth-child(3) {
    left: 10%;
    width: 15px;
    height: 15px;
    animation-delay: 10s;
}

.squares li:nth-child(4) {
    left: 20%;
    width: 20px;
    height: 20px;
    animation-delay: 6s;
    animation-duration: 40s;
}

.squares li:nth-child(5) {
    left: 35%;
    width: 80px;
    height: 80px;
    animation-delay: 2s;
}

.squares li:nth-child(6) {
    left: 40%;
    width: 40px;
    height: 40px;
    animation-delay: 10s;
}

.squares li:nth-child(7) {
    left: 55%;
    width: 200px;
    height: 200px;
}

.squares li:nth-child(8) {
    left: 65%;
    width: 15px;
    height: 15px;
    animation-duration: 35s;
}

.squares li:nth-child(9) {
    left: 70%;
    width: 25px;
    height: 25px;
    animation-delay: 20s;
    animation-duration: 20s;
}

.squares li:nth-child(10) {
    left: 85%;
    width: 100px;
    height: 100px;
    animation-delay: 1s;
    animation-duration: 15s;
}

@keyframes animate {
    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 30%;
        -webkit-border-radius: 30%;
        -moz-border-radius: 30%;
    }

    100% {
        transform: translateY(-1000px) rotate(600deg);
        opacity: 0;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
    }
}

#middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

#middle h1 {
    color: #FFFFFF;
    font-size: 3.80em;
    font-family: 'Satisfy', cursive;
    text-shadow: 0px 1.5px 1.5px rgba(0, 0, 0, 0.3);
    line-height: 1;
    text-align: left;
}

#countdown-container {
    display: inline-flex;
    box-sizing: border-box;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #fff;
    line-height: 1;
    margin-top: 1.10em;
    margin-bottom: 1.10em;
    width: 100%;
}

.countdown-box {
    padding-right: 0.50em;
    padding-left: 0.50em;
    color: #FFFFFF;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    text-align: center;
    margin: 0 auto;
}

.countdown-box p {
    font-size: 2em;
    text-shadow: 0px 1.5px 1.5px rgba(0, 0, 0, 0.3);
}

#middle h3 {
    color: #FFFFFF;
    font-size: 1.20em;
    display: inline-block;
    margin-right: 0.9em;
}

#middle i {
    margin-left: 0.9em;
}

#middle a {
    color: #FFFFFF;
    text-decoration: none;
}

#middle a:hover {
    color: #FFFFFF;
    text-decoration: none;
    text-shadow: 0px 2.2px 2.2px rgba(0, 0, 0, 0.4);
}

#twitter:hover {
    color: #00acee;
}

#medium:hover {
    color: #000000;
}

#dribbble:hover {
    color: #ea4c89;
}

#codepen:hover {
    color: #000000;
}

#middle img {
    padding: 0.5em;
}

#middle img a {
    text-decoration: none;
}

#middle img:hover {
    text-decoration: none;
    opacity: 0.8;
}

    </style>
</head>

<body>
    <ul class="squares">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div id="middle">
        <h1>Website<br>Coming Soon...</h1>
        <div id="countdown-container">
            <div class="countdown-box">
                <p id="c_days">0 <br> Days</p>
            </div> <!-- /.countdown-box -->
            <div class="countdown-box">
                <p id="c_hours">0 <br> Hours</p>
            </div> <!-- /.countdown-box -->
            <div class="countdown-box">
                <p id="c_minutes">0 <br> Minutes</p>
            </div> <!-- /.countdown-box -->
            <div class="countdown-box">
                <p id="c_seconds">0 <br> Seconds</p>
            </div> <!-- /.countdown-box -->
        </div> <!-- /#countdown-container -->
        <h3>
            <i class="far fa-copyright" style="margin-right: 0.15em; margin-left:0;"></i>2025 | Designed and Developed by
            <a href="#">
                Shashank Umarekar<i class="fas fa-heart" style="margin-left: 0.2em;margin-right:0;color:red;"></i>
            </a>
        </h3>
    </div><!-- /#middle -->
</body>
<script>
    var CountDownDate = new Date("Jan 15, 2025 12:00:00").getTime();

    var countdownfunction = setInterval(function() {

        var TimeNow = new Date().getTime();
        var distance = CountDownDate - TimeNow;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("c_days").innerHTML = days + "<br> Days";
        document.getElementById("c_hours").innerHTML = hours + "<br> Hours";
        document.getElementById("c_minutes").innerHTML = minutes + "<br> Minutes";
        document.getElementById("c_seconds").innerHTML = seconds + "<br> Seconds";

        if (distance < 0) {
            clearInterval(countdownfunction);
            document.getElementById("c_days").innerHTML = "0 <br> Days";
        }

        if (distance < 0) {
            clearInterval(countdownfunction);
            document.getElementById("c_hours").innerHTML = "0 <br> Hours";
        }

        if (distance < 0) {
            clearInterval(countdownfunction);
            document.getElementById("c_minutes").innerHTML = "0 <br> Minutes";
        }

        if (distance < 0) {
            clearInterval(countdownfunction);
            document.getElementById("c_seconds").innerHTML = "0 <br> Seconds";
        }

    }, 1000);
</script>

</html>