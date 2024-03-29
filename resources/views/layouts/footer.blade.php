<style>
    footer.site-footer {
        padding: 60px 30px;
        background: #000000;
        color: #999999;
        font-size: 10pt;
        border-top: 1px solid #eab902;
    }

    div#footer-container {
        width: 90%;
        margin: 0 auto;
        transition: all 0.2s ease;
    }

    div#footer-grid {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-bottom: 60px;
    }


    footer#footer-4-cols div#left-footer-section {
        flex-basis: 33.33%;
        padding-right: 20px;
    }

    footer#footer-4-cols div#first-footer-section {
        flex-basis: 22.22%;
        border-right: 1px solid #444444;
        padding-right: 20px;
        padding-left: 20px;
    }

    footer#footer-4-cols div#second-footer-section {
        flex-basis: 22.22%;
        padding-right: 20px;
        padding-left: 20px;
    }

    footer#footer-4-cols div#right-footer-section {
        flex-basis: 22.22%;
        padding-left: 20px;
    }

    footer#footer-4-cols div#footer-logo-section {
        display: flex;
        align-items: center;
    }

    footer#footer-4-cols div#footer-logo {
        width: 120px;
        margin-right: 30px;
    }

    footer#footer-4-cols div#footer-search input {
        font-family: "Open Sans", sans-serif;
        border: 2px solid #999999;
        background: #2a2a2a;
        outline: none;
        color: #999999;
        padding: 2px;
        width: 130px;
    }

    footer#footer-4-cols div#footer-search button {
        font-family: "Open Sans", sans-serif;
        border: 2px solid #999999;
        background: transparent;
        color: #cecece;
        padding: 2px 10px;
        margin-left: 10px;
        cursor: pointer;
    }

    footer#footer-4-cols div#footer-search button:hover {
        background: #cecece;
        color: #666666;
        border: 2px solid #666666;
        transition: all 0.25s ease;
    }

    footer#footer-4-cols div#footer-search button:active {
        position: relative;
        top: 1px;
    }

    footer#footer-4-cols div.footer-section h3 {
        margin: 0;
        margin-bottom: 30px;
        font-size: 12pt;
    }

    footer#footer-4-cols div#footer-logo img {
        width: 100%;
    }

    footer#footer-4-cols div.footer-information p {
        margin-top: 10px;
    }

    footer#footer-4-cols div.footer-information p:first-child {
        margin-top: 30px;
    }

    footer#footer-4-cols div.footer-information p:last-child {
        margin-bottom: 0;
    }

    footer#footer-4-cols div.footer-information p img {
        margin-right: 0.75em;
    }

    footer#footer-4-cols div.footer-tags a.footer-tag {
        text-decoration: none;
        color: #999999;
        border: 1px solid #666666;
        background: #282828;
        padding: 0.2em 0.38em;
        margin: 0 0.68em 0.68em 0;
        display: block;
        float: left;
        font-size: 9pt;
        font-style: italic;
    }

    footer#footer-4-cols div.footer-tags a.footer-tag:hover {
        background: #666666;
        color: #282828;
        transition: all 0.2s ease;
    }

    footer#footer-4-cols div.footer-section ul {
        margin-top: 15px;
        margin-bottom: 0;
        padding: 0;
    }

    footer#footer-4-cols div.footer-links ul li, footer#footer-4-cols div.footer-links ul li a   {
        list-style: none;
        color: #999999;
        line-height: 1.38em;
        margin-bottom: 1em;
    }

    footer#footer-4-cols div.footer-links ul li:last-child, footer#footer-4-cols div.footer-links ul li a:last-child   {
        margin-bottom: 0;
    }

    footer#footer-4-cols div.footer-section ul li a:hover {
        color:#00bdc6;
        transition: all 0.2s ease;
    }

    footer#footer-4-cols div#copyright-information {
        border-top: 1px solid #444444;
        padding: 30px 0 0 0;
        text-align: center;
        display: flex;
        align-items: center;
    }

    footer#footer-4-cols div#copyright-information div#social-buttons {
        margin-left: auto;

    }

    footer#footer-4-cols div#copyright-information div#social-buttons img {
        margin-left: 0.68em;
        cursor: pointer;
        font-size: 14pt;
    }


    /*==== media queries for footer-4-columns ====*/

    @media screen and (max-width: 960px){

        div#footer-container {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        div#footer-grid {
            flex-direction: column;
            width: 480px;
            margin: 0 auto;
            padding-bottom: 60px;
        }

        footer#footer-4-cols div#left-footer-section {
            border-right: 0;
            padding-bottom: 30px;
        }

        footer#footer-4-cols div#second-footer-section {
            border-right: none;
            padding-left: 0;
            padding-right: 0;
            padding-bottom: 30px;
        }

        footer#footer-4-cols div.footer-section {
            padding-top: 30px;
        }

        footer#footer-4-cols div.footer-section h3 {
            text-align: center;
        }

        footer#footer-4-cols div.footer-section:first-child {
            padding-top: 0;
            padding-bottom: 0;
        }

        footer#footer-4-cols div#first-footer-section {
            padding-left: 0;
            padding-right: 0;
            padding-bottom: 30px;
            border-right: none;
        }

        footer#footer-4-cols div.footer-tags a.footer-tag {
            font-size: 11pt;
            padding: 0.32em 0.5em;
        }

        footer#footer-4-cols div#right-footer-section {
            padding-left: 0;
            padding-right: 0;
        }

        footer#footer-4-cols div#second-footer-section ul,
        footer#footer-4-cols div#right-footer-section ul {
            margin: 0;
            padding: 0;
            font-size: 11pt;
            text-align: center;
        }

        footer#footer-4-cols div.footer-links ul li {
            margin: 0;
        }

        footer#footer-4-cols div.footer-links ul li a {
            margin: 0;
            display: block;
            padding: 15px;
            background: #2a2a2a;
            border-bottom: 1px solid #444444;
            text-decoration: none;
        }

        footer#footer-4-cols div.footer-links ul li:last-child a {
            border-bottom: none;
        }

        footer#footer-4-cols div#footer-search input {
            width: calc(100% - 77px);
        }

        footer#footer-4-cols div#copyright-information {
            display: block;
            width: 480px;
            margin: 0 auto;
        }

        footer#footer-4-cols div#copyright-information div#social-buttons {
            padding: 15px 0;
        }

        footer#footer-4-cols div#copyright-information div#social-buttons i.fa:first-child {
            margin-left: 0;
        }

        footer#footer-4-cols div#copyright-information div#footer-logo-section {
            display: block;
            align-items: normal;
        }

        footer#footer-4-cols div#copyright-information div#footer-logo {
            display: block;
            width: 100%;
            margin: 0;
        }

        footer#footer-4-cols div#copyright-information div#footer-logo img {
            width: 30px;
            text-align: center;
        }

        footer#footer-4-cols div#copyright-information div#copyright-text {
            display: block;
            text-align: center;
            padding: 15px 0;
        }

        footer#footer-4-cols div#copyright-information div#social-buttons i.fa {
            font-size: 24pt;
        }
    }

    @media screen and (max-width: 576px) {

        div#footer-grid {
            width: 100%;
        }

        footer#footer-4-cols div#footer-search input {
            width: calc(100% - 77px);
        }

        footer#footer-4-cols div.footer-information {
            margin: 0 auto;
        }

        footer#footer-4-cols div#copyright-information {
            width: 100%;
            margin: 0 auto;
        }

        footer#footer-4-cols div#copyright-information div#copyright-text {
            width: 100%;
        }

        footer#footer-4-cols div#copyright-information div#social-buttons {
            width: 100%;
        }
    }
</style>
<footer id="footer-4-cols" class="site-footer">
    <div id="footer-container">
        <div id="copyright-information">
            <div id="footer-logo-section">
                <div id="footer-logo">
                    <img src="{{URL::to('/assets/images/aep-logo2.png')}}" alt="Brand logo"  style="object-fit: cover;">
                </div></div>
            <div id="copyright-text">
                &copy; AEAP Inc. 2022. All rights reserved.
            </div>
            <div id="social-buttons">
                <img src="https://img.icons8.com/ios-filled/25/999999/facebook--v1.png"/><img src="https://img.icons8.com/ios-filled/25/999999/telegram-app.png"/><img src="https://img.icons8.com/ios-filled/25/999999/pinterest--v1.png"/><img src="https://img.icons8.com/ios-filled/25/999999/instagram--v1.png"/>
            </div>
        </div>
    </div>
</footer>
