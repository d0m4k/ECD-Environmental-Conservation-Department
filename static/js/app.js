function openMenu(e) {
    document.getElementById("menu-btn").style.display = "none";
    document.getElementById("close-menu-btn").style.display = "inline-block";
    document.getElementById("nav-menu").style.display = "block";
}

function closeMenu() {
    document.getElementById("menu-btn").style.display = "inline-block";
    document.getElementById("close-menu-btn").style.display = "none";
    document.getElementById("nav-menu").style.display = "none";
}