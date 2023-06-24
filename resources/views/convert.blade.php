<form action="{{ route('convert') }}" method="POST">
    @csrf
    <div class="form-group">
        <textarea class="form-control" name="htmldata" style="height: 100px"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>