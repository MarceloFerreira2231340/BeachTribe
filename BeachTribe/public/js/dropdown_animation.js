
document.getElementById("dropdownIcon1").addEventListener("click", click1);
document.getElementById("dropdownIcon2").addEventListener("click", click2);
var dropdown = document.getElementsByClassName(".dropdown-content");


function click1() {
  document.getElementById("dropdownIcon1").style.display = "none";
  document.getElementById("dropdownIcon2").style.display = "initial";
  for (const s of document.querySelectorAll(".dropdown-content")) {
    s.style = "display: flex; flex-direction: column; right: 0px; top: 80px;";
  } 

}
  
function click2() {
  document.getElementById("dropdownIcon1").style.display = "initial";
  document.getElementById("dropdownIcon2").style.display = "none";
  for (const s of document.querySelectorAll(".dropdown-content")) {
    s.style = "";
  }
}