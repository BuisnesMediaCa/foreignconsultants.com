/* global $ */
function DocumentUploader()
{
    this.init();
}

DocumentUploader.prototype = {
    init: function()
    {
        window.fileNumber = 1;
        this.initUploadDocuments();
        this.initFileUpload();
        this.changeFullNameEventHandler();
        this.selectEventHandler();
        this.documentTypeChangeEventHandler();
        this.documentTypeVersionChangeEventHandler();
        this.documentPartChangeEventHandler();
    },

    getShortFileName: function(fullFileName)
    {
        return fullFileName.length > 25
            ? fullFileName.substr(0,12) + '...' + fullFileName.substr(-12,12)
            : fullFileName;
    },

    initFileUpload: function()
    {
        let self = this;
        $('#fileupload')
            .fileupload({
                url: $('#fileupload').attr('action'),
                paramName: 'files[]',
                acceptFileTypes: /(jpg)|(jpeg)|(png)|(gif)|(tif)|(pdf)|(doc)|(docx)|(zip)$/i,
                previewMaxWidth : 200,
                previewMaxHeight : 800
            })
            .bind('fileuploadadd', function (e, data) {
                $('#upload-documents')
                    .click(function () {
                        if(self.validate()){
                            self.changeFileName(data);
                            data.submit();
                        }
                    });
            });
    },

    initUploadDocuments: function()
    {
        let self = this;
        $('#upload-documents')
            .click(function () {
                let result = self.validate();
                if(result){
                    self.hideElement($('#upload-documents'));
                    self.hideElement($('#fileinput-button'));
                    self.hideElement($('#full-name'));
                    console.log('test');
                }
            });
    },

    /**
     * @param {Object} data
     */
    changeFileName: function(data)
    {
        let fragments = data.files[0].name.split('.');
        let fileExtension = fragments.pop();
        let index = data.context.find('.document-type').data('index');
        let newName = this.getFileName(index) + '.' + fileExtension;
        Object.defineProperty(data.files[0], 'name', {
            value: newName
        });
    },

    getFileName: function(index)
    {
        let result = [];
        let fullName = $('#full-name').val();
        let documentType = $('#document-type-' + index).val();
        let documentTypeVersion = $('#document-type-version-' + index).val();
        let documentPart = $('#document-part-' + index).val();
        let namePartList = [fullName, '-', documentType, '-', documentTypeVersion, '-', documentPart];
        for(let namePartIndex in namePartList){
            let namePart = namePartList[namePartIndex];
            let namePartWordList = namePart.split(' ');
            for(let namePartWordIndex in namePartWordList){
                let namePartWord = namePartWordList[namePartWordIndex];
                result.push(
                    this.ucFirst(namePartWord.toLowerCase())
                );
            }
        }
        return result.join('');
    },

    /**
     * @param {String} str
     * @returns {string}
     */
    ucFirst: function(str)
    {
        let firstLetter = str.charAt(0).toUpperCase();
        return firstLetter + str.substr(1, str.length-1);
    },

    /**
     * @returns {boolean}
     */
    validate: function()
    {
        let validationResult = true;
        $('.document-type-block').map(function () {
            let documentType = $(this).find('.document-type');
            let error = $(this).find('.error');
            error.empty();
            let documentTypeVersion = $(this).find('.document-type-version');
            let documentPart = $(this).find('.document-part');
            let documentTypeValue = documentType.val();
            if(
                documentTypeValue.length === 0
                ||
                documentTypeVersion.length === 0
                ||
                documentTypeVersion.val().length === 0
                ||
                documentPart.length === 0
                ||
                documentPart.val().length === 0
            ){
                validationResult = false;
                error.html('error: not all fields selected');
            }
        });
        return validationResult && this.validateFullName();
    },

    changeFullNameEventHandler: function()
    {
        let self = this;
        $('#full-name').change(function () {
            self.validateFullName();
        })
    },

    validateFullName: function()
    {
        let fullNameRegExp = /^(\w+\s\w+|\w+\s\w+\s\w+)$/;
        let fullName = $('#full-name');
        let fullNameError = $('.full-name-error');
        fullNameError.empty();
        let fullNameValue = fullName.val();
        let result = fullNameRegExp.test(fullNameValue);
        if (result === false){
            fullNameError.html('error: invalid full name, use only english letters');
        }
        return result;
    },

    selectEventHandler: function()
    {
        let self = this;
        $('#fileupload').on(
            "change",
            "select",
            function(){
                let documentTypeValue = $(this).val();
                if(documentTypeValue.length > 0){
                    $(this).parents('.document-type-block').find('.error').empty();
                    self.markSelected(this);
                } else {
                    self.markUnselected(this);
                }
            }
        );
    },

    documentTypeChangeEventHandler: function()
    {
        let self = this;
        $('#fileupload').on(
            "change",
            ".document-type",
            function(){
                let documentTypeIndex = $(this).data('index');
                let documentTypeValue = $(this).val();
                let documentTypeVersionContainer = $('#document-type-version-container-' + documentTypeIndex);
                if(documentTypeValue.length > 0){
                    self.fillDocumentTypeVersionContainer(documentTypeIndex);
                    self.showElement(documentTypeVersionContainer);
                } else {
                    let documentPartContainer = $('#document-part-container-' + documentTypeIndex);
                    self.hideElement(documentPartContainer);
                    documentPartContainer.empty();
                    self.hideElement(documentTypeVersionContainer);
                    documentTypeVersionContainer.empty();
                }
            }
        );
    },

    documentTypeVersionChangeEventHandler: function() {
        let self = this;
        $('#fileupload').on(
            "change",
            ".document-type-version",
            function(){
                let documentTypeVersionIndex = $(this).data('index');
                let documentTypeVersionValue = $(this).val();
                let documentPartContainer = $('#document-part-container-' + documentTypeVersionIndex);
                if(documentTypeVersionValue.length > 0){
                    self.fillDocumentPartContainer(documentTypeVersionIndex);
                    self.showElement(documentPartContainer);
                } else {

                    self.hideElement(documentPartContainer);
                    documentPartContainer.empty()
                }
            }
        );
    },

    documentPartChangeEventHandler: function() {
        let self = this;
        $('#fileupload').on(
            "change",
            ".document-part",
            function(){
                let documentPartIndex = $(this).data('index');
                let documentPartValue = $(this).val();
                if(documentPartValue.length > 0){
                    let documentType = $('#document-type-' + documentPartIndex).val();
                    let documentTypeVersion = $('#document-type-version-' + documentPartIndex).val();
                    $('.document-part').map(function(){
                        let index = $(this).data('index');
                        let documentPart = $('#document-part-' + index);
                        if(index !== documentPartIndex){
                            if(
                                documentType === $('#document-type-' + index).val()
                                &&
                                documentTypeVersion === $('#document-type-version-' + index).val()
                                &&
                                documentPart.val() >= documentPartValue
                            ){
                                self.markUnselected(documentPart);
                                documentPart.val("");
                            }
                        }
                    });
                }
            }
        );
    },

    /**
     * @param {Number} index
     */
    fillDocumentTypeVersionContainer: function(index)
    {
        let documentTypeSelect = $('#document-type-' + index);
        let documentTypeValue = documentTypeSelect.val();
        let option = $(documentTypeSelect).find('option').filter(function() {
            return $(this).text() === documentTypeValue;
        });
        let documentTypeGroup = option.parent().attr('label');
        let documentTypeVersionTemplate = this.getDocumentTypeVersionTemplate(documentTypeGroup);
        let documentTypeVersionContainer = $('#document-type-version-container-' + index);
        documentTypeVersionContainer
            .html(documentTypeVersionTemplate)
            .find('select')
            .attr('data-index', index)
            .attr('id', 'document-type-version-' + index);
    },

    /**
     * @param {Number} index
     */
    fillDocumentPartContainer: function(index)
    {
        let documentPartContainer = $('#document-part-container-' + index);
        let documentPartTemplate = $('#document-part-select').html();
        documentPartContainer.html(documentPartTemplate);
        let documentPartSelect = documentPartContainer.find('select');
        documentPartSelect.attr('data-index', index).attr('id', 'document-part-' + index);
        for(let part = 1; part <= 100; part++){
            documentPartSelect.append('<option>' + part + '</option>')
        }
    },

    /**
     * @param {jQuery} element
     */
    showElement: function(element)
    {
        element.removeClass('hidden');
    },

    /**
     * @param {jQuery} element
     */
    hideElement: function(element)
    {
        element.removeClass('hidden').addClass('hidden');
    },

    /**
     * @param {HTMLElement} select
     */
    markSelected: function(select)
    {
        $(select).removeClass('unselected');
    },

    /**
     * @param {HTMLElement} select
     */
    markUnselected: function(select)
    {
        $(select).removeClass('unselected').addClass('unselected');
    },

    /**
     * @param {String} documentTypeGroup
     * @returns {String}
     */
    getDocumentTypeVersionTemplate: function(documentTypeGroup)
    {
        switch (documentTypeGroup) {
            case 'Education/Work':
                return $('#document-type-version-select-education-work').html();
            case 'Licenses':
            case 'Other Certificates':
            case 'Other documents':
                return $('#document-type-version-select-licenses').html();
            case 'Immigration documents':
                return $('#document-type-version-select-immigration').html();
        }
    }
};

$(function() {
    'use strict';

    new DocumentUploader();
});