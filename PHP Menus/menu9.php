<html>
<head>
<title>menu7</title>
<style>
body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    background-color: gold;
    font-family: 'Open Sans', Verdana, Geneva, Tahoma, sans-serif;
}

body, .nav, .menu {
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav {
    position: relative;
    background-color: #fff;
    padding: 20px;
    transition: 0.5s;
    border-radius: 50px;
    overflow: hidden;
    box-shadow: 0 8px 15px rgba(0,0,0,.2);
}

.menu {
    margin: 0;
    padding: 0;
    width: 0;
    overflow: hidden;
    transition: 0.5s;
}

.nav input:checked ~ .menu {
    width: 450px;
}

.menu li {
    list-style: none;
    margin: 0 10px;
}

.menu li a {
    text-decoration: none;
    color: #666;
    text-transform: uppercase;
    font-weight: 600;
    transition: 0.5s;
}

.menu li a:hover {
    color: #161919;
}

.nav input {
    width: 40px;
    height: 40px;
    cursor: pointer;
    opacity: 0;
}

.nav span {
    position: absolute;
    left: 30px;
    width: 30px;
    height: 4px;
    border-radius: 50px;
    background-color: #666;
    pointer-events: none;
    transition: 0.5s;
}

.nav input:checked ~ span {
    background-color: #f974a1;
}

.nav span:nth-child(2) {
    transform: translateY(-8px);
}

.nav input:checked ~ span:nth-child(2) {
    transform: translateY(0) rotate(-45deg);
}
.nav span:nth-child(3) {
    transform: translateY(8px);
}

.nav input:checked ~ span:nth-child(3) {
    transform: translateY(0) rotate(45deg);
}
</style>
</head>
<body>

<div class="nav">
  <input type="checkbox">
    <span></span>
    <span></span>
    <div class="menu">
      <li><a href="#">home </a></li>
      <li><a href="#">about</a></li>
      <li><a href="#">cursos</a></li>
      <li><a href="#">blog</a></li>
      <li><a href="#">contactus</a></li>
    </div>
</div>
</body>
</html>