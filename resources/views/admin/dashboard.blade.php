@include('admin._header')

<style>
    .two-box-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .box {
        width: 400px;
        height: 200px;
        margin: 0 10px;
        background-color: #ffddcc; /* Light peach background */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column; /* Stack content vertically */
        border: 2px solid #ff5733; /* Brighter border */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
        font-size: 22px;
        font-family: Arial, sans-serif;
        transition: transform 0.3s ease; /* Add smooth hover effect */
    }

    .box:hover {
        transform: scale(1.05); /* Slight zoom effect on hover */
        background-color: #ffaaa5; /* Change background on hover */
    }

    .box h4 {
        color: #ff5733; /* Bold orange title color */
        margin-bottom: 10px; /* Space between title and content */
    }

    .box p {
        font-size: 30px; /* Larger text for numbers */
        color: #ff0000; /* Bright red for the count */
        margin: 0;
    }
</style>

<div class="two-box-container">
    <!-- Box 1: Contact Count -->
    <div class="box">
        <h4>Contact List</h4>
        <p>{{ count($contacts) }}</p> <!-- Display the count of contacts -->
    </div>

    <!-- Box 2: Appointment Count -->
    <div class="box">
        <h4>Appointment List</h4>
        <p>{{ count($appointments) }}</p> <!-- Display the count of appointments -->
    </div>
</div>

@include('admin._footer')
