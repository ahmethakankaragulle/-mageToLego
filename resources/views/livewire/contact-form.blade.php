<form wire:submit.prevent="submit">
    <input style="margin-bottom:1rem;" type="text" class="form-control" id="exampleInputName" placeholder="Adınız" wire:model="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror


    <input style="margin-bottom:1rem;" type="text" class="form-control" id="exampleInputEmail" placeholder="ornek@mail.com" wire:model="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror


    <textarea style="margin-bottom:1rem;" class="form-control" id="exampleInputbody" placeholder="Mesajınız" wire:model="message"></textarea>
    @error('message') <span class="text-danger">{{ $message }}</span> @enderror


    <button type="submit" class="btn btn-primary">Gönder</button>
</form>