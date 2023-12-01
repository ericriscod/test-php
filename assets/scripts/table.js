
const handleTableTheme = function () {
    const tableBody = document.querySelector(".portlet-title");
    const cards = document.querySelectorAll(".more");

    cards.forEach(e => {
        e.addEventListener("click", e => {
            const cardBackgroundColor = window.getComputedStyle(e.target).backgroundColor;
            tableBody.style.background = cardBackgroundColor;
        });
    });
}();


