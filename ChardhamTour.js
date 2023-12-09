//responsiveness
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click",()=>{
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
});


//slider

const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".image-slide");

var sliderNav = function(manual){
    btns.forEach((btn)=>{
    btn.classList.remove("active");
    });

    slides.forEach((slide)=>{
        slide.classList.remove("active");
        });




    btns[manual].classList.add("active");    
    slides[manual].classList.add("active");
    
}

btns.forEach((btn,i)=>{
    btn.addEventListener("click",()=>{
        sliderNav(i);
    })
});


/*Login and signin form*/

const formOpenBtn= document.querySelector("#form-open"),
home=document.querySelector(".home"),
formContainer=document.querySelector(".form_container"),
formClose=document.querySelector(".form_close"),
signinBtn=document.querySelector("#signin"),
loginBtn=document.querySelector("#login"),
pwShowHide=document.querySelectorAll(".fa-eye-slash");

formOpenBtn.addEventListener("click",()=>home.classList.add("show"));
formClose.addEventListener("click",()=>home.classList.remove("show"));





signinBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    formContainer.classList.add("active");
});

loginBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    formContainer.classList.remove("active");
    
});