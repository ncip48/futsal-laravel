(function ($) {
    "use strict";
    jQuery(window).on("load", function () {
        $(".preloader").delay(1600).fadeOut("slow");
    });
    new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 0,
        mobile: true,
        live: true,
    }).init();
    $(".check-in").datepicker({ dateFormat: "yy-mm-dd", duration: "medium" });
    $(".ticket-book").datepicker({ dateFormat: "d MM yy", duration: "medium" });
    $(".main-gallary").magnificPopup({
        type: "image",
        gallery: { enabled: true },
    });
    $(".video-icon").magnificPopup({
        type: "iframe",
        iframe: {
            markup:
                '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                "</div>",
            patterns: {
                youtube: {
                    index: "youtube.com/",
                    id: "v=",
                    src: "//www.youtube.com/embed/%id%?autoplay=1",
                },
                vimeo: {
                    index: "vimeo.com/",
                    id: "/",
                    src: "//player.vimeo.com/video/%id%?autoplay=1",
                },
                gmaps: { index: "//maps.google.", src: "%id%&output=embed" },
            },
            srcAction: "iframe_src",
        },
    });
    var x, i, j, l, ll, selElmnt, a, b, c;
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
                var y, i, k, s, h, sl, yl;
                s =
                    this.parentNode.parentNode.getElementsByTagName(
                        "select"
                    )[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y =
                            this.parentNode.getElementsByClassName(
                                "same-as-selected"
                            );
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
        var x,
            y,
            i,
            xl,
            yl,
            arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i);
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    document.addEventListener("click", closeAllSelect);
    $(".hamburger").on("click", function (event) {
        $(this).toggleClass("h-active");
        $(".main-nav").toggleClass("slidenav");
    });
    $(".header-home .main-nav ul li  a").on("click", function (event) {
        $(".hamburger").removeClass("h-active");
        $(".main-nav").removeClass("slidenav");
    });
    $(".main-nav .fl").on("click", function (event) {
        var $fl = $(this);
        $(this).parent().siblings().find(".sub-menu").slideUp();
        $(this)
            .parent()
            .siblings()
            .find(".fl")
            .addClass("flaticon-plus")
            .text("+");
        if ($fl.hasClass("flaticon-plus")) {
            $fl.removeClass("flaticon-plus")
                .addClass("flaticon-minus")
                .text("-");
        } else {
            $fl.removeClass("flaticon-minus")
                .addClass("flaticon-plus")
                .text("+");
        }
        $fl.next(".sub-menu").slideToggle();
    });
    var accountCard = document.querySelectorAll(".account-dropdown");
    var userIcon = document.querySelectorAll(".user-dropdown-icon i");
    userIcon.forEach((el) => {
        el.addEventListener("click", () => {
            accountCard.forEach((element) => {
                element.classList.toggle("activeCard");
            });
        });
    });
    var searchOpen = document.querySelectorAll(".searchbar-open i");
    var searchCard = document.querySelectorAll(".main-searchbar");
    var searchClose = document.querySelectorAll(".searchbar-close i");
    searchOpen.forEach((el) => {
        el.addEventListener("click", () => {
            searchCard.forEach((el) => {
                el.classList.add("activeSearch");
            });
        });
    });
    searchClose.forEach((el) => {
        el.addEventListener("click", () => {
            searchCard.forEach((el) => {
                el.classList.remove("activeSearch");
            });
        });
    });
    window.onclick = function (event) {
        searchCard.forEach((el) => {
            if (event.target == el) {
                el.classList.remove("activeSearch");
            }
        });
        if (!event.target.matches(".user-dropdown-icon i")) {
            accountCard.forEach((element) => {
                if (element.classList.contains("activeCard")) {
                    element.classList.remove("activeCard");
                }
            });
        }
    };
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
            $(".header-area").addClass("sticky");
        } else {
            $(".header-area").removeClass("sticky");
        }
    });
    $(".banner-slider").owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        smartSpeed: 700,
        dots: false,
        nav: true,
        autoplay: 4000,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        navText: [
            "<i class='bx bx-chevron-left' ></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
        responsive: {
            0: { items: 1, nav: false, dots: false },
            600: { items: 1, nav: false, dost: false },
            1000: { items: 1, nav: true, loop: true },
        },
    });
    $(".destinations-1").owlCarousel({
        stagePadding: 1,
        items: 3,
        loop: true,
        margin: 20,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: true,
        navText: [
            "<i class='bx bx-chevron-left' ></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
        responsive: {
            0: { items: 1, nav: false, dots: false },
            600: { items: 2, nav: false, dost: false },
            1000: { items: 3, nav: true, loop: true },
        },
    });
    $(".destinations-2").owlCarousel({
        stagePadding: 1,
        items: 3,
        loop: true,
        margin: 20,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: true,
        navText: [
            "<i class='bx bx-chevron-left' ></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
        responsive: {
            0: { items: 1, nav: false, dots: false },
            600: { items: 2, nav: false, dost: false },
            1000: { items: 3, nav: true, loop: true },
        },
    });
    $(".review-slider").owlCarousel({
        stagePadding: 10,
        items: 3,
        loop: true,
        margin: 15,
        smartSpeed: 1500,
        autoplay: false,
        dots: true,
        nav: true,
        navText: [
            "<i class='bx bx-chevron-left' ></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
        responsive: {
            0: { items: 1, nav: false, dots: false },
            800: { items: 2, nav: false, dots: false },
            1000: { items: 3, dots: true, nav: false, loop: true },
        },
    });
    $(".feature-slider").owlCarousel({
        items: 2,
        loop: true,
        margin: 30,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: true,
        navText: [
            "<i class='bx bx-chevron-left' ></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
        responsive: {
            0: { items: 1, nav: false, dots: false },
            600: { items: 1, nav: false, dots: false },
            1000: { items: 2, dots: false, nav: false, loop: true },
        },
    });
    $(".offer-slider").owlCarousel({
        stagePadding: 1,
        items: 3,
        loop: true,
        margin: 25,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: true,
        navText: [
            "<i class='bx bx-chevron-left' ></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
        responsive: {
            0: { items: 1, nav: false, dots: false },
            600: { items: 2, nav: false, dots: false },
            1000: { items: 3, dots: false, nav: false, loop: true },
        },
    });
    $(".feature-slider-2").owlCarousel({
        items: 3,
        loop: true,
        margin: 25,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: true,
        animateOut: "slideOutUp",
        animateIn: "slideInUp",
        navText: [
            "<i class='bx bx-chevron-left' ></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
        responsive: {
            0: { items: 1, nav: false, dots: false },
            800: { items: 2, nav: false, dots: false },
            1000: { items: 3, dots: false, nav: true, loop: true },
        },
    });
    $(".guide-slider").owlCarousel({
        items: 3,
        loop: true,
        margin: 25,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: true,
        navText: [
            "<i class='bx bx-chevron-left' ></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
        responsive: {
            0: { items: 1, nav: false, dots: false },
            600: { items: 2, nav: false, dots: false },
            1000: { items: 3, dots: false, nav: true, loop: true },
        },
    });
    var element = $(".element");
    $(function () {
        element.typed({
            strings: ["Sintetis", "Non Sintetis"],
            typeSpeed: 190,
            loop: true,
        });
    });
})(jQuery);

function stringifyNumber(val) {
    return Number(val) < 10 ? "0" + val : "" + val;
}

// supported format: day, date, month, monthName, year, hour, minute. example: 'day, date month year'
function formatDate(val = new Date(), format = "year-month-date") {
    const days = [
        "Ahad / Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jum'at",
        "Sabtu",
    ];
    const months = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember",
    ];

    const monthsLess = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "Mei",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Okt",
        "Nov",
        "Des",
    ];

    if (typeof val == "string") val = new Date(val);

    let res = format;
    if (format.includes("minute"))
        res = res.replace("minute", stringifyNumber(val.getMinutes()));
    if (format.includes("hour"))
        res = res.replace("hour", stringifyNumber(val.getHours()));
    if (format.includes("day")) res = res.replace("day", days[val.getDay()]);
    if (format.includes("date"))
        res = res.replace("date", stringifyNumber(val.getDate()));
    if (format.includes("monthName"))
        res = res.replace("monthName", months[val.getMonth()]);
    if (format.includes("monthLess"))
        res = res.replace("monthLess", monthsLess[val.getMonth()]);
    else if (format.includes("month"))
        res = res.replace(
            "month",
            stringifyNumber(parseInt(val.getMonth()) + 1)
        );
    if (format.includes("year")) res = res.replace("year", val.getFullYear());

    return res;
}

function addHours(date, hours) {
    const newDate = new Date(date);
    newDate.setHours(newDate.getHours() + hours);
    return newDate.toISOString();
}

function getFullDate(dates) {
    let date = new Date(dates);
    let year = date.getFullYear();
    let month = date.getMonth() + 1;
    let dt = date.getDate();

    if (dt < 10) {
        dt = "0" + dt;
    }
    if (month < 10) {
        month = "0" + month;
    }

    var hr = date.getHours();
    let minutes = date.getMinutes();
    minutes = minutes <= 9 ? "0" + minutes : minutes;

    // console.log(year + '-' + month + '-' + dt + ' ' + hr + ':' + minutes)

    return year + "-" + month + "-" + dt + " " + hr + ":" + minutes;
}

function getHour(dates) {
    let date = new Date(dates);
    let year = date.getFullYear();
    let month = date.getMonth() + 1;
    let dt = date.getDate();

    if (dt < 10) {
        dt = "0" + dt;
    }
    if (month < 10) {
        month = "0" + month;
    }

    var hr = date.getHours();
    let minutes = date.getMinutes();
    minutes = minutes <= 9 ? "0" + minutes : minutes;

    // console.log(year + '-' + month + '-' + dt + ' ' + hr + ':' + minutes)

    return hr + ":" + minutes;
}

$(document).ready(function () {
    // $("#form-div").hide();
    let date = $("#tgl").val();

    $(".button-schedule").click(function () {
        var time = $(this).attr("id");
        var dt = new Date(date + " " + time);
        var time_start = addHours(dt, 0);
        $("#starts").val(time);
        $("#datestart").val(getFullDate(time_start));
        // $("#result-date").html(
        //     "Anda memilih tanggal " +
        //         formatDate(date, "date monthName year") +
        //         " Jam " +
        //         time
        // );
    });

    $(".check-out").timepicker({
        timeFormat: "H:mm",
        interval: 60,
        minTime: "08:00",
        maxTime: "18:00",
        dynamic: false,
        dropdown: true,
        scrollbar: true,
        change: function (time) {
            // the input field
            var element = $(this),
                text;
            // get access to this Timepicker instance
            var timepicker = element.timepicker();
            text = timepicker.format(time);
            var de = new Date(date + " " + text);
            var time_end = addHours(de, 0);
            // element.siblings('span.help-line').text(text);
            $("#dateend").val(getFullDate(time_end));
            var price = $("#price").val();
            var awal = new Date($("#datestart").val());
            var akhir = new Date(time_end);
            var hours = Math.abs(awal - akhir) / 36e5;
            // console.log(hours);
            if (awal > akhir) return;
            var finalPrice = Number(hours) * Number(price);
            $("#dateend").val(getFullDate(time_end));
            $("#duration").val(hours);
            $("#total_price").val(finalPrice);
            $("#total-div").html(finalPrice);
        },
    });

    function changeStatusAPI(code, status) {
        $.ajax({
            url:
                window.location.protocol +
                "//" +
                window.location.host +
                "/api/change_status",
            cache: false,
            type: "post",
            data: {
                code,
                status,
            },
            success: function (data) {
                //location = data;
                // console.log("token = " + data);
                console.log(data);
            },
        });
    }

    $("#pay-button").click(function (event) {
        event.preventDefault();
        $(this).attr("disabled", "disabled");
        var obj = JSON.parse($("#obj").val());

        $.ajax({
            url:
                window.location.protocol +
                "//" +
                window.location.host +
                "/api/token_midtrans",
            cache: false,
            type: "post",
            data: {
                code: obj.code_booking,
                product: {
                    name: `${obj.product_name} (${
                        obj.duration
                    } jam) - ${getHour(obj.start)} sampai ${getHour(obj.end)}`,
                    price: obj.product_price,
                    qty: obj.duration,
                },
                name: obj.name,
                email: obj.email,
                phone: obj.handphone,
                total: obj.total_price,
            },
            success: function (data) {
                //location = data;
                // console.log("token = " + data);

                var resultType = document.getElementById("result-type");
                var resultData = document.getElementById("result-data");
                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                    //resultType.innerHTML = type;
                    //resultData.innerHTML = JSON.stringify(data);
                }
                snap.pay(data.result, {
                    onSuccess: function (result) {
                        changeResult("success", result);
                        console.log(result.status_message);
                        console.log(result);
                        // $("#payment-form").submit();
                        // document.getElementById("result-json").innerHTML +=
                        //     JSON.stringify(result, null, 2);
                        changeStatusAPI(obj.code_booking, 1);
                        // location.reload();
                    },
                    onPending: function (result) {
                        changeResult("pending", result);
                        console.log(result);
                        // $("#payment-form").submit();
                        // document.getElementById("result-json").innerHTML +=
                        //     JSON.stringify(result, null, 2);
                        changeStatusAPI(obj.code_booking, 5);
                        // location.reload();
                    },
                    onError: function (result) {
                        changeResult("error", result);
                        console.log(result.status_message);
                        // $("#payment-form").submit();
                        // document.getElementById("result-json").innerHTML +=
                        //     JSON.stringify(result, null, 2);
                        location.reload();
                    },
                    onClose: function () {
                        /* You may add your own implementation here */
                        // alert('you closed the popup without finishing the payment');
                        $("#pay-button").removeAttr("disabled");
                        console.log("close");
                    },
                });
            },
        });
    });
});
