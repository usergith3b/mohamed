<?php
session_start();
$page_title = "How it works | Frenchichi";
include('includes/header.php');
include('includes/nav.php');
?>
<!-- Start of content 1 -->
<div class="container pt-5">
    <div class="row">
        <h1 class="text-center">How this website works</h1>
        <hr />
        <h3 class="pt-5">The problem</h3>
        <p>
            This french resturent needed some way to track what reservations were made, and by whom. They also needed to know what tables were available at any given time.
            They also wanted this website to be easy to use, and not require any special software or training. 
            The solution was to create a simple web application that could be accessed from any device with an internet connection.
        </p>
        <h3 class="pt-4">Who it's for</h3>
        <p>
            People who work for the restaurant, and need to keep track of reservations and table availability. 
            This includes the restaurant manager, host/hostess, and waitstaff. 
            The website is also useful for customers who want to make a reservation online.
        </p>
        <h3 class="pt-4">What it does</h3>
        <ul>
            <li>Lets a signed-in customer log a reservation — table, date, and time</li>
            <li>Shows anyone, monitor or staff, a live public list of what's currently available</li>
            <li>Flags any reservations that are overdue</li>
            <li>Lets a monitor mark a reservation as completed, or correct a mistaken entry</li>
        </ul>
        <div class="text-center mt-4">
            <a class="btn btn-danger btn-lg me-2" href="view_reservations.php">See current reservations</a>
            <a class="btn btn-outline-dark btn-lg" href="login.php">Monitor login</a>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>