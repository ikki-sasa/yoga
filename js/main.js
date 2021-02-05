// BUTTON SCROLL
const scrollBtn = document.querySelector('.scroll-btn');

window.addEventListener('scroll', () => {
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       scrollBtn.style.display = 'block'; 
    }
    else {
        scrollBtn.style.display = 'none'; 

    }
})
scrollBtn.addEventListener('click', () => {
    window.scroll({
        top: 0 ,
        behavior: "smooth"
    })
})
// BUTTON SCROLL END

// let MenuItems = document.getElementById("MenuItems");
// MenuItems.style.maxHeight = "0px";
// function menutoggle() {
//     if(MenuItems.style.maxHeight === "0px") 
//     {
//         MenuItems.style.maxHeight = "200px";
//     }
//     else 
//     {
//         MenuItems.style.maxHeight = "0px";

//     }
// }
// document.getElementById("MenuItems").onclick = function() {menutoggle()};

// function menutoggle() {
//   document.getElementById("MenuItems").innerHTML = "";
// }