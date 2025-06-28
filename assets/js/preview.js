const fileInput = document.getElementById("fileInput");
const previewPost = document.getElementById("preview-img");
fileInput.addEventListener("change", () => {
    const file = fileInput.files[0];
    if (file) {
        const path = URL.createObjectURL(file);
        previewPost.style.backgroundImage = `url('${path}')`
    } else {
        previewPost.style.backgroundImage = "url(../assets/img/null_small.png)"
    }
})

const title = document.getElementById("title");
const titleInput = document.getElementById("title-input");
titleInput.addEventListener("change", () => {
    title.innerText = titleInput.value;
})

const description = document.getElementById("description");
const descriptionInput = document.getElementById("description-input");
descriptionInput.addEventListener("change", () => {
    description.innerText = descriptionInput.value;
})

const category = document.getElementById("category");
const categoryInput = document.getElementById("category-input");
categoryInput.addEventListener("change", () => {
    category.innerText = categoryInput.value;
})
