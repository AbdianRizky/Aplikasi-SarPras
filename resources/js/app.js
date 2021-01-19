require("./bootstrap");

const profile = $(".profile-toggle");
const box = $(".box");
const modalStatus = $("#modal-status");
const modal = $(".modal");
const modalExit = $(".modal-exit");
const wrapperMenu = $(".wrapper__menu");
const nav = $("#nav");
const userOnNav = $("#userOnNav");

$(document).ready(() => {
    setInterval(() => {
        // console.log($(window).innerWidth());
        $(window).innerWidth() >= 768
            ? userOnNav.empty().append("Profil")
            : $(window).innerWidth() < 768
            ? userOnNav.empty().append("Username")
            : "";
    });

    profile.click(e => {
        e.preventDefault();
        if ($(window).innerWidth() >= 768) {
            wrapperMenu.toggleClass("open");
            nav.toggleClass("active");
        } else {
            wrapperMenu.children("#1").toggleClass("menu-active1");
            wrapperMenu.children("#2").toggleClass("menu-active2");
            wrapperMenu.children("#3").toggleClass("menu-active3");
            nav.toggleClass("active");
        }
    });

    //! Modal Toggle
    box.click(e => {
        e.preventDefault();
        modalStatus.addClass("active").removeClass("hidden");
        modal.css({
            transform: "translateY(0)",
            opacity: "1"
        });
    });

    //! Modal Exit
    modalExit.click(e => {
        e.preventDefault();
        modalStatus.addClass("hidden").removeClass("active");
        modal.css({
            transform: "translateY(30px)",
            opacity: "0"
        });
    });
});
