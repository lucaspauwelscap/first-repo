<!doctype html>
<html lang="nl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300i,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Contact form</title>
</head>

<body>
<header>
    <nav>
        <div id="nav-brand">
            <p>Test automation</p>
        </div>
        <div id="nav-list">
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Test</li>
                <li>Contact</li>
            </ul>
        </div>
    </nav>

    <div id="headerLanding">
        <h1 id="heading">Welcome on our test page</h1>
        <p id="header-paragraph">Welcome on our test environment, we created this website specially for getting to know all the basic features in html. Make sure to take your time to get to know all the different tags
            that are visible on this website. By inspecting them we can learn more about how they are structured and find out what tags are their parent, childs, etc.
            TIP: To inspect the page or an item, just press F12 or right-click "inspect element"!</p>
        <div id="headerButtons">
            <a href="#" class="butn" id="test-btn">Test</a>
            <a href="#" class="butn" id="automation-btn">Automation</a>
        </div>
        <div id="div-billy">
            <img src="img/billie_verkocht.png" alt="Lights" id="billy">
        </div>

    </div>

</header>

<section class="section-light">
    <img src="img/background.jpeg" alt="Lights" id="light-image">
</section>

<section class="section-dark">
    <h2 id="heading2">Contact us for more info.</h2>

    <form id="contactForm">
        <fieldset class="field" id="person-details">
            <input name="name" type="text" placeholder="Your name">
            <input name="address" type="text" placeholder="Your address">
            <input name="password" type="password" placeholder="Your password">
        </fieldset>
        <fieldset class="field" id="form-select">
            <select>
                <option disabled>Choose an option...</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
            </select>
        </fieldset>
        <fieldset class="field" id="form-buttons">
            <input type="radio" name="gender" value="male" checked> <span class="input-span">Male</span>
            <input type="radio" name="gender" value="female"> <span class="input-span">Female</span>
            <input type="radio" name="gender" value="other"> <span class="input-span">Other</span><br>
            <input type="checkbox" name="vehicle1" value="Bike"> <span class="input-span">I agree to the terms and conditions</span><br>
            <input id="submit-btn" type="button" value="Submit" class="butn">
        </fieldset>
    </form>
</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>

</html>