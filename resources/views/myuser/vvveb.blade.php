<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VvvebJs Example</title>

    <!-- Include VvvebJs CSS and Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vvvebjs/libs/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vvvebjs/libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vvvebjs/libs/jquery/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vvvebjs/libs/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('vvvebjs/libs/codemirror/theme/monokai.css') }}">
    <link rel="stylesheet" href="{{ asset('vvvebjs/src/css/vvvebjs.css') }}">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <!-- VvvebJs Editor Container -->
                <div id="vvvebjs-editor"></div>
            </div>
        </div>
    </div>

    <!-- Include VvvebJs JavaScript and Bootstrap JavaScript -->
    <script src="{{ asset('vvvebjs/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/jquery/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/axios/axios.min.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/html2canvas/dist/html2canvas.min.js') }}"></script>
    <script src="{{ asset('vvvebjs/libs/file-saver.js/FileSaver.min.js') }}"></script>
    <script src="{{ asset('vvvebjs/src/js/scripts.js') }}"></script>

    <!-- Initialize VvvebJs -->
    <script>
        $(document).ready(function () {
            // Initialize VvvebJs editor
            Vvveb.init({
                iframeContainerID: 'vvvebjs-editor',
                fileManager: false,
                componentSearch: true,
                componentCategory: false,
                iframe: true,
                dragdrop: true,
                responsive: true,
                webPageStyles: [],
            });
        });
    </script>

</body>
</html>