<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Login</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Login</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <form class="w-100" method="POST" action="/login">
            <div class="offset-3 col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="offset-2 col-8 input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-2 col-8 input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
                            </div>
                        </div>  
                        <div class="row pt-4">
                            <div class="offset-3 col-6 text-center">
                                <input class="btn btn-success btn-lg" id="Form" type="submit" value="Login">
                                <a class="btn btn-info btn-lg" href="/">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>