require("./bootstrap");
$(document).ready(() => {
    //! Dropdown Toggle
    $(".profile-toggle")
        .click(function() {
            $("ul").slideToggle(280);
        })
        .mouseleave(function() {
            $("ul").slideUp(280);
        });

    //! Modal Toggle
    $(".box").click(function(e) {
        e.preventDefault();
        $(".bgmodal")
            .addClass("active")
            .removeClass("bgmodal");
    });

    //! Modal Exit
    $(".modal-exit").click(function(e) {
        e.preventDefault();
        $(".active")
            .addClass("bgmodal")
            .removeClass("active");
    });
});
