$(document).ready(function() {
  $("#post").DataTable();
  tinymce.init({
    selector: 'textarea', // change this value according to your HTML
    auto_focus: 'element1'
  });
});
