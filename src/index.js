//sweetAlert action
window.setTimeout(() => {
    swal({
        text: 'Flandy ',
        title: "Welcome My Design",
        button: "OKe",
        icon: `./img/icon.png`
    });
}, 3000);

// const displayTime = () => {
//     moment.locale("id");
//     $(".time").text(moment().format("LTS"));
//     $(".date").text(moment().format("LL"));
// };

// const updateTime = () => {
//     displayTime();
//     setTimeout(updateTime, 1000)
// };

// updateTime();

//  $(document).ready(function () {
//     $('ul li a').click(function () {
//         $('li a').removeClass("active");
//         $(this).addClass("active");
//     });
// });

//membuat action navbar active
$(document).ready(function () {
    $('ul li a').click(function () {
        $('li a').removeClass('active');
        $(this).addClass('active');
    })
})

//mambuat img active hero-five
const img_container = document.querySelector('.main-five');
const img_item = document.querySelector('.jumbo');
const img_active = document.querySelectorAll('.item-list');

$(document).ready(function () {
    $(img_container).click(function (b) {
        if (b.target.className == 'item-list') {
            img_item.src = b.target.src;
        }
        img_active.forEach(function (active) {
            active.classList.contains('active-img');
            active.className = 'item-list';
        })
        b.target.classList.add('active-img');
    })
});




// img_container.addEventListener('click', function (b) {

//     // alert('ahlo');
// })