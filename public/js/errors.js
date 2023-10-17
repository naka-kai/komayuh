// エラー画面の場合は親の.containerを削除する

// const mainTag = document.getElementsByTagName('main')[0];

// if (mainTag && mainTag.children.length > 0) {
//     const childNode = mainTag.firstChild;

//     if (childNode.classList.contains("container")) {
//         childNode.classList.remove("container");
//     }
// }

document.addEventListener("DOMContentLoaded", function () {
    var container = document.querySelector(".container");
    if (container) {
        container.classList.remove("container");
    }
});
