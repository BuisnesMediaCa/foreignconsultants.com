<div class="container">
    <!-- The file upload form used as target for the file upload widget -->
    <form
        id="fileupload"
        action="/file-upload/php/index.php"
        method="POST"
        enctype="multipart/form-data"
    >
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <h3>Upload documents</h3>
            <div class="col-lg-7">
                <p>
                    <input id="full-name" name="full-name" type="text" placeholder="Input full name"
                           pattern="^(\w+\s\w+|\w+\s\w+\s\w+)$"/>
                    <br/><span class="full-name-error error text-danger"></span>
                </p>
                <p>
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span id="fileinput-button" class="btn btn-success fileinput-button">
                <i class="glyphicon glyphicon-plus"></i>
                <span>Add files...</span>
                <input type="file" name="files[]" multiple />
              </span>
                </p>
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped">
            <tbody class="files"></tbody>
        </table>
        <button id="upload-documents" type="button" class="btn btn-primary start">
            <i class="glyphicon glyphicon-upload"></i>
            <span>Start upload</span>
        </button>
        <p><span class="full-name-error error text-danger"></span></p>
        <!-- The global progress state -->
        <div class="col-lg-5 fileupload-progress fade">
            <!-- The global progress bar -->
            <div
                class="progress progress-striped active"
                role="progressbar"
                aria-valuemin="0"
                aria-valuemax="100"
            >
                <div
                    class="progress-bar progress-bar-success"
                    style="width:0%;"
                ></div>
            </div>
            <!-- The extended global progress state -->
            <div class="progress-extended">&nbsp;</div>
        </div>
    </form>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++, window.fileNumber++) { %}
  <tr class="template-upload fade">fileupload
      <td>
          {% if (!i) { %}
              <button class="btn btn-warning cancel pull-right">
                  <span>X</span>
              </button>
          {% } %}
          <div></div>
          <span class="preview"></span>
          <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
          {% if (window.innerWidth > 480 || !o.options.loadImageFileTypes.test(file.type)) { %}
              <p class="name">{%= DocumentUploader.prototype.getShortFileName(file.name) %}</p>
          {% } %}
          <section class="document-type-block">
            <p id="document-type-container-{%=window.fileNumber%}" class="document-type-container">
              <select id="document-type-{%=window.fileNumber%}" data-index="{%=window.fileNumber%}" class="document-type unselected">
                <option value="">select document type...</option>
                <optgroup label="Education/Work">
                  <option>High school Education</option>
                  <option>Bachelors Degree 1</option>
                  <option>Bachelors Degree 2</option>
                  <option>Masters Degree 1</option>
                  <option>Masters Degree 2</option>
                  <option>PhD</option>
                  <option>Certificate</option>
                </optgroup>
                <optgroup label="Licenses">
                  <option>License</option>
                </optgroup>
                <optgroup label="Immigration documents">
                  <option>Passports</option>
                  <option>Green card</option>
                <option>Visa</option>
                </optgroup>
                <optgroup label="Other Certificates">
                  <option>Marriage Certificate</option>
                  <option>Birth Certificate</option>
                  <option>Change of Name Certificate</option>
                </optgroup>
                <optgroup label="Other documents">
                  <option>Other document</option>
                </optgroup>
              </select>
            </p>
            <p id="document-type-version-container-{%=window.fileNumber%}" class="document-type-version-container hidden">
            </p>
            <p id="document-part-container-{%=window.fileNumber%}" class="document-part-number-container hidden">
            </p>
            <span class="error text-danger"></span>
          </section>
          {% if (!o.options.autoUpload && o.options.edit && o.options.loadImageFileTypes.test(file.type)) { %}
            <button class="btn btn-success edit" data-index="{%=i%}" disabled>
                <i class="glyphicon glyphicon-edit"></i>
                <span>Edit</span>
            </button>
          {% } %}
      </td>
  </tr>
{% } %}
</script>
<script id="document-type-version-select-education-work" type="text/x-tmpl">
  <select class="document-type-version unselected">
    <option value="">select document version...</option>
    <option>Diploma Original</option>
    <option>Diploma English</option>
    <option>Transcript Original</option>
    <option>Transcript English</option>
  </select>
</script>
<script id="document-type-version-select-licenses" type="text/x-tmpl">
  <select class="document-type-version unselected">
    <option value="">select document version...</option>
    <option>English</option>
    <option>Original</option>
  </select>
</script>
<script id="document-type-version-select-immigration" type="text/x-tmpl">
  <select class="document-type-version unselected">
    <option value="">select document version...</option>
    <option>English</option>
  </select>
</script>
<script id="document-part-select" type="text/x-tmpl">
  <select class="document-part unselected">
    <option value="">select page/part...</option>
  </select>
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
  {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-download fade">
          <td>
              {% if (window.innerWidth > 480 || !file.thumbnailUrl) { %}
                  <p class="name">

                      {% if (file.url) { %}
                          <i class="glyphicon glyphicon-ok"></i>
                          <span>{%=file.name%}</span>
                      {% } else { %}
                          <span>{%=file.name%}</span>
                      {% } %}
                  </p>
              {% } %}
              {% if (file.error) { %}
                  <div><span class="label label-danger">Error</span> {%=file.error%}</div>
              {% } %}
              <p><span class="size">{%=o.formatFileSize(file.size)%}</span></p>
          </td>
      </tr>
  {% } %}
</script>
<script src="/file-upload/js/vendor/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/file-upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="/file-upload/js/vendor/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="/file-upload/js/vendor/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="/file-upload/js/vendor/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="/file-upload/js/vendor/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="/file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="/file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="/file-upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="/file-upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="/file-upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="/file-upload/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="/file-upload/js/documentUploader.js"></script>