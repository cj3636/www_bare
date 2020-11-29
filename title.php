<div class="ui two wide column">
    <img class="ui medium centered image" src="img/logo.png" alt="logo">
</div>
<div class="ui fourteen wide column">
    <h1 class="ui title">Title</h1>
    <h3 class="ui description">Description</h3>
    <h3 id="desc" class="ui description">
        <script>
            let path = window.location.pathname;
            let page = path.split("/").pop();
            const index = "index.php";
            const about = "about.php";
            const faq = "faq.php";
            const tryptor = "tryptor.php";
            getName();

            function getName() {
                switch (page) {
                    case index:
                        document.getElementById("desc").innerHTML = "Home";
                        break;
                    case about:
                        document.getElementById("desc").innerHTML = "About";
                        break;
                    case faq:
                        document.getElementById("desc").innerHTML = "FAQ";
                        break;
                    case tryptor:
                        document.getElementById("desc").innerHTML = "Tryptor";
                        break;
                    default:
                        return "";
                }
            }
        </script>
    </h3>
</div>
