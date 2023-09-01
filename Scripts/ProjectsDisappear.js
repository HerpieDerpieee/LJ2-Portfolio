const elements = document.querySelectorAll(".projects-content")
const show_more_btn = document.querySelector("#projects-show-more")
function disappear(override = false){
    if (window.innerWidth >= 880 || override === true) {
        elements.forEach((element) => {
            element.style.display = "flex";
        })
        show_more_btn.style.display = "none";
        return;
    }

    elements.forEach((element, i) => {
        if (i >= 2){
            element.style.display = "none";
        }
        else {
            element.style.display = "flex";
        }
    })
    show_more_btn.style.display = "block";
}