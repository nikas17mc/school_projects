var listItems = document.querySelectorAll(".navi_you_fav p, .navi_buttons, .search_list");
var listItemsFlex = document.querySelectorAll(".filter_list, .list_item p")
var x = true;
var filterList = document.getElementById("filter");
var date = new Date();
const timeChanger = document.getElementById("timeChanger");
window.addEventListener('load', time);
document.getElementById("listShort").onclick = function(){
    if(x == true){
        // Iterate through each element in listItems and set display to "none"
        listItems.forEach(function(item) {
            item.style.display = "none";
        });
        listItemsFlex.forEach(function(item){
            item.style.display = "none";
        });
        x = false;
    } else {
        // Iterate through each element in listItems and set display to "block"
        listItems.forEach(function(item) {
            item.style.display = "block";
        });
        listItemsFlex.forEach(function(item) {
            item.style.display = "flex";
        });
        x = true;
    };
};



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

