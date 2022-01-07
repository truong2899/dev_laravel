
<form action="{{ route('new.store') }} " method="post">
    @csrf
<div > 
  
    <div>
        <label for="title">Tieu de:</lable>
        <input type="text" name="title"/>
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
         @enderror
    </div>
    <div>
        <label for="content"></lable>
        <textarea cols="30" rows="30" name="content">noi dung:</textarea>
       
    </div>
    @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
     @enderror
    <div>
        <button type="submit">Them</button>
    </div>
</div>
</form>