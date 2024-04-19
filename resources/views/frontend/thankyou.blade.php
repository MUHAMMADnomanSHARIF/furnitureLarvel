<html>
    <head>
        <title>Furnimart</title>

        <style>
            html {
  height: 100%;
}
body {
  background: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
  font-family:'Helvetica', sans-serif;
  font-size:16px
}

h1 {
    font-size: 1.8rem;
}

#particles-js {
    position: absolute;
    height: 100vh;
    z-index: -1;
    width: 100%;
}
.thank-you-container {
    margin: 0 auto;
    max-width: 500px;
    padding: 0 4em;
}
.thank-you-box {
    background: #ADBCC1;
    color: #000;
    padding: 1em 0.5em;
    border-radius: 5px;
    text-align: center;
}
.return-black {
   margin: 20px 0;
   text-align: center;
   width: 100%;
   float: left;
  color: black;
}
        </style>
    </head>
  <body>
  <div id="particles-js"></div>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<div class="thank-you-container">
<div class="thank-you-box">
  <h1>Thank you!</h1>
  <p class="lead">for contacting me</p>
  <p>We've received your order successfully.</p>

        <p>An email with your order tracking code  will be sent to you {{$user}}.</p>
        <p>Thank you for shopping with us!</p>
  <p class="signature">♥️ Furni Mart</p>

</div>
<a class="return-black" href="{{route('web.index')}}">Return to Website</a>
</div>

<script>
particlesJS('particles-js',

{
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 1299.3805191013182
      }
    },
    "color": {
      "value": ["#5D47BA","#FFDBFF","#FB5435","#E00A30","#04CEF9"]
    },
    "shape": {
      "type": "star",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 11
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 15,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "bottom",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}

);
</script>
</body>

  </html>
