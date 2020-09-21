<div class="container-fluid">
    <div class="row">
        <div class="offset-1 col-11">
            <div class="jumbotron">
                <h1 class="display-4">Contact Tracer</h1>
                <p class="lead">Tracing COVID-19</p>
                <?php if(!isset($_SESSION['user'])):?>
                    <a href="/login" class="btn btn-success">Login</a>
                    <a href="/register" class="btn btn-outline-info">Register</a>
                <?php else: ?>
                    <p>Welcome <?=$user['name']?>!</p>
                    <a class="btn btn-info" href="/map">Check out the map!</a>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>