<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button onclick="modal.close()" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">
                    @yield('title')
                </h4>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">
                @yield('content')
            </div>
            <!-- Футер модального окна -->
            <div class="modal-footer">
                @yield('footer')
            </div>
        </div>
    </div>
</div>