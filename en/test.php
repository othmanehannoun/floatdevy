<?php include './include/header.php'; ?>

    <h2>Submit Your Details</h2>
    <form id="dataForm" onsubmit="submitForm(event)">
        <input type="text" name="name" placeholder="Your Name" required><br><br>
        <input type="email" name="email" placeholder="Your Email" required><br><br>
        <input type="text" name="phone" placeholder="Your Phone number" required><br><br>
        <button type="submit">Submit</button>
    </form>


    <?php include './include/information.php'; ?>
    <?php include './include/footer.php'; ?>
