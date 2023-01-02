<script>
    $('#chooseFile_1').bind('change', function() {
        var filename = $("#chooseFile_1").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile_1").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile_1").text(filename.replace("C:\\fakepath\\", ""));
        }
    });
</script>
<script>
    $('#chooseFile_2').bind('change', function() {
        var filename = $("#chooseFile_2").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile_2").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile_2").text(filename.replace("C:\\fakepath\\", ""));
        }
    });
</script>
<script>
    $('#chooseFile_4').bind('change', function() {
        var filename = $("#chooseFile_4").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile_4").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile_4").text(filename.replace("C:\\fakepath\\", ""));
        }
    });
</script>
<script>
    $('#chooseFile_3').bind('change', function() {
        var filename = $("#chooseFile_3").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile_3").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile_3").text(filename.replace("C:\\fakepath\\", ""));
        }
    });
</script>