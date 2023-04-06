const menu = document.querySelector(".backgroundMenu")
const nom = document.getElementById("nom")
const mail = document.getElementById("mail")
const message = document.getElementById("message")

/**
 *
 * Menu integration
 */
let sideNav = document.getElementById("mySidenav");
let openBtn = document.getElementById("openBtn");
let closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
    sideNav.classList.add("active");
    menu.classList.toggle("invisible")
}



function closeNav() {
    sideNav.classList.remove("active");
    menu.classList.toggle("invisible")
}
/**
 *
 * Map integration
 */


function initialize() {
    let map = L.map('map').setView([46.26073, 5.6588], 20); // LIGNE 18

    let osmLayer = L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', { // LIGNE 20
        attribution: '© OpenStreetMap contributors',
        maxZoom: 19
    })

    map.addLayer(osmLayer)
}

window.addEventListener("DOMContentLoaded",()=>{
    initialize()
})


/**
 *
 * Image management
 *
 */

const mainImage = document.querySelector(".main")

const mainImageData = document.querySelector(".mainData").value

mainImage.style.backgroundImage = `url("${mainImageData}")`

/**
 *
 * AJAX Integration
 *
 */

function submitMails(name,email,content){
    fetch("https://formsubmit.co/ajax/thibautstachnick@gmail.com", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            name: name.value,
            mail: email.value,
            message: content.value
        })
    })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.log(error));
}
