document.addEventListener('DOMContentLoaded', function() {
    let today = new Date();
    let dd = today.getDate();
    let mm = today.getMonth() + 1; //Janeiro é 0!
    let yyyy = today.getFullYear();

    if (dd < 10) {
    dd = '0' + dd;
    }

    if (mm < 10) {
    mm = '0' + mm;
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("data").setAttribute("min", today)
})
