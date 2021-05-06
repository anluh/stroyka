<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="/images/favicon.svg">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="/vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="/fonts/stroyka/stroyka.css">
</head>

<body>
<!-- site -->
<div class="site">
    <!-- mobile site__header -->
    <header class="site__header d-lg-none">
        <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
        <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
            <div class="mobile-header__panel">
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button">
                            <svg width="18px" height="14px">
                                <use xlink:href="/images/sprite.svg#menu-18x14"></use>
                            </svg>
                        </button>
                        <a class="mobile-header__logo" href="{{ route('index') }}">
                            <!-- mobile-logo -->
                            <svg version="1.1" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6616.02 590.59"> <g id="Num_2"> <path d="M5906.62,293.61c0-79.21,0-158.43,0-237.64c0-22.6,6.13-28.64,28.96-28.64c22.14,0,44.29-0.05,66.43,0.02 c15.65,0.05,23.11,7.25,23.42,22.6c0.64,32.58,6.01,64.31,14.78,95.73c10.53,37.71,34.21,63.97,68.39,80.9 c40.1,19.85,81.14,20.36,123.13,4.5c116.59-44.05,225.57-29.14,326.37,44.18c14.75,10.73,14.73,25.63-0.01,36.38 c-99.81,72.76-208.19,88.47-323.71,45.08c-69.3-26.04-143.29-6.69-180.71,54.45c-12.1,19.77-16.89,44.63-22.07,67.83 c-4.3,19.29-4.58,39.52-6.05,59.38c-0.98,13.24-7.85,20.62-21.28,20.68c-25.57,0.12-51.15,0.12-76.72-0.01 c-12.1-0.06-19.22-6.55-20.58-18.46c-0.39-3.39-0.34-6.85-0.34-10.27C5906.62,451.42,5906.62,372.51,5906.62,293.61z M6413.33,268.43c-14.1-0.13-24.91,10.3-25.17,24.27c-0.26,14.47,10.4,25.84,24.54,26.16c13.86,0.31,25.31-11.24,25.32-25.53 C6438.04,279.46,6427.23,268.56,6413.33,268.43z"/> <path d="M5533.17,501.63c-22.06-7.05-13.32-23.93-15.3-37.06c-2.79-18.56,8.98-25.41,25.23-29.05c-0.36-0.89-0.73-1.77-1.09-2.66 c-4.01-1.86-7.98-3.82-12.05-5.55c-7.68-3.26-11.75-8.55-11.47-17.31c0.36-10.9,0.56-21.85-0.06-32.74 c-0.55-9.63,0.23-17.66,12.76-18.81c-1.38-2.26-1.92-4.4-2.98-4.69c-11.38-3.11-10.35-11.92-10.33-20.79 c0.15-53.33,0.4-106.66-0.13-159.99c-0.16-15.98,0.08-30.51,20.21-35.49c-0.25-0.74-0.5-1.48-0.75-2.22 c-3.59-1.85-7.03-4.11-10.8-5.45c-6.17-2.2-9.18-6.06-8.48-12.67c0.13-1.24,0.02-2.49,0.02-3.74c-0.02-17.28-0.01-17.2,17.23-21.06 c4.7-1.05,9.26-2.76,13.88-4.16c0.04-1.02,0.09-2.05,0.13-3.07c-7.28-1.51-14.49-3.49-21.85-4.41c-7.08-0.89-9.65-4.43-9.44-11.2 c0.24-7.48-0.11-14.97,0.09-22.45c0.33-12.49,6.28-17.82,18.88-17.69c50.17,0.56,100.34,1.41,150.52,1.36 c21.15-0.02,42.3-2.18,63.46-2.99c6.47-0.25,13.16-0.04,19.45,1.35c18,3.98,29.86,17.33,31.83,34.73 c2.15,18.96-6.21,38.12-22.51,44.3c-9.69,3.68-21.29,3.07-32.03,3.06c-24.61-0.03-49.3,0.12-73.81-1.76 c-13.56-1.04-18.19,6.44-23.12,17.65c2.47,1.56,5.27,3.59,8.3,5.19c2.72,1.44,6.29,1.76,8.39,3.74c3.15,2.97,5.33,6.96,7.92,10.51 c-4.57,2.63-8.85,6.21-13.77,7.68c-10.55,3.17-21.45,5.17-32.15,7.87c-1.6,0.41-2.89,2.03-6.76,4.9 c6.13,1.89,10.12,3.65,14.29,4.32c19.07,3.05,38.16,5.73,53.57,19.15c2.45,2.13,6.17,4.14,9.22,4.03 c14.33-0.52,24.31,8.61,35.55,15c7,3.98,5.49,7.9-0.11,11.87c-12.54,8.89-26.22,14.56-41.84,13.44 c-10.87-0.77-19.46,2.42-28.13,9.44c-6.35,5.13-15.4,7.79-23.66,9.45c-8.45,1.69-14.8,4.41-20.01,11.75 c-3.03,4.27-8.87,7.12-14.01,9.19c-10.01,4.03-20.42,7.05-32.26,11.03c8.57,10.61,19.69,12.86,28.81,11.61 c17.91-2.46,27.38,5.78,34.52,19.97c4.09,8.14,11.3,9.24,19.58,9.8c40.7,2.75,81.41,5.58,122.02,9.42 c10.31,0.97,20.47,5.23,30.24,9.11c3.22,1.28,6.96,6.2,6.86,9.35c-0.08,2.68-5.01,6.98-8.31,7.55c-27.92,4.78-55.91,9.32-84,12.92 c-11.55,1.48-19.83,5.43-27.19,15.08c-7.36,9.65-17.46,17.43-27.15,25.02c-10.78,8.45-9.97,17.6,2.32,24.18 c21.61,11.55,44.89,14.41,68.77,14.11c35.83-0.45,71.66-1.77,107.49-1.72c10.62,0.02,21.63,2.17,31.72,5.57 c10.12,3.41,16.55,11.51,14.01,23.3c-1.92,8.96-4.98,17.67-7.26,26.55c-0.59,2.32-0.38,4.92-0.11,7.35 c0.12,1.1,1.42,2.03,1.92,3.16c8.23,18.32,9.27,42.99-22.22,41.62c-26.09-1.13-52.05-5-78.14-6.77 c-28.54-1.94-57.15-3.14-85.75-4.15c-23.36-0.82-46.75-1.36-70.12-1.16c-33.94,0.29-67.87,1.31-101.8,2.13 c-12.25,0.3-13.38-0.63-13.48-12.92c-0.02-2.18,0.05-4.37-0.01-6.55C5517.62,518.38,5515.03,505.53,5533.17,501.63z M5875.68,489.24c-1.22-0.57-2.44-1.14-3.66-1.72c-3.07,5.32-6.81,10.37-9.05,16.02c-2.5,6.3-3.43,13.2-5.44,19.72 c-1.79,5.82-5.48,9.62-12.2,9.48c-15.23-0.32-30.46-0.64-45.69-0.74c-18.84-0.13-37.68-0.03-50.52-0.03 c21.77,3.34,49.32,7.82,76.97,11.69c10.69,1.5,21.66,2.82,32.36,2.09c13.31-0.9,16.67-6.78,16.02-19.91 c-0.48-9.79,0.44-19.66,0.76-29.49C5875.31,493.98,5875.53,491.61,5875.68,489.24z M5708.81,100.47c-0.17,0.58-0.34,1.15-0.51,1.73 c20.02,0,40.25,1.83,59.97-0.55c17.5-2.11,25-29.05,12.62-42.3c-1.94,5.58-4.29,10.68-5.44,16.03 c-3.16,14.69-12.13,21.16-26.91,21.7C5735.28,97.57,5722.06,99.29,5708.81,100.47z"/> <path d="M375.32,405.92c0,84.62-83.94,153.54-187.66,153.54c-93.49,0-170.6-55.96-184.93-128.97C0,417.52,9.55,405.92,22.52,405.92 h64.15c7.51,0,14.33,4.78,17.74,12.28c9.55,22.52,43.67,38.9,83.26,38.9c47.77,0,86.66-23.2,86.66-51.18 C274.33,319.93,0,375.21,0,201.19C0,116.58,84.62,47.65,187.66,47.65c93.49,0,171.28,55.96,185.62,128.97 c2.73,12.97-7.51,24.57-19.79,24.57h-63.47c-8.19,0-15.7-4.78-18.42-12.28c-9.55-22.52-43.67-38.9-83.94-38.9 c-47.09,0-85.98,23.2-85.98,51.18C101.68,276.95,375.32,231.91,375.32,405.92z"/> <path d="M450.39,47.66h334.38c11.6,0,20.47,8.87,20.47,20.47v54.59c0,11.6-8.87,20.47-20.47,20.47h-95.53 c-10.92,0-20.47,8.87-20.47,20.47v375.32c0,11.6-8.87,20.47-20.47,20.47h-61.42c-10.92,0-20.47-8.87-20.47-20.47V163.66 c0-11.6-8.87-20.47-20.47-20.47h-95.54c-10.92,0-20.47-8.87-20.47-20.47V68.13C429.92,56.53,439.48,47.66,450.39,47.66z"/> <path d="M1269.28,227.13c0,58-27.98,110.55-71.65,143.31l58.69,161.73c4.78,12.97-4.78,27.3-19.11,27.3h-65.51 c-8.87,0-16.38-5.46-19.11-13.65l-46.41-126.93c-2.73-7.51-10.24-12.97-19.11-12.97h-70.29c-11.6,0-20.47,8.87-20.47,20.47v112.6 c0,11.6-9.55,20.47-20.47,20.47h-61.42c-11.6,0-20.47-8.87-20.47-20.47V68.12c0-11.6,8.87-20.47,20.47-20.47h175.38 C1188.75,47.66,1269.28,128.18,1269.28,227.13z M996.32,170.49v112.6c0,11.6,8.87,20.47,20.47,20.47h73.02 c42.31,0,77.11-34.12,77.11-76.43c0-42.99-34.8-77.11-77.11-77.11h-73.02C1005.19,150.02,996.32,158.89,996.32,170.49z"/> <path d="M1886.85,295.37c0,146.04-118.74,264.09-264.78,264.09s-264.09-118.06-264.09-264.09S1476.04,30.6,1622.08,30.6 S1886.85,149.33,1886.85,295.37z M1784.49,295.37c0-90.08-72.34-162.42-162.41-162.42c-89.39,0-161.73,72.34-161.73,162.42 c0,89.39,72.34,161.73,161.73,161.73C1712.16,457.1,1784.49,384.77,1784.49,295.37z"/> <path d="M2158.45,233.95l111.23-176.74c3.41-6.14,10.24-9.55,17.06-9.55h79.16c16.38,0,25.93,18.42,17.06,31.39l-182.89,279.1 c-1.36,2.05-2.05,4.78-2.05,7.51v173.33c0,11.6-8.87,20.47-20.47,20.47h-61.42c-11.6,0-20.47-8.87-20.47-20.47V365.66 c0-2.73-0.68-5.46-2.05-7.51l-182.89-279.1c-8.87-12.97,0.68-31.39,17.06-31.39h79.16c6.82,0,13.65,3.41,17.06,9.55l111.23,176.74 C2140.71,242.83,2152.99,242.83,2158.45,233.95z"/> <path d="M2726.88,405.92l118.74-344.61c3.41-8.19,10.92-13.65,19.79-13.65h66.88c11.6,0,20.47,8.87,20.47,20.47v470.86 c0,11.6-8.87,20.47-20.47,20.47h-61.42c-10.92,0-20.47-8.87-20.47-20.47V406.6c0-15.01-21.15-19.11-25.93-4.78l-52.54,143.99 c-3.41,8.19-10.92,13.65-19.11,13.65h-77.11c-8.19,0-16.38-5.46-19.11-13.65l-52.54-143.99c-4.78-14.33-26.61-10.24-26.61,4.78 v132.39c0,11.6-8.87,20.47-20.47,20.47h-61.42c-10.92,0-20.47-8.87-20.47-20.47V68.13c0-11.6,9.55-20.47,20.47-20.47h67.56 c8.87,0,16.38,5.46,19.11,13.65l118.74,344.61C2705.73,418.21,2722.79,418.21,2726.88,405.92z"/> <path d="M3234.59,47.66h74.38c8.19,0,15.7,5.46,19.11,13.65l171.97,470.86c4.78,12.97-4.78,27.3-19.11,27.3h-66.19 c-8.19,0-16.38-5.46-19.11-13.65l-27.98-78.48c-2.73-8.19-10.24-13.65-19.11-13.65h-154.23c-8.87,0-16.38,5.46-19.11,13.65 l-27.98,78.48c-2.73,8.19-10.92,13.65-19.11,13.65h-66.19c-14.33,0-23.88-14.33-19.11-27.3l171.97-470.86 C3218.21,53.12,3225.72,47.66,3234.59,47.66z M3242.77,358.15h57.32c14.33,0,23.88-13.65,19.79-27.3l-35.48-99.63 c-4.09-11.6-21.84-11.6-25.93,0l-34.8,99.63C3218.9,344.51,3228.45,358.15,3242.77,358.15z"/> <path d="M3508.23,47.66h334.38c11.6,0,20.47,8.87,20.47,20.47v54.59c0,11.6-8.87,20.47-20.47,20.47h-95.54 c-10.92,0-20.47,8.87-20.47,20.47v375.32c0,11.6-8.87,20.47-20.47,20.47h-61.42c-10.92,0-20.47-8.87-20.47-20.47V163.66 c0-11.6-8.87-20.47-20.47-20.47h-95.54c-10.92,0-20.47-8.87-20.47-20.47V68.13C3487.76,56.53,3497.31,47.66,3508.23,47.66z"/> <path d="M4147.65,405.92h-73.02c-11.6,0-20.47,8.87-20.47,20.47v112.6c0,11.6-9.55,20.47-20.47,20.47h-61.42 c-11.6,0-20.47-8.87-20.47-20.47V68.12c0-11.6,8.87-20.47,20.47-20.47h175.38c98.95,0,179.47,80.52,179.47,179.47 C4327.11,326.08,4246.59,405.92,4147.65,405.92z M4147.65,150.02h-73.02c-11.6,0-20.47,8.87-20.47,20.47v112.6 c0,11.6,8.87,20.47,20.47,20.47h73.02c42.31,0,77.11-34.12,77.11-76.43C4224.75,184.14,4189.95,150.02,4147.65,150.02z"/> <path d="M4791.15,227.13c0,58-27.98,110.55-71.65,143.31l58.69,161.73c4.78,12.97-4.78,27.3-19.11,27.3h-65.51 c-8.87,0-16.38-5.46-19.11-13.65l-46.4-126.93c-2.73-7.51-10.24-12.97-19.11-12.97h-70.29c-11.6,0-20.47,8.87-20.47,20.47v112.6 c0,11.6-9.55,20.47-20.47,20.47h-61.42c-11.6,0-20.47-8.87-20.47-20.47V68.12c0-11.6,8.87-20.47,20.47-20.47h175.38 C4710.63,47.66,4791.15,128.18,4791.15,227.13z M4518.18,170.49v112.6c0,11.6,8.87,20.47,20.47,20.47h73.02 c42.31,0,77.11-34.12,77.11-76.43c0-42.99-34.8-77.11-77.11-77.11h-73.01C4527.06,150.02,4518.18,158.89,4518.18,170.49z"/> <path d="M5408.73,295.37c0,146.04-118.74,264.09-264.78,264.09s-264.09-118.06-264.09-264.09S4997.92,30.6,5143.95,30.6 C5289.98,30.6,5408.73,149.33,5408.73,295.37z M5306.36,295.37c0-90.08-72.34-162.42-162.41-162.42 c-89.39,0-161.73,72.34-161.73,162.42c0,89.39,72.34,161.73,161.73,161.73C5234.03,457.1,5306.36,384.77,5306.36,295.37z"/> </g> </svg>
                            <!-- mobile-logo / end -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile site__header / end -->
    <!-- desktop site__header -->
    <header class="site__header d-lg-block d-none">
        <div class="site-header">
            <div class="site-header__middle container">
                <div class="site-header__logo">
                    <a href="/">
                        <!-- logo -->
                        <svg version="1.1" height="26px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6616.02 590.59"> <g id="Num_2"> <path d="M5906.62,293.61c0-79.21,0-158.43,0-237.64c0-22.6,6.13-28.64,28.96-28.64c22.14,0,44.29-0.05,66.43,0.02 c15.65,0.05,23.11,7.25,23.42,22.6c0.64,32.58,6.01,64.31,14.78,95.73c10.53,37.71,34.21,63.97,68.39,80.9 c40.1,19.85,81.14,20.36,123.13,4.5c116.59-44.05,225.57-29.14,326.37,44.18c14.75,10.73,14.73,25.63-0.01,36.38 c-99.81,72.76-208.19,88.47-323.71,45.08c-69.3-26.04-143.29-6.69-180.71,54.45c-12.1,19.77-16.89,44.63-22.07,67.83 c-4.3,19.29-4.58,39.52-6.05,59.38c-0.98,13.24-7.85,20.62-21.28,20.68c-25.57,0.12-51.15,0.12-76.72-0.01 c-12.1-0.06-19.22-6.55-20.58-18.46c-0.39-3.39-0.34-6.85-0.34-10.27C5906.62,451.42,5906.62,372.51,5906.62,293.61z M6413.33,268.43c-14.1-0.13-24.91,10.3-25.17,24.27c-0.26,14.47,10.4,25.84,24.54,26.16c13.86,0.31,25.31-11.24,25.32-25.53 C6438.04,279.46,6427.23,268.56,6413.33,268.43z"/> <path d="M5533.17,501.63c-22.06-7.05-13.32-23.93-15.3-37.06c-2.79-18.56,8.98-25.41,25.23-29.05c-0.36-0.89-0.73-1.77-1.09-2.66 c-4.01-1.86-7.98-3.82-12.05-5.55c-7.68-3.26-11.75-8.55-11.47-17.31c0.36-10.9,0.56-21.85-0.06-32.74 c-0.55-9.63,0.23-17.66,12.76-18.81c-1.38-2.26-1.92-4.4-2.98-4.69c-11.38-3.11-10.35-11.92-10.33-20.79 c0.15-53.33,0.4-106.66-0.13-159.99c-0.16-15.98,0.08-30.51,20.21-35.49c-0.25-0.74-0.5-1.48-0.75-2.22 c-3.59-1.85-7.03-4.11-10.8-5.45c-6.17-2.2-9.18-6.06-8.48-12.67c0.13-1.24,0.02-2.49,0.02-3.74c-0.02-17.28-0.01-17.2,17.23-21.06 c4.7-1.05,9.26-2.76,13.88-4.16c0.04-1.02,0.09-2.05,0.13-3.07c-7.28-1.51-14.49-3.49-21.85-4.41c-7.08-0.89-9.65-4.43-9.44-11.2 c0.24-7.48-0.11-14.97,0.09-22.45c0.33-12.49,6.28-17.82,18.88-17.69c50.17,0.56,100.34,1.41,150.52,1.36 c21.15-0.02,42.3-2.18,63.46-2.99c6.47-0.25,13.16-0.04,19.45,1.35c18,3.98,29.86,17.33,31.83,34.73 c2.15,18.96-6.21,38.12-22.51,44.3c-9.69,3.68-21.29,3.07-32.03,3.06c-24.61-0.03-49.3,0.12-73.81-1.76 c-13.56-1.04-18.19,6.44-23.12,17.65c2.47,1.56,5.27,3.59,8.3,5.19c2.72,1.44,6.29,1.76,8.39,3.74c3.15,2.97,5.33,6.96,7.92,10.51 c-4.57,2.63-8.85,6.21-13.77,7.68c-10.55,3.17-21.45,5.17-32.15,7.87c-1.6,0.41-2.89,2.03-6.76,4.9 c6.13,1.89,10.12,3.65,14.29,4.32c19.07,3.05,38.16,5.73,53.57,19.15c2.45,2.13,6.17,4.14,9.22,4.03 c14.33-0.52,24.31,8.61,35.55,15c7,3.98,5.49,7.9-0.11,11.87c-12.54,8.89-26.22,14.56-41.84,13.44 c-10.87-0.77-19.46,2.42-28.13,9.44c-6.35,5.13-15.4,7.79-23.66,9.45c-8.45,1.69-14.8,4.41-20.01,11.75 c-3.03,4.27-8.87,7.12-14.01,9.19c-10.01,4.03-20.42,7.05-32.26,11.03c8.57,10.61,19.69,12.86,28.81,11.61 c17.91-2.46,27.38,5.78,34.52,19.97c4.09,8.14,11.3,9.24,19.58,9.8c40.7,2.75,81.41,5.58,122.02,9.42 c10.31,0.97,20.47,5.23,30.24,9.11c3.22,1.28,6.96,6.2,6.86,9.35c-0.08,2.68-5.01,6.98-8.31,7.55c-27.92,4.78-55.91,9.32-84,12.92 c-11.55,1.48-19.83,5.43-27.19,15.08c-7.36,9.65-17.46,17.43-27.15,25.02c-10.78,8.45-9.97,17.6,2.32,24.18 c21.61,11.55,44.89,14.41,68.77,14.11c35.83-0.45,71.66-1.77,107.49-1.72c10.62,0.02,21.63,2.17,31.72,5.57 c10.12,3.41,16.55,11.51,14.01,23.3c-1.92,8.96-4.98,17.67-7.26,26.55c-0.59,2.32-0.38,4.92-0.11,7.35 c0.12,1.1,1.42,2.03,1.92,3.16c8.23,18.32,9.27,42.99-22.22,41.62c-26.09-1.13-52.05-5-78.14-6.77 c-28.54-1.94-57.15-3.14-85.75-4.15c-23.36-0.82-46.75-1.36-70.12-1.16c-33.94,0.29-67.87,1.31-101.8,2.13 c-12.25,0.3-13.38-0.63-13.48-12.92c-0.02-2.18,0.05-4.37-0.01-6.55C5517.62,518.38,5515.03,505.53,5533.17,501.63z M5875.68,489.24c-1.22-0.57-2.44-1.14-3.66-1.72c-3.07,5.32-6.81,10.37-9.05,16.02c-2.5,6.3-3.43,13.2-5.44,19.72 c-1.79,5.82-5.48,9.62-12.2,9.48c-15.23-0.32-30.46-0.64-45.69-0.74c-18.84-0.13-37.68-0.03-50.52-0.03 c21.77,3.34,49.32,7.82,76.97,11.69c10.69,1.5,21.66,2.82,32.36,2.09c13.31-0.9,16.67-6.78,16.02-19.91 c-0.48-9.79,0.44-19.66,0.76-29.49C5875.31,493.98,5875.53,491.61,5875.68,489.24z M5708.81,100.47c-0.17,0.58-0.34,1.15-0.51,1.73 c20.02,0,40.25,1.83,59.97-0.55c17.5-2.11,25-29.05,12.62-42.3c-1.94,5.58-4.29,10.68-5.44,16.03 c-3.16,14.69-12.13,21.16-26.91,21.7C5735.28,97.57,5722.06,99.29,5708.81,100.47z"/> <path d="M375.32,405.92c0,84.62-83.94,153.54-187.66,153.54c-93.49,0-170.6-55.96-184.93-128.97C0,417.52,9.55,405.92,22.52,405.92 h64.15c7.51,0,14.33,4.78,17.74,12.28c9.55,22.52,43.67,38.9,83.26,38.9c47.77,0,86.66-23.2,86.66-51.18 C274.33,319.93,0,375.21,0,201.19C0,116.58,84.62,47.65,187.66,47.65c93.49,0,171.28,55.96,185.62,128.97 c2.73,12.97-7.51,24.57-19.79,24.57h-63.47c-8.19,0-15.7-4.78-18.42-12.28c-9.55-22.52-43.67-38.9-83.94-38.9 c-47.09,0-85.98,23.2-85.98,51.18C101.68,276.95,375.32,231.91,375.32,405.92z"/> <path d="M450.39,47.66h334.38c11.6,0,20.47,8.87,20.47,20.47v54.59c0,11.6-8.87,20.47-20.47,20.47h-95.53 c-10.92,0-20.47,8.87-20.47,20.47v375.32c0,11.6-8.87,20.47-20.47,20.47h-61.42c-10.92,0-20.47-8.87-20.47-20.47V163.66 c0-11.6-8.87-20.47-20.47-20.47h-95.54c-10.92,0-20.47-8.87-20.47-20.47V68.13C429.92,56.53,439.48,47.66,450.39,47.66z"/> <path d="M1269.28,227.13c0,58-27.98,110.55-71.65,143.31l58.69,161.73c4.78,12.97-4.78,27.3-19.11,27.3h-65.51 c-8.87,0-16.38-5.46-19.11-13.65l-46.41-126.93c-2.73-7.51-10.24-12.97-19.11-12.97h-70.29c-11.6,0-20.47,8.87-20.47,20.47v112.6 c0,11.6-9.55,20.47-20.47,20.47h-61.42c-11.6,0-20.47-8.87-20.47-20.47V68.12c0-11.6,8.87-20.47,20.47-20.47h175.38 C1188.75,47.66,1269.28,128.18,1269.28,227.13z M996.32,170.49v112.6c0,11.6,8.87,20.47,20.47,20.47h73.02 c42.31,0,77.11-34.12,77.11-76.43c0-42.99-34.8-77.11-77.11-77.11h-73.02C1005.19,150.02,996.32,158.89,996.32,170.49z"/> <path d="M1886.85,295.37c0,146.04-118.74,264.09-264.78,264.09s-264.09-118.06-264.09-264.09S1476.04,30.6,1622.08,30.6 S1886.85,149.33,1886.85,295.37z M1784.49,295.37c0-90.08-72.34-162.42-162.41-162.42c-89.39,0-161.73,72.34-161.73,162.42 c0,89.39,72.34,161.73,161.73,161.73C1712.16,457.1,1784.49,384.77,1784.49,295.37z"/> <path d="M2158.45,233.95l111.23-176.74c3.41-6.14,10.24-9.55,17.06-9.55h79.16c16.38,0,25.93,18.42,17.06,31.39l-182.89,279.1 c-1.36,2.05-2.05,4.78-2.05,7.51v173.33c0,11.6-8.87,20.47-20.47,20.47h-61.42c-11.6,0-20.47-8.87-20.47-20.47V365.66 c0-2.73-0.68-5.46-2.05-7.51l-182.89-279.1c-8.87-12.97,0.68-31.39,17.06-31.39h79.16c6.82,0,13.65,3.41,17.06,9.55l111.23,176.74 C2140.71,242.83,2152.99,242.83,2158.45,233.95z"/> <path d="M2726.88,405.92l118.74-344.61c3.41-8.19,10.92-13.65,19.79-13.65h66.88c11.6,0,20.47,8.87,20.47,20.47v470.86 c0,11.6-8.87,20.47-20.47,20.47h-61.42c-10.92,0-20.47-8.87-20.47-20.47V406.6c0-15.01-21.15-19.11-25.93-4.78l-52.54,143.99 c-3.41,8.19-10.92,13.65-19.11,13.65h-77.11c-8.19,0-16.38-5.46-19.11-13.65l-52.54-143.99c-4.78-14.33-26.61-10.24-26.61,4.78 v132.39c0,11.6-8.87,20.47-20.47,20.47h-61.42c-10.92,0-20.47-8.87-20.47-20.47V68.13c0-11.6,9.55-20.47,20.47-20.47h67.56 c8.87,0,16.38,5.46,19.11,13.65l118.74,344.61C2705.73,418.21,2722.79,418.21,2726.88,405.92z"/> <path d="M3234.59,47.66h74.38c8.19,0,15.7,5.46,19.11,13.65l171.97,470.86c4.78,12.97-4.78,27.3-19.11,27.3h-66.19 c-8.19,0-16.38-5.46-19.11-13.65l-27.98-78.48c-2.73-8.19-10.24-13.65-19.11-13.65h-154.23c-8.87,0-16.38,5.46-19.11,13.65 l-27.98,78.48c-2.73,8.19-10.92,13.65-19.11,13.65h-66.19c-14.33,0-23.88-14.33-19.11-27.3l171.97-470.86 C3218.21,53.12,3225.72,47.66,3234.59,47.66z M3242.77,358.15h57.32c14.33,0,23.88-13.65,19.79-27.3l-35.48-99.63 c-4.09-11.6-21.84-11.6-25.93,0l-34.8,99.63C3218.9,344.51,3228.45,358.15,3242.77,358.15z"/> <path d="M3508.23,47.66h334.38c11.6,0,20.47,8.87,20.47,20.47v54.59c0,11.6-8.87,20.47-20.47,20.47h-95.54 c-10.92,0-20.47,8.87-20.47,20.47v375.32c0,11.6-8.87,20.47-20.47,20.47h-61.42c-10.92,0-20.47-8.87-20.47-20.47V163.66 c0-11.6-8.87-20.47-20.47-20.47h-95.54c-10.92,0-20.47-8.87-20.47-20.47V68.13C3487.76,56.53,3497.31,47.66,3508.23,47.66z"/> <path d="M4147.65,405.92h-73.02c-11.6,0-20.47,8.87-20.47,20.47v112.6c0,11.6-9.55,20.47-20.47,20.47h-61.42 c-11.6,0-20.47-8.87-20.47-20.47V68.12c0-11.6,8.87-20.47,20.47-20.47h175.38c98.95,0,179.47,80.52,179.47,179.47 C4327.11,326.08,4246.59,405.92,4147.65,405.92z M4147.65,150.02h-73.02c-11.6,0-20.47,8.87-20.47,20.47v112.6 c0,11.6,8.87,20.47,20.47,20.47h73.02c42.31,0,77.11-34.12,77.11-76.43C4224.75,184.14,4189.95,150.02,4147.65,150.02z"/> <path d="M4791.15,227.13c0,58-27.98,110.55-71.65,143.31l58.69,161.73c4.78,12.97-4.78,27.3-19.11,27.3h-65.51 c-8.87,0-16.38-5.46-19.11-13.65l-46.4-126.93c-2.73-7.51-10.24-12.97-19.11-12.97h-70.29c-11.6,0-20.47,8.87-20.47,20.47v112.6 c0,11.6-9.55,20.47-20.47,20.47h-61.42c-11.6,0-20.47-8.87-20.47-20.47V68.12c0-11.6,8.87-20.47,20.47-20.47h175.38 C4710.63,47.66,4791.15,128.18,4791.15,227.13z M4518.18,170.49v112.6c0,11.6,8.87,20.47,20.47,20.47h73.02 c42.31,0,77.11-34.12,77.11-76.43c0-42.99-34.8-77.11-77.11-77.11h-73.01C4527.06,150.02,4518.18,158.89,4518.18,170.49z"/> <path d="M5408.73,295.37c0,146.04-118.74,264.09-264.78,264.09s-264.09-118.06-264.09-264.09S4997.92,30.6,5143.95,30.6 C5289.98,30.6,5408.73,149.33,5408.73,295.37z M5306.36,295.37c0-90.08-72.34-162.42-162.41-162.42 c-89.39,0-161.73,72.34-161.73,162.42c0,89.39,72.34,161.73,161.73,161.73C5234.03,457.1,5306.36,384.77,5306.36,295.37z"/> </g> </svg>
                        <!-- logo / end -->
                    </a>
                </div>
                <div class="site-header__phone">
                    <div class="site-header__phone-title">Гаряча лінія</div>
                    <a class="site-header__phone-number" href="callto:+380688400582">(068) 840-0582</a>
                </div>
            </div>
            <div class="site-header__nav-panel">
                <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                    <div class="nav-panel__container container">
                        <div class="nav-panel__row">
                            <div class="nav-panel__departments">
                                <!-- .departments -->
                            @isset($categories)
                                @if(\Request::is('/'))
                                    <div class="departments  departments--open  departments--fixed" data-departments-fixed-by=".block-slideshow">
                                @else
                                    <div class="departments" data-departments-fixed-by=".block-slideshow">
                                @endif
                                        <div class="departments__body">
                                            <div class="departments__links-wrapper">
                                                <div class="departments__submenus-container"></div>
                                                <ul class="departments__links">
                                                    @foreach($categories as $category)
                                                        <li class="departments__item">
                                                            <a class="departments__item-link" href="{{ route('shop', ['categories%5B%5D='. $category->id]) }}">
                                                                {{ $category->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="departments__button">
                                            <svg class="departments__button-icon" width="18px" height="14px">
                                                <use xlink:href="/images/sprite.svg#menu-18x14"></use>
                                            </svg>
                                            Категорії
                                            <svg class="departments__button-arrow" width="9px" height="6px">
                                                <use xlink:href="/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </button>
                                    </div>
                            @endisset
                                <!-- .departments / end -->
                            </div>
                            <!-- .nav-links -->
                            <div class="nav-panel__nav-links nav-links">
                                <ul class="nav-links__list">
                                    <li class="nav-links__item">
                                        <a class="nav-links__item-link" href="/">
                                            <div class="nav-links__item-body">
                                                Головна
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item">
                                        <a class="nav-links__item-link" href="{{ route('shop') }}">
                                            <div class="nav-links__item-body">
                                                Магазин
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item nav-links__item--has-submenu">
                                        <span class="nav-links__item-link">
                                            <div class="nav-links__item-body">
                                                Послуги
                                                <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                    <use xlink:href="/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </span>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu" style="">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    @isset($services)
                                                        @foreach($services as $service)
                                                            <li class="menu__item">
                                                                <div class="menu__item-submenu-offset"></div>
                                                                <a class="menu__item-link" href="{{ route('service', $service->id) }}">
                                                                    {{ $service->title }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    @endisset
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- .nav-links / end -->
                            <div class="nav-panel__indicators">
                                <div class="indicator indicator--trigger--click">
                                    <a href="account-login.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="/images/sprite.svg#person-20"></use>
                                                </svg>
                                            </span>
                                    </a>
                                    <div class="indicator__dropdown">
                                        <div class="account-menu">
                                            @guest
                                                <form method="POST" action="{{ route('login') }}" class="account-menu__form">
                                                    @csrf
                                                    <div class="account-menu__form-title">Вхід</div>
                                                    <div class="form-group">
                                                        <label for="header-signin-email" class="sr-only">Емаіл</label>
                                                        <input id="header-signin-email" type="text" name="email" class="form-control form-control-sm" placeholder="Email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="header-signin-password" class="sr-only">Пароль</label>
                                                        <div class="account-menu__form-forgot">
                                                            <input id="header-signin-password" type="password" name="password" class="form-control form-control-sm" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group account-menu__form-button">
                                                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                                                    </div>
                                                </form>
                                                <div class="account-menu__divider"></div>
                                            @endguest
                                            @auth
                                                <ul class="account-menu__links">
                                                    <li><a href="{{ route('categories.index') }}">Категорії</a></li>
                                                    <li><a href="{{ route('services.index') }}">Сервіси</a></li>
                                                    <li><a href="{{ route('products.create') }}">Додати продукт</a></li>
                                                    <li><a href="{{ route('get-logout') }}">Вийти</a></li>
                                                </ul>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- desktop site__header / end -->

    <div class="site__body">

        @yield('content')

    </div>
    @if (!request()->is('admin/*'))
    <!-- site__footer -->
    <footer class="site__footer">
        <div class="site-footer">
            <div class="container">
                <div class="site-footer__widgets">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="site-footer__widget footer-contacts">
                                <h5 class="footer-contacts__title">Зв'яжіться з нами</h5>
                                <ul class="footer-contacts__contacts">
                                    <li><i class="footer-contacts__icon far fa-envelope"></i> stroymatpro@gmail.com</li>
                                    <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> +380 (68) 840 05 82</li>
                                    <li><i class="footer-contacts__icon far fa-clock"></i> Понеділок-П'ятниця 9:00 - 19:00</li>
{{--                                    <li>--}}
{{--                                        <!-- social-links -->--}}
{{--                                        <div class="social-links footer-newsletter__social-links social-links--shape--circle">--}}
{{--                                            <ul class="social-links__list" style="color: #fff">--}}
{{--                                                <li class="social-links__item">--}}
{{--                                                    <a class="social-links__link social-links__link--type--facebook" href="" target="_blank">--}}
{{--                                                        <i class="fab fa-facebook-f"></i>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <!-- social-links / end -->--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
{{--                        <div class="col-12 col-md-6 col-lg-8">--}}
{{--                            <iframe style="height: 100%; width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1269.6854415935488!2d30.474071176695947!3d50.47143881433512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cddbc4bc6c0f%3A0x4827cc06a768bbbb!2z0KHRltC90LXQstC-!5e0!3m2!1suk!2sua!4v1608131413534!5m2!1suk!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
{{--                        </div>--}}
                </div>
            </div>
            <div class="totop">
                <div class="totop__body">
                    <div class="totop__start"></div>
                    <div class="totop__container container"></div>
                    <div class="totop__end">
                        <button type="button" class="totop__button">
                            <svg width="13px" height="8px">
                                <use xlink:href="/images/sprite.svg#arrow-rounded-up-13x8"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- site__footer / end -->
    @endif
</div>
<!-- site / end -->
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
    </div>
</div>
<!-- quickview-modal / end -->
<!-- mobilemenu -->
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Меню</div>
            <button type="button" class="mobilemenu__close">
                <svg width="20px" height="20px">
                    <use xlink:href="/images/sprite.svg#cross-20"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="/" class="mobile-links__item-link">Головна</a>

                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="/shop" class="mobile-links__item-link">Магазин</a>

                    </div>
                </li>


                <li class="mobile-links__item" data-collapse-item="">
                    <div class="mobile-links__item-title">
                        <a href="" class="mobile-links__item-link">Послуги</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/images/sprite.svg#arrow-rounded-down-9x6"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content="" style="">
                        <ul class="mobile-links mobile-links--level--1">
                            @isset($services)
                                @foreach($services as $service)
                                    <li class="mobile-links__item" data-collapse-item="">
                                        <div class="mobile-links__item-title">
                                            <a href="{{ route('service', $service->id) }}" class="mobile-links__item-link">{{ $service->title }}</a>
                                        </div>
                                    </li>
                                @endforeach
                            @endisset
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- mobilemenu / end -->
<!-- photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- photoswipe / end -->
<!-- js -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="/vendor/nouislider/nouislider.min.js"></script>
<script src="/vendor/photoswipe/photoswipe.min.js"></script>
<script src="/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="/vendor/select2/js/select2.min.js"></script>
<script src="/js/number.js"></script>
<script src="/js/main.js"></script>
<script src="/js/header.js"></script>
<script src="/js/base.js"></script>
<script src="/vendor/svg4everybody/svg4everybody.min.js"></script>
<script>
svg4everybody();
</script>
</body>

</html>
