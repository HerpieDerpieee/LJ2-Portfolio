<div class="contact-outer" id="contact">
    <h1 class="pages-fancy-title">Contact</h1><br><br>
    <div class="contact-inner" id="contact-container">
        <form method="post" action="./Functions/insert.php" onsubmit="document.querySelector('#contact-form-submit-btn').disabled = true">
            <input required type="text" placeholder="Name" name="name">
            <input required type="email" placeholder="E-mail adress " name="email">
            <input required type="text" placeholder="Subject" name="subject">
            <textarea required placeholder="Type your question here" name="message" id="form-content"></textarea>
            <input type="submit" value="Submit" id="contact-form-submit-btn"/>
        </form>
    </div>
</div>