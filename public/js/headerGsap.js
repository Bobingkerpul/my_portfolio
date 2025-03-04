document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".burger");
  const navMenu = document.getElementById("nav-menu");
  const menuWrapper = document.querySelector(".header-section__nav");
  const logo = document.querySelector(".hlogo");
  const header = document.querySelector(".header-section__content");

  if (menuToggle && navMenu) {
    // alert("aksjdhkajshdkajh");

    let isOpen = false;

    const timeline = gsap.timeline({
      paused: true,
    });

    timeline.to(".block", {
      duration: 1,
      clipPath: "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)",
      stagger: 0.075,
      ease: "power3.inOut",
    });

    timeline.to(
      "ul li",
      {
        duration: 0.3,
        opacity: 1,
        stagger: 0.05,
        ease: "power3.inOut",
      },
      "-=0.5"
    );

    menuToggle.addEventListener("click", function () {
      menuToggle.classList.toggle("active");
      if (isOpen) {
        
        header.style.background = "black";
        // header.style.backdropFilter = "blur(16px)";
        menuWrapper.style.visibility = "hidden";
        timeline.reverse();
      } else {
        // header.style.backdropFilter = "none";
        header.style.background = "transparent";
        logo.style.mixBlendMode = "difference";
        menuWrapper.style.visibility = "visible";
        timeline.play();
      }
      isOpen = !isOpen;
    });
  } else {
    console.error("ajskdhkajshdkajshd");
  }
});
