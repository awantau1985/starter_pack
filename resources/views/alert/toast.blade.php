@if(session('toast_type') != null)
<div id="toast-container"
     style="position: fixed; top: 1.25rem; right: 1.25rem; z-index: 1100; max-width: 320px;">
    <div id="liveToast" class="toast align-items-center border-0 shadow-lg
         @if(session('toast_type') === 'success') bg-success
         @elseif(session('toast_type') === 'error') bg-danger
         @elseif(session('toast_type') === 'warning') bg-warning
         @else text-bg-info @endif"
         role="alert"
         aria-live="assertive"
         aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body fw-semibold">
                {{ session('toast_message') ?? 'Action completed successfully!' }}
            </div>
        </div>
    </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll('.toast').forEach(function (toastEl) {
          new bootstrap.Toast(toastEl, {
              delay: 30000,
              autohide: true
          }).show();
      });
  });
</script>
@endif





