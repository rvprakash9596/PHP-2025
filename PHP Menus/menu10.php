<html>
<head>
<title>menu10</title>
<style>
* {
	margin: 0;
	padding: 0;
	list-style-type: none;
}
body{
	background: #1E1F25;
}
ul{
	display: flex;
	width: 100%;
	height: 80vh;
	margin: auto;
	max-width: 1000px;
	justify-content: space-between;
	text-align: center;
}
li {
	padding: 1rem 2rem 1.15rem;
  text-transform: uppercase;
  cursor: pointer;
  color: #ebebeb;
	min-width: 80px;
	margin: auto;
}

li:hover {
  background-image: url('https://scottyzen.sirv.com/Images/v/button.png');
  background-size: 100% 100%;
  color: #27262c;
  animation: spring 300ms ease-out;
  text-shadow: 0 -1px 0 #ef816c;
	font-weight: bold;
}
li:active {
  transform: translateY(4px);
}

@keyframes spring {
  15% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.2, 1.1);
  }
  40% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(0.95, 0.95);
  }
  75% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.05, 1);
  }
  100% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1, 1);
  }
}
.shameless-plug{
  position: absolute;
  bottom: 10px;
  right: 0;
  padding: 8px 20px;
  color: #ccc;
  text-decoration: none;
}
</style>
</head>
<body>
<ul>
	<li>Home</li>
	<li>About</li>
	<li>Gallery</li>
	<li>Contact us</li>
</ul>

<a class="shameless-plug" href="https://scottyzen.com/?cp" target="_blank">👋 Visit My Website</a>

</body>
</html>