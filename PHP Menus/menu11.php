<html>
<head>
<title>menu11</title>
<style>
body {
  font-family: 'Raleway', sans-serif;
  background-image: radial-gradient(circle at center, #899Dc4, #495D84);
  background-size: cover;
  background-repeat: no-repeat;
  height: 100vh;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  background: radial-gradient(ellipse at bottom, #1b2735, #090a0f);
  font-weight: 300;
}
.all {
  display: flex;
  perspective: 10px;
  transform: perspective(300px) rotateX(20deg);
  will-change: perspective;
  perspective-origin: center center;
  transition: all 1.3s ease-out;
  justify-content: center;
  transform-style: preserve-3d;
}
.all:hover {
  perspective: 1000px;
  transition: all 1.3s ease-in;
  transform: perspective(10000px) rotateX(0deg);
  .text {
    opacity: 1;
  }
  & > div {
    opacity: 1;
    transition-delay: 0s;
  }
  .explainer {
    opacity: 0;
  }
}

.left, .center, .right, .lefter, .righter {
  width: 200px;
  height: 150px;
  transform-style: preserve-3d;
  border-radius: 10px;
  border: 1px solid #fff;
  box-shadow: 0 0 20px 5px rgba(100, 100, 255, .4);
  opacity: 0;
  transition: all .3s ease;
  transition-delay: 1s;
  position: relative;
  background-position: center center;
  background-size: contain;
  background-repeat: no-repeat;
  background-color: #58d;
  cursor: pointer;
  background-blend-mode: color-burn;
  
  &:hover {
    box-shadow: 0 0 30px 10px rgba(100, 100, 255, .6);
  background-color: #ccf;
  }
}
.text {
  transform: translateY(30px);
  opacity: 0;
  transition: all .3s ease;
  bottom: 0;
  left: 5px;
  position: absolute;
  will-change: transform;
  color: #fff;
  text-shadow: 0 0 5px rgba(100, 100, 255, .6)
}
.lefter {
  transform: translateX(-60px) translateZ(-50px) rotateY(-10deg);
  background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/organization-512.png);
}
.left {
  transform: translateX(-30px) translateZ(-25px) rotateY(-5deg);
  background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/creative_draw-512.png);
}
.center {
  opacity: 1;
  background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/app_window-512.png);
}
.right {
  transform: translateX(30px) translateZ(-25px) rotateY(5deg);
  background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/cloud_weather-512.png);
}
.righter {
  transform: translateX(60px) translateZ(-50px) rotateY(10deg);
  background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/search-512.png);
}
.explainer {
  font-weight: 300;
  font-size: 2rem;
  color: #fff;
  transition: all .6s ease;
  width: 100%;
  height: 100%;
  background-color: #303050;
  background-image: radial-gradient(circle at center top, #cce, #33a);
  border-radius: 10px;
  text-shadow: 0 0 10px rgba(255, 255, 255, .8);
  
  display: flex;
  justify-content: center;
  align-items: center;
}


.ref {
  background-color: #000;
  background-image: linear-gradient(to bottom, #d80, #c00);
  border-radius: 3px;
  padding: 7px 10px;
  position: absolute;
  font-size: 16px;
  bottom: 10px;
  right: 10px;
  color: #fff;
  text-decoration: none;
  text-shadow: 0 0 3px rgba(0, 0, 0, .4);
  &::first-letter {
    font-size: 12px;
  }
}
</style>
</head>
<div class="all">
<div class="lefter">
  <div class="text">Hosting</div>
</div>
<div class="left">
  <div class="text">Web Design</div>
</div>
<div class="center">
  <div class="explainer"><span>Hover me</span></div>
  <div class="text">Frontend Development</div>
  </div>
<div class="right">
  <div class="text">Backend Development</div>
</div>
<div class="righter">
  <div class="text">SEO</div>
</div>
</div>

<a href="#" target="_blank" class="ref">Ravi Prakash</a>
</body>
</html>