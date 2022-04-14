<?php
    require "header.php";
?>

<?php
    include "includes/Cardpolymorph.php";
    include_once 'includes/dbh_inc.php';
?>

<main>
    <div class = "wrapper">
        <h1>
             All Card Collection
        </h1>
    </div>

    

</main>

<h3 class = collection_display>
    <form action = 'includes/all_card_delete.php' method = 'POST'>
    <input type = 'submit' name = 'deleteItem' value = 'Delete All'>
    </form>
</h3>
<br>


<?php
    $sql = "SELECT * FROM capstone.collection ORDER BY Card_Game, Card_Name Asc;";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $card_view = new Card($row['Card_Name'],$row['Card_Rarity'],$row['Card_Game_Set'],$row['Card_Game']);
            $card_name = $card_view -> getCardname();
            $card_rare = $card_view -> getCardrarity();
            $card_set = $card_view -> getCardset();
            $card_game = $card_view -> getGame();
            echo "<h3 class= collection_display>
                Card Game: $card_game <br>
                Card Name: $card_name <br>
                Card Set: $card_set <br>
                Card Rarity: $card_rare <br>
                </h3>";
            echo "<br>";
        }
    }
?>

<?php
    require "footer.php";
?>




<!-- Trying to create checkboxes to remove from database -->
<!-- <script type="text/javascript" src="js/jquery-1.6.2.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#checkBoxAll').click(function() {
			if ($(this).is(":checked"))
				$('.chkCheckBoxId').prop('checked', true);
			else
				$('.chkCheckBoxId').prop('checked', false);
		});
	});
</script>

//<?php
//require 'database.php';
//if(isset($_POST['buttonDelete'])) {
//	if(isset($_POST['Card_Name'])) {
//		foreach ($_POST['Card_Name'] as $cardname) {
//			$stmt = $conn->prepare('delete from card where Card_Name = :cardname');
//			$stmt->bindValue('Card_Name', $cardname);
//			$stmt->execute();
//		}
//	}
//}
//$stmt = $conn->prepare('select * from capstone.collection');
//$stmt->execute();
?>

<form method="post" action="index.php">
	<input type="submit" name="buttonDelete" value="Delete" onclick="return confirm('Are you sure?')" />
	<table cellpadding="2" cellspacing="2" border="1">
		<tr>
			<th><input type="checkbox" id="checkBoxAll" /></th>
			<th>Card Name</th>
			<th>Card Rarity</th>
			<th>Card Set</th>
            <th>Card Game </th>
		</tr>
		//
        <?php //while($cardname = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
		<tr>
			<td><input type="checkbox" class="chkCheckBoxId"
				value="//<?php //echo $account->username; ?>" name="username[]" /></td>
			<td>//<?php //echo $account->username; ?></td>
			<td>//<?php //echo $account->email; ?></td>
			<td>//<?php //echo $account->age; ?></td>
		</tr>
		//<?php //} //?>
	</table>
</form> -->
