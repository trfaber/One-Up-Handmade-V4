//item info accordions
var coll = document.getElementsByClassName("collapsible");
var x;
for (x = 0; x < coll.length; x++) {
    coll[x].addEventListener("click", function() {
        this.classList.toggle("currentDropdown"); //active class when clicked to change color

        var collapsibleContent = this.nextElementSibling;
        var icon = document.getElementsByClassName("fa-angle-down") //remove arrow when clicked
        if (collapsibleContent.style.maxHeight) { //expand box when clicked, then collapse when clicked again
            collapsibleContent.style.maxHeight = null;
        } else {
            collapsibleContent.style.maxHeight = collapsibleContent.scrollHeight + "px";  
        }
    });
}

//moblie nav
var button = document.getElementById("button");
var nav = document.getElementsByClassName("mobile")[0];
var navwidth = 300;

button.addEventListener("click", function() {
    this.classList.toggle("openMenu"); //active class when clicked to change color

    
    if (nav.style.width > "0px") {
        nav.style.width = 0 + "px";
    } else {
        nav.style.width = navwidth + "px";
    }
});

var shop = document.getElementsByClassName("link")[1];
shop.addEventListener("click", function() {
    button.classList.remove("openMenu");
    nav.style.width = "0px";
});





