<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; {{ App\Models\Setting::first()->nama_app }} APP 2021-<?php
            $tgl = date('Y');
            echo $tgl;
            ?> </span>
        </div>
    </div>
</footer>
