window.addEventListener("DOMContentLoaded", () => {
            
            title.innerText = titleInput.value;

            description.innerText = descriptionInput.value;

            category.innerText = categoryInput.value;

            const existingImgPath = previewPost.dataset.bg;
            if (existingImgPath) {
                previewPost.style.backgroundImage = `url('${existingImgPath}')`;
            } else {
                previewPost.style.backgroundImage = "url(../assets/img/null_small.png)";
            }
        });