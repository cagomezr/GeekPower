function openNav() {
    document.getElementById("navBackground").style.display = "block";
    document.getElementById("mySidenav").style.maxWidth = "400px";
    document.getElementById("mySidenav").style.minWidth = "250px";
    document.getElementById("mySidenav").style.width = "35%";
}

function closeNav() {
    document.getElementById("navBackground").style.display = "none";
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("mySidenav").style.maxWidth = "0px";
    document.getElementById("mySidenav").style.minWidth = "0px";
}