document.addEventListener('DOMContentLoaded', function () {
    const buttonSignIn = document.getElementById("ButtonSignIn");

    if(buttonSignIn) {
        buttonSignIn.addEventListener("click", function() {
            window.location.href = "index.php"
        })
    }
    
});