let anchors = document.querySelectorAll('.anchor');


anchors.forEach((element) => {
    let innerAnchor = element.textContent;
    element.textContent = "";


    let anchorContainer = document.createElement('div');
    anchorContainer.classList.add('blockanchor');


    for (letter of innerAnchor) {
        
        let span = document.createElement('span');

        span.textContent = letter.trim() === "" ? "\xa0" : letter;

        span.classList.add("letter");

        anchorContainer.appendChild(span);
    }

    element.appendChild(anchorContainer);
    element.appendChild(anchorContainer.cloneNode(true));

});

anchors.forEach((element) => {
    element.addEventListener('mouseover', function() {
        element.classList.add("play");
    })
    element.addEventListener('mouseout', function() {
        element.classList.remove("play");
    })
})