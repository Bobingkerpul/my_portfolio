// Logo Design Images

// const images = [
//   "./public/uploads/logos/l1.jpg",
//   "./public/uploads/logos/l2.jpg",
//   "./public/uploads/logos/l3.jpg",
//   "./public/uploads/logos/l4.jpg",
//   "./public/uploads/logos/l5.jpg",
//   "./public/uploads/logos/l6.jpg",
//   "./public/uploads/logos/l7.jpg",
//   "./public/uploads/logos/l8.jpg",
//   "./public/uploads/logos/l9.jpg",
//   "./public/uploads/logos/l10.jpg",
//   "./public/uploads/logos/l11.jpg",
//   "./public/uploads/logos/l12.jpg",
//   "./public/uploads/logos/l13.jpg",
//   "./public/uploads/logos/l14.jpg",
//   "./public/uploads/logos/l15.jpg",
//   "./public/uploads/logos/l16.jpg",
//   "./public/uploads/logos/l17.jpg",
// ];

// const imageContainer = document.querySelector(".container-logo");

// images.forEach((imageSrc) => {
//   const imageHolder = document.createElement("div");
//   imageHolder.className = "image-holder-logo";

//   const img = document.createElement("img");
//   img.src = imageSrc;

//   imageHolder.appendChild(img);
//   imageContainer.appendChild(imageHolder);
// });
const images = [
  "./public/uploads/logos/l1.jpg",
  "./public/uploads/logos/l2.jpg",
  "./public/uploads/logos/l3.jpg",
  "./public/uploads/logos/l4.jpg",
  "./public/uploads/logos/l5.jpg",
  "./public/uploads/logos/l6.jpg",
  "./public/uploads/logos/l7.jpg",
  "./public/uploads/logos/l8.jpg",
  "./public/uploads/logos/l9.jpg",
  "./public/uploads/logos/l10.jpg",
  "./public/uploads/logos/l11.jpg",
  "./public/uploads/logos/l12.jpg",
  "./public/uploads/logos/l13.jpg",
  "./public/uploads/logos/l14.jpg",
  "./public/uploads/logos/l15.jpg",
  "./public/uploads/logos/l16.jpg",
  "./public/uploads/logos/l17.jpg",
];

const imageContainer = document.querySelector(".container-logo-slick");

images.forEach((imageSrc) => {
  const img = document.createElement("img");
  img.src = imageSrc;

  imageContainer.appendChild(img);
});

$(document).ready(function () {
  $(".container-logo-slick").slick({
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    infinite: true,
    speed: 600,
    slidesToShow: 4,
    slidesToScroll: 1,
    fade: false,
    // rtl: true,

    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

// UX/UI Portfolio Images

const designs = [
  {
    src: "./public/uploads/portfolio_images/bobing-pizza.jpg",
    alt: "Pizza Image",
    caption: "Bobing Pizza",
    link: "https://www.figma.com/proto/vYW0KSBQYm0oqn4qIcesw0/Parallax?node-id=2011-507&t=ScbY9AVTAmRe8t6Q-0&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=2011%3A507&hide-ui=1",
  },
  {
    src: "./public/uploads/portfolio_images/digital.jpg",
    alt: "Digital Image",
    caption: "Digital",
    link:"https://www.figma.com/proto/HL15STnEp574RgsQWg9qd3/Portfolio-1?node-id=1-2&t=ASGjPY0n4WgArymZ-0&scaling=scale-down-width&content-scaling=fixed&page-id=0%3A1&hide-ui=1",
  },

  {
    src: "./public/uploads/portfolio_images/makoni.jpg",
    alt: "Makoni Image",
    caption: "Julius Makoni",
    link:"https://www.figma.com/proto/V0MoZB08ZwZvFnpm0xkkYr/Makoni---Design?node-id=6030-585&t=iaMIuvadwOhMBbqx-0&scaling=scale-down-width&content-scaling=fixed&page-id=1%3A2&hide-ui=1",
  },
  {
    src: "./public/uploads/portfolio_images/reehive.jpg",
    alt: "Reehive Image",
    caption: "Reehive",
    link:"https://www.figma.com/proto/ciqtwk6y5DFXEtaLx8sFBI/Reehive-Digital-Marketing---Design?node-id=11-86&t=IMHmO4Kc2zepTIWp-0&scaling=min-zoom&content-scaling=fixed&page-id=1%3A2&starting-point-node-id=11%3A86",
  },

  {
    src: "./public/uploads/portfolio_images/restaurant.jpg",
    alt: "Restaurant Image",
    caption: "TR Restaurant",
    link:"https://www.figma.com/proto/VnPyKo1rLrBWigzZjFoSQf/TR-Restaurants----Design?node-id=1-2&t=qYNfzQ2cweFw2CX8-0&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1"
  },

  {
    src: "./public/uploads/portfolio_images/shoeshop.jpg",
    alt: "Shoe Image",
    caption: "Shoe Shop",
    link:"https://www.figma.com/proto/yBkLDwmVwV0hdbJjGCyh5i/Shoe-Shop---Design?node-id=62-65&t=vsOA8XYugdreVHNy-0&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1"
  },

  {
    src: "./public/uploads/portfolio_images/sneakers.jpg",
    alt: "Sneakers Image",
    caption: "Shoe Sneakers",
    link:"https://www.figma.com/proto/ncXPBOKxdYPe12IlQAa1Pn/Ecommerce-Design?node-id=2001-4&t=VlLjsheAMNPsjTiD-0&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=2001%3A4"
  },
];

const imagesUX = document.querySelector(".images");

designs.forEach((item) => {
  const imageHolder = document.createElement("div");
  imageHolder.className = "image-holder";

  const anchor = document.createElement("a");
  anchor.href = item.link;
  anchor.target = "_blank";

  const img = document.createElement("img");
  img.src = item.src;
  img.alt = item.alt;

  anchor.appendChild(img);

  const caption = document.createElement("h2");
  caption.textContent = item.caption;

  imageHolder.appendChild(anchor);
  imageHolder.appendChild(caption);

  imagesUX.appendChild(imageHolder);
});
