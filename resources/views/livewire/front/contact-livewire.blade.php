<form wire:submit.prevent="send">
    <p id="error-msg" class="mb-0"></p>
    <div id="simple-msg"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                <div class="form-icon position-relative">
                    <i data-feather="user" class="fea icon-sm icons"></i>
                    <input wire:model="name" name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                <div class="form-icon position-relative">
                    <i data-feather="mail" class="fea icon-sm icons"></i>
                    <input wire:model="email" name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div><!--end col-->

        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Subject</label>
                <div class="form-icon position-relative">
                    <i data-feather="book" class="fea icon-sm icons"></i>
                    <input wire:model="subject" name="subject" id="subject" class="form-control ps-5" placeholder="subject :">
                    @error('subject')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div><!--end col-->

        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Comments <span class="text-danger">*</span></label>
                <div class="form-icon position-relative">
                    <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                    <textarea wire:model="message" name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-grid">
                <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</form>
