<form class="mt-3" wire:submit.prevent="addComment">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Your Comment</label>
                <div class="form-icon position-relative">
                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                    <textarea wire:model="body" id="message" placeholder="Your Comment" rows="5" name="body" class="form-control ps-5" required=""></textarea>
                </div>
                @error('body')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div><!--end col-->
        <div class="col-md-12">
            <div class="send d-grid">
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</form><!--end form-->
