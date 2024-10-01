<html lang="en" class="focus-outline-visible">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Layout</title>
    <link rel="stylesheet" href="/views/css/myStyle.css">

</head>

<body>
    <!-- Start Header -->
    <header>
        <div class="icon">🌐</div>
        <div class="menu">
            <a href="/">Home</a>
            <a href="gallery">Gallery</a>
            <a href="appointment">Appointment</a>
            <a href="about">About</a>
            <a href="contact">Contact</a>
        </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start Main -->
    <main>
        <aside class="sidebar-l">
            <h2>Menu</h2>
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ul>
        </aside>
        <section id="myContent" class="content">
            <h1>Contact Content</h1>
            <form action="/send-message" method="post">
                <fieldset>
                    <legend>Contact Us</legend>

                    <p>
                        <label for="name">Your Name</label><br>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </p>

                    <p>
                        <label for="email">Your Email</label><br>
                        <input type="email" id="email" name="email" placeholder="example@example.com" required>
                    </p>

                    <p>
                        <label for="phone">Your Phone Number</label><br>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="1234567890" required>
                        <small>Format: 1234567890</small>
                    </p>

                    <p>
                        <label for="subject">Subject</label><br>
                        <input type="text" id="subject" name="subject" placeholder="Enter the subject" required>
                    </p>

                    <p>
                        <label for="message">Message</label><br>
                        <textarea id="message" name="message" rows="5" cols="40" placeholder="Type your message here"
                            required></textarea>
                    </p>

                    <p>
                        <button type="submit">Send Message</button>
                    </p>
                </fieldset>
            </form>

        </section>
        <aside class="sidebar-r">
            <h2>Events List</h2>
            <ul>
                <li>Event 1</li>
                <li>Event 2</li>
                <li>Event 3</li>
            </ul>
        </aside>
    </main>
    <!-- End main -->

    <!-- Start Footer -->
    <footer>
        <!-- &copy; -->
        <div>© 2024 My Website</div>
        <div class="breadcrumbs"><a href="index.html">Home</a> &gt; Contact</div>
        <div>Email: info@example.com</div>
    </footer>
    <!-- END Footer -->

</body>
<script src="views/js/myScript.js"></script>

</html>