var count = 2;
window.onscroll = function() {
    if((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        var toAdd = document.createElement("div");
        toAdd.classList.add("box_1")
        //toAdd.textContent = `${++count}번째 블록`
        document.querySelector('section').appendChild(toAdd);
    }
}