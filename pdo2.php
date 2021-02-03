<?php
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=books', 'max', 'toor', array(PDO::MYSQL_ATTR_FOUND_ROWS => true));
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// try {
	//     $dbh = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');

	//     $stmt = $dbh->prepare("INSERT INTO test (name, email) VALUES(?,?)");

	//     try {
	//         $dbh->beginTransaction();
	//         $tmt->execute( array('user', 'user@example.com'));
	//         $dbh->commit();
	//         print $dbh->lastInsertId();
	//     } catch(PDOExecption $e) {
	//         $dbh->rollback();
	//         print "Error!: " . $e->getMessage() . "</br>";
	//     }
	// } catch( PDOExecption $e ) {
	//     print "Error!: " . $e->getMessage() . "</br>";
	// } 
?>
