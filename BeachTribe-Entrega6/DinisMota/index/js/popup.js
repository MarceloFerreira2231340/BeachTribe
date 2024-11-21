document.getElementById("index_s5_form").addEventListener("submit", function(event) {
    event.preventDefault();

    document.getElementById("index_s5_popup_form").style.display = "flex";
});

document.getElementById("index_s5_close").addEventListener("click", function() {
    document.getElementById("index_s5_popup_form").style.display = "none";
});