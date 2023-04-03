const boxes = document.querySelectorAll('.service')
const about = document.querySelector('.aboutService')
window.addEventListener('scroll', scroll)
scroll()

function scroll(){

    const trigger= window.innerHeight/10*4;
   
    boxes.forEach(box=>{
        const boxtop = box.getBoundingClientRect().top;

        if(boxtop<trigger){
            box.classList.add('show')
            box.classList.add('show')
        }else{
            // box.classList.remove('show')
            
        }
    })
    const boxtop = about.getBoundingClientRect().top;
    if(boxtop<trigger){
        about.classList.add('showAbout')
    }

}