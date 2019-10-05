<?php

require('UploadHandler.php');

class PersonFilesUploadHandler extends UploadHandler
{
    public function __construct($options = [], $initialize = true, $error_messages = null)
    {
        $options['upload_dir'] = array_key_exists('upload_dir', $options)
            ? $options['upload_dir']
            : $this->getPersonDirectory();

        $options['upload_url'] = array_key_exists('upload_url', $options)
            ? $options['upload_url']
            : $this->getPersonUploadUrl();

        $options['image_versions'] = array_key_exists('image_versions', $options)
            ? $options['image_versions']
            : [];

        $options['inline_file_types'] = array_key_exists('inline_file_types', $options)
            ? $options['inline_file_types']
            : '/\.(gif|jpe?g|png|tif|pdf|doc|docx|zip)$/i';

        $options['accept_file_types'] = array_key_exists('accept_file_types', $options)
            ? $options['accept_file_types']
            : '/\.(gif|jpe?g|png|tif|pdf|doc|docx|zip)$/i';

        parent::__construct($options, $initialize, $error_messages);
    }

    /**
     * @return string
     */
    private function getPersonFullName()
    {
        $fullName = '';
        $fullNameRaw = filter_input(INPUT_POST, 'full-name', FILTER_DEFAULT);
        $fullNameTrim = trim($fullNameRaw);
        $fullNamePartList = explode(' ', $fullNameTrim);
        foreach ($fullNamePartList as $fullNamePart)
        {
            $filteredFullNamePart = preg_replace('/\W+/', '', $fullNamePart);
            if(strlen($filteredFullNamePart) > 0){
                $separator = strlen($fullName) > 0 ? '_' : '';
                $fullName .= $separator. ucfirst($filteredFullNamePart);
            }
        }
        return strlen($fullName) === 0 || strlen($fullName) > 100 ? 'Unknown_Person' : $fullName;
    }

    /**
     * @return string
     */
    private function getPersonDirectory()
    {
        $personDirectoryParts = [
            dirname($this->get_server_var('SCRIPT_FILENAME')),
            'files',
            $this->getPersonFullName()
        ];

        return implode(DIRECTORY_SEPARATOR, $personDirectoryParts). DIRECTORY_SEPARATOR;
    }

    private function getPersonUploadUrl()
    {
        $personUploadUrlParts = [
            dirname($this->get_server_var('SCRIPT_FILENAME')),
            'files',
            $this->getPersonFullName()
        ];
        return implode('/', $personUploadUrlParts). '/';
    }
}