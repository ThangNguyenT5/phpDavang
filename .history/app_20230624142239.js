import AosModule from "./assets/js/module/AosModule.js";
import SwiperModule from "./assets/js/module/SwiperModule.js";

window.addEventListener("DOMContentLoaded", () => {
    AosModule();

})




// let index_slide=0;
// slide_show()


// function slide_show() {
//     let i;
//     let slide = document.getElementsByClassName("slider_item");
//     for (i = 0; i < slide.length; i++) {
//         slide[i].style.display = "none";
//     }
//     index_slide++;
//     if (index_slide > slide.length) {index_slide = 1}
//     slide[index_slide-1].style.display ="block";

//     setTimeout(slide_show, 5000);
// };
function delSanpham() {
    var conf = confirm(`Xóa thiệt khum ?`);
    return conf;
}