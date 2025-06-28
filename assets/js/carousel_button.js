document.addEventListener("DOMContentLoaded", function () {
    const carousels = document.querySelectorAll(".carousel-box-row");

    carousels.forEach(carousel => {
        const btnLeft = carousel.querySelector(".btn-left");
        const btnRight = carousel.querySelector(".btn-right");
        const row = carousel.querySelector(".carousel-row");

        const scrollAmount = 2200;

        function checkLeft() {
            setTimeout(() => {
                if (row.scrollLeft <= 0) {
                    btnLeft.style.display = "none";
                }
            }, 650);
        }

        function checkRight() {
            setTimeout(() => {
                if (row.scrollLeft + row.clientWidth >= row.scrollWidth - 10) {
                    btnRight.style.display = "none";
                }
            }, 650);
        }

        if (btnLeft && btnRight && row) {
            btnLeft.addEventListener("click", () => {
                row.scrollBy({
                    left: -scrollAmount,
                    behavior: "smooth"
                });
                checkLeft();
            });

            btnRight.addEventListener("click", () => {
                row.scrollBy({
                    left: scrollAmount,
                    behavior: "smooth"
                });
                checkRight();
            });

            btnLeft.addEventListener("mouseenter", () => {
                btnLeft.style.display = "block";
            });

            btnRight.addEventListener("mouseenter", () => {
                btnRight.style.display = "block";
            });

            row.addEventListener("mouseenter", () => {
                if (row.scrollLeft > 0) {
                    btnLeft.style.display = "block";
                }
                if (row.scrollLeft + row.clientWidth <= row.scrollWidth - 1) {
                    btnRight.style.display = "block";
                }
            });

            row.addEventListener("mouseleave", () => {
                btnLeft.style.display = "none";
                btnRight.style.display = "none";
            });
        }
    });
});