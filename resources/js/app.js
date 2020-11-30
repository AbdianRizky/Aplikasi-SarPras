require("./bootstrap");

const profile = $(".profile-toggle");
const dropdownSect = $("ul");
const box = $(".box");
const modalStatus = $("#modal-status");
const modal = $(".modal");
const modalExit = $(".modal-exit");

$(document).ready(() => {
    //! Dropdown Toggle
    profile
        .click(() => {
            dropdownSect.slideToggle(280);
        })
        .mouseleave(() => {
            dropdownSect.slideUp(280);
        });

    //! Modal Toggle
    box.click(function(e) {
        e.preventDefault();
        modalStatus.addClass("active").removeClass("hidden");
        modal.css({
            transform: "translateY(0)",
            opacity: "1"
        });
    });

    //! Modal Exit
    modalExit.click(() => {
        modalStatus.addClass("hidden").removeClass("active");
        modal.css({
            transform: "translateY(30px)",
            opacity: "0"
        });
    });
});
