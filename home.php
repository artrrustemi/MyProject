
 <?php
    include_once 'header.php';
    include 'includes/comments.inc.php';
    include 'includes/dbh.inc.php';
    include 'includes/functions.inc.php';
?>

<?php
    $conn = new mysqli('localhost', 'root', '', 'ratingsystem');

    if (isset($_POST['save'])) {
        $uID = $conn->real_escape_string($_POST['uID']);
        $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;

        if (!$uID) {
            $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
            $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
            $uData = $sql->fetch_assoc();
            $uID = $uData['id'];
        } else
            $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");

        exit(json_encode(array('id' => $uID)));
    }

    $sql = $conn->query("SELECT id FROM stars");
    $numR = $sql->num_rows;

    $sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars");
    $rData = $sql->fetch_array();
    $total = $rData['total'];

    $avg = $total / $numR;
?>
<?php 
    
    $hostname="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="phpproject01";

    $connection=mysqli_connect( $hostname, $db_user, $db_pass, $db_name);
    if (mysqli_connect_errno()) {
        die("Error connecting to the Database");
    }

    $visitor_ip=$_SERVER['REMOTE_ADDR'];
    // $visitor_ip="54:54:54:54";
    $query="SELECT * FROM counter_table WHERE ip_address='$visitor_ip' ";
    $result=mysqli_query($connection, $query);

    if (!$result) {
        die("Retriving Qurey Error<br>" . $query);
    }

    $total_visitors=mysqli_num_rows($result);
    if ($total_visitors<1) {
        $query="INSERT INTO counter_table(ip_address) VALUES('$visitor_ip') ";
        $result=mysqli_query($connection, $query);
    }

    $query="SELECT * FROM counter_table";
    $result=mysqli_query($connection, $query);

    if (!$result) {
        die("Retriving Qurey Error<br>" . $query);
    }

    $total_visitors=mysqli_num_rows($result);


    date_default_timezone_set('Europe/Belgrade');
    // function setComments($conn){
    //     if (isset($_POST['commentSubmit'])) {
    //         $uid = $_POST['uid'];
    //         $date = $_POST['date'];
    //         $message = $_POST['message'];

    //         $sql = "INSERT INTO users (uid , date , message) VALUES ('$uid' , '$date', 'message')";
    //         $result = $conn-> query($sql);
    //     }
    // }



?>
    <form class="header">
            
                <!-- <i class="fas fa-mouse fa-7x" style="color:#32a89e;"></i> -->
                <div class="logoDiv">
                    <i class="fas fa-power-off fa-7x " style="color:#32a89e; margin-top: 30px; margin-left: 8%;"></i>
                </div>
                    
                    <section class="index-intro">

                <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<h1 class='hellothere';>Hello there " . $_SESSION["useruid"] . "</h1>";   
                        }
                    ?>
                <h1 class="welcometxt">Welcome to my portfolio</h1>
                
            </section>
                
            
            
            
        </form>
        <section class="index-categories">
            <!-- <h1 style="color: #32a89e;">Some Basic Categories</h1> -->
            <div class="index-categories-list">
                <div class="divIn">
                    <i class="fab fa-php fa-8x hapsira"></i>
                </div>
                <div class="divIn">
                    <i class="fab fa-wordpress fa-8x hapsira"></i>
                </div>
                <div class="divIn">
                    <i class="fab fa-html5 fa-8x hapsira"></i>
                </div>
                <div class="divIn">
                    <i class="fab fa-js-square fa-8x hapsira"></i>
                </div>
            </div>
        </section>
        <div class="w3-content w3-section slideshow" style="max-width:69%">
            <img class="mySlides" src="img/img1.jpg" style="width:100%; height:750px;">
            <img class="mySlides" src="img/img2.jpg" style="width:100%; height:750px;">
            <img class="mySlides" src="img/img3.jpg" style="width:100%; height:750px;">
        </div>
        <br>
        <br>
        <div class="view">
                <i class="fas fa-eye  fa-2x eye" ></i>
                <h1 class="nrv"> <?php echo $total_visitors; ?> </h1>
                <h1 class="txtv">Views of my portfolio</h1>
            </div>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<div align='center' style='padding: 50px;color:#32a89e;'>";
                        echo"   <i class='fa fa-star fa-2x' data-index='0' style='color:#32a89e;'></i>";
                        echo"   <i class='fa fa-star fa-2x' data-index='1' style='color:#32a89e;'></i>";
                        echo    "<i class='fa fa-star fa-2x' data-index='2' style='color:#32a89e;'></i>";
                        echo    "<i class='fa fa-star fa-2x' data-index='3' style='color:#32a89e;'></i>";
                        echo    "<i class='fa fa-star fa-2x' data-index='4' style='color:#32a89e;'></i>";
                        echo    "<br><br>";
                         echo round($avg,2); 
                        echo "</div>";
                    }

                    
                ?>
                <?php
        if (isset($_SESSION["useruid"])) {
                        echo "<form method='POST' action='includes/save_message.php' class='messageForm'>";
                        echo "<textarea name='message' class='textarea'></textarea><br>";
                        echo "<button type='submit' name='submit' class='submitcomment'>Comment</button>";
                       echo " </form>";
                       echo "<center>";
                       echo "<h1 class='commentView'>To see your comment go to my <a href='portfolio.php' class='portfolioLink'>portfolio!</a></h1>";
                       echo "</center>";
                    }

                   
?>

                  


                   

               <!--  <h1 style="color: black"><?php getComments($conn);?></h1> -->


                <!-- <div class="comments">
                    <h1>Art Rrustemi</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class="comments">
                    <h1>Charmaine Hazel</h1>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div><div class="comments">
                    <h1>Forest Flora</h1>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
                </div><div class="comments">
                    <h1>Dixie Alva</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                </div><div class="comments">
                    <h1>Doretta Rachyl</h1>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                </div> -->
        
        
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
        </script>
        <script>
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "home.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', '#32a89e');
        }

        function resetStarColors() {
            $('.fa-star').css('color', '#45e6d8');
        }
    </script>
    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
     var i;
    var x = document.getElementsByClassName("mySlides");
     for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
     }
     myIndex++;
     if (myIndex > x.length) {myIndex = 1}    
     x[myIndex-1].style.display = "block";  
     setTimeout(carousel, 4000); // Change image every 2 seconds
    }
</script>
        
