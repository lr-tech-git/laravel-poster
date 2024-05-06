<div class="panel" style="margin-top:20px;">

    <h5>{{ __("Comments") }}</h5>
    <div class="chat-history-footer">
        <form class="form-send-message d-flex justify-content-between align-items-center" style="border: 1px solid #eceef0;border-radius: 8px;">
            <input class="form-control message-input border-0 me-3 shadow-none" placeholder="Start typing your comment...">
            <div class="message-actions d-flex align-items-center">
                <i class="speech-to-text bx bx-microphone bx-sm cursor-pointer"></i>
                <label for="attach-doc" class="form-label mb-0">
                    <i class="bx bx-paperclip bx-sm cursor-pointer mx-3 text-body"></i>
                    <input type="file" id="attach-doc" hidden="">
                </label>
                <button class="btn btn-primary d-flex send-msg-btn">
                    <i class="bx bx-paper-plane me-md-1 me-0"></i>
                    <span class="align-middle d-md-inline-block d-none">{{ __("Sent") }}</span>
                </button>
            </div>
        </form>
    </div>

    <div class="panel-body">
        {{-- TODO:output comments --}}
    </div>
</div>
