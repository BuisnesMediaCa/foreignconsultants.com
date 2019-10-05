<?php
$onlineappForm = array(
    'name' => array(
        'label' => 'Name',
        'description' => 'Type your full name.',
        'fields' => array(
            'last' => array(
                'type' => 'text',
                'label' => 'Last (Family) Name',
            ),
            'first' => array(
                'type' => 'text',
                'label' => 'First Name',
            ),
            'middle' => array(
                'type' => 'text',
                'label' => 'Middle Name',
            ),
        ),
    ),

    'other_names' => array(
        'label' => 'Other Names',
        'description' => 'List alternate names appearing on your documents, if applicable.',
        'fields' => array(
            'names' => array(
                'type' => 'text',
            ),
        ),
    ),

    'address' => array(
        'label' => "Mailing Address, Phone, Fax, E-mail",
        'description' => 'Include your direct (immediate) contact information.',
        'fields' => array(
            'street' => array(
                'type' => 'text',
                'label' => 'Street Address',
            ),
            'street2' => array(
                'type' => 'text',
                'label' => 'Street Address 2',
            ),
            'city' => array(
                'type' => 'text',
                'label' => 'City',
            ),
            'region' => array(
                'type' => 'text',
                'label' => 'State/Province',
            ),
            'postal_code' => array(
                'type' => 'text',
                'label' => 'Postal Zip Code',
            ),
            'country' => array(
                'type' => 'text',
                'label' => 'Country',
            ),
            'telephone_number' => array(
                'type' => 'text',
                'label' => 'Telephone Number',
            ),
            'fax_number' => array(
                'type' => 'text',
                'label' => 'Fax Number',
            ),
            'cellular_number' => array(
                'type' => 'text',
                'label' => 'Cellular Number',
            ),
            'email' => array(
                'type' => 'text',
                'label' => 'E-mail Address',
                'description' => '(example: name@internet.com)',
            ),
        ),
    ),

    'used_before' => array(
        'label' => 'Have you ever used FCI services before?',
        'fields' => array(
            'used' => array(
                'type' => 'radio',
                'options' => array(
                    '1' => 'Yes',
                    '0' => 'No',
                ),
            ),
            'reference_number' => array(
                'type' => 'text',
                'label' => 'If Yes, state FCI Reference Number',
                'description' => '(page 1 of your evaluation report)',
            ),
        ),
    ),

    'birth_date' => array(
        'label' => 'Birth Date',
        'description' => 'Fill in the month, day, and year of your birth.',
        'fields' => array(
            'month' => array(
                'type' => 'select',
                'label' => 'Month',
                'options' => array(
                    'jan' => 'January',
                    'feb' => 'February',
                    'mar' => 'March',
                    'apr' => 'April',
                    'may' => 'May',
                    'jun' => 'June',
                    'jul' => 'July',
                    'aug' => 'August',
                    'sep' => 'September',
                    'oct' => 'October',
                    'nov' => 'November',
                    'dec' => 'December',
                ),
            ),
            'day' => array(
                'type' => 'text',
                'label' => 'Day',
                'size' => 4,
            ),
            'year' => array(
                'type' => 'text',
                'label' => 'Year',
                'size' => 4,
            ),
        ),
    ),

    'sex' => array(
        'label' => 'Sex',
        'fields' => array(
            'sex' => array(
                'type' => 'radio',
                'options' => array(
                    'f' => 'Female',
                    'm' => 'Male',
                ),
            ),
        )
    ),

    'purpose' => array(
        'label' => 'Purpose of Evaluation',
        'description' => 'Check or write down the purpose of your evaluation.',
        'fields' => array(
            'purpose' => array(
                'type' => 'radio',
                'options' => array(
                    'undergraduate_1st_year' => 'Undergraduate (1st year)',
                    'undergraduate_transfer' => 'Undergraduate (transfer)',
                    'graduate' => 'Graduate',
                    'employment' => 'Employment',
                    'immigration' => 'Immigration',
                    'military' => 'Military',
                    'professional' => 'Professional Licensing/Certification',
                    'other' => 'Other',
                ),
                'multiline' => TRUE,
                'full_width' => TRUE,
            ),
            'other' => array(
                'type' => 'text',
                'label' => 'Other',
            ),
            'state' => array(
                'type' => 'text',
                'label' => 'State',
            ),
            'profession' => array(
                'type' => 'text',
                'label' => 'Profession',
            ),
        ),
    ),

    'evaluation' => array(
        'label' => 'Evaluation Products and Services',
        'description' => 'Check the type of evaluation needed.',
        'fields' => array(
            'list' => array(
                'type' => 'checkbox_table',
                'columns' => array(
                    'label' => array(
                        'label' => 'Description',
                    ),
                    'price' => array(
                        'label' => 'Price',
                        'width' => 100,
                        'cell_align' => 'center',
                    ),
                ),
                'options' => array(
                    array(
                        'label' => 'Comparability Evaluation Report (Associate\'s, Bachelor\'s, Master\'s) Degree',
                        'price' => '$90',
                    ),
                    array(
                        'label' => 'Course by Course Evaluation Report of High School Diploma',
                        'price' => '$135',
                    ),
                    array(
                        'label' => 'Course-by-Course Evaluation of (Associate\'s, Bachelor\'s, Master\'s) Degrees',
                        'price' => '$135',
                    ),
                    array(
                        'label' => 'Course-by-Course Evaluation of PhD (HS, Bachelor\'s, Master\'s, PhD)',
                        'price' => '$300',
                    ),
                    array(
                        'label' => 'Course-by-Course Evaluation of Incomplete Education',
                        'price' => '$135',
                    ),
                    array(
                        'label' => 'Evaluation of Education and Work Experience',
                        'price' => '$250-$400',
                    ),
                    array(
                        'label' => 'Subject Analysis',
                        'price' => '$15 per subject',
                    ),
                    array(
                        'label' => 'Catalog match',
                        'price' => '$15 per subject',
                    ),
                     array(
                        'label' => 'Comparable Program Research',
                        'price' => '$125',
                    ),
                ),
                'full_width' => TRUE,
            ),
        ),
    ),

    'additional_documents' => array(
        'label' => 'Additional Documents',
        'fields' => array(
            'list' => array(
                'type' => 'checkbox_table',
                'columns' => array(
                    'label' => array(
                        'label' => 'Description',
                    ),
                    'price' => array(
                        'label' => 'Price',
                        'width' => 100,
                        'cell_align' => 'center',
                    ),
                ),
                'options' => array(
                    array(
                        'label' => 'Evaluation of every other Diploma with or without Transcript',
                        'price' => '$25',
                    ),
                    array(
                        'label' => 'Evaluation of every other Certificate',
                        'price' => '$15',
                    ),
                ),
                'full_width' => TRUE,
            ),
        ),
    ),

    'translation_services' => array(
        'label' => 'Translations Per Page',
        'fields' => array(
            'list' => array(
                'type' => 'checkbox_table',
                'columns' => array(
                    'label' => array(
                        'label' => 'Translation from Language',
                    ),
                    'price' => array(
                        'label' => 'Price per 1 page',
                        'width' => 100,
                        'cell_align' => 'center',
                    ),
                    'price10' => array(
                        'label' => 'Price (for 10 pages and over)',
                        'width' => 100,
                        'cell_align' => 'center',
                    ),
                ),
                'options' => array(
                    array(
                        'label' => 'Belarusian, Croatian, Czech, English, French, German, Italian, Moldavian (Romanian), Polish, Russian, Serbian, Spanish, Slovakian, Slovenian, Ukrainian',
                        'price' => '$40',
                        'price10' => '$35',
                    ),
                    array(
                        'label' => 'Arabian, Armenian, Azerbaijani, Bulgarian, Chinese, Dutch (of the Netherlands), Estonian, Flemish, Georgian, Greek, Hebrew, Hungarian, Japanese, Kazakh, Kirghiz, Latin, Latvian, Lithuanian, Norwegian, Persian (Farsi), Portuguese, Swedish, Tajik, Tatar, Turkmenian, Turkish, Uzbek, Vietnamese',
                        'price' => '$55',
                        'price10' => '$50',
                    ),
                    array(
                        'label' => 'Bosnian, Catalonian, Danish, Finnish, Hindu, Indonesian, Korean, Macedonian, Malaysian, Tagalog, Thai, Dari',
                        'price' => '$65',
                        'price10' => '$60',
                    ),
                ),
                'full_width' => TRUE,
            ),
        ),
    ),

    'licensure_services' => array(
        'label' => 'Licensure Services',
        'fields' => array(
            'profession' => array(
                'type' => 'text',
                'label' => 'License for the Profession of',
            ),
            'state' => array(
                'type' => 'text',
                'label' => 'State of',
            ),
            'quoted' => array(
                'type' => 'text',
                'label' => 'FCI Quoted Price',
                'description' => '(Please, agree the price with our Consultant by Phone or via Skype only)',
            ),
        ),
    ),

    'nursing_evaluation' => array(
        'label' => 'Nursing Evaluation (BSN)',
        'fields' => array(
            'list' => array(
                'type' => 'radio_table',
                'columns' => array(
                    'label' => array(
                        'label' => 'Description',
                    ),
                    'price' => array(
                        'label' => 'Price',
                        'width' => 100,
                        'cell_align' => 'center',
                    ),
                ),
                'options' => array(
                    array(
                        'label' => 'One Degree',
                        'price' => '$250',
                    ),
                    array(
                        'label' => 'Two Degrees',
                        'price' => '$350',
                    ),
                    array(
                        'label' => 'Three Degrees',
                        'price' => '$500',
                    ),
                ),
                'full_width' => TRUE,
            ),
        ),
    ),

    'extra_evaluation' => array(
        'label' => 'Extra set of the original Evaluation Report',
        'fields' => array(
            'list' => array(
                'type' => 'checkbox_table',
                'columns' => array(
                    'label' => array(
                        'label' => 'Description',
                    ),
                    'price' => array(
                        'label' => 'Price',
                        'width' => 100,
                        'cell_align' => 'center',
                    ),
                ),
                'options' => array(
                    array(
                        'label' => 'If ordered with the Initial Application',
                        'price' => '$15',
                    ),
                    array(
                        'label' => 'If ordered after completion of the initial the Evaluation Report (First copy)',
                        'price' => '$55',
                    ),
                    array(
                        'label' => 'Each consecutive copy of the same Evaluation Report ',
                        'price' => '$15',
                    ),
                ),
                'full_width' => TRUE,
            ),
        ),
    ),

    'extra_translation' => array(
        'label' => 'Extra set of the original Certified and Notarized Translation',
        'fields' => array(
            'list' => array(
                'type' => 'checkbox_table',
                'columns' => array(
                    'label' => array(
                        'label' => 'Description',
                    ),
                    'price' => array(
                        'label' => 'Price',
                        'width' => 100,
                        'cell_align' => 'center',
                    ),
                ),
                'options' => array(
                    array(
                        'label' => 'Extra set of the original Certified and Notarized Translation (if ordered with the initial Application)',
                        'price' => '$15',
                    ),
                    array(
                        'label' => 'Extra set of the original Certified and Notarized Translation (if ordered after completion of the initial Application',
                        'price' => '$35',
                    ),
                ),
                'full_width' => TRUE,
            ),
        ),
    ),

    'rush_services' => array(
        'label' => 'Rush Services',
        'fields' => array(
            'list' => array(
                'type' => 'radio_table',
                'columns' => array(
                    'label' => array(
                        'label' => 'Description',
                    ),
                    'price' => array(
                        'label' => 'Price',
                        'width' => 100,
                        'cell_align' => 'center',
                    ),
                ),
                'options' => array(
                    array(
                        'label' => '2-day Rush Service',
                        'price' => '$120',
                    ),
                    array(
                        'label' => '3-day Rush Service',
                        'price' => '$75',
                    ),
                    array(
                        'label' => '5-day Rush Service',
                        'price' => '$50',
                    ),
                ),
                'full_width' => TRUE,
            ),
        ),
    ),

    'express_shipment' => array(
        'label' => 'Express Shipment',
        'fields' => array(
            'list' => array(
                'type' => 'radio_table',
                'columns' => array(
                    'label' => array(
                        'label' => 'Description',
                    ),
                    'price' => array(
                        'label' => 'Price',
                        'width' => 100,
                        'cell_align' => 'center',
                    ),
                ),
                'options' => array(
                    array(
                        'label' => 'Express overnight shipment within USA/Canada',
                        'price' => '$25',
                    ),
                    array(
                        'label' => 'Priority Mail with tracking number within USA/Canada',
                        'price' => '$15',
                    ),
                    array(
                        'label' => 'International Regular USA mail',
                        'price' => '$20',
                    ),
                    array(
                        'label' => 'International Express mail',
                        'price' => '$50',
                    ),
                ),
                'full_width' => TRUE,
            ),
        ),
    ),

    'total_charges' => array(
        'label' => 'Total Charges per Order',
        'fields' => array(
            'total' => array(
                'type' => 'text',
                'label' => 'Total Charges per Order',
            ),
        ),
    ),

    'educational_institutions' => array(
        'label' => 'Educational Institutions',
        'description' => 'List All Educational Institutions Attended starting from: <strong>High School or Institution of Higher Education.<br />Consult our Specialists which Educational documents you need to evaluate to achieve your goal.',
        'fields' => array(
            'item_1' => array(
                'type' => 'title',
                'label' => '#1',
            ),
            'name_1' => array(
                'type' => 'text',
                'label' => 'Name(s) of School(s) Attended',
            ),
            'location_1' => array(
                'type' => 'text',
                'label' => 'City & Country'
            ),
            'diploma_1' => array(
                'type' => 'text',
                'label' => 'Diploma/Certificate Earned (if any)',
            ),
            'started_1' => array(
                'type' => 'text',
                'label' => 'Month/Year Started',
            ),
            'completed_1' => array(
                'type' => 'text',
                'label' => 'Month/Year Completed',
            ),
            'item_2' => array(
                'type' => 'title',
                'label' => '#2',
            ),
            'name_2' => array(
                'type' => 'text',
                'label' => 'Name(s) of School(s) Attended City & Country Diploma/Certificate',
            ),
            'location_2' => array(
                'type' => 'text',
                'label' => 'City & Country',
            ),
            'diploma_2' => array(
                'type' => 'text',
                'label' => 'Diploma/Certificate Earned (if any)',
            ),
            'started_2' => array(
                'type' => 'text',
                'label' => 'Month/Year Started',
            ),
            'completed_2' => array(
                'type' => 'text',
                'label' => 'Month/Year Completed',
            ),
            'item_3' => array(
                'type' => 'title',
                'label' => '#3',
            ),
            'name_3' => array(
                'type' => 'text',
                'label' => 'Name(s) of School(s) Attended City & Country Diploma/Certificate',
            ),
            'location_3' => array(
                'type' => 'text',
                'label' => 'City & Country',
            ),
            'diploma_3' => array(
                'type' => 'text',
                'label' => 'Diploma/Certificate Earned (if any)',
            ),
            'started_3' => array(
                'type' => 'text',
                'label' => 'Month/Year Started',
            ),
            'completed_3' => array(
                'type' => 'text',
                'label' => 'Month/Year Completed',
            ),
        ),
    ),

    'other_party_submission' => array(
        'label' => 'Other party submission',
        'description' => 'Individual / Institution / Organization to whom the evaluation should be sent.',
        'fields' => array(
            'name' => array(
                'type' => 'text',
                'label' => 'Individual/Institution/Organization',
            ),
            'attention' => array(
                'type' => 'text',
                'label' => 'Attention (Name/Department/Suite/Room)',
            ),
            'street' => array(
                'type' => 'text',
                'label' => 'Street Address/Post Office Box Number',
            ),
            'street2' => array(
                'type' => 'text',
                'label' => 'Street Address - Continued',
            ),
            'city' => array(
                'type' => 'text',
                'label' => 'City',
            ),
            'region' => array(
                'type' => 'text',
                'label' => 'State/Province',
            ),
            'postal_code' => array(
                'type' => 'text',
                'label' => 'Postal Zip Code',
            ),
            'country' => array(
                'type' => 'text',
                'label' => 'Country',
            ),
        ),
    ),

    'credit_card' => array(
        'label' => 'Your Credit Card information',
        'fields' => array(
            'cc_type' => array(
                'type' => 'radio',
                'options' => array(
                    'visa' => 'Visa',
                    'mc' => 'MasterCard',
                    'discover' => 'Discover',
                    'amex' => 'American Express',
                    'debit' => 'Any Debit Card',
                ),
                'full_width' => TRUE,
            ),
            'cc_number' => array(
                'type' => 'text',
                'label' => 'Card Number',
            ),
            'expiration_month' => array(
                'type' => 'text',
                'label' => 'Expiration Month',
                'size' => 4,
            ),
            'expiration_year' => array(
                'type' => 'text',
                'label' => 'Expiration Year',
                'size' => 4,
            ),
            'security_code' => array(
                'type' => 'text',
                'label' => 'Security Code',
                'size' => 4,
            ),
            'address' => array(
                'type' => 'text',
                'label' => 'Address (Numbers Only)',
            ),
            'zip' => array(
                'type' => 'text',
                'label' => 'Zip code',
            ),
            'cardholder' => array(
                'type' => 'text',
                'label' => 'Cardholder\'s Name',
            ),
        ),
    ),
);
