const button=document.querySelector('button')
let rotating=false;
button.addEventListener('click',()=>{
    const img_avata=document.querySelector('.avatar-img')
    if(!rotating){
        img_avata.classList.add("rotate")
        document.querySelector(".js-h5").innerHTML="НЕ МУЧТЕ КОТА НАЖМІТЬ ЗНОВУ НА КНОПКУ БУДЬ ЛАСКА" 
        document.querySelector('.js-h4').innerHTML="Ну будь ласка((("  
    }
    else{
        img_avata.classList.remove("rotate")
        document.querySelector(".js-h5").innerHTML="" 
        document.querySelector('.js-h4').innerHTML="" 
    }
    rotating=!rotating
})