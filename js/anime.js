window.onload = function(){
		timer = setInterval(changecolor, 40);
}	
var i = 0;
var count = 0;
var img = document.getElementById('img_anime');
function changecolor(){
				console.log(i);
				img.style.opacity = i/100;	
				if(count == 0){
					i++;
				}
				if(i == 90){
					count = 1;
				}
				if(count == 1){
					i--;
				}
				if(count == 1 && i == 10){
					count = 2;
					img.src = 'images/office2.png';
					img.alt = '画像2';
				}
				if(count == 2){
					i++;
				}
				if(count == 2 && i == 90){
					clearInterval(timer);
				}	
}	
