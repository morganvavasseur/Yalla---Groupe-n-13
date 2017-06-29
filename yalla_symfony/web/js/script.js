var burger_menu = document.querySelector(".burger_menu");
var nav = document.querySelector(".header_nav");
var body = document.querySelector("body");

burger_menu.addEventListener("click", function()
{
	this.classList.toggle("menu_on");


		nav.classList.toggle("header_nav_open");
		body.classList.toggle("header_nav_body");


});