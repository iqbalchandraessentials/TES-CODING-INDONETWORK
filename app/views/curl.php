<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class="container mt-5">
    <form action="http://tes-coding-indonetwork.test/Create/index" method="POST">
        <input type="text" class="form-control" name="nama">
        <div class="g-recaptcha" data-sitekey="6LdVo6kcAAAAAL-ZnYXqZDKIb49286vcFeZ3W1bQ"></div>
        <!-- <button class="g-recaptcha" data-sitekey="6LdVo6kcAAAAAL-ZnYXqZDKIb49286vcFeZ3W1bQ" data-callback='onSubmit' data-action='submit' type="submit">Submit</button> -->
        <input type="submit" name="name" value="post">
    </form>
</div>

<script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
</script>


<!-- site key 6LdVo6kcAAAAAL-ZnYXqZDKIb49286vcFeZ3W1bQ -->
<!-- secret key 6LdVo6kcAAAAAJsmGX8woySvCWIdk0yUCQdZUcU0 -->