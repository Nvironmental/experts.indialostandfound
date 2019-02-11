var relicsDiv = document.querySelector(".relics-container")	
var relicsImgs = document.querySelectorAll('.relics');
var doesCurrentExist = document.querySelectorAll('img');
var relicInfoContainer= document.querySelector('.relic-info-container');
var menuOpenBtn= document.querySelector('.menu-icon');
var menuCloseBtn= document.querySelector('.menu-close-btn');
var menuContainer= document.querySelector('.menu-container');
var search = document.querySelector("#q");




//modern way to check intersection
var callback = function(entries, observer) {
    entries.forEach(entry => {
        if (entry.intersectionRatio >= 0 && entry.intersectionRatio <= 0.25) {
                entry.target.style.width = 90 + '%';
			    entry.target.classList.remove('current');
        } else if (entry.intersectionRatio >= 0.25 && entry.intersectionRatio <= 0.5) {
                entry.target.style.width = 93 + '%';
			    entry.target.classList.remove('current');
        } else if (entry.intersectionRatio >= 0.5 && entry.intersectionRatio <= 0.75) {
                entry.target.style.width = 97 + '%';
			    entry.target.classList.remove('current');
        } else if (entry.intersectionRatio >= 0.75 && entry.intersectionRatio <= 1) {
                entry.target.style.width = 100 + '%';
			    entry.target.classList.add('current');
			    let relicName = document.querySelector('.relic-name');
                let relicLocation = document.querySelector('.relic-location');
                let relicEra = document.querySelector('.relic-era');
                let current = document.querySelector('.current');
                relicName.innerText = current.dataset.name;
                relicLocation.innerText = current.dataset.location;
                relicEra.innerText = current.dataset.era;   
                
        }
    })
};


var options = {
    threshold: [0.25, 0.5, 0.75, 1.0]
}

var observer = new IntersectionObserver(callback, options);

document.querySelectorAll('.relics').forEach((elem) => observer.observe(elem));


        menuOpenBtn.addEventListener('click',function(e){
            e.preventDefault();
            if(!menuContainer.classList.contains('show-menu')){
			menuContainer.classList.add('show-menu');
		}
		else{
				 menuContainer.classList.remove('show-menu');
		}
            
        });

 
    window.addEventListener('click',function(){
        if(search != document.activeElement){
            document.querySelector(".search-label").classList.remove('up');
            document.querySelector("#q").value = "";
            document.querySelector(".go-search").style.display = "none";
            document.querySelector(".close-search").style.display = "block"
            }
        else {
            document.querySelector(".search-label").classList.add('up');
            document.querySelector(".close-search").style.display = "none"
            document.querySelector(".go-search").style.display = "block";
        }

        });

    document.querySelector(".search-label").addEventListener('click',function(){
        document.querySelector("#q").focus();
        document.querySelector(".search-label").classList.add('up');
    });
    
    //styles and animations for search
    document.querySelector('.search-anchor').addEventListener('click',function(){
        document.querySelector('.search-display').style.top = 0;});

        document.querySelector('.close-search').addEventListener('click',function(){
            document.querySelector('.search-display').style.top = -150+"%" ;});

            document.querySelector('#q').addEventListener('keyup',_.debounce( function(){
                if(document.querySelector('#q').value !== ""){
                document.querySelector('.search-result-container').style.opacity = 1;}
            else {
                document.querySelector('.search-result-container').style.opacity = 0;}}, 500));

  
      
    // jQuery('.relics-container').scroll(function(){ //adding next and prev classes via scroll event
    //     jQuery('.relics-link').removeClass('current-parent');
    //     jQuery('.relics-link').removeClass('next-parent');
    //     jQuery('.relics-link').removeClass('prev-parent');
    //     if(jQuery('.relics').hasClass('current')){
    //         jQuery('.current').parent().addClass('current-parent')}
    // 	if(jQuery('.relics-link').hasClass('current-parent')){
    //         jQuery('.current-parent').next().addClass('next-parent');
    // 		jQuery('.current-parent').prev().addClass('prev-parent');}}); 

jQuery('.menu-icon').on('click', function() {
  jQuery(this).toggleClass('is-active');
});