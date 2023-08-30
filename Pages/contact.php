<div class="contact-outer" id="contact">
    <form method="post" action="./Functions/insert.php">
        <input required type="text" placeholder="Name" name="name">
        <input required type="email" placeholder="E-mail adress " name="email">
        <input required type="text" placeholder="Subject" name="subject">
        <div class="form-div">
            <textarea required placeholder="Type your question here" name="message" id="form-content"></textarea>
            <input type="submit" value="Submit"/>
        </div>
    </form>
</div>