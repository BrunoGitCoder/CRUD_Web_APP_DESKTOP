const pass = document.getElementById("pass")
const passconfir = document.getElementById("passconfir")
const lock = document.getElementById("lock")
const lockconfir = document.getElementById("lockconfir")

function showpass() {
    const isHiden = pass.type === "password"
    pass.type = isHiden
        ? "text"
        : "password"
    lock.src = isHiden
        ? "/crud_web_app/assets/img/icon_unlock.png"
        : "/crud_web_app/assets/img/icon_lock.png"
}
function showpassconfir() {
    const isHiden = passconfir.type === "password"
    passconfir.type = isHiden
        ? "text"
        : "password"
    lockconfir.src = isHiden
        ? "/crud_web_app/assets/img/icon_unlock.png"
        : "/crud_web_app/assets/img/icon_lock.png"
}