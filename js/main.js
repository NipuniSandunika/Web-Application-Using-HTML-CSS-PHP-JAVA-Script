
var i = 0;
var slideTime = 3000;

var images =['./images/bg1.jpg',
		 './images/bg2.jpg',
		 './images/bg3.jpg',
		 './images/bg4.jpg',
		 './images/bg5.jpg'];

function changePicture(){
    setTimeout(()=>{
        
        document.body.style.backgroundImage = 'url("'+images[i]+'")';  
        i++;
        if(i >= images.length){
            i = 0;
        }
        changePicture(); 

    },3000);

    
}

window.onload = changePicture();


function mouseOver(){
    document.getElementById("msg-heading").style.color ='red';
                            }
function mouseOut(){
    document.getElementById("msg-heading").style.color ='blue';
                            }
