const cursor = {
  x: 0,
  y: 0,
};

const circle = document.querySelectorAll(".circle");

circle.forEach(function (circle) {
  circle.x = 0;
  circle.y = 0;
});

window.addEventListener("mousemove", function (e) {
  cursor.x = e.clientX + window.scrollX;
  cursor.y = e.clientY + window.scrollY;
});

let isHighlighting = false;

window.addEventListener("mousedown", () => {
  isHighlighting = true;

  circle.forEach((circle) => {
    circle.style.mixBlendMode = "difference";
    circle.style.transform = "scale(2)";
  });
});

window.addEventListener("mouseup", () => {
  isHighlighting = false;

  circle.forEach((circle) => {
    circle.style.mixBlendMode = "difference";
    circle.style.transform = "scale(1)";
  });
});

const clickableElements = document.querySelectorAll("a, button");

clickableElements.forEach((el) => {
  el.addEventListener("mouseover", () => {
    circle.forEach((circle) => {
      circle.style.mixBlendMode = "difference";
      circle.style.transform = "scale(4)";
    });
  });

  el.addEventListener("mouseout", () => {
    circle.forEach((circle) => {
      circle.style.mixBlendMode = "difference";
      circle.style.transform = "scale(1)";
    });
  });
});

function animatedCircles() {
  let x = cursor.x;
  let y = cursor.y;

  circle.forEach(function (circles, index) {
    circles.style.left = x - 12 + "px";
    circles.style.top = y - 12 + "px";

    circles.style.scale = (circle.length - index) / circle.length;

    circles.x = x;
    circles.y = y;

    const nextCircle = circle[index + 1] || circle[0];
    x += (nextCircle.x - x) * 0.3;
    y += (nextCircle.y - y) * 0.3;
  });

  requestAnimationFrame(animatedCircles);
}
animatedCircles();
