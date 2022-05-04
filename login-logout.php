<?php
session_start();
if (!$_SESSION['user_id']) {
    header('location:login.php');
}
include("header.php");
?>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr class="bg-primary bg-user bg-block text-white text-center">

                <th> User Name </th>
                <th> Login Time </th>
                <th> Logout Time</th>
            </tr>

            <tbody id="teacherid">
                <?php

                include('conn.php');
                $sql = "SELECT * FROM `login_log` 
                left join user on (user.id = login_log.user_id) 
                where login_log.logout_time !='' 
                and user.role !=3 
                group by login_log.user_id 
                order by login_log.id asc";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($query);
                if ($row > 0) {
                    while ($res = mysqli_fetch_array($query)) {
                ?>
                        <tr>

                            <td> <?php echo $res['firstname'];  ?> </td>
                            <td> <?php echo $res['login_time'];  ?> </td>
                            <td> <?php echo $res['logout_time'];  ?> </td>
                        </tr>
                    <?php

                    }
                } else { ?>
                    <tr>
                        <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                    </tr>
                <?php } ?>

        </table>
    </div>
</div>
</div>
<?php
include("footer.php");
?>