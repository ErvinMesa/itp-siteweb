<style>
    .table tbody+tbody{
        border-top: none;
    }

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cities and Municipalities</h4>
                    <a href="/ctracing/create" class="btn btn-primary mb-2">Add</a>
                    <div class="table-responsive">
                        <table id="ctracing" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Class</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($entries as $entry): ?>
                                    <tr>
                                        <td><?= $entry['cmdesc']?></td>
                                        <td><?= $entry['latitude']?></td>
                                        <td><?= $entry['longitude']?></td>
                                        <td><?= $entry['cmclass']?></td>
                                        <td>
                                            <a href="<?= "/ctracing/".$entry['id']?>" class="btn btn-info">edit</a>
                                            <a href="<?= "/ctracing/delete/".$entry['id']?>" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>