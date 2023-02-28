<?php
include_once('up.php');
require_once('lib.php');
// echo'number'. $_GET['n'];
$sql=$connection->query("SELECT * FROM `tasks`");
$data=$sql->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>register Form</strong>
        </div>
        <div class="card-body card-block">
            <form action="lib.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">task</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="task" placeholder="Enter task"
                            class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">descreption</label></div>
                    <div class="col-12 col-md-9"><textarea type="text" id="disabled-input" name="description" placeholder="Enter description"
                            class="form-control"></textarea><small class="form-text text-muted">This is a help text</small></div>
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
        </form>
    </div>
</div>
<div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">task</th>
                <th scope="col">description</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $c=0;
    foreach($data as $d){
        $c++;
    ?>
            <tr>
                <th scope="row"><?= $c ?></th>
                <td><?= $d['task'] ?></td>
                <td><?= $d['description'] ?></td>
                <td><a href="delete.php?id=<?=$d['id']?>">delete</a></td>
            </tr>
    <?php } ?>
        </tbody>
    </table>
</div>
<?php
include_once('down.php');
?>