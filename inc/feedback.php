<?php require_once 'onlineapp_data.php'; ?>
<form action="onlinesubmit.php" method="post">
<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>
<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
  <table width="600" border="0" bgcolor="#c6af52" cellspacing="5" cellpadding="0" align="center">
    <tr>
      <td colspan="2"> <p><strong><font size="+2" face="Geneva, Arial, Helvetica, sans-serif"><em><font color="#6A0000" size="+3"><br>
          Online Application for</font><font color="#6A0000"><br>
          <br>
          Evaluation of Foreign Educational Credentials</font></em></font><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"><br>
          </font></strong></p>
      </td>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($onlineappForm as $sectionKey=>$section): ?>
        <tr>
            <td colspan="2">
                <img src="line.jpg" width="600" height="14"><br>
                <strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif"><?php echo $i; ?>. <?php echo $section['label']; ?></font></strong><br>
                <?php if (isset($section['description'])): ?>
                    <font color="#333333" size="1" face="Geneva, Arial, Helvetica, sans-serif"><?php echo $section['description']; ?></font>
                    <br>
                <?php endif; ?>
            </td>
        </tr>
        <?php if (isset($section['fields'])): ?>
            <?php foreach ($section['fields'] as $fieldKey => $field): ?>
                <?php $fieldId = "{$sectionKey}-{$fieldKey}"; ?>
                <tr>
                    <?php if (!isset($field['full_width']) || !$field['full_width']): ?>
                        <td width="20%">
                            <?php if (isset($field['label'])): ?>
                                <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">
                                <label for="<?php echo $fieldId; ?>"><?php echo $field['label']; ?>:</label>
                                <?php if (isset($field['description'])): ?>
                                    <br />
                                    <?php echo $field['description']; ?>
                                <?php endif; ?>
                                </font></strong></em></div>
                            <?php endif; ?>
                        </td>
                    <?php endif; ?>

                    <td <?php if (isset($field['full_width']) && $field['full_width']): ?>colspan="2"<?php endif; ?>>
                        <?php if ('text' == $field['type']): ?>
                            <input type="text"
                                id="<?php echo $fieldId; ?>"
                                name="<?php echo $sectionKey; ?>[<?php echo $fieldKey; ?>]"
                                size="<?php echo isset($field['size'])? $field['size'] : 30; ?>"
                            />

                        <?php elseif ('radio' == $field['type']): ?>
                            <?php foreach ($field['options'] as $optionKey => $optionLabel): ?>
                                <?php $optionId = "{$fieldId}-{$optionKey}"; ?>
                                <label for="<?php echo $optionId; ?>">
                                    <input type="radio"
                                        id="<?php echo $optionId; ?>"
                                        name="<?php echo $sectionKey; ?>[<?php echo $fieldKey; ?>]"
                                        value="<?php echo $optionKey; ?>"
                                    />
                                    <?php echo $optionLabel; ?>
                                </label>
                                <?php if (isset($field['multiline']) && $field['multiline']): ?>
                                    <br />
                                <?php endif; ?>
                            <?php endforeach; ?>

                        <?php elseif ('multi_checkbox' == $field['type']): ?>
                            <?php foreach ($field['options'] as $optionKey => $optionLabel): ?>
                                <?php $optionId = "{$fieldId}-{$optionKey}"; ?>
                                <label for="<?php echo $optionId; ?>">
                                    <input type="checkbox"
                                        id="<?php echo $optionId; ?>"
                                        name="<?php echo $sectionKey; ?>[<?php echo $fieldKey; ?>][]"
                                        value="<?php echo $optionKey; ?>"
                                    />
                                    <?php echo $optionLabel; ?>
                                </label>
                                <?php if (isset($field['multiline']) && $field['multiline']): ?>
                                    <br />
                                <?php endif; ?>
                            <?php endforeach; ?>

                        <?php elseif ('checkbox_table' == $field['type']): ?>
                            <table cellspacing="0" cellpadding="5" border="1" valign="top" width="100%">
                                <tr>
                                    <?php foreach ($field['columns'] as $columnKey => $column): ?>
                                        <th
                                            <?php if (isset($column['width'])): ?>
                                                width="<?php echo $column['width']; ?>"
                                            <?php endif; ?>
                                        >
                                            <?php echo $column['label']; ?>
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
                                                <?php if ('label' == $columnKey): ?>
                                                    <?php $optionId = "{$fieldId}-{$optionKey}"; ?>
                                                    <label for="<?php echo $optionId; ?>">
                                                        <input type="checkbox"
                                                            id="<?php echo $optionId; ?>"
                                                            name="<?php echo $sectionKey; ?>[<?php echo $fieldKey; ?>][]"
                                                            value="<?php echo $optionKey; ?>"
                                                        />
                                                        <?php echo $option['label']; ?>
                                                    </label>
                                                <?php else: ?>
                                                    <?php echo isset($option[$columnKey])? $option[$columnKey] : '&nbsp'; ?>
                                                <?php endif; ?>
                                            </td>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </table>

                        <?php elseif ('radio_table' == $field['type']): ?>
                            <table cellspacing="0" cellpadding="5" border="1" valign="top" width="100%">
                                <tr>
                                    <?php foreach ($field['columns'] as $columnKey => $column): ?>
                                        <th
                                            <?php if (isset($column['width'])): ?>
                                                width="<?php echo $column['width']; ?>"
                                            <?php endif; ?>
                                        >
                                            <?php echo $column['label']; ?>
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
                                                <?php if ('label' == $columnKey): ?>
                                                    <?php $optionId = "{$fieldId}-{$optionKey}"; ?>
                                                    <label for="<?php echo $optionId; ?>">
                                                        <input type="radio"
                                                            id="<?php echo $optionId; ?>"
                                                            name="<?php echo $sectionKey; ?>[<?php echo $fieldKey; ?>]"
                                                            value="<?php echo $optionKey; ?>"
                                                        />
                                                        <?php echo $option['label']; ?>
                                                    </label>
                                                <?php else: ?>
                                                    <?php echo isset($option[$columnKey])? $option[$columnKey] : '&nbsp'; ?>
                                                <?php endif; ?>
                                            </td>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </table>

                        <?php elseif ('select' == $field['type']): ?>
                            <select type="text"
                                id="<?php echo $fieldId; ?>"
                                name="<?php echo $sectionKey; ?>[<?php echo $fieldKey; ?>]"
                            >
                            <?php foreach ($field['options'] as $optionKey => $optionLabel): ?>
                                <option value="<?php echo $optionKey; ?>">
                                    <?php echo $optionLabel; ?>
                                </option>
                            <?php endforeach; ?>
                            </select>
                        <?php endif ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php $i++; ?>
    <?php endforeach; ?>

    <tr>
      <td colspan="3"><b><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Terms
        of Service</font></b></td>
    </tr>
    <tr>
      <td colspan="3"><textarea name="textarea" cols="72" rows="10" readonly wrap="physical" title="Foreign Consultants, Inc Terms of Service">
REQUIRED DOCUMENTS
1. Please submit clear, legible copies of all Diplomas, Transcripts,
and/or Certificates.
2. If the documents are not in English:
 a) If you have translations, done in your country or any other country
    please fax together with the copies of your educational documents;
 b) If you don't have translations you can order them from FCI at the
    prices above.
3. Only Certified translator experienced in the Foreign Language in
   question can perform Legalized translation.
4. Certified translator's signature should be notarized, according to
   the Law and Regulations of the country of origination of
   translation and notarization.
5. FCI needs copies of both: the Original language and the Translated
   documents. When documentation is not complete enough to provide the
   evaluation requested, the missing information will be requested and
   no further action will be taken until all the necessary
   documentation is on file with FCI.
6. We can provide only Comparability Evaluations without detailed
   information about courses and grades (see Detailed requirements).
7. All other Evaluation Reports require both copies of the Diplomas
   and/or Certificates and their Official Academic Transcripts or
   Equivalent.

For more details on Required Documentation go to
http://www.foreignconsultants.com/required_documentation.pdf

PAYMENT OPTIONS
1. No refund will be issued once Application
  has been submitted.
2. No personal checks are accepted.
3. Payments are limited to:
  * Cashier Checks*
  * Money Orders*
  * All Credit Cards are accepted (Visa,
     Master Card, Discover, American Express)

  * Please, print the Name of the Applicant on the Check or Money Order

PROCESSING
Processing time is ten working days from receipt of all required
documents and fees.
More time may be required if special research is necessary.
1. One Copy of each Evaluation report is included in the basic fee.
2. Two copies of Certified and Notarized Translations are provided
3. No refunds will be issued once an application has been submitted.
4. Fees are subject to change without notice.

AFFIRMATIONS
1. I hereby certify that the information provided on this Application,
   and in the documents included with it, is true, accurate, and
   correct to the best of my knowledge.
2. I understand that this evaluation is advisory in nature and that
   Foreign Consultants, Inc. assumes no responsibility or liability for
   consequential damages when the desired equivalency cannot be
   recommended.
3. I agree to reimburse Foreign Consultants, Inc. for any and all
   costs, including legal expenses, which it may incur as a result of
   any claim that I or anyone having an interest in my earnings or
   services may make based on the evaluation determination which
   foreign Consultants, Inc. makes relaying on the application.
4. I hereby certify that I have read and understand the instructions
   and conditions provided with this form and that I agree to the Terms
   stated therein.
5. I understand that if false, forged, altered or falsified documents
   are submitted to FCI, Inc., no evaluation report will be prepared,
   no refund will be made, the designees for copies of the report will
   be notified, and the information will be shared with academic
   institutions, government agencies, professional organizations and
   other evaluation services.

You must click "I Agree" button
in order for this application to be processed.
</textarea></td>
    </tr>
    <tr>
      <td colspan="3"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">By
        clicking "I Agree" you agree and consent to Foreign Consultants, Inc. Terms
        of Service.</font><br> <br> <input name="submit" type="submit" value="I Agree" />
        <strong><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"> </font></strong></td>
    </tr>
  </table>
</form>
