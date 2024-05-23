@props(['message', 'type' => 'success'])

@if ($message)
    <div id="flash-message" class="flex justify-end fixed right-0 top-0 transition-all duration-1000">
        <div id="flash-content" class="text-white w-fit px-7 py-3 text-end rounded-l-full">
            <span class="text-xs">{{ $message }}</span>
        </div>
    </div>

    <script>
        // document.addEventListener('DOMContentLoaded', function () {
            var flashMessage = document.getElementById('flash-message');
            var flashContent = document.getElementById('flash-content');
            var type = @json($type);

            if (type === 'success') {
                flashContent.classList.add('bg-primary');
            } else if (type === 'error') {
                flashContent.classList.add('bg-flashError');
            }

            flashContent.classList.add('animate-slideIn');

            setTimeout(function () {
                flashContent.classList.remove('animate-slideIn');
                flashContent.classList.add('animate-slideOut');
                setTimeout(function () {
                    flashMessage.classList.add('hidden');
                }, 500); // Duration of the slide-out animation
            }, 3000); // Time before the message starts to slide out
        // });
    </script>
@endif