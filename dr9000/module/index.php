<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="/style/main.css">
    <link rel="Shortcut Icon" href="/favicon.ico">
    <meta name="robots" content="noindex, nofollow, noarchive, noimageindex">
    <meta name="AdsBot-Google" content="noindex">
    <meta name="googlebot-news" content="noindex">
    <meta name="google" content="notranslate">
    <title>ipr | hoshinetsu</title>
</head>

<body>
    <main>
        <header>
            <div style="width: fit-content;">
                <div class="logotype" style="margin:0 auto;" onclick="window.location.href='/ipr/'" title=":3">
                    ho<span>shine</span>tsu<br>
                    <div class="lore">intellectual property repository</div>
                </div>
            </div>
            <nav>
                <ul id="menu-static">
                    <li title="visit the homepage of my website">
                        <span>&lang;&nbsp;</span><a href="/">main website</a><span>&nbsp;&rang;</span>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <article class="ipr">
                <div class="title" title="article header">
                    <h2 data-nosnippet><span class="green link" onclick="window.location.href='/'" title="homepage">~</span>/<span class="lime">ipr</span>::<span class="lime">module</span>
                    </h2>

                    <?php
                    if (!isset($_POST['token'])) {
                        print('<p class="red">Oopsie- where da token?</p></div>');
                    } else {
                        $token = trim($_POST['token']);
                        if (strlen(preg_replace("^[0-9a-f]{32}$", "", $token)) != 0 or strlen($token) != 32) {
                            print('<p class="red">Invalid token!</p></div>');
                        } else {
                            $path  = trim("data/" . $token . "/page.htm");
                            if (file_exists($path)) {
                                print('<p class="green">Tokencho says: I\'m OKAY (I mean this)</p>');
                                print '</div><div id="' . htmlspecialchars($token) . '">';

                                $file = fopen($path, "r");
                                while (!feof($file)) {
                                    print fgets($file);
                                }
                                fclose($file);
                                print '</div>';
                            } else {
                                print('<p class="red">Tokencho says: I\'m NOT OKAYyy~</p></div>');
                                print('<h1 class="red">p-page not found ;-;</h1>');
                            }
                        }
                    }
                    ?>

            </article>
        </div>
        <footer>
            <div class="text">
                <code class="center gapped">/*&nbsp;copyright &copy; 2022 <a href="#" title="back to top">hoshinetsu</a>&nbsp;*/<br>/*&nbsp;made with <span class="glow-dark">🖤</span> &and; <span class="glow-dark">☕</span>&nbsp;*/</code>
            </div>
        </footer>
    </main>
</body>

</html>