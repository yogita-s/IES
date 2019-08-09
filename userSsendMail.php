<?php
/* $servername = "localhost";
$username = "kfina_krishna";
$password = "Krishna@123$";
$dbname = "kfinanci_krishna_db"; */

$idmail1 = $_POST["idmail1"];
$otherbusiness = $_POST["otherbusiness"];
$employees = $_POST["employees"];
$fulltime = $_POST["fulltime"];
$parttime = $_POST["parttime"];
$seasonal = $_POST["seasonal"];
$newhire = $_POST["newhire"];
$payroll = $_POST["payroll"];
$orientation = $_POST["orientation"];
$manual = $_POST["manual"];
$medicalinsurance = $_POST["medicalinsurance"];
$dentalinsurance = $_POST["dentalinsurance"];
$visioninsurance = $_POST["visioninsurance"];
$ShortTermDisability = $_POST["ShortTermDisability"];
$LongTermDisability = $_POST["LongTermDisability"];
$RetirementProgram = $_POST["RetirementProgram"];
$EmployeePerksProgram = $_POST["EmployeePerksProgram"];
$FitnessClubMembership = $_POST["FitnessClubMembership"];
$annual = $_POST["annual"];
$compensationclass1 = $_POST["compensationclass1"];
$compensationclass2 = $_POST["compensationclass2"];
$compensationclass3 = $_POST["compensationclass3"];
$compensationclass4 = $_POST["compensationclass4"];
$compensationclass5 = $_POST["compensationclass5"];
$annualpayrolldollars1 = $_POST["annualpayrolldollars1"];
$annualpayrolldollars2 = $_POST["annualpayrolldollars2"];
$annualpayrolldollars3 = $_POST["annualpayrolldollars3"];
$annualpayrolldollars4 = $_POST["annualpayrolldollars4"];
$annualpayrolldollars5 = $_POST["annualpayrolldollars5"];
$numberofemployees1 = $_POST["numberofemployees1"];
$numberofemployees2 = $_POST["numberofemployees2"];
$numberofemployees3 = $_POST["numberofemployees3"];
$numberofemployees4 = $_POST["numberofemployees4"];
$numberofemployees5 = $_POST["numberofemployees5"];
$text = $_POST["text"];
$name = $_POST["name"];
$company = $_POST["company"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$to_email = $email;
$subject = 'IES Custom Quote Form';
$message = " Please find the below Custom Quote requested information details. \n\n idmail1: " . $idmail1 .
" \n otherbusiness: " . $otherbusiness .
" \n employees: " . $employees .
" \n fulltime: " . $fulltime .
" \n parttime: " . $parttime .
" \n seasonal: " . $seasonal .
" \n newhire: " . $newhire  .
" \n payroll: " . $payroll .
" \n orientation: " . $orientation .
 " \n manual: " . $manual .
" \n medicalinsurance: " . $medicalinsurance .
" \n dentalinsurance: " . $dentalinsurance .
" \n visioninsurance: " . $visioninsurance .
" \n ShortTermDisability: " . $ShortTermDisability .
" \n LongTermDisability: " . $LongTermDisability .
" \n RetirementProgram: " . $RetirementProgram .
" \n EmployeePerksProgram: " . $EmployeePerksProgram .
" \n FitnessClubMembership: " . $FitnessClubMembership .
" \n annual: " . $annual .
" \n compensationclass1: " . $compensationclass1 .
" \n compensationclass2: " . $compensationclass2 .
" \n compensationclass3: " . $compensationclass3 .
" \n compensationclass4: " . $compensationclass4 .
" \n compensationclass5: " . $compensationclass5 .
" \n annualpayrolldollars1: " . $annualpayrolldollars1 .
" \n annualpayrolldollars2: " . $annualpayrolldollars2 .
" \n annualpayrolldollars3: " . $annualpayrolldollars3 .
" \n annualpayrolldollars4: " . $annualpayrolldollars4 .
" \n annualpayrolldollars5: " . $annualpayrolldollars5 .
" \n numberofemployees1: " . $numberofemployees1 .
" \n numberofemployees2: " . $numberofemployees2 .
" \n numberofemployees3: " .  $numberofemployees3 .
" \n numberofemployees4: " . $numberofemployees4 .
" \n numberofemployees5: " . $numberofemployees5 .
" \n text: " . $text .
" \n name: " . $name .
" \n company: " . $company .
" \n address: " . $address .
" \n city: " . $city .
" \n state: " . $state .
" \n zip: " . $zip .
" \n email: " . $email .
" \n phone: " . $phone; 

$ccmail = 'mayuriprajapati06@gmail.com';

$headers[] = 'From: noreply@company.com';
$headers[] = 'Cc: fnisar@trusept.com';

/* $headers = 'From: noreply@company.com'. '\n' . 'Cc:' . $ccmail; */
if(mail($to_email,$subject,$message,implode("\n", $headers))){
	 echo 'Message has been sent.';			
	}
 header("Location: quoterequest.html");
/*$conn = null */;
?>