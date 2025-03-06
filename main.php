<!DOCTYPE html>
<html>

<head>
    <title>Finding Falcone</title>
    <link rel="icon" type="image/png" href="pics/logo.svg">
    <link rel="stylesheet" href="css/main_page.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="falcone.js"></script>
</head>

<body>
    <header class="header">
        <img src="pics/logo.svg" alt="Finding Falcone Logo" class="logo">
        <h3 class="header-title">Finding Falcone</h3>

        <div class="right-section">
            <a href="main.php" class="reset-container">
                <img src="pics/reset_logo.svg" alt="Reset Logo" class="reset-logo">
                <p class="reset">Reset</p>
            </a>

            <a href="index.php" class="home-container">
                <img src="pics/home_logo.svg" alt="Home Logo" class="home-logo">
                <p class="reset">Home</p>
            </a>
        </div>
    </header>
    <h1 class="select">Select planets you want to search in:</h1>

    <div class="main-container">
        <div class="destination-container">
            <p class="destination-number">Destination 1</p>
            <div class="dropdown-container">
                <select class="dropdown">
                    <option value="" disabled selected>Choose a planet</option>
                </select>
            </div>
            <div class="radio-container">
                <div class="vehicle-options"></div>
            </div>
        </div>

        <div class="destination-container">
            <p class="destination-number">Destination 2</p>
            <div class="dropdown-container">
                <select class="dropdown">
                    <option value="" disabled selected>Choose a planet</option>
                </select>
            </div>
            <div class="radio-container">
                <div class="vehicle-options"></div>
                <!-- <input type="radio" value="Space Ship" class="radio-button">
                <label for="ship" class="radio-option">Space Ship (N)</label>  -->
            </div>
        </div>

        <div class="destination-container">
            <p class="destination-number">Destination 3</p>
            <div class="dropdown-container">
                <select class="dropdown">
                    <option value="" disabled selected>Choose a planet</option>
                </select>
            </div>
            <div class="radio-container">
                <div class="vehicle-options"></div>
            </div>
        </div>

        <div class="destination-container">
            <p class="destination-number">Destination 4</p>
            <div class="dropdown-container">
                <select class="dropdown">
                    <option value="" disabled selected>Choose a planet</option>
                </select>
            </div>
            <div class="radio-container">
                <div class="vehicle-options"></div>
            </div>
        </div>
    </div>

    <div class="time-container">
        <p class="time" id="total-time">Total Time: 0.00</p>
    </div>

    <div class="find-container">
        <button class="find-button" id="find-button">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="currentColor" class="find-pic">
                <path d="M17.9167 35.8333C15.4382 35.8333 13.109 35.3627 10.9292 34.4215C8.74931 33.4803 6.85313 32.204 5.24063 30.5927C3.62813 28.9814 2.35186 27.0852 1.41184 24.9042C0.471808 22.7231 0.00119671 20.3939 2.26793e-06 17.9167C-0.00119218 15.4394 0.469419 13.1102 1.41184 10.9292C2.35425 8.74811 3.63052 6.85193 5.24063 5.24063C6.85074 3.62932 8.74692 2.35306 10.9292 1.41183C13.1114 0.470611 15.4406 0 17.9167 0C20.3928 0 22.7219 0.470611 24.9042 1.41183C27.0864 2.35306 28.9826 3.62932 30.5927 5.24063C32.2028 6.85193 33.4797 8.74811 34.4233 10.9292C35.3669 13.1102 35.8369 15.4394 35.8333 17.9167C35.8298 20.3939 35.3591 22.7231 34.4215 24.9042C33.4839 27.0852 32.2076 28.9814 30.5927 30.5927C28.9778 32.204 27.0816 33.4809 24.9042 34.4233C22.7267 35.3657 20.3975 35.8357 17.9167 35.8333ZM17.9167 32.25C21.9181 32.25 25.3073 30.8615 28.0844 28.0844C30.8615 25.3073 32.25 21.9181 32.25 17.9167C32.25 13.9153 30.8615 10.526 28.0844 7.74896C25.3073 4.97187 21.9181 3.58333 17.9167 3.58333C13.9153 3.58333 10.526 4.97187 7.74896 7.74896C4.97188 10.526 3.58334 13.9153 3.58334 17.9167C3.58334 21.9181 4.97188 25.3073 7.74896 28.0844C10.526 30.8615 13.9153 32.25 17.9167 32.25ZM17.9167 28.6667C14.9306 28.6667 12.3924 27.6215 10.3021 25.5312C8.21181 23.441 7.16667 20.9028 7.16667 17.9167C7.16667 14.9306 8.21181 12.3924 10.3021 10.3021C12.3924 8.21181 14.9306 7.16667 17.9167 7.16667C20.9028 7.16667 23.441 8.21181 25.5313 10.3021C27.6215 12.3924 28.6667 14.9306 28.6667 17.9167C28.6667 20.9028 27.6215 23.441 25.5313 25.5312C23.441 27.6215 20.9028 28.6667 17.9167 28.6667ZM17.9167 25.0833C19.8875 25.0833 21.5747 24.3816 22.9781 22.9781C24.3816 21.5747 25.0833 19.8875 25.0833 17.9167C25.0833 15.9458 24.3816 14.2587 22.9781 12.8552C21.5747 11.4517 19.8875 10.75 17.9167 10.75C15.9458 10.75 14.2587 11.4517 12.8552 12.8552C11.4517 14.2587 10.75 15.9458 10.75 17.9167C10.75 19.8875 11.4517 21.5747 12.8552 22.9781C14.2587 24.3816 15.9458 25.0833 17.9167 25.0833ZM17.9167 21.5C16.9313 21.5 16.088 21.1494 15.3868 20.4483C14.6857 19.7472 14.3345 18.9033 14.3333 17.9167C14.3321 16.9301 14.6833 16.0868 15.3868 15.3868C16.0904 14.6869 16.9336 14.3357 17.9167 14.3333C18.8997 14.3309 19.7436 14.6821 20.4483 15.3868C21.153 16.0916 21.5036 16.9348 21.5 17.9167C21.4964 18.8985 21.1458 19.7424 20.4483 20.4483C19.7507 21.1542 18.9069 21.5048 17.9167 21.5Z" fill="#FFFEFE" />
            </svg>
            Find Falcone!</button>
    </div>

    <p id="result"></p>

    <footer class="footer">
        <p class="footer-note">by: Mark Francis Gorreon</p>
    </footer>
</body>

</html>