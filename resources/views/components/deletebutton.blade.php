<div>
    <form action="{{$action}}" method="post">
        @method('delete')
        @csrf
        <button data-delete-id="{{$model->id}}" type="submit" class="btn btn-danger">Delete</button>

    </form>

    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>

