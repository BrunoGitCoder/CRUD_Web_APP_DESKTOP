document.addEventListener("DOMContentLoaded", () => {
    const deleteBox = document.getElementById("delete-confirm-box");
    const btnShow = document.getElementById("btn-show-delete-confirm");
    const btnCancel = document.getElementById("btn-cancel-delete");

    btnShow.addEventListener("click", (e) => {
        e.preventDefault();
        deleteBox.style.display = "block";
        btnShow.style.display = "none";
    });

    btnCancel.addEventListener("click", (e) => {
        e.preventDefault();
        deleteBox.style.display = "none";
        btnShow.style.display = "inline-block";
    });
});
