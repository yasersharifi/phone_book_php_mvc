<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">phone book</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active" role="presentation">
                            <a data-toggle="tab" role="tab" href="#new" aria-controls="new" aria-expanded="true">New user</a>
                        </li>
                        <li class="" role="presentation">
                            <a data-toggle="tab" role="tab" href="#list" aria-controls="list" aria-expanded="false">List</a>
                        </li>
                        <li class="" role="presentation">
                            <a data-toggle="tab" role="tab" href="#search" aria-controls="search" aria-expanded="false">Search</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="new" class="tab-pane active" role="tabpanel">
                            <form method="post" action="save.php">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="firstName">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lastName">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phoneNumber">
                                </div>
                                <div class="form-group">
                                    <label>group Name</label>
                                    <select class="form-control" name="groupName">
                                        <option value="family">family</option>
                                        <option value="friend">friend</option>
                                        <option value="work">work</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-info" type="submit" value="save">
                                    <input class="btn btn-warning" type="reset">
                                </div>
                            </form>
                        </div>
                        <div id="list" class="tab-pane" role="tabpanel">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Group Name</th>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $item): ?>
                                    <tr>
                                        <td><?= $item->firstName ?></td>
                                        <td><?= $item->lastName ?></td>
                                        <td><?= $item->numbers ?></td>
                                        <td><?= $item->groupName ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="search" class="tab-pane" role="tabpanel">
                            <form method="post" action="doSearch.php">
                                <div class="form-group">
                                    <label>Looking For</label>
                                    <input type="text" class="form-control" name="item">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-info" value="search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
