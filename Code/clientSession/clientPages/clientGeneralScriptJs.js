var sideBarTest = 1

function ThreeBarsClick() {
    sideBarTest++;

    if (sideBarTest % 2 == 0) {
        document.getElementById("sideBarWidth").style.width = "0%";
    }
    if (sideBarTest % 2 != 0) {
        document.getElementById("sideBarWidth").style.width = "20%";
    }
}