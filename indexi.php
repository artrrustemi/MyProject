<?php
	include_once 'header.php';
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

    <form class="header">
        <div class="logoDiv">
            <!-- <i class="fas fa-mouse fa-7x" style="color:#32a89e;"></i> -->
            <i class="fas fa-power-off fa-7x" style="color:#32a89e;"></i>
        </div>
        
        <section class="index-intro">

            <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<h1>Hello there " . $_SESSION["useruid"] . "</h1>";   
                    }
                ?>
            <h1 class="welcometxt">Welcome to my portfolio</h1>
            
        </section>
    </form>
        

		<section class="index-categories">
			<!-- <h1 style="color: #32a89e;">Some Basic Categories</h1> -->
			<div class="index-categories-list">
				<div class="divIn">
					<h3 style="color: white;">Fun Stuff</h3>
				</div>
				<div class="divIn">
					<h3 style="color: white;">Serious Stuff</h3>
				</div>
				<div class="divIn">
					<h3 style="color: white;">Exciting Stuff</h3>
				</div>
				<div class="divIn">
					<h3 style="color: white;">Boring Stuff</h3>
				</div>
			</div>
        </section>
        <br><br>
        <br>
        <br>
        <br>
        <br>
				<?php
					if (isset($_SESSION["useruid"])) {
						echo "<div align='center' style='padding: 50px;color:#32a89e;'>";
        				echo"	<i class='fa fa-star fa-2x' data-index='0' style='color:#32a89e;'></i>";
        				echo"	<i class='fa fa-star fa-2x' data-index='1' style='color:#32a89e;'></i>";
        				echo	"<i class='fa fa-star fa-2x' data-index='2' style='color:#32a89e;'></i>";
        				echo	"<i class='fa fa-star fa-2x' data-index='3' style='color:#32a89e;'></i>";
        				echo	"<i class='fa fa-star fa-2x' data-index='4' style='color:#32a89e;'></i>";
        				echo	"<br><br>";
        				 echo round($avg,2); 
    					echo "</div>";
					}

                    
				?>
				
		
		
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
               url: "index.php",
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
		
<!-- <?php
	include_once 'footer.php';
?>
 -->