document.addEventListener('DOMContentLoaded', function () {
    const teiki_form = document.getElementById("teiki_form");

    document.addEventListener('submit', (e) => {
        const teiki_submit = document.getElementById("teiki_submit");
        teiki_submit.setAttribute('style', 'pointer-events:none;');
    });
});
