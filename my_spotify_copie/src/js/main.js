var a = document.querySelectorAll(".navi_you_fav p, .navi_buttons, .search_list");
var c = document.querySelectorAll(".playlist_pic_hov")
var b = document.querySelectorAll(".filter_list, .list_item p");
let x = true;
var date = new Date();
const timeChanger = document.getElementById("timeChanger");
window.addEventListener('load', time);

document.getElementById("listShort").onclick = function () {
    // Iterate through each element in listItems and set display to "none"
    a.forEach(function (item) {
        item.style.display = x ? "none" : "block";
    });
    b.forEach(function (item) {
        item.style.display = x ? "none" : "flex";
    });
    c.forEach(function (item) {
        item.style.display = x ? "block" : "none";
    });
    x = !x;

};
function container3Show() {
    var x = document.getElementById("container_3");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    };
};
function changeContainer3Height() {

    var windowHeight = window.innerHeight; 
    var newHeight = windowHeight - 200; // hier kannst du die Höhe des Containers an die Höhe des Bildschirms anpassen. 
    document.getElementById("container_3").style.height = newHeight + "px";
}; 
window.onresize = function () { 
    changeContainer3Height(); 
}; 
changeContainer3Height();

function time() {
    let time = date.getHours();

    if (time < 6) {
        timeChanger.innerText = "Gute Nacht";
    } else if (time < 12) {
        timeChanger.innerText = "Guten Morgen";
    } else if (time < 18) {
        timeChanger.innerText = "Guten Tag";
    } else if (time < 22) {
        timeChanger.innerText = "Guten Abend";
    } else {
        timeChanger.innerText = "Gute Nacht";
    }

    console.info(time);
}

setInterval(time, 3600000);

