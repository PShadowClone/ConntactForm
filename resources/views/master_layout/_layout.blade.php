<!doctype html>
<html lang="en">
<head>
    <!-- HEADER START -->
@includeIf('master_layout.components.header')
<!-- HEADER END -->

</head>
<body>

<div class="container">
    <!-- BODY START -->
@yield('body')
<!-- BODY END -->
    <!-- ALERT START -->
@includeIf('master_layout.components.alerts')
<!-- ALERT END -->
</div>
<!-- FOOTER START -->
@includeIf('master_layout.components.footer')
<!-- FOOTER END -->
</body>
</html>