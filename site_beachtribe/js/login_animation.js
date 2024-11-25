
document.getElementById("nav_login").addEventListener("mouseover", mouseOver);
document.getElementById("nav_login").addEventListener("mouseout", mouseOut);


function mouseOver() {
    document.getElementById("login_logo").style.filter = "invert(1)";
  }
  
  function mouseOut() {
    document.getElementById("login_logo").style.filter = "invert(0)";
}