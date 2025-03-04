let lastScrollTop = 0;
const header = document.getElementById('mainHeader')
window.addEventListener('scroll', () => {
    
    //  const progress = document.querySelector(".progress");
    // if (progress) {
    //     console.log(progress.offsetHeight); // Sigurado nang may value
    // } else {
    //     console.error("Element .progress not found!");
    // }
    
    document.body.style.setProperty('--scroll', window.pageYOffset / (this.document.body.offsetHeight - this.window.innerHeight));

    // console.log(header);

    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        header.classList.add("hide-header");
    } else {
        header.classList.remove("hide-header");
    }

    lastScrollTop = scrollTop



});





