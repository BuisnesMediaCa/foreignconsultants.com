<?php
// multiple recipients
//$to = 'info@foreignconsultants.com';
$to  = 'info@foreignconsultants.com' . ', '; // note the comma
//$to  = 'ts2001@gmail.com' . ', '; // note the comma

// subject
$subject = 'FCI Online Application';

require_once 'onlineapp_data.php';
ob_start();

?>
<font face="Geneva, Arial, Helvetica, sans-serif" color="872800" size="+3">
    <b>Online Application for<br>
</font>
<font face="Geneva, Arial, Helvetica, sans-serif" color="872800" size="+2">
    Evaluation of Foreign Educational Credentials</b>
</font>
<hr />
<table cellpadding="2" cellspacing="0">
    <tr>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>Address:</b>
            </font>
        </td>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>10955 Westmoor Drive, Suite 400<br/>
                Westminster. Colorado, 80021, USA</b>
            </font>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>Telephone:</b>
            </font>
        </td>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>303.585.0978</b>
            </font>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>Fax:</b>
            </font>
        </td>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>303.379.2161</b>
            </font>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>E-mail:</b>
            </font>
        </td>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>info@foreignconsultants.com</b>
            </font>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>Website:</b>
            </font>
        </td>
        <td valign="top">
            <font face="Geneva, Arial, Helvetica, sans-serif">
                <b>www.foreignconsultants.com</b>
            </font>
        </td>
    </tr>
</table>
<br />
<?php $i = 1; ?>
<table width="100%" cellpadding="0" cellspacing="0" border="1" style="border-collapse: collapse;">
    <?php foreach ($onlineappForm as $sectionKey=>$section): ?>
        <tr>
            <td valign="top" width="20%" style="padding: 5px">
                <font face="Geneva, Arial, Helvetica, sans-serif" color="872800" size="+1">
                    <strong><?php echo $i; ?>. <?php echo $section['label']; ?></strong>
                </font>
            </td>
            <td>
                <?php if (isset($section['fields'])): ?>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <?php foreach ($section['fields'] as $fieldKey => $field): ?>
                            <tr>
                                <?php $fullWidth = (isset($field['full_width']) && $field['full_width']) || !isset($field['label']); ?>
                                <?php if (!$fullWidth): ?>
                                    <td width="20%" valign="top" style="padding: 5px">
                                        <font face="Geneva, Arial, Helvetica, sans-serif" color="500050">
                                            <strong><?php echo $field['label']; ?>:</strong>
                                        </font>
                                    </td>
                                <?php endif; ?>
                                <td valign="top"
                                    <?php if ($fullWidth): ?>
                                        colspan="2"
                                    <?php endif;?>
                                    <?php if (!in_array($field['type'], array('checkbox_table', 'radio_table'))): ?>
                                        style="padding: 5px"
                                    <?php endif; ?>
                                >
                                    <?php $value = isset($_POST[$sectionKey][$fieldKey])? $_POST[$sectionKey][$fieldKey] : NULL; ?>

                                    <?php if ('text' == $field['type']): ?>
                                        <font face="Geneva, Arial, Helvetica, sans-serif" color="500050">
                                            <?php echo htmlspecialchars($value); ?>
                                        </font>

                                    <?php elseif ('select' == $field['type']): ?>
                                        <?php if (isset($field['options'][$value])): ?>
                                            <font face="Geneva, Arial, Helvetica, sans-serif" color="500050">
                                                <?php echo $field['options'][$value]; ?>
                                            </font>
                                        <?php endif; ?>

                                    <?php elseif ('radio' == $field['type']): ?>
                                        <?php foreach ($field['options'] as $optionKey => $optionLabel): ?>
                                            <font face="Geneva, Arial, Helvetica, sans-serif" color="500050">
                                                <?php if (!is_null($value) && $optionKey == $value): ?>&#x2611;<?php else: ?>&#x2610;<?php endif; ?>&nbsp;<?php echo $optionLabel; ?>
                                            </font>
                                            <?php if (isset($field['multiline']) && $field['multiline']): ?>
                                                <br />
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                    <?php elseif ('multi_checkbox' == $field['type']): ?>
                                        <?php $value = (array) $value; ?>
                                        <?php foreach ($field['options'] as $optionKey=>$option): ?>
                                            <font face="Geneva, Arial, Helvetica, sans-serif" color="500050">
                                                <?php if (!is_null($value) && in_array($optionKey, $value)): ?>&#x2611;<?php else: ?>&#x2610;<?php endif; ?>&nbsp;<?php echo $optionLabel; ?>
                                            </font>
                                            <?php if (isset($field['multiline']) && $field['multiline']): ?>
                                                <br />
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                    <?php elseif ('checkbox_table' == $field['type']): ?>
                                        <?php $value = (array) $value; ?>
                                        <table
                                            cellpadding="5"
                                            cellspacing="0"
                                            border="1"
                                            width="100%"
                                            style="border-collapse: collapse;"
                                            frame="void"
                                            rules="all"
                                        >
                                            <tr>
                                                <?php foreach ($field['columns'] as $columnKey => $column): ?>
                                                    <th
                                                        <?php if (isset($column['width'])): ?>
                                                            width="<?php echo $column['width']; ?>"
                                                        <?php endif; ?>
                                                    >
                                                        <font face="Geneva, Arial, Helvetica, sans-serif" color="500050">
                                                            <b><?php echo $column['label']; ?></b>
                                                        </font>
                                                    </th>
                                                <?php endforeach; ?>
                                            </tr>
                                            <?php foreach ($field['options'] as $optionKey => $option): ?>
                                                <tr>
                                                    <?php foreach ($field['columns'] as $columnKey => $column): ?>
                                                        <td
                                                            <?php if (isset($column['cell_align'])): ?>
                                                                align="<?php echo $column['cell_align']; ?>"
                                                            <?php endif; ?>
                                                        >
                                                            <font face="Geneva, Arial, Helvetica, sans-serif" color="500050">
                                                                <?php if ('label' == $columnKey): ?>
                                                                    <?php if (!is_null($value) && in_array($optionKey, $value)): ?>&#x2611;<?php else: ?>&#x2610;<?php endif; ?>&nbsp;
                                                                <?php endif; ?>
                                                                <?php echo isset($option[$columnKey])? $option[$columnKey] : '&nbsp'; ?>
                                                            </font>
                                                        </td>
                                                    <?php endforeach; ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>

                                    <?php elseif ('radio_table' == $field['type']): ?>
                                        <table
                                            cellpadding="5"
                                            cellspacing="0"
                                            border="1"
                                            width="100%"
                                            style="border-collapse: collapse;"
                                            frame="void"
                                            rules="all"
                                        >
                                            <tr>
                                                <?php foreach ($field['columns'] as $columnKey => $column): ?>
                                                    <th
                                                        <?php if (isset($column['width'])): ?>
                                                            width="<?php echo $column['width']; ?>"
                                                        <?php endif; ?>
                                                    >
                                                        <font face="Geneva, Arial, Helvetica, sans-serif" color="500050">
                                                            <b><?php echo $column['label']; ?></b>
                                                        </font>
                                                    </th>
                                                <?php endforeach; ?>
                                            </tr>
                                            <?php foreach ($field['options'] as $optionKey => $option): ?>
                                                <tr>
                                                    <?php foreach ($field['columns'] as $columnKey => $column): ?>
                                                        <td
                                                            <?php if (isset($column['cell_align'])): ?>
                                                                align="<?php echo $column['cell_align']; ?>"
                                                            <?php endif; ?>
                                                        >
                                                            <font face="Geneva, Arial, Helvetica, sans-serif" color="500050">
                                                                <?php if ('label' == $columnKey): ?>
                                                                    <?php if (!is_null($value) && $optionKey == $value): ?>&#x2611;<?php else: ?>&#x2610;<?php endif; ?>&nbsp;
                                                                <?php endif; ?>
                                                                <?php echo isset($option[$columnKey])? $option[$columnKey] : '&nbsp'; ?>
                                                            </font>
                                                        </td>
                                                    <?php endforeach; ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
            </td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>
<br>
<hr>
<font  face="Geneva, Arial, Helvetica, sans-serif" color="872800" size="+2">
    <b>CUSTOMER AFFIRMATIONS</b>
</font>
<br>
<br>
<font  face="Geneva, Arial, Helvetica, sans-serif" color="872800" size="+1">
    <b>REQUIRED DOCUMENTS</b>
</font>
<font size="3">
<br>
1. Please submit clear, legible copies of all Diplomas, Transcripts,
and/or Certificates.<br>
2. If the documents are not in English:<br>
 a) If you have translations, done in your country or any other country
    please fax together with the copies of your educational documents;<br>
 b) If you don't have translations you can order them from FCI at the
    prices above.<br>
3. Only Certified translator experienced in the Foreign Language in
   question can perform Legalized translation.<br>
4. Certified translator's signature should be notarized, according to
   the Law and Regulations of the country of origination of
   translation and notarization.<br>
5. FCI needs copies of both: the Original language and the Translated
   documents. When documentation is not complete enough to provide the
   evaluation requested, the missing information will be requested and
   no further action will be taken until all the necessary
   documentation is on file with FCI.<br>
6. We can provide only Comparability Evaluations without detailed
   information about courses and grades (see Detailed requirements).<br>
7. All other Evaluation Reports require both copies of the Diplomas
   and/or Certificates and their Official Academic Transcripts or
   Equivalent.<br>
<br>
For more details on Required Documentation go to
http://www.foreignconsultants.com/required_documentation.pdf<br>
<br>
</font>
<font  face="Geneva, Arial, Helvetica, sans-serif" color="872800" size="+1">
    <b>PAYMENT OPTIONS</b>
</font>
<font size="3">
<br>
1. No refund will be issued once Application
  has been submitted.<br>
2. No personal checks are accepted.<br>
3. Payments are limited to:<br>
  * Cashier Checks*<br>
  * Money Orders*<br>
  * All Credit Cards are accepted (Visa,
     Master Card, Discover, American Express)<br>
  <br>
  * Please, print the Name of the Applicant on the Check or Money Order<br>
  <br>
</font>
<font  face="Geneva, Arial, Helvetica, sans-serif" color="872800" size="+1">
    <b>PROCESSING</b>
</font>
<font size="3">
<br>
Processing time is ten working days from receipt of all required
documents and fees.<br>
More time may be required if special research is necessary.<br>
1. One Copy of each Evaluation report is included in the basic fee.<br>
2. Two copies of Certified and Notarized Translations are provided.<br>
3. No refunds will be issued once an application has been submitted.<br>
4. Fees are subject to change without notice.<br>
<br>
</font>
<font  face="Geneva, Arial, Helvetica, sans-serif" color="872800" size="+1">
    <b>AFFIRMATIONS</b>
</font>
<font size="3">
<br>
1. I hereby certify that the information provided on this Application,
   and in the documents included with it, is true, accurate, and
   correct to the best of my knowledge.<br>
2. I understand that this evaluation is advisory in nature and that
   Foreign Consultants, Inc. assumes no responsibility or liability for
   consequential damages when the desired equivalency cannot be
   recommended.<br>
3. I agree to reimburse Foreign Consultants, Inc. for any and all
   costs, including legal expenses, which it may incur as a result of
   any claim that I or anyone having an interest in my earnings or
   services may make based on the evaluation determination which
   foreign Consultants, Inc. makes relaying on the application.<br>
4. I hereby certify that I have read and understand the instructions
   and conditions provided with this form and that I agree to the Terms
   stated therein.<br>
5. I understand that if false, forged, altered or falsified documents
   are submitted to FCI, Inc., no evaluation report will be prepared,
   no refund will be made, the designees for copies of the report will
   be notified, and the information will be shared with academic
   institutions, government agencies, professional organizations and
   other evaluation services.<br>
</font>
<?php
$message = ob_get_clean();

$message = '<html></body>'.$message.'</body></html>';
//exit($message);

/*
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "From: $visitormail\r\n";*/

$headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: {$_POST['name']['first']} {$_POST['name']['last']} <{$_POST['address']['email']}> \n";

// Mail it
mail($to, $subject, $message, $headers);