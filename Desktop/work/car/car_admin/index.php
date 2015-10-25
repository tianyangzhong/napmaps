<?php

include "db.php";
if(!isset($_COOKIE['isLogin']) && !$_COOKIE['isLogin'] == '1'){
    header("Location:login.php");
}


else{
    ?>

    <!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="datatable/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="admin_css/admin_style.css" />

        <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="datatable/js/jquery.dataTables.min.js"></script>

        <meta name="keywords" content="" />
        <meta name="description" content=""/>
        <title></title>
    </head>


    <body>

        <div class = "user-info navbar-fixed-top">
            <span>Welcome, <?php echo $_COOKIE['username'];  ?></span>
            <button class="btn btn-primary"><a href="logout.php">Log Out</a></button>
        </div>

        <div class = "admin-title">
            <span>Test</span> Client Message Page
        </div>

        <?php
            $select = "SELECT * FROM client ORDER BY id DESC";
            $result = mysqli_query($mysqli, $select);
            $count_message = mysqli_num_rows($result);
        ?>

        <div class = "total-message"><span>We have totally <div class="message-number"><?php echo $count_message ?></div> messages from clients.</span></div>
        <div class = "table-style">

            <table class = "table table-bordered" id="Table">
                <thead>
                <tr>
                    <th class="name">Client Name</th>
                    <th class="email">Client Email</th>
                    <th class="phone">Client Phone</th>
                    <th class="message">Client Message</th>
                    <th class="delete">Post Time</th>
                    <th class="delete">Delete Info</th>
                </tr>
                </thead>
                <tbody>
                <?php
            while ($row = mysqli_fetch_array($result)){
                $id = $row['id'];
            ?>
            <tr>
            <td class="name"><?php echo $row['client_name']; ?></td>
            <td class="email"><?php echo $row['client_email']; ?></td>
            <td class="phone"><?php echo $row['client_phone']; ?></td>
            <td class="message"><?php echo $row['client_message']; ?></td>
            <td class="message"><?php echo $row['post_time']; ?></td>
            <td class="delete">
                <button type="button" data-toggle="modal" data-target="#delete<?php echo $id;?>" class="btn btn-danger">Delete </button>
            </td>

                <!-- Modal -->
                <div class="modal fade" id="delete<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title delete-modal-title" id="myModalLabel">Delete</h4>
                            </div>
                            <div class="modal-body">
                                <p><div class="alert alert-danger modal-warn">Are you sure you want to DELETE? </p></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <a href="delete_client.php<?php echo '?id='.$id ?>" type="button" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

        </tr>
            <?php } ?>
                </tbody>
            </table>

        </div>

    </body>
    <script>
        $(document).ready(function(){
            $('#Table').DataTable({
                "bSort": false,
                "language":{
                    "lengthMenu": "Display _MENU_ messages per page",
                        "zeroRecords": "Nothing found - sorry",
                        "info": "Showing page _PAGE_ of _PAGES_",
                        "infoEmpty": "No records available",
                        "infoFiltered": "(filtered from _MAX_ total records)"
                }
            })
        })
    </script>
    </html>

<?php

}

?>

