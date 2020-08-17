import swal from "sweetalert"
import $ from "jquery"
import moment from "moment"

window.setTimeout(() => {
    swal({
        text: 'Flandy ',
        title: "Welcome My Design",
        button: "OKe",
        icon: `./img/icon.png`
    });
}, 3000);

const displayTime = () => {
    moment.locale("id");
    $(".time").text(moment().format("LTS"));
    $(".date").text(moment().format("LL"));
};

const updateTime = () => {
    displayTime();
    setTimeout(updateTime, 1000)
};

updateTime();