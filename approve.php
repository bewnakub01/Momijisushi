    <h1>All Comment</h1>
    <hr>
    <table width="90%" border="1" align="center" id="tblProduct">
        <tr>
            <td>ID</td>
            <td>Message</td>
            <td>Name</td>
            <td>E-mail</td>
            <td>Approve</td>
        </tr>
        <tr>
        <?php
            $sql = "SELECT * FROM comment ORDER BY id";
            $result = $con->query($sql);
                    if(!$result){
                        echo "ERROR ";
                    }
                    else{
                        while($prd=$result->fetch_object()){

        ?>
        <tr id="row-<?php  echo $prd->id; ?>">
            <td id="pid-<?php echo $prd->id?>"><?php  echo $prd->id; ?></td>
            <td id="pmessage-<?php echo $prd->id?>"><?php  echo $prd->message; ?></td>
            <td id="pname-<?php echo $prd->id?>"><?php  echo $prd->name; ?></td>
            <td id="pemail-<?php echo $prd->id?>"><?php  echo $prd->email; ?></td>
            <td>
                    <a href="#" class="inkAp" data-id="<?php  echo $prd->id;?>">Approve</a>
            </td>
        </tr>
        <?php
                        }
                    }
        ?>

        </tr>
    </table>
