
bgmenu.onclick = function(){
    var x = document.getElementById('topline');

    if(x.className === "topline"){
        x.className += " responsive";

    }else{
        x.className = "topline";
    }

}

