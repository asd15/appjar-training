<div class="form-group">
    <label>Title</label>
    <input  type="text" name="title" class="form-control"
            value="{{ old('title', $course->title ?? null) }}" />
    <!--old() to keep content in input box even when input is incorrect-->
    <!-- ?? null is used like isset() if $course exists it is used else null -->
</div>

<div class="form-group">
    <label>Content</label>
    <input type="text" name="content" class="form-control"
           value="{{ old('content', $course->content ?? null )}}" />
</div>

@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
