/**
* Xem trước ảnh sau khi upload và hiện nút lưu khi đã upload ảnh
*/
const browseImgButton = document.querySelector('#browseImg');
browseImgButton.addEventListener(
    "change",
    function() {
        let saveButton = document.querySelector("#btn-save");
        let 
        saveButton.style.display = "block";
        browseImgButton.style.display = "none";
    }
)