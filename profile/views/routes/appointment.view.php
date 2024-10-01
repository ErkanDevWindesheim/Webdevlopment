<html lang="en" class="focus-outline-visible">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment</title>
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
            <h1>Appointment Content</h1>
            <form action="/book-appointment" method="post">
                <fieldset>
                    <legend>Book an Appointment</legend>

                    <p>
                        <label for="title">Title</label><br>
                        <label>
                            <input type="radio" name="title" value="mr" required> Mr
                        </label>
                        <label>
                            <input type="radio" name="title" value="mrs" required> Mrs
                        </label>
                        <label>
                            <input type="radio" name="title" value="miss" required> Miss
                        </label>
                    </p>

                    <p>
                        <label for="first_name">First Name</label><br>
                        <input type="text" id="first_name" name="first_name" placeholder="Enter your first name"
                            required>
                    </p>

                    <p>
                        <label for="last_name">Last Name</label><br>
                        <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
                    </p>

                    <p>
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" placeholder="example@example.com" required>
                    </p>

                    <p>
                        <label for="phone">Phone Number</label><br>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="1234567890" required>
                        <small>Format: 1234567890</small>
                    </p>

                    <p>
                        <label for="appointment_date">Appointment Date</label><br>
                        <input type="date" id="appointment_date" name="appointment_date" required>
                    </p>

                    <p>
                        <label for="appointment_time">Appointment Time</label><br>
                        <input type="time" id="appointment_time" name="appointment_time" required>
                    </p>

                    <p>
                        <label for="reason">Reason for Appointment</label><br>
                        <textarea id="reason" name="reason" rows="4" cols="50"
                            placeholder="Brief description of the appointment reason" required></textarea>
                    </p>

                    <p>
                        <button type="submit">Book Appointment</button>
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
        <div class="breadcrumbs"><a href="index.html">Home</a> &gt; About</div>
        <div>Email: info@example.com</div>
    </footer>
    <!-- END Footer -->

</body>
<script src="views/js/myScript.js"></script>

</html>