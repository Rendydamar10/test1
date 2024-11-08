<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;900&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
    *,
    html {
        margin: 0;
        padding: 0;

    }

    body {
        font-family: 'Poppins';
        background-color: #2A3750;
        /* background-color: #1b2223; */
        /* background-color: #101721; */
    }

    /* HEADER */
    header {
        width: 100%;
        height: 7vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    ul {
        display: flex;
        list-style: none;
        font-size: 1.1vw;
        font-weight: 500;
    }

    li {
        margin-right: 50px;
    }

    ul li {
        position: relative;

    }

    ul li::after {
        bottom: 0px;
        position: absolute;
        content: '';
        width: 0;
        height: 2px;
        background-color: rgb(231, 181, 34);
        transition: .5s all ease-in-out;
        -webkit-transition: .5s all ease-in-out;
        -moz-transition: .5s all ease-in-out;
        -ms-transition: .5s all ease-in-out;
        -o-transition: .5s all ease-in-out;
        bottom: 0;
        right: 0;
        top: 24px;
    }

    ul li:hover::after {
        right: auto;
        left: 0;
        width: 100%
    }

    ul li:hover {
        transition: .2s;
        -webkit-transition: .2s;
        -moz-transition: .2s;
        -ms-transition: .2s;
        -o-transition: .2s;
        color: rgb(231, 181, 34);
    }

    ul li a:hover {
        color: rgb(231, 181, 34);
        transition: .5s;
        -webkit-transition: .5s;
        -moz-transition: .5s;
        -ms-transition: .5s;
        -o-transition: .5s;
    }

    a {
        text-decoration: none;
        /* color: #9db2bf; */
        /* color: #a2b2ee; */
        /* color: #5f7adb; */
        /* color: #f4fefd; */
        /* color: #eaeaea; */
        /* color: #CAFDF9; */
        /* color: #e6e6e6; */
        /* color: #e9edf1; */
        color: #f4fefd;

    }

    iconify-icon {
        font-size: 2vmax;
        margin-left: 3vw;
        margin-top: 2px;

    }

    .logo:hover {
        color: rgb(231, 181, 34);
        transition: .5s;
        -webkit-transition: .5s;
        -moz-transition: .5s;
        -ms-transition: .5s;
        -o-transition: .5s;

    }

    /* CONTENT */
    .container-content {
        width: 100%;
        height: 500px;
        display: flex;
        margin: 100px 0px 0px 0px;
        justify-content: space-around;
    }

    .content1 {
        margin-top: -40px;
        width: 700px;
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        align-items: center;
        /* color: #e9edf1; */
        color: #f4fefd;
        font-weight: 600;
        font-family: 'Montserrat';
    }

    .containerjudul {
        display: flex;
        flex-direction: column;
    }

    .Judul1 {
        color: rgb(231, 181, 34);
        font-size: 3em;
        font-weight: 900;
        letter-spacing: 1px;
    }

    .heroicon {
        width: 400px;
        height: 350px;
        margin-bottom: 50px;
    }

    /* CONTENT 2 */
    .content2 {
        /* background-color: #eaeaea; */
        /* background-color: #e9edf1; */
        background-color: #f4fefd;

        height: 500px;
        width: 500px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    input {
        font-family: 'Poppins';
        height: 23px;
        border-radius: 4px;
        padding-left: 3.5px;
        box-sizing: border-box;
        border: 0;
        background-color: #BEBEBEBE;
        width: 300px;
        text-decoration: none;
        outline-color: #212A3E;
    }

    input[type='file'] {
        padding-left: 1px;
        padding-top: 1px;
    }

    select {
        font-family: 'Poppins';
        height: 23px;
        border-radius: 4px;
        padding-left: 3.5px;
        box-sizing: border-box;
        border: 0;
        background-color: #BEBEBEBE;
        width: 300px;
        text-decoration: none;
        outline-color: #212A3E;
    }

    tr,
    td {
        font-weight: 500;
        height: 6.6vmin;

    }

    table,
    tr,
    td {
        color: #212A3E;
        width: 52vmin;
        border-collapse: collapse;
    }

    .button {
        font-weight: 500;
        background-color: #212A3E;
        color: whitesmoke;
        border-color: black;
        width: 52vmin;
        border-radius: 6px;
        margin-top: 55px;
        box-shadow: 1px 6px 5px -1px rgba(0, 0, 0, 1);
        cursor: pointer;
    }

    .button:hover {
        transition: ease-in-out .3s;
        /* background-color: #d7d6d6; */
        background-color: #BEBEBEBE;
        color: black;
    }
    </style>
</head>

<body>
    <header>
        <a href="#">
            <iconify-icon icon="lucide:file-input" class="logo">agfadga</iconify-icon>
        </a>
        <ul>
            <li>
                <a href="index.php">
                    Tampilan Awal
                </a>
            </li>
            <li>
                <a href="dataresult.php">
                    Daftar Keluarga
                </a>
            </li>
        </ul>
    </header>
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="container-content">
            <div class="content1">
                <div class="containerjudul">

                    <p class="Judul1">PROJECT UAS</p>
                    <p>Praktikum Pemograman Lanjut Rendy Damar Sutanto Nim_202251247 Kelas_F</p>
                </div>
                <svg class="heroicon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="855.41839"
                    height="610.77534" viewBox="0 0 855.41839 610.77534" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <circle cx="39.53587" cy="110.72662" r="13.63057" fill="#e6e6e6" />
                    <circle cx="80.42757" cy="110.72662" r="13.63057" fill="#e6e6e6" />
                    <circle cx="121.31927" cy="110.72662" r="13.63057" fill="#e6e6e6" />
                    <circle cx="162.21097" cy="110.72662" r="13.63057" fill="#e6e6e6" />
                    <circle cx="203.10267" cy="110.72662" r="13.63057" fill="#e6e6e6" />
                    <circle cx="243.99437" cy="110.72662" r="13.63057" fill="#e6e6e6" />
                    <circle cx="284.88607" cy="110.72662" r="13.63057" fill="#e6e6e6" />
                    <path
                        d="M488.67447,271.93783H180.32909a5.55346,5.55346,0,0,1-5.54693-5.54693V244.28714a5.55345,5.55345,0,0,1,5.54693-5.54693H488.67447a5.55346,5.55346,0,0,1,5.54693,5.54693V266.3909A5.55347,5.55347,0,0,1,488.67447,271.93783ZM180.32909,240.959a3.3318,3.3318,0,0,0-3.32816,3.32816V266.3909a3.3318,3.3318,0,0,0,3.32816,3.32815H488.67447a3.33179,3.33179,0,0,0,3.32815-3.32815V244.28714a3.33179,3.33179,0,0,0-3.32815-3.32816Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M246.31694,147.79938a3.19065,3.19065,0,0,1,3.187,3.187V220.049a3.19065,3.19065,0,0,1-3.187,3.187h-67.652a3.19065,3.19065,0,0,1-3.187-3.187V150.98643a3.19065,3.19065,0,0,1,3.187-3.187h67.652m0-3.18705h-67.652a6.3741,6.3741,0,0,0-6.3741,6.3741V220.049a6.3741,6.3741,0,0,0,6.3741,6.3741h67.652a6.37411,6.37411,0,0,0,6.3741-6.3741V150.98643a6.37411,6.37411,0,0,0-6.3741-6.3741Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M235.76469,165.95293H190.62778a1.59353,1.59353,0,1,1,0-3.187h45.13691a1.59353,1.59353,0,1,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M235.76469,177.23755H190.62778a1.59353,1.59353,0,1,1,0-3.187h45.13691a1.59353,1.59353,0,1,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M235.76469,188.52139H190.62778a1.59353,1.59353,0,1,1,0-3.187h45.13691a1.59353,1.59353,0,1,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M235.76469,199.806H190.62778a1.59353,1.59353,0,1,1,0-3.187h45.13691a1.59353,1.59353,0,1,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M235.76469,211.09063H190.62778a1.59353,1.59353,0,1,1,0-3.18706h45.13691a1.59353,1.59353,0,0,1,0,3.18706Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M477.37812,147.79938a3.19065,3.19065,0,0,1,3.187,3.187V220.049a3.19065,3.19065,0,0,1-3.187,3.187h-67.652a3.19065,3.19065,0,0,1-3.187-3.187V150.98643a3.19065,3.19065,0,0,1,3.187-3.187h67.652m0-3.18705h-67.652a6.3741,6.3741,0,0,0-6.3741,6.3741V220.049a6.3741,6.3741,0,0,0,6.3741,6.3741h67.652a6.3741,6.3741,0,0,0,6.3741-6.3741V150.98643a6.3741,6.3741,0,0,0-6.3741-6.3741Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M466.82588,165.95293H421.689a1.59353,1.59353,0,1,1,0-3.187h45.13692a1.59353,1.59353,0,0,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M466.82588,177.23755H421.689a1.59353,1.59353,0,1,1,0-3.187h45.13692a1.59353,1.59353,0,0,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M466.82588,188.52139H421.689a1.59353,1.59353,0,1,1,0-3.187h45.13692a1.59353,1.59353,0,0,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M466.82588,199.806H421.689a1.59353,1.59353,0,1,1,0-3.187h45.13692a1.59353,1.59353,0,0,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M466.82588,211.09063H421.689a1.59353,1.59353,0,1,1,0-3.18706h45.13692a1.59353,1.59353,0,0,1,0,3.18706Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M707.317,280.59077a3.19065,3.19065,0,0,1,3.187,3.187v69.06255a3.19066,3.19066,0,0,1-3.187,3.187H639.665a3.19066,3.19066,0,0,1-3.187-3.187V283.77782a3.19065,3.19065,0,0,1,3.187-3.187h67.652m0-3.187H639.665a6.3741,6.3741,0,0,0-6.3741,6.3741v69.06255a6.3741,6.3741,0,0,0,6.3741,6.3741h67.652a6.37411,6.37411,0,0,0,6.3741-6.3741V283.77782a6.3741,6.3741,0,0,0-6.3741-6.3741Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M696.76476,298.74432H651.62784a1.59353,1.59353,0,1,1,0-3.187h45.13692a1.59353,1.59353,0,0,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M696.76476,310.02894H651.62784a1.59353,1.59353,0,0,1,0-3.18706h45.13692a1.59353,1.59353,0,0,1,0,3.18706Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M696.76476,321.31278H651.62784a1.59352,1.59352,0,1,1,0-3.187h45.13692a1.59353,1.59353,0,0,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M696.76476,332.59739H651.62784a1.59353,1.59353,0,1,1,0-3.187h45.13692a1.59353,1.59353,0,0,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M696.76476,343.882H651.62784a1.59353,1.59353,0,1,1,0-3.187h45.13692a1.59353,1.59353,0,0,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M362.73282,226.42308H293.30943a7.08972,7.08972,0,0,1-7.08139-7.08138V169.66541a7.08988,7.08988,0,0,1,7.08139-7.08216h69.42339a7.09,7.09,0,0,1,7.08217,7.08216V219.3417A7.08988,7.08988,0,0,1,362.73282,226.42308ZM293.30943,165.7703a3.89917,3.89917,0,0,0-3.89434,3.89511V219.3417a3.89851,3.89851,0,0,0,3.89434,3.89433h69.42339a3.89917,3.89917,0,0,0,3.89511-3.89433V169.66541a3.89983,3.89983,0,0,0-3.89511-3.89511Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M350.59,184.81246H305.45305a1.59353,1.59353,0,0,1,0-3.187H350.59a1.59353,1.59353,0,1,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M350.59,196.09708H305.45305a1.59353,1.59353,0,0,1,0-3.187H350.59a1.59353,1.59353,0,1,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M350.59,207.38092H305.45305a1.59353,1.59353,0,0,1,0-3.187H350.59a1.59353,1.59353,0,1,1,0,3.187Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M593.09111,253.95025,526.41486,234.6141a7.08971,7.08971,0,0,1-4.82882-8.77351l13.83608-47.71054a7.08988,7.08988,0,0,1,8.77372-4.82958l66.67625,19.33615a7.09,7.09,0,0,1,4.82935,8.77447l-13.83608,47.71055A7.08988,7.08988,0,0,1,593.09111,253.95025Zm-49.78294-77.58884a3.89916,3.89916,0,0,0-4.82511,2.65631L524.647,226.72827a3.89851,3.89851,0,0,0,2.65557,4.8249l66.67624,19.33614a3.89918,3.89918,0,0,0,4.82565-2.65535l13.83608-47.71054a3.89985,3.89985,0,0,0-2.65609-4.82587Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M593.01835,210.60411l-43.3508-12.57175a1.59353,1.59353,0,0,1,.88767-3.06094L593.906,207.54318a1.59352,1.59352,0,1,1-.88768,3.06093Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M589.87531,221.44219,546.5245,208.87043a1.59352,1.59352,0,1,1,.88767-3.06093L590.763,218.38125a1.59353,1.59353,0,0,1-.88767,3.06094Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M586.73248,232.27951l-43.35081-12.57175a1.59353,1.59353,0,0,1,.88767-3.06094l43.35081,12.57176a1.59352,1.59352,0,0,1-.88767,3.06093Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <rect x="156.10589" y="607.77534" width="699.3125" height="3" fill="#e6e6e6" />
                    <polygon points="562.14 603.085 448.421 603.085 452.276 552.973 558.285 552.973 562.14 603.085"
                        fill="#e6e6e6" />
                    <rect x="442.63878" y="597.3034" width="127.21043" height="11.5646" fill="#e6e6e6" />
                    <path
                        d="M895.37073,374.74021H460.73514a11.56458,11.56458,0,0,0-11.56458,11.56458h0V651.3265H906.93533V386.30479a11.56457,11.56457,0,0,0-11.56456-11.56458Z"
                        transform="translate(-172.29081 -144.61233)" fill="#3f3d56" />
                    <path
                        d="M449.17056,651.3265v43.36719a11.56457,11.56457,0,0,0,11.56458,11.56457H895.37073a11.56459,11.56459,0,0,0,11.5646-11.56457h0V651.3265Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <rect x="300.00891" y="254.22076" width="412.47016" height="231.29169" fill="#e6e6e6" />
                    <circle cx="506.244" cy="533.69821" r="11.56459" fill="#3f3d56" />
                    <circle cx="312.86987" cy="261.79534" r="2.19466" fill="#fff" />
                    <circle cx="321.20026" cy="261.79534" r="2.19466" fill="#fff" />
                    <circle cx="329.53064" cy="261.79534" r="2.19466" fill="#fff" />
                    <rect x="310.6752" y="269.25275" width="389.91608" height="194.24707" fill="#fff" />
                    <path
                        d="M508.885,443.41111a1.37973,1.37973,0,0,0-1.37842,1.37842v69.67578a1.37973,1.37973,0,0,0,1.37842,1.37841H589.3493a1.37973,1.37973,0,0,0,1.37842-1.37841V444.78953a1.37973,1.37973,0,0,0-1.37842-1.37842Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M638.08075,443.63523a1.37984,1.37984,0,0,0-1.37891,1.37842v69.45166a1.37984,1.37984,0,0,0,1.37891,1.37841h80.208a1.37963,1.37963,0,0,0,1.37793-1.37841V445.01365a1.37963,1.37963,0,0,0-1.37793-1.37842Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M765.92157,442.9072a1.37963,1.37963,0,0,0-1.37793,1.37842v70.17969a1.37962,1.37962,0,0,0,1.37793,1.37841h81.042a1.37962,1.37962,0,0,0,1.37793-1.37841V444.28562a1.37963,1.37963,0,0,0-1.37793-1.37842Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M510.35614,550.333a2.84986,2.84986,0,0,0,0,5.69971h75.65234a2.84986,2.84986,0,0,0,0-5.69971Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path d="M510.35614,563.88865a2.8501,2.8501,0,0,0,0,5.70019h34.062a2.8501,2.8501,0,0,0,0-5.70019Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M640.94012,550.333a2.84986,2.84986,0,0,0,0,5.69971h75.65235a2.84986,2.84986,0,0,0,0-5.69971Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path d="M640.94012,563.88865a2.8501,2.8501,0,0,0,0,5.70019h34.0625a2.8501,2.8501,0,0,0,0-5.70019Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                    <path
                        d="M768.26044,550.333a2.84986,2.84986,0,0,0,0,5.69971h75.65234a2.84986,2.84986,0,0,0,0-5.69971Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M510.35614,536.333a2.84986,2.84986,0,0,0,0,5.69971h75.65234a2.84986,2.84986,0,0,0,0-5.69971Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M640.94012,536.333a2.84986,2.84986,0,0,0,0,5.69971h75.65235a2.84986,2.84986,0,0,0,0-5.69971Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path
                        d="M768.26044,536.333a2.84986,2.84986,0,0,0,0,5.69971h75.65234a2.84986,2.84986,0,0,0,0-5.69971Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e6e6e6" />
                    <path d="M768.26044,563.88865a2.8501,2.8501,0,0,0,0,5.70019H802.322a2.8501,2.8501,0,0,0,0-5.70019Z"
                        transform="translate(-172.29081 -144.61233)" fill="#e7b522" />
                </svg>

            </div>
            <div class="content2">
                <p style="margin-bottom: 15px;margin-top:15px; font-weight:800;font-size:larger; color:#212A3E;">
                    Masukkan
                    Input Data</p>
                <table style="margin-top: 10px;">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="Nama" required></td>
                    </tr>
                    <tr>
                        <td>TTL

                        <td><input type="text" name="Ttl" required></td>
                    </tr>
                    <tr>
                        <td>Jekel</td>

                        <td>
                            <select name="Jekel">
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>

                        <td><input type="text" name="Alamat" required></td>
                    </tr>

                    <tr>
                        <td>Foto</td>

                        <td><input type="file" name="Foto" accept=".jpg" required></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>

                        <td><input type="text" name="Pekerjaan" required></td>
                    </tr>
                </table>
                <input type="submit" name="Simpan" value="Simpan" class="button">
            </div>
        </div>

    </form>
    <?php
    include 'connect.php';
        if(isset($_POST["Simpan"])){ 
            $nama = $_FILES['Foto']['name'];
            $file_tmp = $_FILES['Foto']['tmp_name'];
            $folder= 'inputimg/';
            move_uploaded_file($file_tmp,$folder.$nama);

            $insert=mysqli_query($conn," INSERT INTO user VALUES
            ('".$_POST['Nama']."',
            '".$_POST['Ttl']."',
            '".$_POST['Jekel']."',
            '".$_POST['Alamat']."',                     
            '$nama',
            '".$_POST['Pekerjaan']."')
            ");
           
        if($insert){
            echo '<p style="margin-top:-50px;margin-left:70%; text-align:center;color:#0ad406;display:flex;font-weight:400;"><iconify-icon icon="ep:success-filled" style="color: #0ad406;" width="19" height="19"></iconify-icon>Berhasil di Simpan</p>';
        }else{
            echo "Gagal❌ ".mysqli_error($conn);
        }
    }
    ?>
</body>

</html>