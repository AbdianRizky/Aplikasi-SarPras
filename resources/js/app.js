require("./bootstrap");

const dropdownToggle = $(".dropdown-toggle");
const wrapperMenu = $(".wrapper__menu");
const wrapperMenuChildren = wrapperMenu.children();
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

    $(window).innerWidth() >= 768
        ? dropdownToggle.click(e => {
              e.preventDefault();
              $.each(wrapperMenuChildren, (i, div) => {
                  $(div).toggleClass("menu-active" + i.toString());
              });
              nav.toggleClass("active");
          })
        : dropdownToggle
              .mouseenter(e => {
                  e.preventDefault();
                  $.each(wrapperMenuChildren, (i, div) => {
                      $(div).addClass("menu-active" + i.toString());
                  });
              })
              .mouseleave(e => {
                  e.preventDefault();
                  $.each(wrapperMenuChildren, (i, div) => {
                      $(div).removeClass("menu-active" + i.toString());
                  });
              });
});
