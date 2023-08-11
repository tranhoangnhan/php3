<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">

    <title>Không có thẩm quyền</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Xin chào <?=Auth::user()->name?> bạn không có quyền truy cập đường dẫn này. Vui lòng liên hê admin để được hỗ trợ</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('#myModal').modal('show');
        setTimeout(function(){
            window.location.href = 'http://laravel:1901';
        }, 2000); // Chuyển hướng sau 3 giây (3000 milliseconds)
    });
</script>

</body>
</html>
