<footer
class="mt-5 py-5 text-center"
style="
background:rgba(15,23,42,0.8);
backdrop-filter:blur(10px);
"
>

    <div class="container">

        <h4 class="fw-bold mb-3 text-info">

            Doa Islami

        </h4>

    </div>

</footer>

<script>

window.addEventListener('load', function(){

    document.getElementById('loading').style.display = 'none';

});

function toggleDarkMode(){

    document.body.classList.toggle('dark-mode');

}

function copyDoa(text){

    navigator.clipboard.writeText(text);

    const toast = document.createElement('div');

    toast.innerHTML = `
        <div
        style="
        position:fixed;
        top:20px;
        right:20px;
        background:#0ea5e9;
        color:white;
        padding:12px 20px;
        border-radius:12px;
        z-index:99999;
        box-shadow:0 8px 20px rgba(0,0,0,0.3);
        "
        >
            Doa berhasil disalin
        </div>
    `;

    document.body.appendChild(toast);

    setTimeout(() => {

        toast.remove();

    }, 2000);

}

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>