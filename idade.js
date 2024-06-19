document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById("age-verification");
    modal.style.display = "flex";

    document.getElementById("yes-button").addEventListener("click", function() {
        modal.style.display = "none";
    });

    document.getElementById("no-button").addEventListener("click", function() {
        window.location.href = "https://www.google.com";
    });
});
