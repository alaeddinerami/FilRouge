<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>reservation</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <style>

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
            margin: 0;
        }

        .dates {
            font-size: 16px;
            margin: 5px 0 0;
        }

        h2 {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        p {
            margin: 0;
            margin-left: 1rem;
            font-size: 16px;
        }

        .details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .guest-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .guest-info div {
            display: flex;
            align-items: center;
        }

        .guest-info img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .info div {
            display: flex;
            align-items: center;
        }

        .info img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .address {
            display: flex;
            align-items: center;
        }

        .address img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }
    </style>
</head>



<body>
    <div class="container">
        <header>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.dev/svgjs" version="1.1" width="200px" height="100px"
                viewBox="0 0 2000 1010">
                <g transform="matrix(1,0,0,1,-1.2121212121212466,0.63155172757439)"><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 396 200" data-background-color="#ffffff" preserveAspectRatio="xMidYMid meet"
                        height="1010" width="2000">
                        <g id="tight-bounds" transform="matrix(1,0,0,1,0.2400000000000091,-0.12505974803453057)"><svg
                                viewBox="0 0 395.52 200.25011949606906" height="200.25011949606906" width="395.52">
                                <g><svg viewBox="0 0 397.4975999999999 201.25137009354938" height="200.25011949606906"
                                        width="395.52">
                                        <g>
                                            <rect width="397.4975999999999" height="6.430888316496068" x="0"
                                                y="91.82653902796042" fill="#000000" opacity="1" stroke-width="0"
                                                stroke="transparent" fill-opacity="1" class="rect-yte-0"
                                                data-fill-palette-color="primary" rx="1%" id="yte-0"
                                                data-palette-color="#000000" />
                                        </g>
                                        <g>
                                            <rect width="397.4975999999999" height="6.430888316496068" x="0"
                                                y="106.67482042887542" fill="#000000" opacity="1" stroke-width="0"
                                                stroke="transparent" fill-opacity="1" class="rect-yte-1"
                                                data-fill-palette-color="primary" rx="1%" id="yte-1"
                                                data-palette-color="#000000" />
                                        </g>
                                        <g transform="matrix(1,0,0,1,0.9887999999999693,129.94049491420935)"><svg
                                                viewBox="0 0 395.52 71.31087517934002" height="71.31087517934002"
                                                width="395.52">
                                                <g id="textblocktransform"><svg viewBox="0 0 395.52 71.31087517934002"
                                                        height="71.31087517934002" width="395.52" id="textblock">
                                                        <g><svg viewBox="0 0 395.52 71.31087517934002"
                                                                height="71.31087517934002" width="395.52">
                                                                <g transform="matrix(1,0,0,1,0,0)"><svg width="395.52"
                                                                        viewBox="2 -37.5 209.08 37.7"
                                                                        height="71.31087517934002"
                                                                        data-palette-color="#000000">
                                                                        <path
                                                                            d="M2-17.4L2-17.4Q2-25.55 6.23-30.38 10.45-35.2 16.75-35.2L16.75-35.2Q31.5-35.2 31.5-17.4L31.5-17.4Q31.5-9.3 27.3-4.55 23.1 0.2 16.75 0.2L16.75 0.2Q2 0.2 2-17.4ZM5.4-17.5L5.4-17.5Q5.4-2.8 16.75-2.8L16.75-2.8Q21.65-2.8 24.88-6.7 28.1-10.6 28.1-17.5L28.1-17.5Q28.1-32.2 16.75-32.2L16.75-32.2Q11.85-32.2 8.63-28.28 5.4-24.35 5.4-17.5ZM37.85-22.5L34.5-22.5 34.5-25 41.1-25 41.1-22.2Q45.2-25 48.95-25.15L48.95-25.15Q52.6-25.15 54.5-23.7L54.5-23.7Q55.35-23.05 56.02-21.68 56.7-20.3 56.7-18.4L56.7-18.4 56.7-2.5 60.55-2.5 60.55 0 50.45 0 50.45-2.5 53.45-2.5 53.45-17.15Q53.45-22 47.75-22L47.75-22Q44.65-21.9 41.1-19.95L41.1-19.95 41.1-2.5 44.85-2.5 44.85 0 34.75 0 34.75-2.5 37.85-2.5 37.85-22.5ZM65.9-11.2L65.9-11.2Q65.9-6.75 68.45-4.73 71-2.7 74.4-2.7L74.4-2.7Q76.59-2.7 78.92-3.13 81.25-3.55 82-3.9L82-3.9 82.65-1.55Q81.5-0.8 78.87-0.3 76.25 0.2 74.07 0.2 71.9 0.2 70.17-0.25 68.45-0.7 66.65-1.85 64.84-3 63.8-5.45 62.75-7.9 62.75-11.45L62.75-11.45Q62.75-18.05 66.15-21.55L66.15-21.55Q69.7-25.2 74.4-25.2 79.09-25.2 81.57-22.6 84.05-20 84.05-15.3L84.05-15.3Q84.05-14.3 83.9-13.15L83.9-13.15 66.05-13.15Q65.9-12.1 65.9-11.2ZM81.05-15.65L81.05-15.65Q81.05-18.75 79.2-20.43 77.34-22.1 74.9-22.1L74.9-22.1Q71.55-22.1 69.34-20.08 67.15-18.05 66.4-15.1L66.4-15.1 81.05-15.1Q81.05-15.4 81.05-15.65ZM130.19 0L120.09 0 120.09-2.5 123.14-2.5 123.14-17.1Q123.14-18.85 122.42-19.95 121.69-21.05 120.54-21.4L120.54-21.4Q118.64-22.05 117.44-21.95L117.44-21.95Q114.19-21.85 110.29-19.65L110.29-19.65 110.29-2.5 114.09-2.5 114.09 0 103.99 0 103.99-2.5 107.04-2.5 107.04-35 103.69-35 103.69-37.5 110.29-37.5 110.29-21.9Q116.84-26.4 122.14-24.7L122.14-24.7Q123.34-24.35 124.22-23.68 125.09-23 125.74-21.65 126.39-20.3 126.39-18.4L126.39-18.4 126.39-2.5 130.19-2.5 130.19 0ZM139.24 0.2L139.24 0.2Q132.59 0.2 132.19-5.05L132.19-5.05Q132.14-5.4 132.14-5.75L132.14-5.75Q132.14-9.95 137.19-11.35L137.19-11.35Q139.99-12.05 147.99-12.95L147.99-12.95 147.99-16.8Q147.99-22.25 142.29-22.25L142.29-22.25Q138.19-22.2 133.59-20.35L133.59-20.35 132.74-22.5 133.24-22.7Q137.14-24.4 139.19-24.75 141.24-25.1 142.19-25.13 143.14-25.15 144.01-25.1 144.89-25.05 146.29-24.65 147.69-24.25 148.71-23.53 149.74-22.8 150.49-21.35 151.24-19.9 151.24-17.9L151.24-17.9 151.24-2.5 155.09-2.5 155.09 0 148.49 0 147.99-1.9Q143.49 0.2 139.24 0.2ZM140.14-2.1L140.14-2.1Q143.94-2.1 147.99-3.8L147.99-3.8 147.99-10.95Q140.49-10.7 138.29-9.95L138.29-9.95Q136.59-9.5 135.89-8.33 135.19-7.15 135.19-6.45 135.19-5.75 135.19-5.5L135.19-5.5Q135.34-3.7 136.74-2.9 138.14-2.1 140.14-2.1ZM160.44-22.5L157.09-22.5 157.09-25 163.69-25 163.69-22.2Q167.79-25 171.54-25.15L171.54-25.15Q175.19-25.15 177.09-23.7L177.09-23.7Q177.94-23.05 178.61-21.68 179.29-20.3 179.29-18.4L179.29-18.4 179.29-2.5 183.14-2.5 183.14 0 173.04 0 173.04-2.5 176.04-2.5 176.04-17.15Q176.04-22 170.34-22L170.34-22Q167.24-21.9 163.69-19.95L163.69-19.95 163.69-2.5 167.44-2.5 167.44 0 157.34 0 157.34-2.5 160.44-2.5 160.44-22.5ZM190.73-1.85L190.73-1.85Q188.98-3 187.91-5.48 186.83-7.95 186.83-11.5L186.83-11.5Q186.83-18.05 190.18-21.5L190.18-21.5Q193.73-25.2 198.28-25.2L198.28-25.2Q201.08-25.2 203.98-23.75L203.98-23.75 203.98-35 200.63-35 200.63-37.5 207.23-37.5 207.23-2.5 211.08-2.5 211.08 0 204.48 0 204.08-1.6Q201.23 0.2 197.53 0.2 193.83 0.2 190.73-1.85ZM203.98-4.05L203.98-4.05 203.98-21.6Q201.68-22.3 199.63-22.3L199.63-22.3Q195.33-22.3 192.71-19.48 190.08-16.65 190.08-11.55L190.08-11.55Q190.08-8.85 190.86-6.98 191.63-5.1 192.93-4.2L192.93-4.2Q195.18-2.7 198.18-2.7 201.18-2.7 203.98-4.05Z"
                                                                            opacity="1"
                                                                            transform="matrix(1,0,0,1,0,0)"
                                                                            fill="#000000" class="wordmark-text-0"
                                                                            data-fill-palette-color="primary"
                                                                            id="text-0" />
                                                                    </svg></g>
                                                            </svg></g>
                                                    </svg></g>
                                            </svg></g>
                                        <g transform="matrix(1,0,0,1,76.53311999999997,0)"><svg
                                                viewBox="0 0 244.43135999999998 74.99175285912254"
                                                height="74.99175285912254" width="244.43135999999998">
                                                <g><svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0"
                                                        y="0"
                                                        viewBox="1.3839999610768912 35.08421672785837 97.23174411955127 29.830783272141637"
                                                        enable-background="new 0 0 100 100" xml:space="preserve"
                                                        height="74.99175285912254" width="244.43135999999998"
                                                        class="icon-icon-0" data-fill-palette-color="accent"
                                                        id="icon-0">
                                                        <path
                                                            d="M97.441 36.994C97.452 37.008 98.525 37.661 98.614 39.562 98.661 40.608 97.768 41.971 94.728 43.113 94.728 43.113 81.919 48.374 66.897 57.977 66.897 57.977 65.173 59.057 63.16 58.915 53.148 57.712 42.306 57.713 41.192 57.754 34.725 57.99 27.165 58.751 20.343 64.915 20.343 64.915 4.292 61.315 1.384 51.695 1.383 51.684 20.651 46.158 31.315 37.335 34.832 34.424 38.533 35.117 39.962 35.255 42.037 35.452 46.107 37.047 51.774 37.765 54.713 38.136 58.93 38.398 62.857 38.724 68.966 39.233 70.935 40.39 70.873 43.872 70.852 45.106 69.7 48.207 64.868 48.027 63.811 47.988 61.282 47.768 59.522 47.668 57.913 47.576 55.125 47.551 51.58 47.668 48.741 47.763 46.645 48.729 46.645 48.729S49.621 49.124 50.693 49.256C53.994 49.667 58.28 50.284 62.233 50.362 66.191 50.44 69.24 49.925 71.219 48.194 74.118 45.344 73.317 42.558 72.83 41.034 72.83 41.034 89.95 35.989 91.12 35.811 93.477 35.452 96.406 35.823 97.441 36.994"
                                                            fill="#000000" data-fill-palette-color="accent" />
                                                    </svg></g>
                                            </svg></g>
                                        <g />
                                    </svg></g>
                                <defs />
                            </svg>
                            <rect width="395.52" height="200.25011949606906" fill="none" stroke="none"
                                visibility="hidden" />
                        </g>
                    </svg></g>
            </svg>
        </header>

        <div class="details">
            <div class="arrival">
                <h2>Check-in</h2>
                <span>{{$reservation->reserved_at}}</span>
            </div>
            <div class="checkout">
                <h2>Check-out</h2>
                <span>{{$reservation->finished_at}}</span>
            </div>
        </div>

        <div class="guest-info">
            <div class="name">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" height='30px'>
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                <p>{{$reservation->student->users->name}}</p>
            </div>
            <div class="email">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" height='30px'>
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <p>{{$reservation->student->users->email}}</p>
            </div>

        </div>

        <div class="info">

            <div class="confirmation">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" height='30px'>
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <p>Room: {{$reservation->room->roomNumber}}</p>
            </div>
        </div>

        <div class="address">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" height='30px'>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
            <p>14 Av. Zerktouni, Safi, 46000, Morocco</p>
        </div>
    </div>
</body>

</html>
