<div class="form-element">
    <label for="">title</label>
    <input type="text" name="title" class="input-item" value="{{$post->title}}">
</div>

<div class="form-element">
    <label for="">description</label>
    <textarea name="description" class="input-item" id="" cols="30" rows="10" >{{$post->description}}</textarea>
</div>

<button type="submit" class="info m">
    submit
</button>