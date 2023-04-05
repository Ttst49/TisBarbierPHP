const menu = document.querySelector(".backgroundMenu")


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

