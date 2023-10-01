document.getElementById("scroll-to-form").addEventListener("click", function () {
    const formElement = document.getElementById("registration-form");
    if (formElement) {
        formElement.scrollIntoView({
            behavior: "smooth"
        });
    }
});