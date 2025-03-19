<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
.snip1217 {
  font-family: 'Raleway', Arial, sans-serif;
  text-align: center;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 1px;
}
.snip1217 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.snip1217 li {
  display: inline-block;
  list-style: outside none none;
  margin: 0.5em 1.5em;
  padding: 0;
}
.snip1217 a {
  padding: 0.3em 0;
  color: rgba(255, 247, 247, 0.5);
  position: relative;
  text-decoration: none;
  display: inline-block;
}
.snip1217 a:before,
.snip1217 a:after {
  height: 3px;
  position: absolute;
  content: '';
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
  background-color:white;
  width: 0;
}
.snip1217 a:before {
  top: 0;
  left: 0;
}
.snip1217 a:after {
  bottom: 0;
  right: 0;
}
.snip1217 a:hover,
.snip1217 .current a {
  color: #ffffff;
}
.snip1217 a:hover:before,
.snip1217 .current a:before,
.snip1217 a:hover:after,
.snip1217 .current a:after {
  width: 100%;
}
/* Demo purposes only */

<!-- body{background-color:maroon;} -->

Resources
</style>
<body>
<ul class="snip1217">
  <li class="current"><a href="index.php">Home</a></li>
  <li><a href="serv.php">Our Services</a></li>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Check Visibility</a></li>
  <li><a href="booking.php">Booking Here</a></li>
  <li><a href="#">Gallery</a></li>
  <li><a href="../contact.php">Contact</a></li>
</ul>
</body>