<div class="container-fluid">
    <div class="page-title-box">
           <h4 class="page-title">Accounts</h4>
    </div>
    <div class="card">
    <div class="card-body">
    <div class="table-responsive">
      <?php
                            require_once '../classes/account.class.php';
                            session_start();
                            $accountObj = new Account();
        ?>
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th class="text-start">First Name</th>
                                    <th class="text-start">Last Name</th>
                                    <th class="text-start">Username</th>
                                    <th class="text-start">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $array = $accountObj->showAll();

                                foreach ($array as $arr) {
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= $arr['first_name'] ?></td>
                                        <td><?= $arr['last_name'] ?></td>
                                        <td><?= $arr['username'] ?></td>
                                        <td><?= $arr['role'] ?></td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
    </div>
</div>