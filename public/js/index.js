// 定期イベント応募時の送信ボタン二重送信防止
document.addEventListener('DOMContentLoaded', function () {
    const teiki_form = document.getElementById("teiki_form");

    document.addEventListener('submit', (e) => {
        const teiki_submit = document.getElementById("teiki_submit");
        teiki_submit.setAttribute('style', 'pointer-events:none;');
    });
});

// 秋保イベント応募時の送信ボタン二重送信防止
document.addEventListener("DOMContentLoaded", function () {
    const akiu_form = document.getElementById("akiu_form");

    document.addEventListener("submit", (e) => {
        const akiu_submit = document.getElementById("akiu_submit");
        akiu_submit.setAttribute("style", "pointer-events:none;");
    });
});

// 委託イベント応募時の送信ボタン二重送信防止
document.addEventListener("DOMContentLoaded", function () {
    const itaku_form = document.getElementById("itaku_form");

    document.addEventListener("submit", (e) => {
        const itaku_submit = document.getElementById("itaku_submit");
        itaku_submit.setAttribute("style", "pointer-events:none;");
    });
});
