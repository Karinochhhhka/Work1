document.body.onload = function(){

    setTimeout(function() {
        var preloader = document.getElementById('page_preloader');  
        if( !preloader.classList.contains('done') )
        {
            preloader.classList.add('done');
        }
    }, 1000);
}

bgmenu.onclick = function(){
    var x = document.getElementById('topline');

    if(x.className === "topline"){
        x.className += " responsive";

    }else{
        x.className = "topline";
    }

}