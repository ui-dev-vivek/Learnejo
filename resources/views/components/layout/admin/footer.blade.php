<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('adminAssets/js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('adminAssets/js/jquery-ui/jquery-ui.min.js ') }}"></script>
<script type="text/javascript" src="{{ asset('adminAssets/js/popper.js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('adminAssets/js/bootstrap/js/bootstrap.min.js ') }}"></script>
<!-- waves js -->
<script src="{{ asset('adminAssets/pages/waves/js/waves.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('adminAssets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('adminAssets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('adminAssets/js/vertical/vertical-layout.min.js') }}"></script>
<script src="{{ asset('adminAssets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('adminAssets/js/script.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('adminAssets/assets/js/ajax.js') }}"></script>
<script type="text/javascript" src="{{ asset('adminAssets/assets/js/my.js') }}"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'mid',
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    function tostfire(type, massage) {
        Toast.fire({
            icon: type,
            title: massage
        })

    }
</script>

</body>

</html>
