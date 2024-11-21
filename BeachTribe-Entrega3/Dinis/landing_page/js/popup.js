document.getElementById("form_id").addEventListener("submit", function(event) {
    event.preventDefault();

    document.getElementById("popup_form_id").style.display = "flex";
});

document.getElementById("close").addEventListener("click", function() {
    document.getElementById("popup_form_id").style.display = "none";
});