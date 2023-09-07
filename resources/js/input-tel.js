const inputTel = document.querySelectorAll('.input-only-number')
if (inputTel.length > 0) {
    inputTel.forEach(input => {
        input.addEventListener('keypress', function (e) {
            const charCode = e.which || e.keyCode

            if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
                e.preventDefault();
            }
        })
    })
}
