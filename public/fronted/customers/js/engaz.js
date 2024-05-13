    // navbar desktop//
window.addEventListener("scroll", () => {
    let navbarScrol = document.getElementById("navbarscrol");
    if(window.scrollY >= 300){
        navbarScrol.classList.add("navtop");
    }else {
        navbarScrol.classList.remove("navtop");
    }
});
 // navbar desktop //