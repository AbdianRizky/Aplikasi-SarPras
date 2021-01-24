const { drop } = require("lodash");

require("./bootstrap");

const dropdownToggle = $(".dropdown-toggle");
const wrapperMenu = $(".wrapper__menu");
const wrapperMenuChildren = wrapperMenu.children();
const nav = $("#nav");
const userOnNav = $("#userOnNav");

$(document).ready(() => {
    dropdownToggle.click(() => {
        nav.toggleClass("active");
        // console.log($(window).width());
        $(window).width() < 768
            ? $.each(wrapperMenuChildren, (i, div) => {
                  $(div).toggleClass("menu-active" + i.toString());
              })
            : wrapperMenu.toggleClass("active");
    });
});
