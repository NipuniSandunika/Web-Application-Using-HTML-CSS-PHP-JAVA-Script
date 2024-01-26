
var i = 0;
var slideTime = 3000;
var images = ['./images/T1.jpg',
            './images/t2.jpg',
            './images/T3.jpg'];


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



