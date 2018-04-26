              <?php


              require_once 'DBConnect.php';

              if (isset($_REQUEST['username'])) {
                  $username = $_REQUEST["username"];

                  $sql = "select employee.*,password from employee,account where employee.username = '$username' and employee.username = account.username;";
                  $rs = $conn->query($sql);

                  $row = $rs->fetch_assoc();
                  $msg = json_encode($row);
                  echo $msg;
              }


              ?>


