<footer class="footer">
    <div class="container-md my-auto">
        <div class="row">
            <div class="col-md-4"></div>
            @php
                $year = date('Y');
                // $year = $year == 2024 ? '' : ' - ' . $year;
            @endphp
            <div class="col-md-4 text-center"><span style="background-color: #c1f3a0a4; text-align: center;">{{$year}} Copyright: BAF RO. All Rights Reserved.</span></div>
            <div class="col-md-4"></div>
        </div>
    </div>
</footer>
