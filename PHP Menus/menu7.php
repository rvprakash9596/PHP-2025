<html>
<head>
<title>menu7</title>
<style>
body {
  background: #F9F8FD;
  font-family: 'Lexend Exa', sans-serif;
}

nav {
  position: absolute;
  top: 15px;
  left: 50%;
  transform: translateX(-50%);
  display: inline-block;
  border: 2px solid #EBECF1;
  border-radius: 30px;
  animation: slide-in 1s ease-out;
}

ul {
  position: relative;
  display: flex;
  flex: 1 1 auto;
  margin: 0;
  padding: 0 30px;
  list-style-type: none;
  li:not(:last-child) {
    margin-right: 40px;
  }
  li {
    border: 2px solid transparent;
    border-radius: 5px;
    padding: 10px;
    transition: background 0.2s;
    a {
      color: #2375D8;
      text-decoration: none;
      text-transform: uppercase;
      transition: color 0.2s;
    }
    ul {
      visibility: hidden;
      opacity: 0;
      position: absolute;
      display: block;
      margin: 12px -12px;
      padding: 0;
      background: #FFA91B;
      border: 2px solid #F7C833;
      border-right: 2px solid #F89329;
      border-bottom: 2px solid #F89329;
      border-radius: 5px;
      transition: opacity 0.2s, visibility 0.2s;
      li {
        margin: -2px 0 0 -2px;
        width: calc(100% - 20px);
        line-height: 1.7;
        a {
          color: #2375D8;
        }
      }
    }
    &:hover {
      background: #EC4138;
      border: 2px solid #F05749;
      border-right: 2px solid #E02A21;
      border-bottom: 2px solid #E02A21;
      a {
        color: #F9F8FD;
      }
      ul {
        visibility: visible;
        opacity: 1;
        box-shadow: 0px 3px 5px 2px #EBECF1;
        li {
          a {
            color: #F9F8FD;
          }
        }
      }
    }
  }
}

@keyframes slide-in {
  0% {
    top: -50px;
  }
  40% {
    top: 20px;
  }
  70% {
    top: 10px;
  }
  100% {
    top: 15px;
  }
}
</style>
<body>
<nav>
  <ul>
    <li><a href="#0">Home</a></li>
    <li><a href="#0">About</a></li>
    <li>
      <a href="#0">Clients</a>
      <ul>
        <li><a href="#0">Burger King</a></li>
        <li><a href="#0">Southwest Airlines</a></li>
        <li><a href="#0">Levi Strauss</a></li>
      </ul>
    </li>
    <li>
      <a href="#0">Services</a>
      <ul>
        <li><a href="#0">Print Design</a></li>
        <li><a href="#0">Web Design</a></li>
        <li><a href="#0">Mobile App Development</a></li>
      </ul>
    </li>
    <li><a href="#0">Contact</a></li>
  </ul>
</nav>
</body>
</html>