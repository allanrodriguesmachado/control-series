<form method="post" action="store">
    @csrf
    <div class="form-group">
        <label for="name"></label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
