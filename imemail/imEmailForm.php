<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Name', $_POST['imObjectForm_4_2'], '', false);
	$form->setField('Mobile No.  (10 Digit)', $_POST['imObjectForm_4_3'], '', false);
	$form->setField('Email', $_POST['imObjectForm_4_4'], '', false);
	$fileResult = $form->setFile('Attatchment (if any)', $_FILES['imObjectForm_4_5'], $imSettings['general']['public_folder'], '', '');
	if ($fileResult == -1) { die(imPrintError('Cannot send file: Attatchment (if any)')); }
	if ($fileResult < -1) { die(imPrintError('"Attatchment (if any)" is in the wrong format.')); }
	$form->setField('Description', $_POST['imObjectForm_4_6'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'jsactive' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_4_4'] != "" ? $_POST['imObjectForm_4_4'] : 'tarungupta012345@gmail.com', 'tarungupta012345@gmail.com', 'SANIBEL INDUSTRIES', '', true);
		$form->mailToCustomer('sanibel.industries@rediffmail.com', $_POST['imObjectForm_4_4'], 'Thanks for contacting SANIBEL', 'Your Request Have been submitted correctly', true);
		@header('Location: ../thanks-for-contacting-us.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file