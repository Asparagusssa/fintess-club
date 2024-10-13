<dialog id="qrcodeModal" class="modal">
    <div class="modal-box bg-white space-y-5 ">
        <h1 class="text-text text-3xl text-center font-bold">QR код для входа в Качалкино</h1>

        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-[1rem] top-[1rem] focus-visible:outline-0">✕
            </button>
        </form>
        <div class="flex items-center justify-center w-full h-full"><img
                class="h-80 w-80"
                src="http://qrcoder.ru/code/?%C8%E2%E0%ED+%D7%F3%EA%E0%E2%E8%ED&4&0"
                title="QR код" alt="qrcode"></div>


    </div>
    <form id="closeAuthForm" method="dialog" class="modal-backdrop bg-black opacity-40">
        <button>close</button>
    </form>
</dialog>
@if($errors->has('name') || $errors->has('surname') || $errors->has('email') || $errors->has('password') || $errors->has('sex'))
    <script>
        const authModal = document.getElementById('authModal');
        authModal.showModal();
    </script>
@endif


