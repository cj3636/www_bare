<div class="sixteen wide column">
    <div class="ui stackable inverted menu">
        <a id="home" class="item" href="index.php"><i class="large green home icon"></i>
            <div class="ui title">Home</div>
        </a>
        <a id="about" class="item" href="about.php"><i class="large blue users icon"></i>
            <div class="ui title">About Us</div>
        </a>
        <a id="help" class="item" href="faq.php"><i class="large yellow question icon"></i>
            <div class="ui title">FAQ</div>
        </a>
        <div id="dropdown" class="ui inverted dropdown item">
            <i class="large purple plus circle icon"></i>
            <div class="ui title">Dropdown</div>
            <div class="ui inverted vertical menu">
                <a id="tryptor" href="tryptor.php" class="item">Tryptor</a>
            </div>
        </div>
    </div>
    <script>
        setMenuActive();

        function setMenuActive() {
            switch (page) {
                case index:
                    document.getElementById("home").className = "active item";
                    break;
                case faq:
                    document.getElementById("help").className = "active item";
                    break;
                case about:
                    document.getElementById("about").className = "active item";
                    break;
                case tryptor:
                    document.getElementById("tryptor").className = "active item";
                    break;
                default:
                    return "";
            }
        }

        $('.ui.dropdown').dropdown();
    </script>
</div>
