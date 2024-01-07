const navbar = document.getElementById('menu');
const popupNavbar = document.querySelector('.small-navbar');
const closepopupNavbar = document.getElementById('close-navbar');

navbar.addEventListener("click", function() {
    popupNavbar.style.display = "block";
})

closepopupNavbar.addEventListener("click", function() {
    popupNavbar.style.display = "none";
})

let isOpen=false;
function accbarToggle(){

    const accSec=document.querySelector(".account-section");
    if(isOpen){
        accSec.style.transform="translateX(100%)";
        isOpen=false;
    }else{
        accSec.style.transform="translateX(0)";
        console.log("opening");
        isOpen=true;
    }
}