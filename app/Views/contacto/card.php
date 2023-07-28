<div class="container-fluid">

    <div class="row align-items-center justify-content-center">
        <div class="col-md">
            <div class="card my-5 mx-2" style="width: 18rem;">
                <img src="https://www.coriaweb.hosting/wp-content/uploads/2016/11/dc5df_codeigniter.jpg" class="card-img-top" alt="CodeIgniter">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj166--5qqAAxUjmGoFHeeKDE4QFnoECBcQAQ&url=https%3A%2F%2Fwww.codeigniter.com%2F&usg=AOvVaw1DO0y70hE6kj9sse7o8dTH&opi=89978449" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-md">
            <form method="post" action="<?= base_url() ?>/metodoPOST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $email ?>" name="correo">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?= $contrasena ?>" name="contrasena">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>