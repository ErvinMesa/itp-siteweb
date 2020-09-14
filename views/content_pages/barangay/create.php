<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Barangay</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <form class="w-100" method="POST" action="/barangay">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <h5 class="card-title">Name</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control required" name="bname">
                                </div>
                            </div>
                            <div class="col-2">
                            <h4 class="card-title">Latitude</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control required" name="latitude">
                                </div>
                            </div>
                            <div class="col-2">
                            <h4 class="card-title">Longitude</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control required" name="longitude">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-3">
                                <h4 class="card-title">Level</h4>
                                <div class="form-group mb-4">
                                    <select class="form-control" id="exampleFormControlSelect1" name="idcm">
                                        <?php foreach($citymuns as $cm): ?>
                                            <option value=<?=$cm['id']?>><?= $cm['cmdesc']?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <h4 class="card-title">Estimated Population</h4>
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control required numeric" name="estpop">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col">
                                <h4 class="card-title">Remarks</h4>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="remarks"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="offset-10 col-2">
                                <input class="btn btn-success btn-lg" id="Form" type="submit" value="Save">
                                <a class="btn btn-info btn-lg" href="/barangay">Listing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>