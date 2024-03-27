<?php require_once 'includes/header.php'; ?>

<h3><u>Contact Form</u></h3>
<div class="container">
    <form action="/action_page.php">
        <label for="name"> Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.."
        autocomplete="given-name">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.."></textarea>
        <input type="radio" id="a" name="drone" value="A" checked />
        <label for="A">A</label>
        <input type="radio" id="b" name="drone" value="B" checked />
        <label for="B">B</label>
        <input type="radio" id="c" name="drone" value="C" checked />
        <label for="C">C</label>
        <input type="checkbox" id="A" name="A" checked />
        <label for="A">A</label>
        <input type="checkbox" id="B" name="B" checked />
        <label for="B">B</label>
        <input type="checkbox" id="C" name="C" checked />
        <label for="C">C</label>
        <label for="avatar">Choose a profile picture:</label>

        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />

        <input type="submit" value="Submit">
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>