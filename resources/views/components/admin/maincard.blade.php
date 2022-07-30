<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>{{ $title }}</h5>

                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li>
                            <i class="fa fa fa-wrench open-card-option"></i>
                        </li>
                        <li>
                            <i class="fa fa-window-maximize full-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-minus minimize-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-refresh reload-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-trash close-card"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                {{ $slot }}
            </div>
        </div>
    </div>

</div>
