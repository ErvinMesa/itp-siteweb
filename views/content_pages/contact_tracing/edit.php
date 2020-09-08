<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Contact Tracing</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <form class="w-100" method="POST">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <h4 class="card-title">Description</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cmdesc" value="<?=$entry['cmdesc']?>">
                                </div>
                            </div>
                            <div class="col-2">
                            <h4 class="card-title">Latitude</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="latitude" value="<?=$entry['latitude']?>">
                                </div>
                            </div>
                            <div class="col-2">
                            <h4 class="card-title">Longitude</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="longitude" value="<?=$entry['longitude']?>">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-3">
                                <h4 class="card-title">Class</h4>
                                <div class="form-group mb-4">
                                    <select class="form-control" id="exampleFormControlSelect1" name="cmclass">
                                        <option selected>City</option>
                                        <option>Municipality</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col">
                                <h4 class="card-title">Remarks</h4>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="remarks" value="<?=$entry['remarks']?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="offset-10 col-2">
                                <input class="btn btn-success btn-lg" id="Form" type="submit" value="Save">
                                <a class="btn btn-info btn-lg" href="/ctracing">Listing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>