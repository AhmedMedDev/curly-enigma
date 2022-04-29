<div class="chat-input">
    <form class="chat-form" action="javascript:void(0);">
        <i data-feather="message-square"></i>
        <input type="text" class="mail-write-box form-control" placeholder="Message" />
    </form>
</div>

@push('js')
    <script>
        $('.mail-write-box').on('keydown', function(event) {
            if (event.key === 'Enter') {
                var chatInput = $(this);
                var chatMessageValue = chatInput.val();
                if (chatMessageValue === '') {
                    return;
                }
                $messageHtml = '<div class="bubble me">' + chatMessageValue + '</div>';
                var appendMessage = $(this).parents('.chat-system').find('.active-chat').append($messageHtml);
                const getScrollContainer = document.querySelector('.chat-conversation-box');
                getScrollContainer.scrollTop = getScrollContainer.scrollHeight;
                var clearChatInput = chatInput.val('');

                let receiver = $(this).parents('.chat-system').find('.active-chat').attr('data-user')
                
                @this.call('messageCreation', chatMessageValue, receiver)
            }
        })
    </script>
@endpush
