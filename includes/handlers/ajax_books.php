<?php
	if (isset($_POST['key'])) {

		require '../../config/config.php';
		// $con = mysqli_connect("localhost", "root", "", "lib"); //Connection variable
		

		if ($_POST['key'] == 'getExistingData') {
			$start = $con->real_escape_string($_POST['start']);
			$limit = $con->real_escape_string($_POST['limit']);

			$sql = $con->query("SELECT * FROM books LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<td>'.$data["id"].'</td>
							<td>'.$data["isbn"].'</td>
							<td>'.$data["title"].'</td>
							<td>'.$data["author"].'</td>
							<td>'.$data["year"].'</td>
							<td>'.$data["category"].'</td>
							<td>'.$data["copies"].'</td>
							<td>'.$data["type"].'</td>

							<td>
								<input type="button" value="Edit" class="btn btn-primary">
								<input type="button" value="View" class="btn btn-dark">
								<input type="button" value="Delete" class="btn btn-danger">
							</td>
						</tr>
					';
				}
				exit($response);
			} else
				exit('reachedMax');
        }
        
        $isbn = $con->real_escape_string($_POST['isbn']);
		$title = $con->real_escape_string($_POST['title']);
		$author = $con->real_escape_string($_POST['author']);
		$year = $con->real_escape_string($_POST['year']);
		$category = $con->real_escape_string($_POST['category']);
		$copies = $con->real_escape_string($_POST['copies']);
		$itemType = $con->real_escape_string($_POST['itemType']);

		
		if ($_POST['key'] == 'addNew') {
			$sql = $con->query("SELECT id FROM books WHERE title = '$title'");
			if ($sql->num_rows > 0)
				exit("A Book Entry With This Name Already Exists!");
			else {
				$con->query("INSERT INTO books (isbn, title, author, year, category, copies, itemType) 
							VALUES ('$isbn', '$title', '$author', '$year', '$category', '$copies', '$itemType')");
				exit('Book Entry Has Been Inserted!');
			}
		}
	}
?>