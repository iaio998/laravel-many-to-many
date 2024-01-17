import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);

const previewImage = document.getElementById("image");
previewImage.addEventListener("change", (event) => {
    const ofReader = new FileReader();
    ofReader.readAsDataURL(previewImage.files[0]);

    ofReader.onload = function (oFREvent) {
        document.getElementById("preview").src = oFREvent.target.result;
    };
});
