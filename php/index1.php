
<!DOCTYPE html>
<html lang="en">

<head>
    <title>mobile-legend - VIBOLSTORE</title>
    <meta name="description"
        content="VIBOLSTORE is a comprehensive website that serves as a one-stop destination for top-up services across various games." />
    <meta property="og:title" content="mobile-legend - VIBOLSTORE" />
    <meta property="og:description"
        content="At VIBOLSTORE, we prioritize customer satisfaction, offering competitive prices, reliable service, and excellent customer support. Whether you need to replenish your in-game." />
    <meta property="og:image"
        content="https://img.smile.one/media/catalog/product/z/q1/zq1jgt7x4v0ysia1602834857.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style data-tag="reset-style-sheet">
        html {
            line-height: 1.15;
        }

        body {
            margin: 0;
        }

        * {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
        }

        p,
        li,
        ul,
        pre,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        figure,
        blockquote,
        figcaption {
            margin: 0;
            padding: 0;
        }

        button {
            background-color: transparent;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] 
            /* -webkit-appearance:  */
        

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        button:-moz-focus,
        [type="button"]:-moz-focus,
        [type="reset"]:-moz-focus,
        [type="submit"]:-moz-focus {
            outline: 1px dotted ButtonText;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        input {
            padding: 2px 4px;
        }

        img {
            display: block;
        }

        html {
            scroll-behavior: smooth
        }
    </style>
    <style data-tag="default-style-sheet">
        html {
            font-family: Inter;
            font-size: 16px;
        }

        body {
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            letter-spacing: normal;
            line-height: 1.15;
            color: var(--dl-color-gray-black);
            background-color: var(--dl-color-gray-white);

        }

        /* Styles for alert messages */
        /* Default styles for the alert */
        .alert {
            position: fixed;
            top: 90px;
            left: 50%;
            width: 90%;
            /* Default width for screens other than desktop */
            transform: translateX(-50%);
            padding: 20px;
            border-radius: 8px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
            z-index: 200;
            /* Add z-index property here */
        }

        /* Media query for desktop screens */
        @media screen and (min-width: 1024px) {
            .alert {
                width: 30%;
                /* Set width to 50% for desktop screens */
            }
        }


        .alert.show {
            opacity: 1;
            visibility: visible;
        }

        .alert.error {
            background-color: #FFCCCC;
            color: #FF0000;
        }

        .alert.success {
            background-color: #CCFFCC;
            color: #008000;
        }

        .alert .message {
            margin-right: 10px;
        }

        .alert svg {
            width: 24px;
            height: 24px;
        }

        /* Styles for disabled buttons */
        button:disabled {
            background-color: rgba(225, 71, 71, 0.17);
            /* Change the background color to blue */
            color: white;
            /* Change the text color to white */
            cursor: not-allowed;
            /* Change the cursor to not-allowed */
        }

        .mobile-legend-container22,
        .mobile-legend-container23 {
            padding: 20px;
            cursor: pointer;
            margin-bottom: 0px;
        }

        .mobile-legend-container22 input[type="radio"],
        .mobile-legend-container23 input[type="radio"] {
            display: none;
        }

        .mobile-legend-container22.selected,
        .mobile-legend-container23.selected {
            background-color: #A569BD;
        }

        .container {
            text-align: center;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .modal-header {
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .modal-header h2 {
            margin: 0;
            color: #333;
        }

        .modal-body {
            margin: 20px 0;
        }

        .modal-body p {
            color: #555;
        }

        .modal-footer {
            border-top: 1px solid #eee;
            padding-top: 10px;
            margin-top: 10px;
        }

        .button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .button-primary {
            background-color: #007bff;
            color: white;
        }

        .button-primary:hover {
            background-color: #0056b3;
        }

        .button-secondary {
            background-color: #dc3545;
            color: white;
        }

        .button-secondary:hover {
            background-color: #c82333;
        }

        .icon {
            font-size: 50px;
            color: #f0ad4e;
            margin-bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="shortcut icon" href="icon/logo1.jpg" type="icon/png" sizes="32x32" />
    <link rel="stylesheet"
        href="css/index1.css"
        data-tag="font" />
    <link rel="stylesheet" href="css/index2.css"
        data-tag="font" />
    <link rel="stylesheet"
        href="css/index3.css"
        data-tag="font" />
    <link rel="stylesheet" href="css/index4.css"
        data-tag="font" />
    <link rel="stylesheet"
        href="css/index5.css"
        data-tag="font" />
    <link rel="stylesheet"
        href="css/index6.css"
        data-tag="font" />
    <link rel="stylesheet" href="css/index7.css" />
</head>

<body>
    <link rel="stylesheet" href="css/index8.css" />
    <div>
        <link href="css/index9.css" rel="stylesheet" />
        <!-- Maintenance Modal -->
        <div id="maintenanceModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon">&#9888;</div> <!-- Maintenance icon -->
                    <h2>Maintenance Mode</h2>
                </div>
                <div class="modal-body">
                    <p>The game is currently under maintenance. Please try again later.</p>
                </div>
                <div class="modal-footer">
                    <button class="button button-primary" id="refreshButton">Close</button>
                </div>
            </div>
        </div>
        <!-- Alert messages -->
        <div class="alert error" id="errorAlert">
            <span class="message">Error occurred!</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red">
                <path d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-12h2v8h-2zm0 10h2v2h-2z" />
            </svg>
        </div>

        <div class="alert success" id="successAlert">
            <span class="message">Operation successful!</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="green">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84l3.46-4.37c.31-.39.91-.42 1.27-.05.37.36.39.94.05 1.32L17.63 5.84zM7.27 12.74l-2.74-3.47L16.18 7l2.74 3.47-11.65 2.27z" />
            </svg>
        </div>
        <div class="mobile-legend-container">
            <div class="mobile-legend-about-game"><img alt="image"
                    src="icon/haya.jpg"
                    class="mobile-legend-image" />
                <div class="mobile-legend-titles"><img alt="image"
                        src="icon/1.png" class="mobile-legend-image01" /><span
                        class="mobile-legend-text">Claim Extra Discount Coupons up to
                        15%&gt;&gt;</span></div>
                <div class="mobile-legend-gameinfor"><img alt="image"
                        src="icon/logo ml.jpg"
                        class="mobile-legend-image02" />
                    <div class="mobile-legend-container01">
                        <h1 class="mobile-legend-namegame">Mobile Legends</h1>
                        <div class="mobile-legend-container02"><img alt="image"
                                src="icon/3.png"
                                class="mobile-legend-safe" /><span class="mobile-legend-safe1">Safety
                                Guarantee</span><img alt="image"
                                src="icon/4.png"
                                class="mobile-legend-safe2" /><span class="mobile-legend-safe3"><span>Instant
                                </span><span>Delivery</span></span></div>
                        <div class="mobile-legend-container03"><img alt="image"
                                src="icon/5.webp"
                                class="mobile-legend-safe4" /><span class="mobile-legend-safe5"><span
                                    class="mobile-legend-text003">Cambodia&nbsp;</span><br /></span></div>
                    </div>
                </div>
                <div class="mobile-legend-download"><img alt="image"
                        src="icon/ios.600a913-200h.png" class="mobile-legend-image03" /><img
                        alt="image" src="icon/android.2474498-200h.png" class="mobile-legend-image04" />
                </div>
                <div class="mobile-legend-more"><span class="mobile-legend-text005">Mobile Legends: Bang Bang (ML,
                        MLBB), the
                        most popular 5v5 MOBA
                        game on mobile</span><img alt="image"
                        src="icon/kagura.jpg"
                        class="mobile-legend-image05" /><span class="mobile-legend-text006"><span>How to top
                            up?</span><br class="mobile-legend-text008" /><br /><span>1. Select product and payment
                            method</span><br /><span>2.
                            Enter your Mobile Legends User ID and Zone ID</span><br /><span>3. Enter your email to
                            receive a
                            receipt</span><br /><span>4. Click buy now to make the payment</span><br /><span>5. The
                            diamonds will be
                            instantly delivered to your Mobile
                            Legends account.</span><br /><span>Current Offers🎁</span><br /><span>💎 Up to 15% OFF
                            Year-End Sale
                            Discounts</span><br /><span>Stay Connected🥰
                        </span><br /><span>👉FaceBook</span><br /><span>-----------------------------------------------</span><br /><span>JollyMax:
                            Max Your Top-Up Joy</span><br /><span>1.Official Partners</span><br /><span>Working directly
                            with the
                            world's leading producers, we offer
                            10,000+ items of games and entertainment.</span><br /><span>2.Smooth &amp; Reliable
                            Purchase</span><br /><span>We provide easy, safe payments with 350+ payment
                            options.</span><br /><span>3.Localized customer support</span><br /><span>We provide expert
                            localization
                            services in different
                            languages.</span><br /><span>4.Surprise offers</span><br /><span>Join us and get the latest
                            promotions for
                            your favorite
                            games.</span><br /><span>5.Instant Delivery</span><br /><span>The items will be added to
                            your account
                            instantly wherever you
                            go.</span></span></div>
            </div>
            <div class="mobile-legend-product">
                <div class="mobile-legend-check-id">
                    <div class="mobile-legend-titles1">
                        <div class="mobile-legend-container04"><img alt="image"
                                src="icon/7.png" class="mobile-legend-image06" />
                            <h1 class="mobile-legend-text051">1</h1>
                        </div>
                        <h1 class="mobile-legend-text052">Enter the User ID</h1>
                    </div>
                    <form class="mobile-legend-form">
                        <input type="text" id="userid" name="userid" required placeholder="Game User ID"
                            class="mobile-legend-textinput input" oninput="validateNumberInput(this)" />
                        <input type="number" id="zoneid" name="zoneid" placeholder="(Server ID)"
                            class="mobile-legend-textinput input" oninput="validateNumberInput(this)" />
                    </form>
                    <div class="mobile-legend-button">
                        <button type="button" onclick="makeApiRequest()" class="mobile-legend-button1 button"
                            id="submit">Check</button>
                        <span id="responseName" class="mobile-legend-text053"></span>
                    </div>
                    <span class="mobile-legend-text054">ចុចលើរូបAvatarនៅជ្រុងខាងឆ្វេងខាងលើនៃអេក្រង់ហ្គេម
                        ដើម្បីស្វែងរកលេខ User ID
                        របស់អ្នក។ រួចចុចប៊ូតុង Check ID ដើម្បីផ្ទៀងមើលឈ្មោះ (Account Name)</span>
                </div>
                <div class="mobile-legend-check-id1">
                    <div class="mobile-legend-titles2">
                        <div class="mobile-legend-container05"><img alt="image"
                                src="icon/7.png" class="mobile-legend-image07" />
                            <h1 class="mobile-legend-text055">2</h1>
                        </div>
                        <h1 class="mobile-legend-text056">Select the Products</h1>
                    </div>
                    <div class="mobile-legend-item">
                        <div itemid='1' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>11</span><span class='mobile-legend-text058'>0.25 $</span></div><div itemid='2' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>56</span><span class='mobile-legend-text058'>0.85 $</span></div><div itemid='3' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>86</span><span class='mobile-legend-text058'>1.30 $</span></div><div itemid='4' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>112</span><span class='mobile-legend-text058'>1.80 $</span></div><div itemid='5' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>172</span><span class='mobile-legend-text058'>2.69 $</span></div><div itemid='6' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>257</span><span class='mobile-legend-text058'>3.80 $</span></div><div itemid='7' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>280(Full Tickets)</span><span class='mobile-legend-text058'>4.19 $</span></div><div itemid='8' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>344</span><span class='mobile-legend-text058'>4.89 $</span></div><div itemid='9' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>429</span><span class='mobile-legend-text058'>6.39 $</span></div><div itemid='10' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>514</span><span class='mobile-legend-text058'>7.39 $</span></div><div itemid='11' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>600</span><span class='mobile-legend-text058'>8.49 $</span></div><div itemid='12' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>706</span><span class='mobile-legend-text058'>9.99 $</span></div><div itemid='13' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>792</span><span class='mobile-legend-text058'>10.99 $</span></div><div itemid='14' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>878</span><span class='mobile-legend-text058'>12.99 $</span></div><div itemid='15' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>963</span><span class='mobile-legend-text058'>13.99 $</span></div><div itemid='16' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>1050</span><span class='mobile-legend-text058'>14.49 $</span></div><div itemid='17' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>1136</span><span class='mobile-legend-text058'>15.99 $</span></div><div itemid='18' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>1222</span><span class='mobile-legend-text058'>17.99 $</span></div><div itemid='19' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>1412</span><span class='mobile-legend-text058'>19.99 $</span></div><div itemid='20' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>1584</span><span class='mobile-legend-text058'>21.99 $</span></div><div itemid='21' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>1756</span><span class='mobile-legend-text058'>25.50 $</span></div><div itemid='22' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>1928</span><span class='mobile-legend-text058'>26.99 $</span></div><div itemid='23' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>2195</span><span class='mobile-legend-text058'>30.99 $</span></div><div itemid='24' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>2539</span><span class='mobile-legend-text058'>34.99 $</span></div><div itemid='25' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>2901</span><span class='mobile-legend-text058'>39.99 $</span></div><div itemid='26' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>3688</span><span class='mobile-legend-text058'>49.99 $</span></div><div itemid='27' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>4394</span><span class='mobile-legend-text058'>59.99 $</span></div><div itemid='28' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>5100</span><span class='mobile-legend-text058'>69.99 $</span></div><div itemid='29' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>5532</span><span class='mobile-legend-text058'>75.99 $</span></div><div itemid='30' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>6238</span><span class='mobile-legend-text058'>83.99 $</span></div><div itemid='31' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>6944</span><span class='mobile-legend-text058'>93.99 $</span></div><div itemid='32' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>7727</span><span class='mobile-legend-text058'>108.99 $</span></div><div itemid='33' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>8433</span><span class='mobile-legend-text058'>119.99 $</span></div><div itemid='34' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>9288</span><span class='mobile-legend-text058'>128.99 $</span></div><div itemid='35' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>10080</span><span class='mobile-legend-text058'>142.99 $</span></div><div itemid='36' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>10700</span><span class='mobile-legend-text058'>151.99 $</span></div><div itemid='37' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>11483</span><span class='mobile-legend-text058'>163.99 $</span></div><div itemid='38' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>12189</span><span class='mobile-legend-text058'>178.99 $</span></div><div itemid='39' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>13682</span><span class='mobile-legend-text058'>199.99 $</span></div><div itemid='40' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>15526</span><span class='mobile-legend-text058'>209.99 $</span></div><div itemid='41' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://img.smile.one/media/catalog/product/7/i3/7i3b3b5rim98ydd1717756010.png' class='mobile-legend-image08' /><span class='mobile-legend-text057'>Coupon</span><span class='mobile-legend-text058'>4.50 $</span></div><div itemid='42' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://i.ibb.co/kMSr9Yy/Untitled.png' class='mobile-legend-image08' /><span class='mobile-legend-text057'>Weekly</span><span class='mobile-legend-text058'>1.75 $</span></div><div itemid='43' class='mobile-legend-container06' onclick='selectItem(this)'><img alt='image' src='https://mlbbpay.ru/wp-content/uploads/2023/10/9jwullbn55b88wof265qbets3yq4i9fi.webp' class='mobile-legend-image08' /><span class='mobile-legend-text057'>Twillpass</span><span class='mobile-legend-text058'>8.49 $</span></div>
                    </div>
                </div>
                <div class="mobile-legend-payment">
                    <div class="mobile-legend-titles3">
                        <div class="mobile-legend-container21"><img alt="image"
                                src="icon/7.png" class="mobile-legend-image23" />
                            <h1 class="mobile-legend-text087">3</h1>
                        </div>
                        <h1 class="mobile-legend-text088">Payment Method</h1>
                    </div>
                    <div class="mobile-legend-item1">
                        <div class="mobile-legend-container22">
                            <input type="radio" name="payment-method" class="payment-radio" id="payment-aba-pay">
                            <img alt="image" src="icon/9.webp"
                                class="mobile-legend-image24">
                            <span class="mobile-legend-text089">
                                <span>ABA KHQR</span><br>
                                <span class="mobile-legend-text092">Scan to pay with any banking app</span><br>
                            </span>
                        </div>
                        <!-- <div class="mobile-legend-container23">
        <input type="radio" name="payment-method" class="payment-radio" id="payment-aba-pay">
        <img alt="image" src="public/assets/image/icon/abapay-200h-200h-200h.webp" class="mobile-legend-image25">
        <span class="mobile-legend-text094">
            <span>ABA Pay</span><br>
            <span class="mobile-legend-text097">Scan to pay with any banking app</span><br>
        </span>
    </div> -->
                        <div class="mobile-legend-container24">
                            <!-- HTML part for the checkbox -->
                            <input type="checkbox" class="mobile-legend-checkbox" id="termsCheckbox">
                            <label for="termsCheckbox" class="mobile-legend-text099" style="cursor: pointer;"
                                onclick="window.location.href='https://vibolshop.com/game/mobile-legend/term-policy.html';">ខ្ញុំយល់ព្រមការទិញទាំងអស់
                                និង មិនមានការ​ លុបចោល ឬ​សងប្រាក់វិញ ឡើយ</label>


                            <div class="mobile-legend-pay">
                                <div class="mobile-legend-item2">
                                    <span class="mobile-legend-text100">
                                        <span>Item:</span><span> </span>
                                        <span id="diamond"
                                            class="mobile-legend-text103">NULL</span><span>&nbsp;</span><br>
                                    </span>
                                    <span id="total" class="mobile-legend-text106">
                                        <span class="mobile-legend-text107">Total:</span><span> </span>
                                        <span id="price" class="mobile-legend-text109">0.00 $</span>
                                    </span>
                                </div>
                                <div class="mobile-legend-pay1">
                                    <button type="button" class="mobile-legend-button3 button" id="buywe" disabled>Buy
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mobile-legend-more-mobile"><span class="mobile-legend-text110">Mobile Legends: Bang Bang (ML,
                    MLBB),
                    the most popular 5v5 MOBA
                    game on mobile</span><img alt="image"
                    src="icon/haya.jpg"
                    class="mobile-legend-image26" /><span class="mobile-legend-text111"><span>How to top up?</span><br
                        class="mobile-legend-text113" /><br /><span>1. Select product and payment
                        method</span><br /><span>2. Enter
                        your Mobile Legends User ID and Zone ID</span><br /><span>3. Enter your email to receive a
                        receipt</span><br /><span>4. Click buy now to make the payment</span><br /><span>5. The diamonds
                        will be
                        instantly delivered to your Mobile
                        Legends account.</span><br /><span>Current Offers🎁</span><br /><span>💎 Up to 15% OFF Year-End
                        Sale
                        Discounts</span><br /><span>Stay Connected🥰
                    </span><br /><span>👉FaceBook</span><br /><span>-----------------------------------------------</span><br /><span>VIBOLSTORE:
                        Max Your Top-Up Joy</span><br /><span>1.Official Partners</span><br /><span>Working directly
                        with the
                        world's leading producers, we offer
                        10,000+ items of games and entertainment.</span><br /><span>2.Smooth &amp; Reliable
                        Purchase</span><br /><span>We provide easy, safe payments with 350+ payment
                        options.</span><br /><span>3.Localized customer support</span><br /><span>We provide expert
                        localization
                        services in different
                        languages.</span><br /><span>4.Surprise offers</span><br /><span>Join us and get the latest
                        promotions for
                        your favorite
                        games.</span><br /><span>5.Instant Delivery</span><br /><span>The items will be added to your
                        account
                        instantly wherever you
                        go.</span></span></div>
            <div class="mobile-legend-pay2">
                <div class="mobile-legend-item3"><span class="mobile-legend-text156"><span
                            class="mobile-legend-text157">Item:</span><span class="mobile-legend-text158"> </span><span
                            id="diamond1" class="mobile-legend-text159">NULL</span><span
                            class="mobile-legend-text160">&nbsp;</span><br class="mobile-legend-text161" /></span><span
                        id="total" class="mobile-legend-text162"><span class="mobile-legend-text163">Total:</span><span
                            class="mobile-legend-text164"> </span><span id="price1" class="mobile-legend-text165">0.00
                            $</span></span></div>
                <div class="mobile-legend-pay3"><button type="button" class="mobile-legend-button3 button"
                        id="buymo">Buy Now</button>
                </div>
            </div>
            <div class="mobile-legend-header"><a href="/" class="mobile-legend-navlink"><img alt="logo"
                        src="icon/logo1.jpg" loading="eager" class="mobile-legend-logo"
                        style="width: 45px; height: 45px; border-radius: 50%;" />
                </a><button type="button" class="mobile-legend-button4 button">Login</button></div>
            <div class="mobile-legend-container25">
                <div class="mobile-legend-we-accept"><span class="mobile-legend-text166">We Accept&nbsp;</span><img
                        alt="image" src="icon/9.webp"
                        class="mobile-legend-image27" /><img alt="image"
                        src="icon/10.webp" class="mobile-legend-image28" /></div>
                <div class="mobile-legend-icon-group"><a href="php/index.php" class="mobile-legend-navlink1"><svg
                            viewBox="0 0 602.2582857142856 1024" class="mobile-legend-icon">
                            <path
                                d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z">
                            </path>
                        </svg></a><a href="php/index.php" class="mobile-legend-navlink2"><svg viewBox="0 0 1024 1024"
                            class="mobile-legend-icon2">
                            <path
                                d="M938.667 490.539v-21.205c0-0.725-0.043-1.621-0.085-2.475-5.803-99.755-47.488-190.336-112.768-258.176-68.352-71.125-162.731-117.419-268.843-123.264-0.64-0.043-1.493-0.085-2.304-0.085h-20.864c-59.947-0.683-122.965 13.227-181.931 43.008-52.181 26.539-97.749 63.531-133.931 108.203-56.405 69.675-89.899 158.037-89.941 253.653-0.597 54.4 10.795 111.36 35.157 165.419l-75.605 226.859c-2.816 8.363-3.072 17.835 0 26.965 7.467 22.357 31.616 34.432 53.973 26.965l226.731-75.563c49.493 22.485 105.984 35.243 165.376 35.115 58.539-0.384 115.84-13.141 168.149-36.949 81.579-37.163 151.040-101.248 193.707-186.667 27.477-53.291 43.307-115.84 43.136-181.803zM853.333 490.795c0.128 52.267-12.459 101.333-33.664 142.464-34.176 68.352-88.832 118.784-153.259 148.139-41.387 18.859-86.869 28.971-133.376 29.312-52.096 0.128-101.163-12.459-142.293-33.664-10.624-5.504-22.528-6.059-33.067-2.56l-162.261 54.101 54.101-162.261c3.755-11.221 2.56-22.912-2.389-32.725-23.552-46.72-34.304-96.213-33.792-142.464 0.043-76.331 26.411-145.877 70.912-200.917 28.629-35.328 64.768-64.725 106.283-85.76 46.592-23.552 96.085-34.304 142.336-33.792h19.456c83.712 4.565 158.037 41.003 212.011 97.109 51.285 53.376 84.139 124.416 89.003 202.837z">
                            </path>
                        </svg></a><a href="php/index.php" class="mobile-legend-navlink3"><svg viewBox="0 0 1024 1024"
                            class="mobile-legend-icon4">
                            <path
                                d="M679.429 746.857l84-396c7.429-34.857-12.571-48.571-35.429-40l-493.714 190.286c-33.714 13.143-33.143 32-5.714 40.571l126.286 39.429 293.143-184.571c13.714-9.143 26.286-4 16 5.143l-237.143 214.286-9.143 130.286c13.143 0 18.857-5.714 25.714-12.571l61.714-59.429 128 94.286c23.429 13.143 40 6.286 46.286-21.714zM1024 512c0 282.857-229.143 512-512 512s-512-229.143-512-512 229.143-512 512-512 512 229.143 512 512z">
                            </path>
                        </svg></a></div>
                <div class="mobile-legend-container26">
                    <span class="mobile-legend-text167">©2024 VIBOLSTORE. All rights reserved. </span>
                    <span class="mobile-legend-text167" style="cursor: pointer;"
                        onclick="window.location.href='https://vibolshop.com/game/mobile-legend/term-policy.html';">Terms
                        &amp;
                        Policy</span>
                </div>

            </div>
        </div>
        <script>
            function selectItem(element) {
                // Get all item elements
                var items = document.querySelectorAll('.mobile-legend-container06');

                // Remove border and background from all items
                items.forEach(function (item) {
                    item.style.border = 'none';
                    item.style.backgroundColor = '';
                });

                // Add border and background to the selected item
                element.style.border = '1px solid red';
                element.style.backgroundColor = 'rgba(225, 71, 71, 0.17)';
                element.style.borderRadius = '8px';

                // Define item prices and diamond amounts
                var itemDetails = {"1":{"price":"0.25","diamond":"11"},"2":{"price":"0.85","diamond":"56"},"3":{"price":"1.30","diamond":"86"},"4":{"price":"1.80","diamond":"112"},"5":{"price":"2.69","diamond":"172"},"6":{"price":"3.80","diamond":"257"},"7":{"price":"4.19","diamond":"280(Full Tickets)"},"8":{"price":"4.89","diamond":"344"},"9":{"price":"6.39","diamond":"429"},"10":{"price":"7.39","diamond":"514"},"11":{"price":"8.49","diamond":"600"},"12":{"price":"9.99","diamond":"706"},"13":{"price":"10.99","diamond":"792"},"14":{"price":"12.99","diamond":"878"},"15":{"price":"13.99","diamond":"963"},"16":{"price":"14.49","diamond":"1050"},"17":{"price":"15.99","diamond":"1136"},"18":{"price":"17.99","diamond":"1222"},"19":{"price":"19.99","diamond":"1412"},"20":{"price":"21.99","diamond":"1584"},"21":{"price":"25.50","diamond":"1756"},"22":{"price":"26.99","diamond":"1928"},"23":{"price":"30.99","diamond":"2195"},"24":{"price":"34.99","diamond":"2539"},"25":{"price":"39.99","diamond":"2901"},"26":{"price":"49.99","diamond":"3688"},"27":{"price":"59.99","diamond":"4394"},"28":{"price":"69.99","diamond":"5100"},"29":{"price":"75.99","diamond":"5532"},"30":{"price":"83.99","diamond":"6238"},"31":{"price":"93.99","diamond":"6944"},"32":{"price":"108.99","diamond":"7727"},"33":{"price":"119.99","diamond":"8433"},"34":{"price":"128.99","diamond":"9288"},"35":{"price":"142.99","diamond":"10080"},"36":{"price":"151.99","diamond":"10700"},"37":{"price":"163.99","diamond":"11483"},"38":{"price":"178.99","diamond":"12189"},"39":{"price":"199.99","diamond":"13682"},"40":{"price":"209.99","diamond":"15526"},"41":{"price":"4.50","diamond":"Coupon"},"42":{"price":"1.75","diamond":"Weekly"},"43":{"price":"8.49","diamond":"Twillpass"}};

                // Get the itemid of the selected item
                var itemId = element.getAttribute('itemid');

                // Concatenate the dollar sign with the price
                var priceWithDollar = itemDetails[itemId].price + '$';
                var priceWithDollar1 = itemDetails[itemId].price + '$';

                // Display the price and diamond in the specified elements
                document.getElementById('price').innerText = priceWithDollar;
                document.getElementById('diamond').innerText = itemDetails[itemId].diamond;
                document.getElementById('price1').innerText = priceWithDollar1;
                document.getElementById('diamond1').innerText = itemDetails[itemId].diamond;

                // Show alert message with selected item details
                showAlert('' + itemDetails[itemId].diamond + ' diamond ' + priceWithDollar, 'success');

            }
        </script>
        <script>
            // Retrieve saved values from localStorage
            document.getElementById('userid').value = localStorage.getItem('saved_userid') || '';
            document.getElementById('zoneid').value = localStorage.getItem('saved_zoneid') || '';

            // Add event listeners to inputs for auto-saving
            document.getElementById('userid').addEventListener('input', function () {
                localStorage.setItem('saved_userid', this.value);
            });

            document.getElementById('zoneid').addEventListener('input', function () {
                localStorage.setItem('saved_zoneid', this.value);
            });
            function validateNumberInput(input) {
                input.value = input.value.replace(/\D/g, '');
            }
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var game = 'mlbb';  // Change this to the appropriate game
                checkMaintenanceMode(game);

                document.getElementById('refreshButton').addEventListener('click', function () {
                    checkMaintenanceMode(game);
                });

                document.getElementById('modalClose').addEventListener('click', function () {
                    alert('You cannot close this modal during maintenance.');
                });
            });

            function checkMaintenanceMode(game) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'https://vibolshop.com/adminv2/api/check_maintenance.php?game=' + game, true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        var modal = document.getElementById('maintenanceModal');
                        if (response.status === 'on') {
                            modal.style.display = 'block';
                        } else {
                            modal.style.display = 'none';
                        }
                    }
                };
                xhr.send();
            }
        </script>
        <script src=https://vibolshop.com/game/mobile-legend/js/script1.js></script>
        <script defer="" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8b7133a16886f874',t:'MTcyNDMxMjI4OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8b7133a16886f874","serverTiming":{"name":{"cfL4":true}},"version":"2024.8.0","token":"1dbf57c4addd43818152e54d3395fb2f"}' crossorigin="anonymous"></script>
</body>

</html>